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
						<p>Gallery images and videos are managed from admin panel and loaded dynamically.</p>
					</div>
					<div class="clearfix">
						<ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery sp10">
							@forelse ($galleryItems as $item)
								<li class="card-container col-lg-6 col-md-6 col-sm-6 col-6">
									<div class="dlab-box dlab-gallery-box">
										<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
											@if ($item->type === 'image' && $item->media_path)
												<a href="javascript:void(0);"><img src="{{ asset('storage/' . $item->media_path) }}" alt="{{ $item->title }}"></a>
												<div class="overlay-bx">
													<div class="overlay-icon">
														<a class="mfp-link" title="{{ $item->title }}" href="{{ asset('storage/' . $item->media_path) }}"><i class="ti-fullscreen"></i></a>
													</div>
												</div>
											@else
												@php
													$thumb = $item->thumbnail_path ? asset('storage/' . $item->thumbnail_path) : asset('beauty_salon/images/gallery/pic1.jpg');
												@endphp
												<a href="javascript:void(0);"><img src="{{ $thumb }}" alt="{{ $item->title }}"></a>
												<div class="overlay-bx">
													<div class="overlay-icon" style="display:flex;gap:8px;align-items:center;">
														@if ($item->video_url)
															<a href="{{ $item->video_url }}" target="_blank" title="{{ $item->title }}"><i class="ti-control-play"></i></a>
														@endif
													</div>
												</div>
											@endif
										</div>
										<div style="padding:10px 0 0;">
											<h6 style="margin:0;">{{ $item->title }}</h6>
											@if ($item->description)
												<p style="margin:4px 0 0;">{{ $item->description }}</p>
											@endif
										</div>
									</div>
								</li>
							@empty
								<li class="col-12"><p class="text-center">No gallery items added yet.</p></li>
							@endforelse
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

