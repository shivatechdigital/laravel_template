@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('page_styles')
<style>
		.about-media {
			position: relative;
		}
		.media-wrapper {
			position: relative;
			overflow: hidden;
			border-radius: 10px;
		}
		.experience-bx {
			position: absolute;
			top: -20px;
			left: -20px;
			background: linear-gradient(45deg, #e91e63, #ff6b9d);
			width: 120px;
			height: 120px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			box-shadow: 0 10px 30px rgba(233, 30, 99, 0.3);
			z-index: 2;
		}
		.experience-bx .title
		{
			margin-bottom: 0px;
			font-size: 40px;
		}
		.about-year {
			position: absolute;
			bottom: -15px;
			right: -15px;
			background: #ffffff;
			width: 100px;
			height: 100px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			box-shadow: 0 5px 20px rgba(0,0,0,0.1);
			border: 3px solid #e91e63;
		}
		.icon-bx-wraper {
			transition: transform 0.3s ease;
		}
		.icon-bx-wraper:hover {
			transform: translateY(-5px);
		}
		.feature-box.style3:hover {
			transform: translateY(-10px);
			transition: all 0.3s ease;
		}
		.about-contact {
			display: flex;
			align-items: center;
		}
		.contact-no
		{
			display: flex;
		}
		.contact-icon {
			width: 50px;
			height: 50px;
			border: 2px solid #e91e63;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin-right: 15px;
		}
		.our-story .badge {
			background: linear-gradient(45deg, #e91e63, #ff6b9d) !important;
			font-weight: 600;
			letter-spacing: 1px;
		}
		.shadow {
			box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
		}
		@media (max-width: 991px) {
			.experience-bx {
				width: 80px;
				height: 80px;
				top: -10px;
				left: -10px;
			}
			.about-year {
				width: 70px;
				height: 70px;
				bottom: -10px;
				right: -10px;
			}
		}
	</style>
@endsection

@section('content')
@php
	$aboutIntroData = $aboutIntro?->data ?? [];
	$aboutMissionData = $aboutMissionCards?->data ?? [];
	$missionCards = $aboutMissionData['cards'] ?? [];
@endphp
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary" style="background-image:url({{ asset('beauty_salon/images/banner/bnr1.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">About Us</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>About Us</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<div class="content-block">
			<!-- About Us Section -->
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-12 m-b30">
							<div class="our-story">
								<span class="badge badge-primary p-2 m-b10">{{ $aboutIntro?->subtitle ?: 'ABOUT BEAUTY ZONE' }}</span>
								<h2 class="title text-primary m-b15">{{ $aboutIntro?->title ?: 'Welcome to Beauty Zone - Your Premier Beauty Destination' }}</h2>
								<p class="m-b20">{{ $aboutIntro?->content ?: 'At Beauty Zone, we believe that true beauty comes from feeling confident and pampered.' }}</p>
								<p class="m-b20">{{ $aboutIntroData['paragraph_2'] ?? 'Our state-of-the-art facility combines luxury with comfort, creating the perfect environment for your beauty journey.' }}</p>
								<div class="row m-b30">
									<div class="col-md-6 col-sm-6">
										<div class="icon-bx-wraper left m-b20">
											<div class="icon-sm text-primary m-r20">
												<i class="flaticon-woman fa-3x"></i>
											</div>
											<div class="icon-content">
												<h6 class="dlab-tilte">Expert Professionals</h6>
												<h4 class="m-b0">{{ $aboutIntroData['phone'] ?? '001 1234 6789' }}</h4>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="icon-bx-wraper left m-b20">
											<div class="icon-sm text-primary m-r20">
												<i class="flaticon-mortar fa-3x"></i>
											</div>
										<img src="{{ asset($aboutIntroData['image'] ?? 'beauty_salon/images/about/img1.jpg') }}" alt="Beauty Zone Spa Interior" class="radius-sm shadow">
												<h6 class="dlab-tilte">Premium Products</h6>
												<p class="op7">Only the finest cosmetics and skincare brands</p>
											</div>
											<h2 class="title text-white">{{ $aboutIntroData['experience'] ?? '10+' }}</h2>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="icon-bx-wraper left m-b20">
											<div class="icon-sm text-primary m-r20">
												<i class="flaticon-candle fa-3x"></i>
											</div>
											<h4 class="text-primary">{{ $aboutIntroData['since'] ?? '2014' }}</h4>
												<h6 class="dlab-tilte">Relaxing Ambiance</h6>
												<p class="op7">Serene environment for ultimate relaxation</p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="icon-bx-wraper left m-b20">
											<div class="icon-sm text-primary m-r20">
												<i class="flaticon-spa fa-3x"></i>
											</div>
											<div class="icon-content">
												<h6 class="dlab-tilte">Personalized Care</h6>
												<p class="op7">Customized treatments for your unique needs</p>
											</div>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center">
									<a href="{{ route('beauty_salon.booking') }}" class="site-button btn-style-1 text-uppercase m-r15">Book Appointment</a>
									<div class="about-contact">
										<div class="contact-no">
											<div class="contact-icon text-primary">
												<i class="fa fa-phone"></i>
											</div>
											<div class="contact-num">
												<span class="text-primary">Call Us</span>
												<h4 class="m-b0">001 1234 6789</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 m-b30">
							<div class="about-media">
								<div class="media-wrapper">
									<img src="{{ asset('beauty_salon/images/about/img1.jpg') }}" alt="Beauty Zone Spa Interior" class="radius-sm shadow">
								</div>
								<div class="experience-bx">
									<div class="experience-content text-center">
										<h2 class="title text-white">10+</h2>
										<span class="text-white">Years Experience</span>
									</div>
								</div>
								<div class="about-year">
									<div class="about-year-inner text-center">
										<span class="text-primary">Since</span>
										<h4 class="text-primary">2014</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Us Section END -->
			<!-- Our Mission & Vision -->
			<div class="section-full content-inner bg-gray">
				<div class="container">
					<div class="row">
						@if (!empty($missionCards))
							@foreach ($missionCards as $idx => $card)
								<div class="col-lg-4 col-md-4 col-sm-12 m-b30">
									<div class="feature-container">
										<div class="feature-box style3 text-center">
											<div class="icon-bx-sm radius bg-primary m-b20">
												<i class="{{ $idx % 3 === 0 ? 'flaticon-spa' : ($idx % 3 === 1 ? 'flaticon-woman' : 'flaticon-mortar') }} text-white"></i>
											</div>
											<div class="icon-content">
												<h5 class="dlab-tilte text-primary">{{ $card['title'] ?? 'Our Value' }}</h5>
												<p>{{ $card['description'] ?? '' }}</p>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						@endif
					</div>
				</div>
			</div>
			<!-- Our Mission & Vision END -->
            <div class="section-full content-inner overlay-white-middle" style="background-image:url({{ asset('beauty_salon/images/background/bg1.png') }}), url({{ asset('beauty_salon/images/background/bg2.png') }}); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Services</h2>
						<h6 class="m-b10">You Will Like To Look Like Goddes Every Day!</h6>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="blog-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1 owl-loaded owl-drag">
						@forelse ($services as $service)
							<div class="item">
								<div class="dlab-box service-iconbox">
									<div class="dlab-media dlab-img-overlay5">
										<a href="{{ route('beauty_salon.services-details') }}"><img src="{{ $service->image_path ? asset('storage/' . $service->image_path) : asset('beauty_salon/images/blog/grid/pic1.jpg') }}" alt="{{ $service->title }}"></a>
									</div>
									<div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
										<div class="icon-bx-sm radius bg-white m-b20"><a href="{{ route('beauty_salon.services-details') }}" class="icon-cell"><i class="flaticon-woman"></i></a></div>
										<h5 class="dlab-title m-t0"><a href="{{ route('beauty_salon.services-details') }}">{{ $service->title }}</a></h5>
										<p class="m-b15">{{ $service->description ?: 'Premium salon service managed from admin panel.' }}</p>
									</div>
								</div>
							</div>
						@empty
							<div class="item"><p class="text-center">No services available.</p></div>
						@endforelse
					</div>
				</div>
			</div>
			<!-- Why Chose Us -->
			<!-- Our Pricing -->
			<div class="section-full content-inner bg-blue-light" style="background-image:url({{ asset('beauty_salon/images/background/bg5.jpg') }}); background-position: bottom; background-size: cover; background-repeat: no-repeat;">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Pricing</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="price-tbl d-flex">
								<div class="flex-grow-1">
									<h4 class="text-primary">Deep Tissue Massage</h4>
									<p>60 â€“ 100 Minute Session </p>
								</div>
								<div class="price-val align-self-center">
									<h3 class="text-secondry">$40.00</h3>
								</div>
							</div>
							<div class="price-tbl d-flex">
								<div class="flex-grow-1">
									<h4 class="text-primary">Swedish Massage</h4>
									<p>30 â€“ 40 Minute Session  </p>
								</div>
								<div class="price-val align-self-center">
									<h3 class="text-secondry">$35.00</h3>
								</div>
							</div>
							<div class="price-tbl d-flex">
								<div class="flex-grow-1">
									<h4 class="text-primary">Deep Tissue Massage</h4>
									<p>60 â€“ 100 Minute Session </p>
								</div>
								<div class="price-val align-self-center">
									<h3 class="text-secondry">$40.00</h3>
								</div>
							</div>
							<div class="price-tbl d-flex">
								<div class="flex-grow-1">
									<h4 class="text-primary">Therapeutic Massage</h4>
									<p>40 â€“ 60 Minute Session</p>
								</div>
								<div class="price-val align-self-center">
									<h3 class="text-secondry">$30.00</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="price-tbl d-flex">
								<div class="flex-grow-1">
									<h4 class="text-primary">Hot Stone Massage</h4>
									<p>50 â€“ 60 Minute Session </p>
								</div>
								<div class="price-val align-self-center">
									<h3 class="text-secondry">$34.00</h3>
								</div>
							</div>
							<div class="price-tbl d-flex">
								<div class="flex-grow-1">
									<h4 class="text-primary">Couples Massage</h4>
									<p>20 â€“ 30 Minute Session  </p>
								</div>
								<div class="price-val  align-self-center">
									<h3 class="text-secondry">$42.00</h3>
								</div>
							</div>
							<div class="price-tbl d-flex">
								<div class="flex-grow-1">
									<h4 class="text-primary">Facial</h4>
									<p>15 â€“ 30 Minute Session </p>
								</div>
								<div class="price-val align-self-center">
									<h3 class="text-secondry">$38.00</h3>
								</div>
							</div>
							<div class="price-tbl d-flex">
								<div class="flex-grow-1">
									<h4 class="text-primary">Body Waxing</h4>
									<p>80 â€“ 100 Minute Session </p>
								</div>
								<div class="price-val align-self-center">
									<h3 class="text-secondry">$65.00</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Our Pricing -->
			<!-- Our Professional Team -->
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
			<!-- Our Professional Team -->
			<!-- Testimonials Of Our Clients -->
			<div class="section-full content-inner" style="background-image:url({{ asset('beauty_salon/images/background/bg4.jpg') }}); background-position: bottom; background-size:cover;">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Testimonials Of Our Clients</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="testimonial-two-dots owl-carousel owl-theme owl-dots-primary-full owl-btn-center-lr owl-btn-3">
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic1.jpg') }}" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Charlotte</strong> <span class="testimonial-position">Manager</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic2.jpg') }}" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Jennifer</strong> <span class="testimonial-position">Cosmetologist</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic3.jpg') }}" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Amelia</strong> <span class="testimonial-position">Biologist</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic1.jpg') }}" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Roxie Burton</strong> <span class="testimonial-position">Housewife</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic2.jpg') }}" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Claudia Kennen</strong> <span class="testimonial-position">Designer</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic3.jpg') }}" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Elizabeth Ross</strong> <span class="testimonial-position">Journalist</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic1.jpg') }}" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Evelyn Martinez</strong> <span class="testimonial-position">Fashion Designer</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic2.jpg') }}" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Olivia</strong> <span class="testimonial-position">Housewife</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic3.jpg') }}" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">Diane Mateo</strong> <span class="testimonial-position">Cosmetologist</span> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Testimonials Of Our Clients -->
			<!-- Our Latest Blog -->
			<div class="section-full content-inner overlay-white-middle" style="background-image:url({{ asset('beauty_salon/images/background/bg1.png') }}), url({{ asset('beauty_salon/images/background/bg2.png') }}); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Latest Blog</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="blog-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1">
						<div class="item">
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
                                        <h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
                                    </div>
									<div class="dlab-post-readmore blog-share"> 
										<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
									</div>
                                </div>
                            </div>
                        </div>
						<div class="item">
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
                                        <h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
                                    </div>
									<div class="dlab-post-readmore blog-share"> 
										<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
									</div>
                                </div>
                            </div>
                        </div>
						<div class="item">
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
                                        <h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
                                    </div>
									<div class="dlab-post-readmore blog-share"> 
										<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
									</div>
                                </div>
                            </div>
                        </div>
						<div class="item">
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
                                        <h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
                                    </div>
									<div class="dlab-post-readmore blog-share"> 
										<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
									</div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<!-- Our Latest Blog -->
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

