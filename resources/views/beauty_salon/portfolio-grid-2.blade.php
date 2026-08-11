@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('beauty_salon/images/banner/bnr2.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Portfolio Grid 2</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>Portfolio Grid 2</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
			<div class="section-full content-inner-2 portfolio-box">
				<div class="container">
					<div class="section-head text-black text-center m-b20">
						<h2 class="text-primary m-b10">Our Portfolio</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="site-filters style1 clearfix center">
						<ul class="filters" data-toggle="buttons">
							<li data-filter="" class="btn active"><input type="radio"><a href="#"><span>All</span></a></li>
							<li data-filter="web" class="btn"><input type="radio"><a href="#"><span>Haircuts</span></a></li>
							<li data-filter="advertising" class="btn"><input type="radio"><a href="#"><span>Coloring</span></a></li>
							<li data-filter="branding" class="btn"><input type="radio"><a href="#"><span>Makeup</span></a></li>
							<li data-filter="design" class="btn"><input type="radio"><a href="#"><span>Massage</span></a></li>
							<li data-filter="photography" class="btn"><input type="radio"><a href="#"><span>Highlights</span></a></li>
						</ul>
					</div>
					<div class="clearfix">
						<ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery sp10">
							<li class="web design card-container col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
										<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic1.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('beauty_salon/images/gallery/pic1.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="advertising branding photography card-container col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect dlab-img-effect "> 
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic2.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('beauty_salon/images/gallery/pic2.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="branding design photography card-container col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect"> 
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic3.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('beauty_salon/images/gallery/pic3.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="web design card-container col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect"> 
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic4.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('beauty_salon/images/gallery/pic4.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							 <li class="web branding card-container col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic5.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('beauty_salon/images/gallery/pic5.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="advertising design photography card-container col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic6.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('beauty_salon/images/gallery/pic6.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="web branding card-container col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
										<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic7.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('beauty_salon/images/gallery/pic7.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="advertising design photography card-container col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect dlab-img-effect "> 
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic8.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('beauty_salon/images/gallery/pic8.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="web photography card-container col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect"> 
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic9.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('beauty_salon/images/gallery/pic9.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="advertising branding card-container col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect"> 
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic1.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('beauty_salon/images/gallery/pic1.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							 <li class="web design card-container col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic2.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('beauty_salon/images/gallery/pic2.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="advertising branding photography card-container col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic3.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<a class="mfp-link" title="Image Title Come Here" href="{{ asset('beauty_salon/images/gallery/pic3.jpg') }}"> <i class="ti-fullscreen"></i> </a>	
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
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

