<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Products;

class PagesController extends Controller
{
    public function index()
    {
      return view('Frontend.pages.index');
    }

   public function product()
  {
    $products = Products::orderBy('id', 'DESC')->get();
    return view('Frontend.pages.products', compact('products'));
  }
}
