@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('beauty_salon/images/banner/bnr1.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Blog Grid</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>Blog Grid</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="content-area">
            <div class="container">
				<!-- blog grid -->
				<div class="row">
					<div class="post card-container col-lg-4 col-md-6 col-sm-6">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dlab-post-media dlab-img-effect radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic1.jpg') }}" alt=""></a> </div>
							<div class="dlab-info">
								 <div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">The Ultimate Guide to Massage Therapy</a></h5>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
					<div class="post card-container col-lg-4 col-md-6 col-sm-6">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dlab-post-media dlab-img-effect radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic2.jpg') }}" alt=""></a> </div>
							<div class="dlab-info">
								 <div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">Glow from Within: Foods for Healthy Skin</a></h5>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
					<div class="post card-container col-lg-4 col-md-6 col-sm-6">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dlab-post-media dlab-img-effect radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic3.jpg') }}" alt=""></a> </div>
							<div class="dlab-info">
								 <div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">How to Prepare for Your Spa Day</a></h5>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
					<div class="post card-container col-lg-4 col-md-6 col-sm-6">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dlab-post-media dlab-img-effect radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic4.jpg') }}" alt=""></a> </div>
							<div class="dlab-info">
								 <div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">Nail Care Trends and Tips for Healthier Nails</a></h5>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
					<div class="post card-container col-lg-4 col-md-6 col-sm-6">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dlab-post-media dlab-img-effect radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic1.jpg') }}" alt=""></a> </div>
						   <div class="dlab-info">
								 <div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">Anti-Aging Treatments: Whatâ€™s Right for You?</a></h5>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
					<div class="post card-container col-lg-4 col-md-6 col-sm-6">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dlab-post-media dlab-img-effect radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic2.jpg') }}" alt=""></a> </div>
						   <div class="dlab-info">
								 <div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">Exploring Natural Ingredients in Spa Products</a></h5>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- blog grid END -->
				<!-- Pagination -->
				<div class="pagination-bx clearfix text-center">
					<ul class="pagination justify-content-center">
						<li class="previous"><a href="javascript:void(0);"><i class="ti-arrow-left"></i> Prev</a></li>
						<li class="active"><a href="javascript:void(0);">1</a></li>
						<li><a href="javascript:void(0);">2</a></li>
						<li><a href="javascript:void(0);">3</a></li>
						<li class="next"><a href="javascript:void(0);">Next <i class="ti-arrow-right"></i></a></li>
					</ul>
				</div>
				<!-- Pagination END -->
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

