@extends('Backend.layouts.master')
@section("bodyContent")
<div class="col-md-12">
    <div class="panel" id="main-chart" style="width: 100%">
        <div class="chart-header">Add a New Product
            <div class="card-body">
                @include('Backend.allinfo.massege')

                <form action="{{route('produc.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title"  placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Descrption</label>
                        <div class="col-sm-10">
                           <textarea class="form-control" name="description" placeholder="Product Description"></textarea> 
                        </div>
                    </div> <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                        <input type="number" name="quantity" class="form-control" placeholder="Quantity">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="price" placeholder="Price">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="offer_price" class="col-sm-2 col-form-label">Offer Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="offer_price" placeholder="Offer Price">
                    </div>
                </div>
                <div class="form-group">
                        <label for="product_image">Upload Product Image</label>
                        <input type="file" name="product_image[]" class="">
                    </div>
                
                <div class="form-group">
                    <label for="product_image">Upload Product Image</label>
                    <input type="file" name="product_image[]" class="">
                </div>
                <div class="form-group">
                    <label for="product_image">Upload Product Image</label>
                    <input type="file" name="product_image[]" class="">
                </div>
                <div class="form-group">
                    <label for="product_image">Upload Product Image</label>
                    <input type="file" name="product_image[]" class="">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Upload Product" class="btn btn-primary btn-block">
                </div>
            </form>
            
        </div>
    </div>
</div>
</div>
@endsection