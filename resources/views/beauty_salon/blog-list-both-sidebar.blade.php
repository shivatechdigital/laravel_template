@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('beauty_salon/images/banner/bnr1.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Blog List Both Sidebar</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>Blog List Both Sidebar</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-area">
            <div class="container-fluid">
                <div class="row">
					<!-- Side bar start -->
					<div class="col-xl-3 col-lg-5 col-md-12 m-b30 order-lg-1 order-sm-2 order-2 xl-sticky-top">
						<aside  class="side-bar">
							<div class="widget">
								<h6 class="widget-title style-1">Search</h6>
								<div class="search-bx style-1">
									<form role="search" method="post">
										<div class="input-group">
											<input name="text" class="form-control" placeholder="Enter your keywords..." type="text">
											<span class="input-group-btn">
												<button type="submit" class="fa fa-search text-primary"></button>
											</span> 
										</div>
									</form>
								</div>
							</div>
							<div class="widget widget_gallery gallery-grid-3">
								<h6 class="widget-title style-1">Our Gallery</h6>
								<ul>
									<li><div class="dlab-post-thum"><a href="javascript:void(0);" class="dlab-img-overlay1 dlab-img-effect zoom-slow"><img src="{{ asset('beauty_salon/images/gallery/pic2.jpg') }}" alt=""></a></div></li>
									<li><div class="dlab-post-thum"><a href="javascript:void(0);" class="dlab-img-overlay1 dlab-img-effect zoom-slow"><img src="{{ asset('beauty_salon/images/gallery/pic1.jpg') }}" alt=""></a></div></li>
									<li><div class="dlab-post-thum"><a href="javascript:void(0);" class="dlab-img-overlay1 dlab-img-effect zoom-slow"><img src="{{ asset('beauty_salon/images/gallery/pic5.jpg') }}" alt=""></a></div></li>
									<li><div class="dlab-post-thum"><a href="javascript:void(0);" class="dlab-img-overlay1 dlab-img-effect zoom-slow"><img src="{{ asset('beauty_salon/images/gallery/pic7.jpg') }}" alt=""></a></div></li>
									<li><div class="dlab-post-thum"><a href="javascript:void(0);" class="dlab-img-overlay1 dlab-img-effect zoom-slow"><img src="{{ asset('beauty_salon/images/gallery/pic8.jpg') }}" alt=""></a></div></li>
									<li><div class="dlab-post-thum"><a href="javascript:void(0);" class="dlab-img-overlay1 dlab-img-effect zoom-slow"><img src="{{ asset('beauty_salon/images/gallery/pic9.jpg') }}" alt=""></a></div></li>
								</ul>
							</div>
							<div class="widget widget_archive">
								<h6 class="widget-title style-1">Categories List</h6>
								<ul>
									<li><a href="javascript:void(0);">aciform</a></li>
									<li><a href="javascript:void(0);">championship</a></li>
									<li><a href="javascript:void(0);">chastening</a></li>
									<li><a href="javascript:void(0);">clerkship</a></li>
									<li><a href="javascript:void(0);">disinclination</a></li>
								</ul>
							</div>
						</aside>
					</div>
					<!-- Side bar END -->
                    <!-- Left part start -->
                    <div class="col-xl-6 col-lg-7 col-md-12 m-b30 order-lg-2 order-sm-1">
                        <div class="blog-post blog-md clearfix">
                            <div class="dlab-post-media dlab-img-effect zoom-slow radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic4.jpg') }}" alt=""></a> </div>
                            <div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-author">By <a href="{{ route('beauty_salon.blog-details') }}">demongo</a> </li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h4 class="post-title font-24"><a href="{{ route('beauty_salon.blog-details') }}">The Ultimate Guide to Massage Therapy</a></h4>
								</div>
								<div class="dlab-post-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
                        </div>
                        <div class="blog-post blog-md clearfix">
                            <div class="dlab-post-media dlab-img-effect zoom-slow radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic3.jpg') }}" alt=""></a> </div>
                            <div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-author">By <a href="{{ route('beauty_salon.blog-details') }}">demongo</a> </li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h4 class="post-title font-24"><a href="{{ route('beauty_salon.blog-details') }}">Stress Relief Techniques to Complement Your Spa Visits</a></h4>
								</div>
								<div class="dlab-post-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
										text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
                        </div>
                        <div class="blog-post blog-md clearfix">
                            <div class="dlab-post-media dlab-img-effect zoom-slow radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic2.jpg') }}" alt=""></a> </div>
                            <div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-author">By <a href="{{ route('beauty_salon.blog-details') }}">demongo</a> </li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h4 class="post-title font-24"><a href="{{ route('beauty_salon.blog-details') }}">Glow from Within: Foods for Healthy Skin</a></h4>
								</div>
								<div class="dlab-post-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
										text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
                        </div>
                        <div class="blog-post blog-md clearfix">
                            <div class="dlab-post-media dlab-img-effect zoom-slow radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic1.jpg') }}" alt=""></a> </div>
                            <div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-author">By <a href="{{ route('beauty_salon.blog-details') }}">demongo</a> </li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h4 class="post-title font-24"><a href="{{ route('beauty_salon.blog-details') }}">Self-Care for Busy Lives: Quick Relaxation Tips</a></h4>
								</div>
								<div class="dlab-post-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
										text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
                        </div>
                        <div class="blog-post blog-md clearfix">
                            <div class="dlab-post-media dlab-img-effect zoom-slow radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic4.jpg') }}" alt=""></a> </div>
                            <div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-author">By <a href="{{ route('beauty_salon.blog-details') }}">demongo</a> </li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h4 class="post-title font-24"><a href="{{ route('beauty_salon.blog-details') }}">How to Prepare for Your Spa Day</a></h4>
								</div>
								<div class="dlab-post-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
										text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
                        </div>
                        <div class="blog-post blog-md clearfix">
                            <div class="dlab-post-media dlab-img-effect zoom-slow radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic3.jpg') }}" alt=""></a> </div>
                            <div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-author">By <a href="{{ route('beauty_salon.blog-details') }}">demongo</a> </li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h4 class="post-title font-24"><a href="{{ route('beauty_salon.blog-details') }}">Winter Wellness: Protecting Your Skin and Body</a></h4>
								</div>
								<div class="dlab-post-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
										text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
                        </div>
                        <div class="blog-post blog-md clearfix">
                            <div class="dlab-post-media dlab-img-effect zoom-slow radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic2.jpg') }}" alt=""></a> </div>
                            <div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-author">By <a href="{{ route('beauty_salon.blog-details') }}">demongo</a> </li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h4 class="post-title font-24"><a href="{{ route('beauty_salon.blog-details') }}">The Science of Spa: Why Relaxation is Essential for Health</a></h4>
								</div>
								<div class="dlab-post-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
										text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
                        </div>
                        <div class="blog-post blog-md clearfix">
                            <div class="dlab-post-media dlab-img-effect zoom-slow radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic1.jpg') }}" alt=""></a> </div>
                            <div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2024</li>
										<li class="post-author">By <a href="{{ route('beauty_salon.blog-details') }}">demongo</a> </li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h4 class="post-title font-24"><a href="{{ route('beauty_salon.blog-details') }}">Nail Care Trends and Tips for Healthier Nails</a></h4>
								</div>
								<div class="dlab-post-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
										text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
                        </div>
                        <!-- Pagination start -->
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
                    <!-- Left part END -->
                    <!-- Side bar start -->
                    <div class="col-xl-3 col-lg-12 col-md-12 m-b30 order-lg-3 order-sm-2 xl-sticky-top">
                        <aside  class="side-bar">
                            <div class="widget recent-posts-entry">
                                <h6 class="widget-title style-1">Recent Posts</h6>
                                <div class="widget-post-bx">
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media"> <img src="{{ asset('beauty_salon/images/blog/recent-blog/pic1.jpg') }}" width="200" height="143" alt=""> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title"><a href="{{ route('beauty_salon.blog-details') }}">The Correct Order to Apply Your Skincare Products</a></h6>
                                            </div>
											<div class="dlab-post-meta">
												<ul class="d-flex align-items-center">
													<li class="post-date">Sep 18, 2024</li>
													<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
												</ul>
											</div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media"> <img src="{{ asset('beauty_salon/images/blog/recent-blog/pic2.jpg') }}" width="200" height="160" alt=""> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title"><a href="{{ route('beauty_salon.blog-details') }}">Introducing Clareâ€™s Newest Spa Hotel: The Killaloe...</a></h6>
                                            </div>
                                            <div class="dlab-post-meta">
												<ul class="d-flex align-items-center">
													<li class="post-date">Sep 18, 2024</li>
													<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
												</ul>
											</div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media"> <img src="{{ asset('beauty_salon/images/blog/recent-blog/pic3.jpg') }}" width="200" height="160" alt=""> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title"><a href="{{ route('beauty_salon.blog-details') }}">The Well Spa in Waterford Debuts Outdoor Summer Spa</a></h6>
                                            </div>
                                            <div class="dlab-post-meta">
												<ul class="d-flex align-items-center">
													<li class="post-date">Sep 18, 2024</li>
													<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
												</ul>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="widget widget_archive">
                                <h6 class="widget-title style-1">Categories List</h6>
                                <ul>
                                    <li><a href="javascript:void(0);">aciform</a></li>
                                    <li><a href="javascript:void(0);">championship</a></li>
                                    <li><a href="javascript:void(0);">chastening</a></li>
                                    <li><a href="javascript:void(0);">clerkship</a></li>
                                    <li><a href="javascript:void(0);">disinclination</a></li>
                                </ul>
                            </div>
							<div class="widget widget-newslatter">
                                <h6 class="widget-title style-1">Newsletter</h6>
                                <div class="news-box">
									<p>Enter your e-mail and subscribe to our newsletter.</p>
                                    <form class="dzSubscribe" action="https://beautyzone-html.vercel.app/script/mailchamp.php" method="post">
										<div class="dzSubscribeMsg"></div>
                                        <div class="input-group">
                                            <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email">
											<button name="submit" value="Submit" type="submit" class="site-button btn-block radius-no">Subscribe Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
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

