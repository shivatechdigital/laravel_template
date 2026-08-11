@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('beauty_salon/images/banner/bnr3.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Services Details</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>Services Details</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <div class="section-full content-inner-2">
                <div class="container">
                    <div class="row">
						<div class="col-lg-3 col-md-4">
							<div class="sticky-top">
								<ul class="service-list m-b30">    
									<li class="active"><a href="{{ route('beauty_salon.services-details') }}">Haircut & Styling</a></li>
									<li><a href="{{ route('beauty_salon.services-details') }}">Makeup</a></li>
									<li><a href="{{ route('beauty_salon.services-details') }}">Manicure & Pedicure  </a></li>
									<li><a href="{{ route('beauty_salon.services-details') }}">Skin Care</a></li>
									<li><a href="{{ route('beauty_salon.services-details') }}">Body Treatment</a></li>
									<li><a href="{{ route('beauty_salon.services-details') }}">Massage</a></li>
								</ul>
								<div class="download-brochure m-b30 ">
									<h4>Brochure</h4>
									<p>Working from home meant we could vary snack and coffee breaks.</p>
									<a href="javascript:void(0);" class="site-button">Download PDF</a>
								</div>
							</div>
						</div>		
						<div class="col-lg-9 col-md-8">
							<h2 class="m-t0 m-b10 fw6">Service Details</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<div class="blog-carousel mfp-gallery owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 primary m-b30">
								<div class="item">
									<div class="dlab-box service-iconbox">
										<div class="dlab-media dlab-img-overlay5"> <a href="{{ route('beauty_salon.services-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic1.jpg') }}" alt=""></a> </div>
										<div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
											<div class="icon-bx-sm radius bg-white m-b20"> <a href="{{ route('beauty_salon.services-details') }}" class="icon-cell"><i class="flaticon-woman"></i></a> </div>
											<h6 class="dlab-title m-t0"><a href="{{ route('beauty_salon.services-details') }}">We are Professional</a></h6>
											<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dlab-box service-iconbox">
										<div class="dlab-media dlab-img-overlay5"> <a href="{{ route('beauty_salon.services-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic2.jpg') }}" alt=""></a> </div>
										<div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
											<div class="icon-bx-sm radius bg-white m-b20"> <a href="{{ route('beauty_salon.services-details') }}" class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
											<h6 class="dlab-title m-t0"><a href="{{ route('beauty_salon.services-details') }}">Lux Cosmetic</a></h6>
											<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dlab-box service-iconbox">
										<div class="dlab-media dlab-img-overlay5"> <a href="{{ route('beauty_salon.services-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic3.jpg') }}" alt=""></a> </div>
										<div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
											<div class="icon-bx-sm radius bg-white m-b20"> <a href="{{ route('beauty_salon.services-details') }}" class="icon-cell"><i class="flaticon-candle"></i></a> </div>
											<h6 class="dlab-title m-t0"><a href="{{ route('beauty_salon.services-details') }}">Medical Education</a></h6>
											<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dlab-box service-iconbox">
										<div class="dlab-media dlab-img-overlay5"> <a href="{{ route('beauty_salon.services-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic1.jpg') }}" alt=""></a> </div>
										<div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
											<div class="icon-bx-sm radius bg-white m-b20"> <a href="{{ route('beauty_salon.services-details') }}" class="icon-cell"><i class="flaticon-woman"></i></a> </div>
											<h6 class="dlab-title m-t0"><a href="{{ route('beauty_salon.services-details') }}">We are Professional</a></h6>
											<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dlab-box service-iconbox">
										<div class="dlab-media dlab-img-overlay5"> <a href="{{ route('beauty_salon.services-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic2.jpg') }}" alt=""></a> </div>
										<div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
											<div class="icon-bx-sm radius bg-white m-b20"> <a href="{{ route('beauty_salon.services-details') }}" class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
											<h6 class="dlab-title m-t0"><a href="{{ route('beauty_salon.services-details') }}">Lux Cosmetic</a></h6>
											<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dlab-box service-iconbox">
										<div class="dlab-media dlab-img-overlay5"> <a href="{{ route('beauty_salon.services-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic3.jpg') }}" alt=""></a> </div>
										<div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
											<div class="icon-bx-sm radius bg-white m-b20"> <a href="{{ route('beauty_salon.services-details') }}" class="icon-cell"><i class="flaticon-candle"></i></a> </div>
											<h6 class="dlab-title m-t0"><a href="{{ route('beauty_salon.services-details') }}">Medical Education</a></h6>
											<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem.</p>
										</div>
									</div>
								</div>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<p class="m-b20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<div class="m-tb20">
								<div class="accordion no-gap" id="accordion1">
									<div class="panel">
										<div class="acod-head">
											<h6 class="acod-title"> 
												<a href="#" data-toggle="collapse" data-target="#faq1" class="" aria-expanded="true">
												1. Web design aorem apsum dolor sit amet?</a> </h6>
										</div>
										<div id="faq1" class="acod-body collapse show" data-parent="#accordion1" style="">
											<div class="acod-content">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h6 class="acod-title"> 
												<a href="#" data-toggle="collapse" data-target="#faq2" class="collapsed" aria-expanded="false">
												2. Graphic design aorem apsum dolor ?</a> </h6>
										</div>
										<div id="faq2" class="acod-body collapse" data-parent="#accordion1" style="">
											<div class="acod-content">Graphic design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h6 class="acod-title"> 
												<a href="#" data-toggle="collapse" data-target="#faq3" class="collapsed" aria-expanded="false">
												3. Developement aorem apsum dolor sit amet ? </a> </h6>
										</div>
										<div id="faq3" class="acod-body collapse" data-parent="#accordion1" style="">
											<div class="acod-content">Developement aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h6 class="acod-title"> 
												<a href="#" data-toggle="collapse" data-target="#faq4" class="collapsed" aria-expanded="false">
												4. True Responsiveness consectetuer adipiscing ? </a> </h6>
										</div>
										<div id="faq4" class="acod-body collapse" data-parent="#accordion1" style="">
											<div class="acod-content">Developement aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h6 class="acod-title"> 
												<a href="#" data-toggle="collapse" data-target="#faq5" class="collapsed" aria-expanded="false">
												5. Claritas est etiam processus ?</a> </h6>
										</div>
										<div id="faq5" class="acod-body collapse" data-parent="#accordion1" style="">
											<div class="acod-content">Developement aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row m-lr0">
								<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
									<div class="icon-bx-wraper center p-a30 bg-gray">
										<div class="icon-lg radius m-b20"> <a href="{{ route('beauty_salon.services-details') }}" class="icon-cell"><i class="flaticon-barbershop"></i></a> </div>
										<div class="icon-content">
											<h6 class="dez-tilte"><a href="{{ route('beauty_salon.services-details') }}">Haircut &amp; Styling</a></h6>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh..</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
									<div class="icon-bx-wraper center p-a30">
										<div class="icon-lg radius m-b20"> <a href="{{ route('beauty_salon.services-details') }}" class="icon-cell"><i class="flaticon-makeup"></i></a> </div>
										<div class="icon-content">
											<h6 class="dez-tilte"><a href="{{ route('beauty_salon.services-details') }}">Makeup</a></h6>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh..</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
									<div class="icon-bx-wraper center p-a30 bg-gray">
										<div class="icon-lg radius m-b20"> <a href="{{ route('beauty_salon.services-details') }}" class="icon-cell"><i class="flaticon-makeup-1"></i></a> </div>
										<div class="icon-content">
											<h6 class="dez-tilte"><a href="{{ route('beauty_salon.services-details') }}">Manicure &amp; Pedicure</a></h6>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy..</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
									<div class="icon-bx-wraper center p-a30">
										<div class="icon-lg radius m-b20"> <a href="{{ route('beauty_salon.services-details') }}" class="icon-cell"><i class="flaticon-woman-1"></i></a> </div>
										<div class="icon-content">
											<h6 class="dez-tilte"><a href="{{ route('beauty_salon.services-details') }}">Skin Care</a></h6>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy..</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
									<div class="icon-bx-wraper center p-a30 bg-gray">
										<div class="icon-lg radius m-b20"> <a href="{{ route('beauty_salon.services-details') }}" class="icon-cell"><i class="flaticon-woman"></i></a> </div>
										<div class="icon-content">
											<h6 class="dez-tilte"><a href="{{ route('beauty_salon.services-details') }}">Body Treatment</a></h6>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy..</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
									<div class="icon-bx-wraper center p-a30">
										<div class="icon-lg radius m-b20"> <a href="{{ route('beauty_salon.services-details') }}" class="icon-cell"><i class="flaticon-candle-1"></i></a> </div>
										<div class="icon-content">
											<h6 class="dez-tilte"><a href="{{ route('beauty_salon.services-details') }}">Massage</a></h6>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy..</p>
										</div>
									</div>
								</div>
							</div>
						</div>		
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

