@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('beauty_salon/images/banner/bnr3.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Shop Columns Sidebar</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>Shop Columns Sidebar</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner">
            <!-- Product -->
            <div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-6 sticky-top">
						<aside class="side-bar shop-categories">
                            <div class="widget recent-posts-entry">
								<div class="dlab-accordion advanced-search toggle" id="accordion1">
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title"> 
												<a data-toggle="collapse" href="#categories">
													Product categories
												</a> 
											</h5>
										</div>
										<div id="categories" class="acod-body collapse show">
											<div class="acod-content">
												<div class="widget widget_services">
													<ul>
														<li><a href="javascript:void(0);">Bags</a></li>
														<li><a href="javascript:void(0);">Jeans</a></li>
														<li><a href="javascript:void(0);">Shoes</a></li>
														<li><a href="javascript:void(0);">Sweaters</a></li>
														<li><a href="javascript:void(0);">Tops</a></li>
														<li><a href="javascript:void(0);">Women</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title">
												<a data-toggle="collapse" href="#price-range">
													Price Range
												</a> 
											</h5>
										</div>
										<div id="price-range" class="acod-body collapse show">
											<div class="acod-content">
												<div class="price-slide-2 range-slider">
													<div class="price">
														<input type="text" id="amount-2" class="amount" readonly="" value="$400 - $4000" >
														<div id="slider-range-2"></div>
													</div>
												 </div>
											</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title"> 
												<a data-toggle="collapse"  href="#color" >
													color
												</a>
											</h5>
										</div>
										<div id="color" class="acod-body collapse show">
											<div class="acod-content">
												<h6>Select the color</h6>
												<div class="btn-group product-item-color" data-toggle="buttons">
													<label class="btn bg-red active">
														<input name="options" id="option1" checked="" type="radio">
													</label>
													<label class="btn bg-pink">
														<input name="options" id="option2" type="radio">
													</label>
													<label class="btn bg-yellow">
														<input name="options" id="option3" type="radio">
													</label>
													<label class="btn bg-blue">
														<input name="options" id="option4" type="radio">
													</label>
													<label class="btn bg-green">
														<input name="options" id="option5" type="radio">
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title"> 
												<a data-toggle="collapse"  href="#size">
													Size
												</a>
											</h5>
										</div>
										<div id="size" class="acod-body collapse show">
											<div class="acod-content">
												<h6>Product Size</h6>
												<div class="btn-group product-item-size" data-toggle="buttons">
													<label class="btn active">
														<input name="options" id="option6" checked="" type="radio">XS
													</label>
													<label class="btn">
														<input name="options" id="option7" type="radio"> LG
													</label>
													<label class="btn">
														<input name="options" id="option8" type="radio"> MD
													</label>
													<label class="btn">
														<input name="options" id="option9" type="radio"> SM
													</label>
													<label class="btn">
														<input name="options" id="option10" type="radio"> Xl
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title"> 
												<a data-toggle="collapse" href="#vendor">
													vendor
												</a>
											</h5>
										</div>
										<div id="vendor" class="acod-body collapse show">
											<div class="acod-content">
												<div class="product-brand">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customRadio1" name="example1">
														<label class="custom-control-label" for="customRadio1">Gap</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customRadio2" name="example1">
														<label class="custom-control-label" for="customRadio2">Guess</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customRadio3" name="example1">
														<label class="custom-control-label" for="customRadio3">Lacoste</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customRadio4" name="example1">
														<label class="custom-control-label" for="customRadio4">Levi's</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customRadio5" name="example1">
														<label class="custom-control-label" for="customRadio5">Polo</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customRadio6" name="example1">
														<label class="custom-control-label" for="customRadio6">Gap</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customRadio7" name="example1">
														<label class="custom-control-label" for="customRadio7">Guess</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customRadio8" name="example1">
														<label class="custom-control-label" for="customRadio8">Lacoste</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customRadio9" name="example1">
														<label class="custom-control-label" for="customRadio9">Levi's</label>
													</div>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customRadio10" name="example1">
														<label class="custom-control-label" for="customRadio10">Polo</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title"> 
												<a data-toggle="collapse"  href="#tags" class="collapsed" >
													popular tags
												</a>
											</h5>
										</div>
										<div id="tags" class="acod-body collapse">
											<div class="acod-content">
												<div class="widget_tag_cloud radius">
													<div class="tagcloud"> <a href="javascript:void(0);">Design</a> 
													<a href="javascript:void(0);">User interface</a> 
													<a href="javascript:void(0);">SEO</a> 
													<a href="javascript:void(0);">WordPress</a> 
													<a href="javascript:void(0);">Development</a> 
													<a href="javascript:void(0);">Joomla</a> 
													<a href="javascript:void(0);">Design</a> 
													<a href="javascript:void(0);">User interface</a> 
													<a href="javascript:void(0);">SEO</a> 
													<a href="javascript:void(0);">WordPress</a>
													<a href="javascript:void(0);">Development</a> 
													<a href="javascript:void(0);">Joomla</a> 
													<a href="javascript:void(0);">Design</a> 
													<a href="javascript:void(0);">User interface</a> 
													<a href="javascript:void(0);">SEO</a> 
													<a href="javascript:void(0);">WordPress</a> 
													<a href="javascript:void(0);">Development</a> 
													<a href="javascript:void(0);">Joomla</a> </div>
												</div>
											</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title"> 
												<a data-toggle="collapse"  href="#features" class="collapsed" >
													Features
												</a>
											</h5>
										</div>
										<div id="features" class="acod-body collapse">
											<div class="acod-content">
												<div class="item-widgets-box">
													<div class="item-widgets-left">
														<img src="{{ asset('beauty_salon/images/product/thumb/item1.jpg') }}" alt="">
													</div>
													<div class="item-widgets-body text-black">
														<h6 class="item-title font-weight-500 m-t0"><a href="{{ route('beauty_salon.shop-product-details') }}">Dark Brown Boots</a></h6>
														<ul class="item-review text-yellow-light">
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star-half-o"></i></li>
															<li><i class="fa fa-star-o"></i></li>
														</ul>
														<h6 class="item-price m-b0"><del>$232</del> <span class="text-primary">$192</span></h6>
													</div>
												</div>
												<div class="item-widgets-box">
													<div class="item-widgets-left">
														<img src="{{ asset('beauty_salon/images/product/thumb/item2.jpg') }}" alt="">
													</div>
													<div class="item-widgets-body text-black">
														<h6 class="item-title font-weight-500 m-t0"><a href="{{ route('beauty_salon.shop-product-details') }}">Slim Fit Chinos</a></h6>
														<ul class="item-review text-yellow-light">
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star-half-o"></i></li>
															<li><i class="fa fa-star-o"></i></li>
														</ul>
														<h6 class="item-price m-b0"><del>$232</del> <span class="text-primary">$192</span></h6>
													</div>
												</div>
												<div class="item-widgets-box">
													<div class="item-widgets-left">
														<img src="{{ asset('beauty_salon/images/product/thumb/item3.jpg') }}" alt="">
													</div>
													<div class="item-widgets-body text-black">
														<h6 class="item-title font-weight-500 m-t0"><a href="{{ route('beauty_salon.shop-product-details') }}">Green Trousers</a></h6>
														<ul class="item-review text-yellow-light">
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star-half-o"></i></li>
															<li><i class="fa fa-star-o"></i></li>
														</ul>
														<h6 class="item-price m-b0"><del>$232</del> <span class="text-primary">$192</span></h6>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </aside>
					</div>
					<div class="col-lg-9 col-md-8 col-sm-6 ">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item1.jpg') }}" alt="">
										<div class="item-info-in center">
											<ul>
												<li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="{{ route('beauty_salon.shop-product-details') }}">Checked Short Dress</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
								<div class="item-box m-b10 item-style-1">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item2.jpg') }}" alt="">
										<div class="item-info-in center">
											<ul>
												<li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="{{ route('beauty_salon.shop-product-details') }}">Slim Fit Chinos</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item3.jpg') }}" alt="">
										<div class="item-info-in center">
											<ul>
												<li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="{{ route('beauty_salon.shop-product-details') }}">Dark Brown Boots</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item4.jpg') }}" alt="">
										<div class="item-info-in center">
											<ul>
												<li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="{{ route('beauty_salon.shop-product-details') }}">Light Blue Denim Dress</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item5.jpg') }}" alt="">
										<div class="item-info-in center">
											<ul>
												<li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="{{ route('beauty_salon.shop-product-details') }}">Green Trousers</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
								<div class="item-box m-b10 item-style-1">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item6.jpg') }}" alt="">
										<div class="item-info-in center">
											<ul>
												<li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="{{ route('beauty_salon.shop-product-details') }}">Unisex Sunglasses</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item7.jpg') }}" alt="">
										<div class="item-info-in center">
											<ul>
												<li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="{{ route('beauty_salon.shop-product-details') }}">Blue Round-Neck Tshirt</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item8.jpg') }}" alt="">
										<div class="item-info-in center">
											<ul>
												<li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="{{ route('beauty_salon.shop-product-details') }}">Men Grey Casual Shoes</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item1.jpg') }}" alt="">
										<div class="item-info-in center">
											<ul>
												<li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="{{ route('beauty_salon.shop-product-details') }}">Checked Short Dress</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
								<div class="item-box m-b10 item-style-1">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item2.jpg') }}" alt="">
										<div class="item-info-in center">
											<ul>
												<li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="{{ route('beauty_salon.shop-product-details') }}">Slim Fit Chinos</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item3.jpg') }}" alt="">
										<div class="item-info-in center">
											<ul>
												<li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="{{ route('beauty_salon.shop-product-details') }}">Dark Brown Boots</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item4.jpg') }}" alt="">
										<div class="item-info-in center">
											<ul>
												<li><a href="javascript:void(0);"><i class="ti-shopping-cart"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-eye"></i></a></li>
												<li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="{{ route('beauty_salon.shop-product-details') }}">Light Blue Denim Dress</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price"><del>$232</del> <span class="text-primary">$192</span></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Product END -->
		</div>
		<div class="section-full p-t50 p-b20 bg-gray text-black shop-action">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-bx-wraper left m-b30">
							<div class="icon-md text-black radius"> 
								<i class="fa text-black fa-gift"></i>
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte font-20">Free shipping on orders $60+</h5>
								<p class="font-14">Order more than 60$ and you will get free shippining Worldwide. More info.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-bx-wraper left m-b30">
							<div class="icon-md text-black radius"> 
								<i class="fa text-black fa-plane"></i>
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte font-20">Worldwide delivery</h5>
								<p class="font-14">We deliver to the following countries: USA, Canada, Europe, Australia</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-bx-wraper left m-b30">
							<div class="icon-md text-black radius"> 
								<i class="fa text-black fa-history"></i>
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte font-20">60 days money back guranty!</h5>
								<p class="font-14">Not happy with our product, feel free to return it, we will refund 100% your money!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- Content END-->
@endsection

@section('page_scripts')
<script src="{{ asset('beauty_salon/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('beauty_salon/plugins/wow/wow.js') }}"></script><!-- WOW JS -->
<script src="{{ asset('beauty_salon/plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('beauty_salon/plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('beauty_salon/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('beauty_salon/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('beauty_salon/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('beauty_salon/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('beauty_salon/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('beauty_salon/plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('beauty_salon/plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('beauty_salon/plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('beauty_salon/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('beauty_salon/plugins/rangeslider/rangeslider.js') }}" ></script><!-- Rangeslider -->
<script src="{{ asset('beauty_salon/js/custom.min.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('beauty_salon/js/dz.carousel.min.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('beauty_salon/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
<script src="{{ asset('beauty_salon/plugins/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('beauty_salon/js/styleSwitcher.js') }}"></script>
@endsection

