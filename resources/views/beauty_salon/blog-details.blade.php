@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon - Blog Details')

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('beauty_salon/images/banner/bnr1.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Blog Details</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li><a href="{{ route('beauty_salon.blog-grid') }}">Blog</a></li>
							<li>Blog Details</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-8 col-md-12 m-b30">
                        <!-- blog start -->
                        <div class="blog-post blog-single blog-style-1">
							<div class="dlab-post-meta">
								<ul class="d-flex align-items-center">
									<li class="post-date"><i class="fa fa-calendar m-r5"></i>September 18, 2024</li>
									<li class="post-author"><i class="fa fa-user m-r5"></i>By <a href="javascript:void(0);">BeautyZone</a></li>
									<li class="post-comment"><i class="fa fa-comments m-r5"></i><a href="#comment-list">5 Comments</a></li>
									<li class="post-view"><i class="fa fa-eye m-r5"></i>2.5k Views</li>
								</ul>
							</div>
                            <div class="dlab-post-title">
                                <h1 class="post-title m-t0">The Ultimate Guide to Massage Therapy: Relaxation and Wellness</h1>
                            </div>
                            <div class="dlab-post-media dlab-img-effect zoom-slow m-t20">
								<img src="{{ asset('beauty_salon/images/blog/default/thum1.jpg') }}" alt="Massage Therapy Guide">
							</div>
                            <div class="dlab-post-text">
                                <p>Massage therapy has been practiced for thousands of years and continues to be one of the most effective ways to promote relaxation, reduce stress, and improve overall wellness. Whether you're dealing with chronic pain, muscle tension, or simply looking for a way to unwind, understanding the benefits and techniques of massage therapy can enhance your spa experience.</p>
                                
                                <h4>Benefits of Regular Massage Therapy</h4>
                                <p>Regular massage therapy offers numerous benefits for both your physical and mental health. From improved circulation to stress reduction, the therapeutic touch of a skilled massage therapist can transform your wellbeing.</p>
                                
                                <div class="row m-b30">
									<div class="col-md-6">
										<img class="radius-sm" src="{{ asset('beauty_salon/images/blog/grid/pic1.jpg') }}" alt="Relaxing Massage">
									</div>
									<div class="col-md-6">
										<h5>Physical Benefits:</h5>
										<ul class="list-check primary">
											<li>Improved blood circulation</li>
											<li>Reduced muscle tension and pain</li>
											<li>Enhanced flexibility and range of motion</li>
											<li>Better sleep quality</li>
											<li>Boosted immune system function</li>
										</ul>
									</div>
								</div>
                                
                                <blockquote class="wp-block-quote">
									<p>"Massage therapy is not just a luxury, it's an investment in your health and wellness. Regular sessions can significantly improve your quality of life."</p>
									<cite>- Dr. Sarah Johnson, Wellness Expert</cite>
								</blockquote>
                                
                                <h4>Popular Massage Techniques</h4>
                                <p>Understanding different massage techniques can help you choose the right treatment for your specific needs. Each technique offers unique benefits and targets different aspects of wellness.</p>
                                
								<div class="row m-b30">
									<div class="col-md-12">
										<div class="icon-bx-wraper style-7 left m-b30 wow fadeInUp" data-wow-delay="0.2s">
											<div class="icon-bx-sm bg-primary radius">
												<a href="javascript:void(0);" class="icon-cell text-white">
													<i class="flaticon-massage-stones"></i>
												</a>
											</div>
											<div class="icon-content">
												<h5 class="dlab-tilte m-b10">Swedish Massage</h5>
												<p>A gentle, relaxing massage using long strokes, kneading, and circular movements to help relax and energize you.</p>
											</div>
										</div>
										<div class="icon-bx-wraper style-7 left m-b30 wow fadeInUp" data-wow-delay="0.4s">
											<div class="icon-bx-sm bg-primary radius">
												<a href="javascript:void(0);" class="icon-cell text-white">
													<i class="flaticon-spa-stone"></i>
												</a>
											</div>
											<div class="icon-content">
												<h5 class="dlab-tilte m-b10">Deep Tissue Massage</h5>
												<p>Targets deeper layers of muscle and connective tissue to help with chronic pain and muscle tension.</p>
											</div>
										</div>
										<div class="icon-bx-wraper style-7 left m-b30 wow fadeInUp" data-wow-delay="0.6s">
											<div class="icon-bx-sm bg-primary radius">
												<a href="javascript:void(0);" class="icon-cell text-white">
													<i class="flaticon-lotus"></i>
												</a>
											</div>
											<div class="icon-content">
												<h5 class="dlab-tilte m-b10">Hot Stone Massage</h5>
												<p>Uses heated stones placed on specific points of the body to warm and loosen tight muscles.</p>
											</div>
										</div>
									</div>
								</div>
                                
                                <img class="alignright wow fadeIn blog-side-img m-b20" data-wow-delay="0.2s" src="{{ asset('beauty_salon/images/blog/grid/pic2.jpg') }}" alt="Spa Environment">
                                <h4>Preparing for Your Massage</h4>
                                <p>To get the most out of your massage therapy session, proper preparation is essential. Arrive a few minutes early to relax and complete any necessary paperwork. Communicate openly with your therapist about any areas of concern, pressure preferences, and health conditions.</p>
                                
                                <p>Hydrate well before and after your massage, and avoid eating a heavy meal immediately before your session. Wear comfortable, loose-fitting clothing that can be easily removed if needed.</p>
                                
                                <div class="dlab-divider bg-gray-dark op4 m-b30"><i class="icon-dot c-square"></i></div>
                                
                                <h4>Post-Massage Care</h4>
                                <p>After your massage, it's important to take care of your body to maximize the benefits. Drink plenty of water to help flush out toxins released during the massage. Take it easy for the rest of the day and avoid strenuous activities.</p>
                                
                                <div class="row m-b30">
									<div class="col-md-6">
										<h6>Do's After Massage:</h6>
										<ul class="list-check-circle primary">
											<li>Drink plenty of water</li>
											<li>Take a warm bath</li>
											<li>Get adequate rest</li>
											<li>Listen to your body</li>
										</ul>
									</div>
									<div class="col-md-6">
										<h6>Don'ts After Massage:</h6>
										<ul class="list-check-circle">
											<li>Avoid alcohol consumption</li>
											<li>Don't do intense exercise</li>
											<li>Avoid heavy meals</li>
											<li>Don't ignore any discomfort</li>
										</ul>
									</div>
								</div>
                                
                                <p class="m-b30">Regular massage therapy can be a powerful tool in your wellness arsenal. Whether you're looking to relax, recover from an injury, or maintain optimal health, incorporating massage into your routine can provide lasting benefits for both body and mind.</p>
                            </div>
                            
                            <div class="dlab-post-tags clear">
                                <div class="post-tags">
									<strong>Tags:</strong>
									<a href="javascript:void(0);">Massage</a>
									<a href="javascript:void(0);">Wellness</a>
									<a href="javascript:void(0);">Relaxation</a>
									<a href="javascript:void(0);">Spa</a>
									<a href="javascript:void(0);">Health</a>
								</div>
                            </div>
                            
							<div class="dlab-divider bg-gray-dark op4"><i class="icon-dot c-square"></i></div>
							
							<div class="share-details-btn">
								<ul>
									<li><h5 class="m-a0">Share Post</h5></li>
                                    @include('beauty_salon.partials.social-links', ['mode' => 'share'])
								</ul>
							</div>
							
							<!-- Author Box -->
							<div class="author-box m-t30 m-b30">
								<div class="author-info">
									<div class="author-avatar">
										<img src="{{ asset('beauty_salon/images/testimonials/pic1.jpg') }}" alt="Author">
									</div>
									<div class="author-content">
										<h5 class="author-name">Dr. Emma Williams</h5>
										<p class="author-title">Licensed Massage Therapist & Wellness Expert</p>
										<p>Dr. Emma Williams has over 15 years of experience in massage therapy and wellness. She specializes in therapeutic massage techniques and has helped thousands of clients achieve better health and relaxation.</p>
										<div class="author-social">
                                            @include('beauty_salon.partials.social-links', ['mode' => 'author'])
										</div>
									</div>
								</div>
							</div>
							
							<!-- Related Posts -->
							<div class="related-posts m-b30">
								<h4 class="m-b20">Related Posts</h4>
								<div class="row">
									<div class="col-md-6">
										<div class="blog-post blog-grid blog-style-1 m-b30">
											<div class="dlab-post-media dlab-img-effect radius-sm">
												<a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic3.jpg') }}" alt=""></a>
											</div>
											<div class="dlab-info">
												<div class="dlab-post-meta">
													<ul class="d-flex align-items-center">
														<li class="post-date">September 15, 2024</li>
														<li class="post-comment"><a href="javascript:void(0);">3 Comments</a></li>
													</ul>
												</div>
												<div class="dlab-post-title">
													<h6 class="post-title"><a href="{{ route('beauty_salon.blog-details') }}">How to Prepare for Your Spa Day</a></h6>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="blog-post blog-grid blog-style-1 m-b30">
											<div class="dlab-post-media dlab-img-effect radius-sm">
												<a href="{{ route('beauty_salon.blog-details') }}"><img src="{{ asset('beauty_salon/images/blog/grid/pic4.jpg') }}" alt=""></a>
											</div>
											<div class="dlab-info">
												<div class="dlab-post-meta">
													<ul class="d-flex align-items-center">
														<li class="post-date">September 12, 2024</li>
														<li class="post-comment"><a href="javascript:void(0);">8 Comments</a></li>
													</ul>
												</div>
												<div class="dlab-post-title">
													<h6 class="post-title"><a href="{{ route('beauty_salon.blog-details') }}">Nail Care Trends and Tips</a></h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                        
                        <!-- Comments Section -->
                        <div class="clear" id="comment-list">
                            <div class="comments-area" id="comments">
                                <h3 class="comments-title">5 Comments</h3>
                                <div class="clearfix m-b20">
                                    <ol class="comment-list">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
													<img class="avatar photo" src="{{ asset('beauty_salon/images/testimonials/pic1.jpg') }}" alt=""> 
													<cite class="fn">Sarah Mitchell</cite> 
													<span class="says">says:</span>
												</div>
                                                <div class="comment-meta">
													<a href="javascript:void(0);">October 6, 2024 at 7:15 am</a>
												</div>
                                                <p>This is such an informative post! I've been thinking about trying massage therapy for my chronic back pain. The different techniques you mentioned are really helpful to know about.</p>
                                                <div class="reply">
													<a href="javascript:void(0);" class="comment-reply-link">Reply</a>
												</div>
                                            </div>
                                            <ol class="children">
                                                <li class="comment odd parent">
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard">
															<img class="avatar photo" src="{{ asset('beauty_salon/images/testimonials/pic2.jpg') }}" alt="">
															<cite class="fn">Dr. Emma Williams</cite>
															<span class="says">says:</span>
														</div>
                                                        <div class="comment-meta">
															<a href="javascript:void(0);">October 6, 2024 at 8:30 am</a>
														</div>
                                                        <p>Hi Sarah! I'm glad you found the post helpful. For chronic back pain, I'd recommend starting with a consultation to determine the best approach. Deep tissue massage can be very effective for your condition.</p>
                                                        <div class="reply">
															<a href="javascript:void(0);" class="comment-reply-link">Reply</a>
														</div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
													<img class="avatar photo" src="{{ asset('beauty_salon/images/testimonials/pic3.jpg') }}" alt="">
													<cite class="fn">Michael Chen</cite>
													<span class="says">says:</span>
												</div>
                                                <div class="comment-meta">
													<a href="javascript:void(0);">October 5, 2024 at 2:45 pm</a>
												</div>
                                                <p>I've been getting regular massages for stress relief and can confirm all the benefits mentioned here. The hot stone massage is my personal favorite!</p>
                                                <div class="reply">
													<a href="javascript:void(0);" class="comment-reply-link">Reply</a>
												</div>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
													<img class="avatar photo" src="{{ asset('beauty_salon/images/testimonials/pic1.jpg') }}" alt="">
													<cite class="fn">Jessica Brown</cite>
													<span class="says">says:</span>
												</div>
                                                <div class="comment-meta">
													<a href="javascript:void(0);">October 4, 2024 at 11:20 am</a>
												</div>
                                                <p>The preparation tips are very useful. I never knew about avoiding heavy meals before a massage. Thank you for sharing this comprehensive guide!</p>
                                                <div class="reply">
													<a href="javascript:void(0);" class="comment-reply-link">Reply</a>
												</div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            
                            <!-- Comment Form -->
                            <div class="comment-respond m-t30" id="respond">
                                <h3 class="comment-reply-title" id="reply-title">Leave a Reply</h3>
                                <form class="comment-form" id="commentform" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="author" id="author" placeholder="Your Name *" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" placeholder="Your Email *" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="url" name="url" id="url" placeholder="Website" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="comment" id="comment" rows="8" placeholder="Your Comment *" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="submit" value="Post Comment" class="site-button" id="submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Left part END -->
                    
                    <!-- Sidebar start -->
                    <div class="col-lg-4 col-md-12">
                        <aside class="side-bar sticky-top">
                            <!-- Search Widget -->
                            <div class="widget widget_search">
                                <div class="widget-title">
                                    <h5 class="title">Search</h5>
                                </div>
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
                            
                            <!-- Recent Posts Widget -->
                            <div class="widget recent-posts-entry">
                                <div class="widget-title">
                                    <h5 class="title">Recent Posts</h5>
                                </div>
                                <div class="widget-post-bx">
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media">
                                            <img src="{{ asset('beauty_salon/images/blog/recent-blog/pic1.jpg') }}" width="200" height="143" alt="">
                                        </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-date">Sep 18, 2024</li>
                                                </ul>
                                            </div>
                                            <div class="dlab-post-header">
                                                <h6 class="post-title"><a href="{{ route('beauty_salon.blog-details') }}">Glow from Within: Foods for Healthy Skin</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media">
                                            <img src="{{ asset('beauty_salon/images/blog/recent-blog/pic2.jpg') }}" width="200" height="143" alt="">
                                        </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-date">Sep 15, 2024</li>
                                                </ul>
                                            </div>
                                            <div class="dlab-post-header">
                                                <h6 class="post-title"><a href="{{ route('beauty_salon.blog-details') }}">Anti-Aging Treatments: What's Right for You?</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media">
                                            <img src="{{ asset('beauty_salon/images/blog/recent-blog/pic3.jpg') }}" width="200" height="143" alt="">
                                        </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-date">Sep 12, 2024</li>
                                                </ul>
                                            </div>
                                            <div class="dlab-post-header">
                                                <h6 class="post-title"><a href="{{ route('beauty_salon.blog-details') }}">Natural Ingredients in Spa Products</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Categories Widget -->
                            <div class="widget widget_categories">
                                <div class="widget-title">
                                    <h5 class="title">Categories</h5>
                                </div>
                                <ul>
                                    <li><a href="javascript:void(0);">Beauty Tips</a> <span>(8)</span></li>
                                    <li><a href="javascript:void(0);">Skincare</a> <span>(12)</span></li>
                                    <li><a href="javascript:void(0);">Massage Therapy</a> <span>(6)</span></li>
                                    <li><a href="javascript:void(0);">Wellness</a> <span>(9)</span></li>
                                    <li><a href="javascript:void(0);">Nail Care</a> <span>(4)</span></li>
                                    <li><a href="javascript:void(0);">Hair Care</a> <span>(7)</span></li>
                                </ul>
                            </div>
                            
                            <!-- Newsletter Widget -->
                            <div class="widget widget_newsletter">
                                <div class="widget-title">
                                    <h5 class="title">Newsletter</h5>
                                </div>
                                <div class="newsletter-bx">
                                    <p>Subscribe to our newsletter to get the latest beauty tips and wellness advice.</p>
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="email" class="form-control" placeholder="Your Email Address" type="email" required>
                                        </div>
                                        <div class="m-t15">
                                            <button type="submit" class="site-button btn-block">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <!-- Tags Widget -->
                            <div class="widget widget_tag_cloud">
                                <div class="widget-title">
                                    <h5 class="title">Tags</h5>
                                </div>
                                <div class="tagcloud">
                                    <a href="javascript:void(0);">Beauty</a>
                                    <a href="javascript:void(0);">Skincare</a>
                                    <a href="javascript:void(0);">Massage</a>
                                    <a href="javascript:void(0);">Wellness</a>
                                    <a href="javascript:void(0);">Spa</a>
                                    <a href="javascript:void(0);">Relaxation</a>
                                    <a href="javascript:void(0);">Health</a>
                                    <a href="javascript:void(0);">Treatment</a>
                                    <a href="javascript:void(0);">Natural</a>
                                    <a href="javascript:void(0);">Care</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- Sidebar END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
@endsection

@section('page_scripts')
<script src="{{ asset('beauty_salon/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('beauty_salon/plugins/wow/wow.js') }}"></script><!-- WOW JS -->
<script src="{{ asset('beauty_salon/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('beauty_salon/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('beauty_salon/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('beauty_salon/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('beauty_salon/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('beauty_salon/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('beauty_salon/plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('beauty_salon/plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('beauty_salon/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('beauty_salon/plugins/lightgallery/js/lightgallery-all.min.js') }}"></script><!-- Lightgallery -->
<script src="{{ asset('beauty_salon/plugins/scroll/scrollbar.min.js') }}"></script><!-- scroll -->
<script src="{{ asset('beauty_salon/js/custom.js') }}"></script><!-- CUSTOM FUNCTIONS -->
<script src="{{ asset('beauty_salon/js/dz.carousel.min.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('beauty_salon/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
@endsection

