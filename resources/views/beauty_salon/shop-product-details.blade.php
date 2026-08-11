@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('page_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('beauty_salon/css/star-rating-svg.css') }}">
@endsection

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('beauty_salon/images/banner/bnr2.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Product Details</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>Product Details</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white">
            <!-- Product details -->
            <div class="container woo-entry">
                <div class="row m-b30">
					<div class="col-lg-5 col-md-5">
						<div class="product-gallery on-show-slider"> 
							<div id="sync1" class="owl-carousel owl-theme owl-btn-center-lr m-b5 owl-btn-1 primary">
								<div class="item">
									<div class="mfp-gallery">
										<div class="dlab-box">
											<div class="dlab-thum-bx dlab-img-overlay1 ">
												<img src="{{ asset('beauty_salon/images/product/product/item1.jpg') }}" alt="">
												<div class="overlay-bx">
													<div class="overlay-icon">
														<a class="mfp-link" href="{{ asset('beauty_salon/images/product/product/item1.jpg') }}" title="Title Come Here">
															<i class="ti-fullscreen"></i>
														</a>
												  </div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="mfp-gallery">
										<div class="dlab-box">
											<div class="dlab-thum-bx dlab-img-overlay1 ">
												<img src="{{ asset('beauty_salon/images/product/product/item2.jpg') }}" alt="">
												<div class="overlay-bx">
													<div class="overlay-icon">
														<a class="mfp-link" href="{{ asset('beauty_salon/images/product/product/item2.jpg') }}" title="Title Come Here">
															<i class="ti-fullscreen"></i>
														</a>
												  </div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="mfp-gallery">
										<div class="dlab-box">
											<div class="dlab-thum-bx dlab-img-overlay1 ">
												<img src="{{ asset('beauty_salon/images/product/product/item3.jpg') }}" alt="">
												<div class="overlay-bx">
													<div class="overlay-icon">
														<a class="mfp-link" href="{{ asset('beauty_salon/images/product/product/item3.jpg') }}" title="Title Come Here">
															<i class="ti-fullscreen"></i>
														</a>
												  </div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="mfp-gallery">
										<div class="dlab-box">
											<div class="dlab-thum-bx dlab-img-overlay1 ">
												<img src="{{ asset('beauty_salon/images/product/product/item4.jpg') }}" alt="">
												<div class="overlay-bx">
													<div class="overlay-icon">
														<a class="mfp-link" href="{{ asset('beauty_salon/images/product/product/item4.jpg') }}" title="Title Come Here">
															<i class="ti-fullscreen"></i>
														</a>
												  </div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="mfp-gallery">
										<div class="dlab-box">
											<div class="dlab-thum-bx dlab-img-overlay1 ">
												<img src="{{ asset('beauty_salon/images/product/product/item5.jpg') }}" alt="">
												<div class="overlay-bx">
													<div class="overlay-icon">
														<a class="mfp-link" href="{{ asset('beauty_salon/images/product/product/item5.jpg') }}" title="Title Come Here">
															<i class="ti-fullscreen"></i>
														</a>
												  </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="sync2" class="owl-carousel owl-theme owl-none">
								<div class="item">
									<div class="dlab-media">
										<img src="{{ asset('beauty_salon/images/product/product/thumb/item1.jpg') }}" alt="">
									</div>
								</div>
								<div class="item">
									<div class="dlab-media">
										<img src="{{ asset('beauty_salon/images/product/product/thumb/item2.jpg') }}" alt="">
									</div>
								</div>
								<div class="item">
									<div class="dlab-media">
										<img src="{{ asset('beauty_salon/images/product/product/thumb/item3.jpg') }}" alt="">
									</div>
								</div>
								<div class="item">
									<div class="dlab-media">
										<img src="{{ asset('beauty_salon/images/product/product/thumb/item4.jpg') }}" alt="">
									</div>
								</div>
								<div class="item">
									<div class="dlab-media">
										<img src="{{ asset('beauty_salon/images/product/product/thumb/item5.jpg') }}" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-7">
						<form method="post" class="cart sticky-top">
							<div class="dlab-post-title ">
								<h4 class="post-title">Marc Jacobs Daisy</h4>
								<p class="m-b10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
								<div class="dlab-divider bg-gray tb15"><i class="icon-dot c-square"></i></div>
							</div>
							<div class="relative">
								<h3 class="m-tb10">$2,140.00 </h3>
								<div class="shop-item-rating">
									<span class="rating-bx"> 
										<i class="fa fa-star"></i> 
										<i class="fa fa-star"></i> 
										<i class="fa fa-star"></i> 
										<i class="fa fa-star-o"></i> 
										<i class="fa fa-star-o"></i> 
									</span>
									<span>4.5 Rating</span>
								</div>
							</div>
							<div class="shop-item-tage">
								<span>Tags :- </span>
								<a href="javascript:void(0);">Shoes,</a>
								<a href="javascript:void(0);">Clothing</a>
								<a href="javascript:void(0);">T-shirts</a>
							</div>
							<div class="dlab-divider bg-gray tb15"><i class="icon-dot c-square"></i></div>
							<div class="row">
								<div class="m-b30 col-lg-6 col-md-7">
									<h6>Product Size</h6>
									<div class="btn-group product-item-size" data-toggle="buttons">
										<label class="btn active">
											<input type="radio" name="options" id="option1" checked>XS
										</label>
										<label class="btn">
											<input type="radio" name="options" id="option2"> LG
										</label>
										<label class="btn">
											<input type="radio" name="options" id="option3"> MD
										</label>
										<label class="btn">
											<input type="radio" name="options" id="option4"> SM
										</label>
										<label class="btn">
											<input type="radio" name="options" id="option5"> Xl
										</label>
									</div>
								</div>
								<div class="m-b30 col-lg-6 col-md-5">
									<h6>Select quantity</h6>
									<div class="quantity btn-quantity style-1">
										<input id="demo_vertical2" type="text" value="1" name="demo_vertical2">
									</div>
								</div>
							</div>
							<div class="m-b30">
								<h6>Select the color</h6>
								<div class="btn-group product-item-color" data-toggle="buttons">
									<label class="btn bg-red active">
										<input type="radio" name="options" id="option6" checked>
									</label>
									<label class="btn bg-pink">
										<input type="radio" name="options" id="option7">
									</label>
									<label class="btn bg-yellow">
										<input type="radio" name="options" id="option8">
									</label>
									<label class="btn bg-blue">
										<input type="radio" name="options" id="option9">
									</label>
									<label class="btn bg-green">
										<input type="radio" name="options" id="option10">
									</label>
								</div>
							</div>
							<a href="{{ route('beauty_salon.shop-cart') }}" class="site-button radius-no"><i class="ti-shopping-cart"></i> Add To Cart</a>
						</form>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="dlab-tabs product-description tabs-site-button">
                            <ul class="nav nav-tabs ">
                                <li><a data-toggle="tab" href="#web-design-1" class="active show"><i class="fa fa-globe"></i> Description</a></li>
                                <li><a data-toggle="tab" href="#graphic-design-1"><i class="fa fa-photo"></i> Additional Information</a></li>
                                <li><a data-toggle="tab" href="#developement-1"><i class="fa fa-cog"></i> Product Review</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="web-design-1" class="tab-pane active">
                                    <p class="m-b10">Suspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis  commyolk augue aliquam ornare augue.</p>
                                    <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                    <ul class="list-check primary">
                                        <li>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and </li>
                                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </li>
                                    </ul>
                                </div>
                                <div id="graphic-design-1" class="tab-pane">
                                    <table class="table table-bordered" >
                                        <tr>
                                            <td>Size</td>
                                            <td>Small, Medium & Large</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>Pink & White</td>
                                        </tr>
                                        <tr>
                                            <td>Rating</td>
                                            <td><span class="rating-bx"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </span> </td>
                                        </tr>
										<tr>
                                            <td>Waist</td>
                                            <td>26 cm</td>
                                        </tr>
                                        <tr>
                                            <td>Length</td>
                                            <td>40 cm</td>
                                        </tr>
                                        <tr>
                                            <td>Chest</td>
                                            <td>33 inches</td>
                                        </tr>
										<tr>
                                            <td>Fabric</td>
                                            <td>Cotton, Silk & Synthetic</td>
                                        </tr>
                                        <tr>
                                            <td>Warranty</td>
                                            <td>3 Months</td>
                                        </tr>
                                        <tr>
                                            <td>Chest</td>
                                            <td>33 inches</td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="developement-1" class="tab-pane">
                                    <div id="comments">
                                        <ol class="commentlist">
                                            <li class="comment">
                                                <div class="comment_container"> <img class="avatar avatar-60 photo" src="{{ asset('beauty_salon/images/testimonials/pic1.jpg') }}" alt="">
                                                    <div class="comment-text">
                                                        <div  class="star-rating">
                                                            <div data-rating='3'> <i class="fa fa-star" data-alt="1" title="regular"></i> <i class="fa fa-star" data-alt="2" title="regular"></i> <i class="fa fa-star-o" data-alt="3" title="regular"></i> <i class="fa fa-star-o" data-alt="4" title="regular"></i> <i class="fa fa-star-o" data-alt="5" title="regular"></i> </div>
                                                        </div>
                                                        <p class="meta"> <strong class="author">Cobus Bester</strong> <span><i class="fa fa-clock-o"></i> March 7, 2013</span> </p>
                                                        <div class="description">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment_container"> <img class="avatar avatar-60 photo" src="{{ asset('beauty_salon/images/testimonials/pic2.jpg') }}" alt="">
                                                    <div class="comment-text">
                                                        <div  class="star-rating">
                                                            <div data-rating='3'> <i class="fa fa-star" data-alt="1" title="regular"></i> <i class="fa fa-star" data-alt="2" title="regular"></i> <i class="fa fa-star" data-alt="3" title="regular"></i> <i class="fa fa-star-o" data-alt="4" title="regular"></i> <i class="fa fa-star-o" data-alt="5" title="regular"></i> </div>
                                                        </div>
                                                        <p class="meta"> <strong class="author">Cobus Bester</strong> <span><i class="fa fa-clock-o"></i> March 7, 2013</span> </p>
                                                        <div class="description">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment_container"> <img class="avatar avatar-60 photo" src="{{ asset('beauty_salon/images/testimonials/pic3.jpg') }}" alt="">
                                                    <div class="comment-text">
                                                        <div  class="star-rating">
                                                            <div data-rating='3'> <i class="fa fa-star" data-alt="1" title="regular"></i> <i class="fa fa-star" data-alt="2" title="regular"></i> <i class="fa fa-star" data-alt="3" title="regular"></i> <i class="fa fa-star" data-alt="4" title="regular"></i> <i class="fa fa-star-o" data-alt="5" title="regular"></i> </div>
                                                        </div>
                                                        <p class="meta"> <strong class="author">Cobus Bester</strong> <span><i class="fa fa-clock-o"></i> March 7, 2013</span> </p>
                                                        <div class="description">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                                <h3 class="comment-reply-title" id="reply-title">Add a review</h3>
                                                <form class="comment-form" method="post" >
                                                    <div class="comment-form-author">
                                                        <label>Name <span class="required">*</span></label>
                                                        <input type="text" aria-required="true" size="30" value="" name="author" id="author">
                                                    </div>
                                                    <div class="comment-form-email">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input type="text" aria-required="true" size="30" value="" name="email" id="email">
                                                    </div>
                                                    <div class="comment-form-rating">
                                                        <label class="pull-left m-r20">Your Rating</label>
                                                        <div class='rating-widget'>
														<!-- Rating Stars Box -->
														  <div class='rating-stars'>
															<ul id='stars'>
															  <li class='star' title='Poor' data-value='1'>
																<i class='fa fa-star fa-fw'></i>
															  </li>
															  <li class='star' title='Fair' data-value='2'>
																<i class='fa fa-star fa-fw'></i>
															  </li>
															  <li class='star' title='Good' data-value='3'>
																<i class='fa fa-star fa-fw'></i>
															  </li>
															  <li class='star' title='Excellent' data-value='4'>
																<i class='fa fa-star fa-fw'></i>
															  </li>
															  <li class='star' title='WOW!!!' data-value='5'>
																<i class='fa fa-star fa-fw'></i>
															  </li>
															</ul>
														  </div>
														</div>
                                                    </div>
                                                    <div class="comment-form-comment">
                                                        <label>Your Review</label>
                                                        <textarea aria-required="true" rows="8" cols="45" name="comment" id="comment"></textarea>
                                                    </div>
                                                    <div class="form-submit">
                                                        <input type="submit" value="Submit" class="site-button" id="submit" name="submit">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<h5 class="m-b20">Related Products</h5>
						<div class="img-carousel-content owl-carousel owl-btn-center-lr owl-btn-1 primary">
							<div class="item">
								<div class="item-box">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item1.jpg') }}" alt="">
										<div class="item-info-in">
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
							<div class="item">
								<div class="item-box">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item2.jpg') }}" alt="">
										<div class="item-info-in">
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
							<div class="item">
								<div class="item-box">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item3.jpg') }}" alt="">
										<div class="item-info-in">
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
							<div class="item">
								<div class="item-box">
									<div class="item-img">
										<img src="{{ asset('beauty_salon/images/product/item4.jpg') }}" alt="">
										<div class="item-info-in">
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
            <!-- Product details -->
        </div>
        <!-- contact area  END -->
		<div class="section-full p-t50 p-b20 bg-gray text-black shop-action">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-bx-wraper left m-b30">
							<div class="icon-md text-black radius"> 
								<span class="icon-cell text-black"><i class="fa fa-gift"></i></span> 
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
								<span class="icon-cell text-black"><i class="fa fa-plane"></i></span> 
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
								<span class="icon-cell text-black"><i class="fa fa-history"></i></span> 
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
<script src="{{ asset('beauty_salon/js/jquery.star-rating-svg.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('beauty_salon/js/styleSwitcher.js') }}"></script>
@endsection

