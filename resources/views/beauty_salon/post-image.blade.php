@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('content')
<div class="page-content bg-white">
        <div class="content-area">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Left part start -->
                    <div class="col-lg-8 col-md-12 m-b10">
                        <!-- blog start -->
                        <div class="blog-post blog-single blog-style-1">
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
                            <div class="dlab-post-media dlab-img-effect zoom-slow m-t20">
								<img src="{{ asset('beauty_salon/images/blog/default/thum1.jpg') }}" alt="">
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

