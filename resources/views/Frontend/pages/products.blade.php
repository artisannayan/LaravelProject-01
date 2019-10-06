

@extends('Frontend.layouts.maintemplate')

@section('bodycontent')

<div class="breadcrumbs-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumbs-title text-center">
              <h1>Shop</h1>
              <div class="top-page">
                <ul>
                  <li><a href="{{route('homepage')}}">Home</a></li>
                  <li>
                    <span>&gt;</span>
                  </li>
                  <li>Shop</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Shop Area Start -->
    <div class="shop-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="shop-item-filter">
              <div class="shop-tab clearfix">
                <p class="show-result">Showing 1–12 of 25 results</p>
                <div class="shop-tab-selectors pull-right">
                  <form action="#">
                    <!-- Nav tabs -->
                    <ul class="tab-menu pull-left" role="tablist">
                      <li role="presentation" class="active">
                        <a href="#grid" aria-controls="grid" role="tab" data-toggle="tab"><i class="fa fa-th"></i></a>
                      </li>
                      <li role="presentation">
                        <a href="#list" aria-controls="list" role="tab" data-toggle="tab"><i class="fa fa-th-list"></i></a>
                      </li>
                    </ul>
                    <div class="single-shop-form pull-left">
                      <div class="shop-select">
                        <select>
                          <option selected="selected">Default sorting</option>
                          <option>Sort by popularity</option>
                          <option>Sort by average rating</option>
                          <option>Sort by newness</option>
                          <option>Sort by price: low to high</option>
                          <option>Sort by price: high to low</option>
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
              </div>              
            </div>
            <div class="clearfix"></div>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="grid">
                <div class="shop-list">
                 <!--Product Image Start-->

                   <!-- @foreach($products as $product) -->
                  <div class="single-product-inner">
                    <div class="single-product">
                      <div class="product-thumbnail-wrapper">
                        <a href="single-shop.html">
                          <div class="product-label">
                            <span class="featured">New</span>
                          </div>
                          <div class="product-image">
                             @php $i=1 @endphp
                                                       @foreach($product->images as $image)
                            @if($i > 0)
                            <img src="{{asset('Frontend/img/product-image/'.$image->image)}}" alt="">
                            @endif
                            @php $i-- @endphp
                            @endforeach
                          </div>
                        </a>
                        <div class="product-button-list">
                          <div class="add-to-cart-list">
                            <a href="#" class="btn-product btn-cart">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </a>
                          </div>
                          <div class="product-button-group">
                            <a href="#" class="add-to-wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            <a href="#" class="add-to-compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                            <a data-target="#productModal" class="btn-quickview" data-toggle="modal" title="Quick view" href="#"><i aria-hidden="true" class="fa fa-search"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details-content text-center">
                        <div class="ratting">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <a href="single-shop.html" class="heading-title">{{ $product->title }}</a>
                        <p class="product-short-content">{{ $product->description }}</p>
                        <span class="price">
                          <span class="amount"> ৳{{ $product->price }}</span>
                        </span>
                      </div>
                    </div>                
                  </div>

              <!--Product Image End-->

              <!-- @endforeach -->
                </div>
              </div>
            </div>
            <div class="shop-tab">
              <ul class="page-numbers text-center">
                <li><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          


   @include('Frontend.include.product-sidebar')

        </div>
      </div>
    </div>
    <!-- Shop Area End -->
    <!-- Latest News Area start -->
    <div class="blog-area section-padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2><span>LATEST NEWS</span></h2>
            </div>            
          </div>
          <div class="col-sm-4">
            <div class="single-blog">
              <div class="post-info-thumbnail">
                <div class="thumbnail-content">
                  <a href="#" class="thumbnail effect-color effect-color-1">
                    <img src="img/blog/1.jpg" alt="" />
                  </a>
                </div>
                <div class="blog-post-date">
                  <p class="day">24</p>
                  <p class="month">May</p>
                </div>
              </div>
              <div class="post-info-content">
                <h3 class="heading-title">
                  <a title="Maecenas vitae urna" href="#">Maecenas vitae urna</a>
                </h3>
                <div class="post-info-author">
                  <span class="author">
                    <i class="fa fa-user"></i>
                    <a title="Posts by admin" href="#">Admin</a>
                  </span>
                  <span class="comments-count">
                    <i class="fa fa-comment-o"></i>
                    2 Comments
                  </span>
                </div>
                <p class="post-details">Midi indigo vintage boots tortoise-shell sunglasses bomber leather A.P.C. Clutch powder blue oversized sweatshirt slip dress skort sports luxe gold collar collarless skirt</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single-blog">
              <div class="post-info-thumbnail">
                <div class="thumbnail-content">
                  <a href="#" class="thumbnail effect-color effect-color-1">
                    <img alt="" src="img/blog/2.jpg">
                  </a>
                </div>
                <div class="blog-post-date">
                  <p class="day">29</p>
                  <p class="month">May</p>
                </div>
              </div>
              <div class="post-info-content">
                <h3 class="heading-title">
                  <a title="Democratizing" href="#">Democratizing</a>
                </h3>
                <div class="post-info-author">
                  <span class="author">
                    <i class="fa fa-user"></i>
                    <a title="Posts by admin" href="#">Admin</a>
                  </span>
                  <span class="comments-count">
                    <i class="fa fa-comment-o"></i>
                    1 Comments
                  </span>
                </div>
                <p class="post-details">Midi indigo vintage boots tortoise-shell sunglasses bomber leather A.P.C. Clutch powder blue oversized sweatshirt slip dress skort sports luxe gold collar collarless skirt</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single-blog">
              <div class="post-info-thumbnail">
                <div class="thumbnail-content">
                  <a href="#" class="thumbnail effect-color effect-color-1">
                    <img alt="" src="img/blog/3.jpg">
                  </a>
                </div>
                <div class="blog-post-date">
                  <p class="day">05</p>
                  <p class="month">Jun</p>
                </div>
              </div>
              <div class="post-info-content">
                <h3 class="heading-title">
                  <a title="Braid slipper" href="#">Braid slipper</a>
                </h3>
                <div class="post-info-author">
                  <span class="author">
                    <i class="fa fa-user"></i>
                    <a title="Posts by admin" href="#">Admin</a>
                  </span>
                  <span class="comments-count">
                    <i class="fa fa-comment-o"></i>
                    3 Comments
                  </span>
                </div>
                <p class="post-details">Midi indigo vintage boots tortoise-shell sunglasses bomber leather A.P.C. Clutch powder blue oversized sweatshirt slip dress skort sports luxe gold collar collarless skirt</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  


@endsection