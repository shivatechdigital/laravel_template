@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('beauty_salon/images/banner/bnr2.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Shop Columns</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>Shop Columns</li>
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
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="item-box m-b10">
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
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="item-box m-b10 item-style-1">
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
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
						<div class="item-box m-b10">
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
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
						<div class="item-box m-b10">
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
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="item-box m-b10">
							<div class="item-img">
								<img src="{{ asset('beauty_salon/images/product/item5.jpg') }}" alt="">
								<div class="item-info-in">
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
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="item-box m-b10 item-style-1">
							<div class="item-img">
								<img src="{{ asset('beauty_salon/images/product/item6.jpg') }}" alt="">
								<div class="item-info-in">
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
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
						<div class="item-box m-b10">
							<div class="item-img">
								<img src="{{ asset('beauty_salon/images/product/item7.jpg') }}" alt="">
								<div class="item-info-in">
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
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
						<div class="item-box m-b10">
							<div class="item-img">
								<img src="{{ asset('beauty_salon/images/product/item8.jpg') }}" alt="">
								<div class="item-info-in">
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
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="item-box m-b10">
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
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="item-box m-b10 item-style-1">
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
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
						<div class="item-box m-b10">
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
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
						<div class="item-box m-b10">
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

