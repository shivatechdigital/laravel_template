@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('content')
<div class="page-content bg-white">
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-8 col-md-12 m-b10">
                        <!-- blog start -->
                        <div class="blog-post blog-single blog-style-1">
							<div class="product-gallery on-show-slider mb-5"> 
								<div id="sync1" class="owl-carousel owl-theme owl-none">
									<div class="item">
										<div class="mfp-gallery">
											<div class="dlab-box">
												<img class="rounded-sm" src="{{ asset('beauty_salon/images/blog/default/thum1.jpg') }}" alt="">
											</div>
										</div>
									</div>
									<div class="item">
										<div class="mfp-gallery">
											<div class="dlab-box">
												<img class="rounded-sm" src="{{ asset('beauty_salon/images/blog/default/thum2.jpg') }}" alt="">
											</div>
										</div>
									</div>
									<div class="item">
										<div class="mfp-gallery">
											<div class="dlab-box">
												<img class="rounded-sm" src="{{ asset('beauty_salon/images/blog/default/thum3.jpg') }}" alt="">
											</div>
										</div>
									</div>
									<div class="item">
										<div class="mfp-gallery">
											<div class="dlab-box">
												<img class="rounded-sm" src="{{ asset('beauty_salon/images/blog/default/thum4.jpg') }}" alt="">
											</div>
										</div>
									</div>
								</div>
								<div id="sync2" class="owl-carousel owl-theme owl-none">
									<div class="item">
										<div class="mfp-gallery">
											<div class="dlab-box">
												<img class="rounded-sm" src="{{ asset('beauty_salon/images/blog/default/thum1.jpg') }}" alt="">
											</div>
										</div>
									</div>
									<div class="item">
										<div class="mfp-gallery">
											<div class="dlab-box">
												<img class="rounded-sm" src="{{ asset('beauty_salon/images/blog/default/thum2.jpg') }}" alt="">
											</div>
										</div>
									</div>
									<div class="item">
										<div class="mfp-gallery">
											<div class="dlab-box">
												<img class="rounded-sm" src="{{ asset('beauty_salon/images/blog/default/thum3.jpg') }}" alt="">
											</div>
										</div>
									</div>
									<div class="item">
										<div class="mfp-gallery">
											<div class="dlab-box">
												<img class="rounded-sm" src="{{ asset('beauty_salon/images/blog/default/thum4.jpg') }}" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="dlab-post-meta">
								<ul class="d-flex align-items-center">
									<li class="post-date">September 18, 2024</li>
									<li class="post-author">By <a href="{{ route('beauty_salon.blog-details') }}">demongo</a> </li>
									<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
								</ul>
							</div>
                            <div class="dlab-post-title">
                                <h1 class="post-title m-t0">The Correct Order to Apply Your Skincare Products</h1>
                            </div>
                            <div class="dlab-post-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting  printer a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen  It has urvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen It has urvived not only five centuries, but also the leap into electronic typesetting.</p>
                                <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Has been the industry's standard text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimencenturies.</blockquote>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen It has urvived not only five centuries, but also the leap into electronic typesetting.</p>
                                <h5>Completely Responsive</h5>
                                <img class="alignleft wow fadeIn blog-side-img" data-wow-delay="0.2s" src="{{ asset('beauty_salon/images/blog/grid/pic4.jpg') }}" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releasefive centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release</p>
                                <div class="dlab-divider bg-gray-dark"></div>
                                <img class="alignright wow fadeIn blog-side-img" data-wow-delay="0.2s" src="{{ asset('beauty_salon/images/blog/grid/pic1.jpg') }}" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release</p>
                            </div>
                            <div class="dlab-post-tags clear">
                                <div class="post-tags">
									<a href="javascript:void(0);">Child </a>
									<a href="javascript:void(0);">Eduction </a>
									<a href="javascript:void(0);">Money </a>
									<a href="javascript:void(0);">Resturent </a>
								</div>
                            </div>
							<div class="dlab-divider bg-gray-dark op4"><i class="icon-dot c-square"></i></div>
							<div class="share-details-btn">
								<ul>
									<li><h5 class="m-a0">Share Post</h5></li>
									@include('beauty_salon.partials.social-links', ['mode' => 'share'])
								</ul>
							</div>
                        </div>
                        <div class="clear" id="comment-list">
                            <div class="comments-area" id="comments">
                                <h2 class="comments-title">8 Comments</h2>
                                <div class="clearfix m-b20">
                                    <!-- comment list END -->
                                    <ol class="comment-list">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
													<img  class="avatar photo" src="{{ asset('beauty_salon/images/testimonials/pic1.jpg') }}" alt=""> 
													<cite class="fn">Stacy poe</cite> 
													<span class="says">says:</span>
												</div>
                                                <div class="comment-meta">
													<a href="javascript:void(0);">October 6, 2024 at 7:15 am</a>
												</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neqnsectetur adipiscing elit. Nam viae neqnsectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet.</p>
                                                <div class="reply">
													<a href="javascript:void(0);" class="comment-reply-link">Reply</a>
												</div>
                                            </div>
                                            <ol class="children">
                                                <li class="comment odd parent">
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard">
															<img  class="avatar photo" src="{{ asset('beauty_salon/images/testimonials/pic2.jpg') }}" alt="">
															<cite class="fn">Stacy poe</cite>
															<span class="says">says:</span>
														</div>
                                                        <div class="comment-meta">
															<a href="javascript:void(0);">October 6, 2024 at 7:15 am</a>
														</div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, ac elementum ligula blandit ac.</p>
                                                        <div class="reply">
															<a href="javascript:void(0);" class="comment-reply-link">Reply</a>
														</div>
                                                    </div>
                                                    <ol class="children">
                                                        <li class="comment odd parent">
                                                            <div class="comment-body">
                                                                <div class="comment-author vcard">
																	<img  class="avatar photo" src="{{ asset('beauty_salon/images/testimonials/pic3.jpg') }}" alt="">
																	<cite class="fn">Stacy poe</cite>
																	<span class="says">says:</span>
																</div>
                                                                <div class="comment-meta">
																	<a href="javascript:void(0);">October 6, 2024 at 7:15 am</a>
																</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, ac elementum ligula blandit ac.</p>
                                                                <div class="reply">
																	<a href="javascript:void(0);" class="comment-reply-link">Reply</a>
																</div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                    <!-- list END -->
                                                </li>
                                            </ol>
                                            <!-- list END -->
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
													<img  class="avatar photo" src="{{ asset('beauty_salon/images/testimonials/pic1.jpg') }}" alt="">
													<cite class="fn">Stacy poe</cite>
													<span class="says">says:</span>
												</div>
                                                <div class="comment-meta">
													<a href="javascript:void(0);">October 6, 2024 at 7:15 am</a>
												</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, ac elementum ligula blandit ac.</p>
                                                <div class="reply">
													<a href="javascript:void(0);" class="comment-reply-link">Reply</a>
												</div>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
													<img  class="avatar photo" src="{{ asset('beauty_salon/images/testimonials/pic2.jpg') }}" alt="">
													<cite class="fn">Stacy poe</cite>
													<span class="says">says:</span>
												</div>
                                                <div class="comment-meta">
													<a href="javascript:void(0);">October 6, 2024 at 7:15 am</a>
												</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, ac elementum ligula blandit ac.</p>
                                                <div class="reply">
													<a href="javascript:void(0);" class="comment-reply-link">Reply</a>
												</div>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
													<img  class="avatar photo" src="{{ asset('beauty_salon/images/testimonials/pic3.jpg') }}" alt="">
													<cite class="fn">Stacy poe</cite>
													<span class="says">says:</span>
												</div>
                                                <div class="comment-meta">
													<a href="javascript:void(0);">October 6, 2024 at 7:15 am</a>
												</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, ac elementum ligula blandit ac.</p>
                                                <div class="reply">
													<a href="javascript:void(0);" class="comment-reply-link">Reply</a>
												</div>
                                            </div>
                                        </li>
                                    </ol>
                                    <!-- comment list END -->
                                    <!-- Form -->
                                    <div class="comment-respond" id="respond">
                                        <h4 class="comment-reply-title" id="reply-title">Leave a Reply <small> <a style="display:none;" href="javascript:void(0);" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a> </small> </h4>
                                        <form class="comment-form" id="commentform" method="post">
                                            <p class="comment-form-author">
                                                <label for="author">Name <span class="required">*</span></label>
                                                <input type="text" value="Author" name="Author"  placeholder="Author" id="author">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input type="text" value="email" placeholder="Email" name="email" id="email">
                                            </p>
                                            <p class="comment-form-url">
                                                <label for="url">Website</label>
                                                <input type="text"  value="url"  placeholder="Website"  name="url" id="url">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Comment</label>
                                                <textarea rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
                                            </p>
                                            <p class="form-submit">
                                                <input type="submit" value="Post Comment" class="submit" id="submit" name="submit">
                                            </p>
                                        </form>
                                    </div>
                                    <!-- Form -->
                                </div>
                            </div>
                        </div>
                        <!-- blog END -->
                    </div>
                    <!-- Left part END -->
                    <!-- Side bar start -->
                    <div class="col-lg-4 col-md-12 sticky-top">
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
<script>
	$(document).ready(function() {
	
	  var sync1 = $("#sync1");
	  var sync2 = $("#sync2");
	  var slidesPerPage = 4; //globaly define number of elements per page
	  var syncedSecondary = true;
	
		  sync1.owlCarousel({
			items : 1,
			slideSpeed : 2000,
			nav: true,
			autoplay: false,
			dots: false,
			loop: true,
			responsiveRefreshRate : 200,
			
		  }).on('changed.owl.carousel', syncPosition);
	
		  sync2.on('initialized.owl.carousel', function () {
			  sync2.find(".owl-item").eq(0).addClass("current");
			}).owlCarousel({
			items : slidesPerPage,
			dots: false,
			nav: false,
			margin:5,
			smartSpeed: 200,
			slideSpeed : 500,
			slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
			responsiveRefreshRate : 100
		  }).on('changed.owl.carousel', syncPosition2);
	
	  function syncPosition(el) {
		//if you set loop to false, you have to restore this next line
		//var current = el.item.index;
		
		//if you disable loop you have to comment this block
		var count = el.item.count-1;
		var current = Math.round(el.item.index - (el.item.count/2) - .5);
		
		if(current < 0) {
		  current = count;
		}
		if(current > count) {
		  current = 0;
		}
		
		//end block
	
		sync2
		  .find(".owl-item")
		  .removeClass("current")
		  .eq(current)
		  .addClass("current");
		var onscreen = sync2.find('.owl-item.active').length - 1;
		var start = sync2.find('.owl-item.active').first().index();
		var end = sync2.find('.owl-item.active').last().index();
		
		if (current > end) {
		  sync2.data('owl.carousel').to(current, 100, true);
		}
		if (current < start) {
		  sync2.data('owl.carousel').to(current - onscreen, 100, true);
		}
	  }
	  
	  function syncPosition2(el) {
		if(syncedSecondary) {
		  var number = el.item.index;
		  sync1.data('owl.carousel').to(number, 100, true);
		}
	  }
	  
	  sync2.on("click", ".owl-item", function(e){
			e.preventDefault();
			var number = $(this).index();
			//sync1.data('owl.carousel').to(number, 300, true);
			
			sync1.data('owl.carousel').to(number, 300, true);
			
		});
	});
	
	</script>
@endsection

