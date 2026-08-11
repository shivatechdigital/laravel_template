@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('beauty_salon/images/banner/bnr1.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Checkout</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>Checkout</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner">
            <!-- Product -->
            <div class="container">
                <div>
                    <form class="shop-form row">
						<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
							<h4>Billing & Shipping Address</h4>
							<div class="form-group">
								<select>
									<option value="">Ã…land Islands</option>
									<option value="">Afghanistan</option>
									<option value="">Albania</option>
									<option value="">Algeria</option>
									<option value="">Andorra</option>
									<option value="">Angola</option>
									<option value="">Anguilla</option>
									<option value="">Antarctica</option>
									<option value="">Antigua and Barbuda</option>
									<option value="">Argentina</option>
									<option value="">Armenia</option>
									<option value="">Aruba</option>
									<option value="">Australia</option>
								</select>	
							</div>
							<div class="row">
								<div class="form-group col-lg-6">
									<input type="text" class="form-control" placeholder="First Name">
								</div>
								<div class="form-group col-lg-6">
									<input type="text" class="form-control" placeholder="Last Name">
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Company Name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Address">
							</div>
							<div class="row">
								<div class="form-group col-lg-6">
									<input type="text" class="form-control" placeholder="Apartment, suite, unit etc.">
								</div>
								<div class="form-group col-lg-6">
									<input type="text" class="form-control" placeholder="Town / City">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-6">
									<input type="text" class="form-control" placeholder="State / County">
								</div>
								<div class="form-group col-lg-6">
									<input type="text" class="form-control" placeholder="Postcode / Zip">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-lg-6">
									<input type="email" class="form-control" placeholder="Email">
								</div>
								<div class="form-group col-lg-6">
									<input type="text" class="form-control" placeholder="Phone">
								</div>
							</div>
							<h6><button class="site-button-link" type="button" data-toggle="collapse" data-target="#create-an-account">Create an account <i class="fa fa-arrow-circle-o-down"></i></button></h6>
							<div id="create-an-account" class="collapse">
								<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
							<h4 class="font-weight-600"><button class="site-button-link " type="button" data-toggle="collapse" data-target="#different-address">Ship to a different address <i class="fa fa-arrow-circle-o-down"></i></button></h4>
							<div id="different-address" class="collapse">
								<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>
								<div class="form-group">
									<select>
										<option value="">Ã…land Islands</option>
										<option value="">Afghanistan</option>
										<option value="">Albania</option>
										<option value="">Algeria</option>
										<option value="">Andorra</option>
										<option value="">Angola</option>
										<option value="">Anguilla</option>
										<option value="">Antarctica</option>
										<option value="">Antigua and Barbuda</option>
										<option value="">Argentina</option>
										<option value="">Armenia</option>
										<option value="">Aruba</option>
										<option value="">Australia</option>
									</select>	
								</div>
								<div class="row">
									<div class="form-group col-lg-6">
										<input type="text" class="form-control" placeholder="First Name">
									</div>
									<div class="form-group col-lg-6">
										<input type="text" class="form-control" placeholder="Last Name">
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Company Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Address">
								</div>
								<div class="row">
									<div class="form-group col-lg-6">
										<input type="text" class="form-control" placeholder="Apartment, suite, unit etc.">
									</div>
									<div class="form-group col-lg-6">
										<input type="text" class="form-control" placeholder="Town / City">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-6">
										<input type="text" class="form-control" placeholder="State / County">
									</div>
									<div class="form-group col-lg-6">
										<input type="text" class="form-control" placeholder="Postcode / Zip">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-6">
										<input type="email" class="form-control" placeholder="Email">
									</div>
									<div class="form-group col-lg-6">
										<input type="text" class="form-control" placeholder="Phone">
									</div>
								</div>
								<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
							</div>
						</div>
					</form>
                </div>
				<div class="dlab-divider bg-gray-dark text-gray-dark icon-center"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<h4>Your Order</h4>
						<table class="table-bordered check-tbl">
							<thead class="text-center">
								<tr>
									<th>IMAGE</th>
									<th>PRODUCT NAME</th>
									<th>TOTAL</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><img src="{{ asset('beauty_salon/images/product/thumb3.jpg') }}" alt=""></td>
									<td>Prduct Item 3</td>
									<td class="product-price">$28.00</td>
								</tr>
								<tr>
									<td><img src="{{ asset('beauty_salon/images/product/thumb2.jpg') }}" alt=""></td>
									<td>Prduct Item 4</td>
									<td class="product-price">$36.00</td>
								</tr>
								<tr>
									<td><img src="{{ asset('beauty_salon/images/product/thumb1.jpg') }}" alt=""></td>
									<td>Prduct Item 5</td>
									<td class="product-price">$28.00</td>
								</tr>
								<tr>
									<td><img src="{{ asset('beauty_salon/images/product/thumb4.jpg') }}" alt=""></td>
									<td>Prduct Item 2</td>
									<td class="product-price">$36.00</td>
								</tr>
								<tr>
									<td><img src="{{ asset('beauty_salon/images/product/thumb1.jpg') }}" alt=""></td>
									<td>Prduct Item 1</td>
									<td class="product-price">$28.00</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-lg-6 col-md-6">
						<form class="shop-form">
							<h4>Order Total</h4>
							<table class="table-bordered check-tbl">
								<tbody>
									<tr>
										<td>Order Subtotal</td>
										<td class="product-price">$125.96</td>
									</tr>
									<tr>
										<td>Shipping</td>
										<td>Free Shipping</td>
									</tr>
									<tr>
										<td>Coupon</td>
										<td class="product-price">$28.00</td>
									</tr>
									<tr>
										<td>Total</td>
										<td class="product-price-total">$506.00</td>
									</tr>
								</tbody>
							</table>
							<h5>Payment Method</h5>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name on Card">
							</div>
							<div class="form-group">
								<select>
									<option value="">Credit Card Type</option>
									<option value="">Another option</option>
									<option value="">A option</option>
									<option value="">Potato</option>
								</select>	
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Credit Card Number">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Card Verification Number">
							</div>
							<div class="form-group">
								<button class="site-button button-lg btn-block" type="button">Place Order Now </button>
							</div>
						</form>
					</div>
				</div>
		   </div>
            <!-- Product END -->
		</div>
		<div class="section-full p-t50 p-b20 bg-gray text-black shop-action">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-bx-wraper left m-b30">
							<div class="icon-md text-black radius"> 
								<a href="#" class="icon-cell text-black"><i class="fa fa-gift"></i></a> 
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
								<a href="#" class="icon-cell text-black"><i class="fa fa-plane"></i></a> 
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
								<a href="#" class="icon-cell text-black"><i class="fa fa-history"></i></a> 
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

