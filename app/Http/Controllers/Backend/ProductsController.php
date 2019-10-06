<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Products;
use Image;
use App\Models\ProductImage;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//To Call Product View Functionality
    public function index()
    {
        $products = Products::orderBy('id','desc')->get();
        return view('Backend.pages.product.viewproduct')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//To Call Product Create page Functionality
    public function create()
    {
       return view('Backend.pages.product.createproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //To Call New Product Add Functionlaty

    public function store(Request $request)
    {
      //Valadate The Form Data
  
      $request->validate([
         'title' => 'required|max:255',
         'description' => 'required',
         'quantity' => 'required',
         'price' => 'required',
      ]);

        $products = new Products;

        $products->catagory_id  = 1;
        $products->brand_id     = 1;
        $products->title        = $request->title;
        $products->description  = $request->description;
        $products->slug         = 1;
        $products->quantity     = $request->quantity;
        $products->status       = 1;
        $products->price        = $request->price;
        $products->offer_price  = $request->offer_price;
        $products->admin_id     = 100;
        $products->save();

        if(count($request->product_image ) > 0){
         foreach($request->product_image as $image){
           $img = time() .'.'.$image->getClientOriginalExtension();
           $location = public_path('Frontend/img/product-image/'.$img);
           Image::make($image)->save($location);
           
           $product_images = new ProductImage;

           $product_images->product_id = $products->id;
           $product_images->image = $img;
           $product_images->save();
         }
        }


      
         
    //    //Check if the product has any product thumnail image
    // if($request->hasFile('product_image')){
    //   $image = $request->file('product_image');
    //      $img = time() .'.'. $image->getClientOriginalExtension();
    //     //Move the Product Image into the required folder
    //      $location = public_path('Frontend/img/product-image/'. $img);
    //      Image::make($image)->save($location);
    //     //Create the product
    //       $product_images = new ProductImage;
    //      $product_images->product_id = $products->id;
    //      $product_images->image = $img;
    //      $product_images->save();  
    // }

   
        return redirect()->route('product.index')->with('msg', 'Product Insurt Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //To Call Product Edit Page Functionlaty
    public function edit($id)
    {
       $product = Products::find($id);
       return view('Backend.pages.product.editproduct')->with('product', $product);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Call to the Product Udate funtality
    public function update(Request $request, $id)
    {
    
    
     $products =  Products::find($id);

        
        $products->title        = $request->title;
        $products->description  = $request->description;
        $products->slug         = 1;
        $products->quantity     = $request->quantity;
        $products->status       = 1;
        $products->price        = $request->price;
        $products->offer_price  = $request->offer_price;
        $products->save();

        return redirect()->route('product.index');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Call To the Data delete
    public function destroy($id)
    {
      $product = Products::find($id);
      if(!is_null($product)){
        $product->delete();
        return back();
      }  
    }
}
 