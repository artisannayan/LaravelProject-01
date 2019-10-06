	@extends('Backend.layouts.master')
	@section("bodyContent")
	<div class="col-md-12">
	    <div class="panel" id="main-chart" style="width: 100%">
	        <div class="chart-header">Add a New Product
	            <div class="card-body">
	            	 @if(Session()->has("msg"))
                         <div class="alert alert-success" role="alert">
                             {{ Session()->get("msg") }}
                         </div>
                     @endif
	                <!-- On rows -->
	                 <table class="table table-bordered table-black">
						  <thead>
						    <tr>
						      <th scope="col">ID</th>
						      <th scope="col">Title</th>
						      <th scope="col">price</th>
						      <th scope="col">Quantity</th>
						      <th scope="col">Offer Price</th>
						      <th scope="col">Action</th>
						    </tr>
						   </thead>
						   <tbody>
							   @php $i=1;
							    @endphp
						   	@foreach($products as $product)
						    <tr>
							<th scope="row">{{ $i++ }}</th>
						      <td>{{$product->title}}</td>
						      <td>{{$product->price}}</td>
						      <td>{{$product->quantity}}</td>
						      <td>{{$product->offer_price}}</td>
						      <td>
						      	<a href="{{route('product.edit',$product->id)}}" class="btn btn-primary">Update</a>
                               <a href="{{route('product.destory',$product->id)}}" class="btn btn-danger">Delete</a>                        
						      </td>
						    </tr>
						  @endforeach
						   
						  </tbody>
						</table>
	        </div>
	    </div>
	</div>
	</div>
	@endsection