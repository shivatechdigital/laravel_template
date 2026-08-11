@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('beauty_salon/images/banner/bnr2.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Login & Register</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>Login & Register</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner shop-account" style="min-height: 80vh; background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
            <!-- Split Screen Login/Register -->
            <div class="container-fluid p-0">
                <div class="row no-gutters min-vh-80">
                    <!-- Left Side - Login -->
                    <div class="col-lg-6 col-md-12">
                        <div class="login-left-side d-flex align-items-center justify-content-center" style="background: linear-gradient(45deg, #667eea 0%, #764ba2 100%); min-height: 80vh; position: relative;">
                            <!-- Decorative Elements -->
                            <div style="position: absolute; top: 20px; left: 20px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; animation: float 3s ease-in-out infinite;"></div>
                            <div style="position: absolute; bottom: 30px; right: 30px; width: 60px; height: 60px; background: rgba(255,255,255,0.1); border-radius: 50%; animation: float 3s ease-in-out infinite reverse;"></div>
                            
                            <div class="login-form-container w-100 p-4">
                                <div class="text-center text-white m-b40">
                                    <h2 class="font-weight-700 m-b10">Welcome Back!</h2>
                                    <p class="opacity-8">Sign in to your account to continue</p>
                                </div>
                                
                                <form class="login-form">
                                    <div class="form-group m-b20">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <div class="input-group-text bg-white border-right-0">
                                                    <i class="fa fa-user text-primary"></i>
                                                </div>
                                            </span>
                                            <input type="email" class="form-control border-left-0" placeholder="Enter your email" required style="height: 50px;">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group m-b20">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <div class="input-group-text bg-white border-right-0">
                                                    <i class="fa fa-lock text-primary"></i>
                                                </div>
                                            </span>
                                            <input type="password" class="form-control border-left-0" placeholder="Enter your password" required style="height: 50px;">
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between align-items-center m-b30">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label text-white" for="rememberMe">Remember me</label>
                                        </div>
                                        <a href="#" class="text-white-50" data-toggle="modal" data-target="#forgotPasswordModal">Forgot Password?</a>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-block text-primary font-weight-600" style="background: white; height: 50px; border-radius: 25px; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                                        SIGN IN
                                    </button>
                                    
                                    <div class="text-center m-t30">
                                        <p class="text-white-50 m-b20">Or continue with</p>
                                        <div class="social-login">
                                            <a href="#" class="btn btn-circle m-r10" style="background: rgba(255,255,255,0.2); color: white; width: 45px; height: 45px; border-radius: 50%; border: none;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#" class="btn btn-circle m-r10" style="background: rgba(255,255,255,0.2); color: white; width: 45px; height: 45px; border-radius: 50%; border: none;">
                                                <i class="fa fa-google"></i>
                                            </a>
                                            <a href="#" class="btn btn-circle" style="background: rgba(255,255,255,0.2); color: white; width: 45px; height: 45px; border-radius: 50%; border: none;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Side - Registration -->
                    <div class="col-lg-6 col-md-12">
                        <div class="register-right-side d-flex align-items-center justify-content-center bg-white" style="min-height: 80vh; position: relative;">
                            <!-- Decorative Elements -->
                            <div style="position: absolute; top: 30px; right: 30px; width: 80px; height: 80px; background: linear-gradient(45deg, #667eea, #764ba2); opacity: 0.1; border-radius: 50%; animation: float 4s ease-in-out infinite;"></div>
                            <div style="position: absolute; bottom: 40px; left: 40px; width: 120px; height: 120px; background: linear-gradient(45deg, #667eea, #764ba2); opacity: 0.1; border-radius: 50%; animation: float 4s ease-in-out infinite reverse;"></div>
                            
                            <div class="register-form-container w-100 p-4">
                                <div class="text-center">
                                    <h2 class="font-weight-700 text-primary">Create Account</h2>
                                    <p class="text-muted">Join us today and start your beauty journey</p>
                                </div>
                                
                                <form class="register-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group m-b20">
                                                <input type="text" class="form-control" placeholder="First Name" required style="height: 50px; border-radius: 8px; border: 2px solid #f1f1f1;">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group m-b20">
                                                <input type="text" class="form-control" placeholder="Last Name" required style="height: 50px; border-radius: 8px; border: 2px solid #f1f1f1;">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
										<div class="col-md-6">
											<div class="form-group m-b20">
												<div class="input-group">
													<span class="input-group-prepend">
														<div class="input-group-text bg-light border-right-0" style="border: 2px solid #f1f1f1; border-right: none !important;">
															<i class="fa fa-envelope text-primary"></i>
														</div>
													</span>
													<input type="email" class="form-control border-left-0" placeholder="Email Address" required style="height: 50px; border: 2px solid #f1f1f1; border-left: none !important;">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group m-b20">
												<div class="input-group">
													<span class="input-group-prepend">
														<div class="input-group-text bg-light border-right-0" style="border: 2px solid #f1f1f1; border-right: none !important;">
															<i class="fa fa-phone text-primary"></i>
														</div>
													</span>
													<input type="tel" class="form-control border-left-0" placeholder="Phone Number" required style="height: 50px; border: 2px solid #f1f1f1; border-left: none !important;">
												</div>
											</div>
										</div>
									</div>
                                    <div class="row">
										<div class="col-md-6">
											<div class="form-group m-b20">
												<div class="input-group">
													<span class="input-group-prepend">
														<div class="input-group-text bg-light border-right-0" style="border: 2px solid #f1f1f1; border-right: none !important;">
															<i class="fa fa-lock text-primary"></i>
														</div>
													</span>
													<input type="password" class="form-control border-left-0" placeholder="Create Password" required style="height: 50px; border: 2px solid #f1f1f1; border-left: none !important;">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group m-b20">
												<div class="input-group">
													<span class="input-group-prepend">
														<div class="input-group-text bg-light border-right-0" style="border: 2px solid #f1f1f1; border-right: none !important;">
															<i class="fa fa-lock text-primary"></i>
														</div>
													</span>
													<input type="password" class="form-control border-left-0" placeholder="Confirm Password" required style="height: 50px; border: 2px solid #f1f1f1; border-left: none !important;">
												</div>
											</div>
										</div>
									</div>
                                    
                                    <div class="custom-control custom-checkbox m-b30">
                                        <input type="checkbox" class="custom-control-input" id="agreeTerms" required>
                                        <label class="custom-control-label text-muted" for="agreeTerms">
                                            I agree to the <a href="#" class="text-primary">Terms of Service</a> and <a href="#" class="text-primary">Privacy Policy</a>
                                        </label>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-block text-white font-weight-600" style="margin-bottom:45px; background: linear-gradient(45deg, #667eea 0%, #764ba2 100%); height: 50px; border-radius: 25px; border: none; box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);">
                                        CREATE ACCOUNT
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Split Screen Login/Register END -->
		</div>
		<div class="section-full p-t50 p-b20 bg-primary-dark text-white shop-action">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-bx-wraper left m-b30">
							<div class="icon-md text-black radius"> 
								<a href="#" class="icon-cell text-white"><i class="fa fa-gift"></i></a> 
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte font-20">Free shipping on orders $60+</h5>
								<p class="font-14">Order more than 60$ and you will get free shippining Worldwide. More info.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-bx-wraper left m-b30">
							<div class="icon-md text-black radius"> 
								<a href="#" class="icon-cell text-white"><i class="fa fa-plane"></i></a> 
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte font-20">Worldwide delivery</h5>
								<p class="font-14">We deliver to the following countries: USA, Canada, Europe, Australia</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-bx-wraper left m-b30">
							<div class="icon-md text-black radius"> 
								<a href="#" class="icon-cell text-white"><i class="fa fa-history"></i></a> 
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte font-20">60 days money back guranty!</h5>
								<p class="font-14">Not happy with our product, feel free to return it, we will refund 100% your money!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- contact area  END -->
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

