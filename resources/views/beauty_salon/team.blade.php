@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('beauty_salon/images/banner/bnr3.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Our Team</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>Our Team</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
			<!-- Our Professional Team -->
			<div class="section-full content-inner-2 overlay-white-middle" style="background-image:url({{ asset('beauty_salon/images/background/bg1.png') }}), url({{ asset('beauty_salon/images/background/bg2.png') }}); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Professional Team</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="team-carousel owl-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-dots-primary-full owl-loaded owl-drag">
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img width="300" height="300" src="{{ asset('beauty_salon/images/our-team/pic1.jpg') }}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0">Charlotte</h5>
									<span class="clearfix">Make Up Artist</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img width="300" height="300" src="{{ asset('beauty_salon/images/our-team/pic2.jpg') }}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0">Jennifer</h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>	
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img width="300" height="300" src="{{ asset('beauty_salon/images/our-team/pic3.jpg') }}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0">Roxie Burton</h5>
									<span class="clearfix">Make Up Artist</span>
								</div>
							</div>
						</div>	
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img width="300" height="300" src="{{ asset('beauty_salon/images/our-team/pic5.jpg') }}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0">Evelyn Martinez</h5>
									<span class="clearfix">Fashion Designer</span>
								</div>
							</div>
						</div>	
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img width="300" height="300" src="{{ asset('beauty_salon/images/our-team/pic4.jpg') }}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0">Diane Mateo</h5>
									<span class="clearfix">Fashion Designer</span>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<!-- Our Professional Team End -->
			<!-- Our Services -->
			<div class="section-full content-inner-3 services-box bg-pink-light" style="background-image:url({{ asset('beauty_salon/images/background/bg5.jpg') }}); background-position: bottom; background-size: 100%; background-repeat: no-repeat;">
                <div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
								<div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-woman"></i></span> </div>
								<div class="icon-content">
									<h6 class="dlab-tilte">We are Professional</h6>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="{{ route('beauty_salon.services-details') }}" class="site-button-secondry">Read More</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
								<div class="icon-lg m-b10"><span class="icon-cell text-primary"><i class="flaticon-mortar"></i></span> </div>
								<div class="icon-content">
									<h6 class="dlab-tilte">Lux Cosmetic</h6>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="{{ route('beauty_salon.services-details') }}" class="site-button-secondry">Read More</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
								<div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-candle"></i></span> </div>
								<div class="icon-content">
									<h6 class="dlab-tilte">Medical Education</h6>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="{{ route('beauty_salon.services-details') }}" class="site-button-secondry">Read More</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b10">
							<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
								<div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-sauna-1"></i></span> </div>
								<div class="icon-content">
									<h6 class="dlab-tilte">The Newest Equipment</h6>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="{{ route('beauty_salon.services-details') }}" class="site-button-secondry">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- Our Services -->
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Professional Team</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="{{ asset('beauty_salon/images/our-team/pic1.jpg') }}" alt="">
								</div>
								<div class="service-content">
									<h6 class="text-uppercase text-primary">Ann Smith</h6>
									<p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="{{ asset('beauty_salon/images/our-team/pic2.jpg') }}" alt="">
								</div>
								<div class="service-content">
									<h6 class="text-uppercase text-primary">Mary Lucas</h6>
									<p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="{{ asset('beauty_salon/images/our-team/pic3.jpg') }}" alt="">
								</div>
								<div class="service-content">
									<h6 class="text-uppercase text-primary">Jennifer</h6>
									<p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="{{ asset('beauty_salon/images/our-team/pic4.jpg') }}" alt="">
								</div>
								<div class="service-content">
									<h6 class="text-uppercase text-primary">Candice Marshall</h6>
									<p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Quotes -->
		</div>
		<!-- contact area END -->
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

