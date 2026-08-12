@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary" style="background-image:url({{ asset('beauty_salon/images/banner/bnr1.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Our Services</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>Our Services</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<div class="content-block">
			<div class="section-full content-inner-2 bg-white hair-services">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Services</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>All services below are managed from admin panel and update instantly on this page.</p>
					</div>
					<div class="row">
						@forelse ($services as $service)
							<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
								<div class="icon-bx-wraper center p-a30" style="min-height: 320px;">
									@if ($service->image_path)
										<div class="m-b15"><img src="{{ asset('storage/' . $service->image_path) }}" alt="{{ $service->title }}" style="width:100%;max-height:160px;object-fit:cover;border-radius:12px;"></div>
									@endif
									<div class="icon-content">
										<h5 class="dez-tilte">{{ $service->title }}</h5>
										@if ($service->description)
											<p>{{ $service->description }}</p>
										@endif
										@if ($service->price || $service->duration_minutes)
											<p class="m-b0">
												@if ($service->price)
													<strong>Rs. {{ number_format((float) $service->price, 2) }}</strong>
												@endif
												@if ($service->price && $service->duration_minutes)
													<span> | </span>
												@endif
												@if ($service->duration_minutes)
													<span>{{ $service->duration_minutes }} min</span>
												@endif
											</p>
										@endif
										@if (!empty($service->sub_services))
											<div style="display:flex;flex-wrap:wrap;gap:8px;margin-top:12px;">
												@foreach ($service->sub_services as $subService)
													<span style="background:#eef2f7;padding:6px 10px;border-radius:999px;font-size:13px;line-height:1;">{{ $subService }}</span>
												@endforeach
											</div>
										@endif
									</div>
								</div>
							</div>
						@empty
							<div class="col-12 text-center">
								<p>No services added yet. Admin panel se services add karo.</p>
							</div>
						@endforelse
					</div>
				</div>
			</div>

			<div class="section-full content-inner-3 services-box bg-pink-light" style="background-image:url({{ asset('beauty_salon/images/background/bg5.jpg') }}); background-position: bottom; background-size: 100%; background-repeat: no-repeat;">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Pricing Plans</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Plans are also controlled dynamically from admin panel.</p>
					</div>
					<div class="row">
						@forelse ($plans as $plan)
							<div class="col-lg-4 col-md-6 m-b30">
								<div class="icon-bx-wraper p-lr20 p-b30 p-t20 bg-white center fly-box-ho" style="min-height:330px;">
									<div class="icon-content">
										<h6 class="dlab-tilte">{{ $plan->name }}</h6>
										@if ($plan->description)
											<p class="m-b5">{{ $plan->description }}</p>
										@endif
										@if (!empty($plan->sub_service_prices))
											<ul style="text-align:left; padding-left:18px; margin:0;">
												@foreach ($plan->sub_service_prices as $item)
													<li>
														<strong>{{ $item['name'] ?? 'Sub Service' }}</strong>
														@if (!empty($item['price']))
															- Rs. {{ number_format((float) $item['price'], 2) }}
														@endif
													</li>
												@endforeach
											</ul>
										@endif
									</div>
								</div>
							</div>
						@empty
							<div class="col-12 text-center"><p>No pricing plan available yet.</p></div>
						@endforelse
					</div>
				</div>
			</div>
        <!-- contact area END -->
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

