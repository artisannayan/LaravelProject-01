@extends('Frontend.layouts.maintemplate')

@section('bodycontent')
<section class="slider-container">
	<!-- Slider Image -->
	<div id="mainSlider" class="nivoSlider slider-image">
		<img src="{{('Frontend/img/slider/slider-bg-1-3.jpg')}}" alt="main slider" title="#htmlcaption1"/>
		<img src="{{('Frontend/img/slider/slider-bg-2.jpg')}}" alt="main slider" title="#htmlcaption2"/>
		<img src="{{('Frontend/img/slider/slider-bg-1-3.jpg')}}" alt="main slider" title="#htmlcaption3"/>
	</div>
	<!-- Slider Caption 1 -->
	<div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
		<div class="slider-progress"></div>
		<div class="container slider-height">
			<div class="row slider-height">
				<div class="col-md-4 col-sm-5 col-xs-6 slider-height">
					<div class="slide-text">
						<div class="middle-text">
							<div class="cap-dec wow bounceInDown" data-wow-duration="0.9s" data-wow-delay="0s">
								<h2><span>New Bags</span><br />For Spring 2016</h2>
							</div>
							<div class="cap-title wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
								<p>Challenges beneficiaries underprivileged, end hunger world problem solving donation activism.</p>
							</div>
							<div class="cap-shop wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
								<a href="#">Shop now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 col-sm-7 col-xs-6 slider-height">
					<div class="slider-img-inner">
						<img src="img/slider/slider-1.png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Slider Caption 2 -->
	<div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
		<div class="slider-progress"></div>
		<div class="container slider-height">
			<div class="row slider-height">
				<div class="col-sm-6 col-xs-4 slider-height">
					<div class="slider-img-inner slider-img-inner-2">
						<img src="img/slider/slider-2.png" alt="" />
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 slider-height">
					<div class="slide-text slide-text-two">
						<div class="middle-text">
							<div class="cap-dec wow bounceIn" data-wow-duration="0.7s" data-wow-delay="0s">
								<h2><span>News product</span><br />Electronic Express</h2>
							</div>
							<div class="cap-title wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
								<p>Challenges beneficiaries underprivileged, end hunger world problem solving donation activism.</p>
							</div>
							<div class="cap-shop wow bounceIn" data-wow-duration="1.1s" data-wow-delay=".5s">
								<a href="#">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Slider Caption 3 -->
	<div id="htmlcaption3" class="nivo-html-caption slider-caption-3">
		<div class="slider-progress"></div>
		<div class="container slider-height">
			<div class="row slider-height">
				<div class="col-xs-6 slider-height">
					<div class="slide-text slide-text-three">
						<div class="middle-text">
							<div class="cap-dec wow bounceIn" data-wow-duration="0.7s" data-wow-delay="0s">
								<h2>Porcelain Houseware<br /><span>New Product</span></h2>
							</div>
							<div class="cap-title wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
								<p>Challenges beneficiaries underprivileged, end hunger world <br /> problem solving donation activism.</p>
							</div>
							<div class="cap-shop wow bounceIn" data-wow-duration="1.1s" data-wow-delay=".5s">
								<a href="#">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 slider-height">
					<div class="slider-img-inner slider-img-inner-3">
						<img src="img/slider/slider-3.png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Slider End-->
<section class="main-content">
	<!-- Banner Top Area Start -->
	<div class="banner-top-area section-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="single-effect">
						<a href="#">
							<div class="bg-effect">
								<img src="img/banner/1-1.jpg" alt="" />
							</div>
							<span class="s s1"></span>
							<span class="s s2"></span>
							<span class="s s3"></span>
							<span class="s s4"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner Top Area End -->
	<!-- Banner Bottom Area Strat -->
	<div class="banner-bottom-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="single-effect">
						<a href="#">
							<div class="bg-effect">
								<img src="img/banner/1-2.jpg" alt="" />
							</div>
							<span class="s s1"></span>
							<span class="s s2"></span>
							<span class="s s3"></span>
							<span class="s s4"></span>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="single-effect">
						<a href="#">
							<div class="bg-effect">
								<img src="img/banner/1-3.jpg" alt="" />
							</div>
							<span class="s s1"></span>
							<span class="s s2"></span>
							<span class="s s3"></span>
							<span class="s s4"></span>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="single-effect margin-none">
						<a href="#">
							<div class="bg-effect">
								<img src="img/banner/1-4.jpg" alt="" />
							</div>
							<span class="s s1"></span>
							<span class="s s2"></span>
							<span class="s s3"></span>
							<span class="s s4"></span>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="single-effect margin-none">
						<a href="#">
							<div class="bg-effect">
								<img src="img/banner/1-5.jpg" alt="" />
							</div>
							<span class="s s1"></span>
							<span class="s s2"></span>
							<span class="s s3"></span>
							<span class="s s4"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner Bottom Area Strat -->
	<!-- Product Sell Area Start -->
	<div class="product-sell-area section-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2><span>Weekly Bestselling</span></h2>
					</div>
					<div class="product-list-curosel indicator-style">
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-label">
											<span class="featured">New</span>
										</div>
										<div class="product-image">
											<img src="img/product/home-1/1.jpg" alt="" />
										</div>
									</a>
									<div class="product-button-list">
										<div class="add-to-cart-list">
											<a href="#" class="add-to-cart">
												<i class="fa fa-list" aria-hidden="true"></i>
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Cashmere Saint Laurent – s4</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<span class="amount">$18.20</span>
										-
										<span class="amount">$19.20</span>
									</span>
								</div>
							</div>
						</div>
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-image">
											<img src="img/product/home-1/2.jpg" alt="" />
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Fusce aliquam simple – s15</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<span class="amount">$400.00</span>
									</span>
								</div>
							</div>
						</div>
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-label">
											<span class="featured">New</span>
										</div>
										<div class="product-image">
											<img src="img/product/home-1/3.jpg" alt="" />
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Floral gold collar chunky – s5</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<span class="amount">$100.00</span>
									</span>
								</div>
							</div>
						</div>
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-label">
											<span class="featured">New</span>
										</div>
										<div class="product-image">
											<img src="img/product/home-1/4.jpg" alt="" />
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Collarless playsuit white shirt sp..</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<del class="amount">$55.00</del>
										<span class="amount">$44.25</span>
									</span>
								</div>
							</div>
						</div>
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-label">
											<span class="featured">New</span>
										</div>
										<div class="product-image">
											<img src="img/product/home-1/5.jpg" alt="" />
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Minimal black ribbed bandeau</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<span class="amount">$310.00</span>
									</span>
								</div>
							</div>
						</div>
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-label">
											<span class="featured">New</span>
										</div>
										<div class="product-image">
											<img src="img/product/home-1/6.jpg" alt="" />
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Fusce aliquam sample – s5</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<span class="amount">$18.20</span>
										-
										<span class="amount">$19.20</span>
									</span>
								</div>
							</div>
						</div>
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-label">
											<span class="featured">New</span>
										</div>
										<div class="product-image">
											<img src="img/product/home-1/4.jpg" alt="" />
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Cashmere Saint Laurent – s4</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<span class="amount">$18.20</span>
										-
										<span class="amount">$19.20</span>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Product Sell Area End -->
	<!-- Product Sell Area Start -->
	<div class="product-sell-area section-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2><span>Featured Products</span></h2>
					</div>
					<div class="product-list-curosel indicator-style">
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-label">
											<span class="featured">New</span>
										</div>
										<div class="product-image">
											<img src="img/product/home-1/4.jpg" alt="" />
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Collarless playsuit white shirt sp..</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<del class="amount">$55.00</del>
										<span class="amount">$44.25</span>
									</span>
								</div>
							</div>
						</div>
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-label">
											<span class="featured">New</span>
										</div>
										<div class="product-image">
											<img src="img/product/home-1/5.jpg" alt="" />
										</div>
									</a>
									<div class="product-button-list">
										<div class="add-to-cart-list">
											<a href="#" class="btn-product btn-cart">
												<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Minimal black ribbed bandeau</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<span class="amount">$310.00</span>
									</span>
								</div>
							</div>
						</div>
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-label">
											<span class="featured">New</span>
										</div>
										<div class="product-image">
											<img src="img/product/home-1/6.jpg" alt="" />
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Fusce aliquam sample – s5</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<span class="amount">$18.20</span>
										-
										<span class="amount">$19.20</span>
									</span>
								</div>
							</div>
						</div>
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-label">
											<span class="featured">New</span>
										</div>
										<div class="product-image">
											<img src="img/product/home-1/4.jpg" alt="" />
										</div>
									</a>
									<div class="product-button-list">
										<div class="add-to-cart-list">
											<a href="#" class="btn-product btn-cart">
												<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Cashmere Saint Laurent – s4</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<span class="amount">$18.20</span>
										-
										<span class="amount">$19.20</span>
									</span>
								</div>
							</div>
						</div>
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-label">
											<span class="featured">New</span>
										</div>
										<div class="product-image">
											<img src="img/product/home-1/1.jpg" alt="" />
										</div>
									</a>
									<div class="product-button-list">
										<div class="add-to-cart-list">
											<a href="#" class="add-to-cart">
												<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Cashmere Saint Laurent – s4</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<span class="amount">$18.20</span>
										-
										<span class="amount">$19.20</span>
									</span>
								</div>
							</div>
						</div>
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-image">
											<img src="img/product/home-1/2.jpg" alt="" />
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Fusce aliquam simple – s15</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<span class="amount">$400.00</span>
									</span>
								</div>
							</div>
						</div>
						<div class="single-product-inner">
							<div class="single-product">
								<div class="product-thumbnail-wrapper">
									<a href="#">
										<div class="product-label">
											<span class="featured">New</span>
										</div>
										<div class="product-image">
											<img src="img/product/home-1/3.jpg" alt="" />
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
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#" class="heading-title">Floral gold collar chunky – s5</a>
									<p class="product-short-content">Paragraph text Nam tristique porta ligula, vel viverra…</p>
									<span class="price">
										<span class="amount">$100.00</span>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Product Sell Area End -->
	<div class="clear"></div>
	<!-- Banner Bottom Area Strat -->
	<div class="banner-bottom-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="single-effect">
						<a href="#">
							<div class="bg-effect">
								<img src="img/banner/1-6.jpg" alt="" />
							</div>
							<span class="s s1"></span>
							<span class="s s2"></span>
							<span class="s s3"></span>
							<span class="s s4"></span>
						</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="single-effect">
						<a href="#">
							<div class="bg-effect">
								<img src="img/banner/1-7.jpg" alt="" />
							</div>
							<span class="s s1"></span>
							<span class="s s2"></span>
							<span class="s s3"></span>
							<span class="s s4"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner Bottom Area Strat -->
	<!-- Blog Area Start -->
	<div class="blog-area section-padding">
		<div class="container-fluid">
			<div class="row">
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
							<a href="#" title="Maecenas vitae urna">Maecenas vitae urna</a>
							</h3>
							<div class="post-info-author">
								<span class="author">
									<i class="fa fa-user"></i>
									<a href="#" title="Posts by admin">Admin</a>
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
									<img src="img/blog/2.jpg" alt="" />
								</a>
							</div>
							<div class="blog-post-date">
								<p class="day">24</p>
								<p class="month">May</p>
							</div>
						</div>
						<div class="post-info-content">
							<h3 class="heading-title">
							<a href="#" title="Democratizing">Democratizing</a>
							</h3>
							<div class="post-info-author">
								<span class="author">
									<i class="fa fa-user"></i>
									<a href="#" title="Posts by admin">Admin</a>
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
									<img src="img/blog/3.jpg" alt="" />
								</a>
							</div>
							<div class="blog-post-date">
								<p class="day">24</p>
								<p class="month">May</p>
							</div>
						</div>
						<div class="post-info-content">
							<h3 class="heading-title">
							<a href="#" title="Braid slipper">Braid slipper</a>
							</h3>
							<div class="post-info-author">
								<span class="author">
									<i class="fa fa-user"></i>
									<a href="#" title="Posts by admin">Admin</a>
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
	<!-- Blog Area End -->
</section>
@endsection