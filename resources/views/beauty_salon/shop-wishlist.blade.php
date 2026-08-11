@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('beauty_salon/images/banner/bnr3.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Wishlist</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>Wishlist</li>
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
                <div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table check-tbl">
								<thead class="text-left">
									<tr>
										<th>Product</th>
										<th>Product name</th>
										<th>Unit Price</th>
										<th>Quantity</th>
										<th>Add to cart </th>
										<th>Close</th>
									</tr>
								</thead>
								<tbody>
									<tr class="alert">
										<td class="product-item-img"><img src="{{ asset('beauty_salon/images/product/thumb/item6.jpg') }}" alt=""></td>
										<td class="product-item-name">Prduct Item 3</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity max-w80">
												<input id="demo_vertical2" type="text" value="1" name="demo_vertical2">
											</div>
										</td>
										<td class="product-item-totle"><a href="{{ route('beauty_salon.shop-cart') }}" class="site-button">Add To Cart</a></td>
										<td class="product-item-close"><a href="javascript:void(0);" data-dismiss="alert" class="fa fa-times"></a></td>
									</tr>
									<tr class="alert">
										<td class="product-item-img"><img src="{{ asset('beauty_salon/images/product/thumb/item1.jpg') }}" alt=""></td>
										<td class="product-item-name">Prduct Item 3</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity max-w80">
												<input id="demo_vertical3" type="text" value="1" name="demo_vertical2">
											</div>
										</td>
										<td class="product-item-totle"><a href="{{ route('beauty_salon.shop-cart') }}" class="site-button">Add To Cart</a></td>
										<td class="product-item-close"><a href="javascript:void(0);" data-dismiss="alert" class="fa fa-times"></a></td>
									</tr>
									<tr class="alert">
										<td class="product-item-img"><img src="{{ asset('beauty_salon/images/product/thumb/item2.jpg') }}" alt=""></td>
										<td class="product-item-name">Prduct Item 3</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity max-w80">
												<input id="demo_vertical4" type="text" value="1" name="demo_vertical2">
											</div>
										</td>
										<td class="product-item-totle"><a href="{{ route('beauty_salon.shop-cart') }}" class="site-button">Add To Cart</a></td>
										<td class="product-item-close"><a href="javascript:void(0);" data-dismiss="alert" class="fa fa-times"></a></td>
									</tr>
									<tr class="alert">
										<td class="product-item-img"><img src="{{ asset('beauty_salon/images/product/thumb/item3.jpg') }}" alt=""></td>
										<td class="product-item-name">Prduct Item 3</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity max-w80">
												<input id="demo_vertical5" type="text" value="1" name="demo_vertical2">
											</div>
										</td>
										<td class="product-item-totle"><a href="{{ route('beauty_salon.shop-cart') }}" class="site-button">Add To Cart</a></td>
										<td class="product-item-close"><a href="javascript:void(0);" data-dismiss="alert" class="fa fa-times"></a></td>
									</tr>
									<tr class="alert">
										<td class="product-item-img"><img src="{{ asset('beauty_salon/images/product/thumb/item4.jpg') }}" alt=""></td>
										<td class="product-item-name">Prduct Item 3</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity max-w80">
												<input id="demo_vertical6" type="text" value="1" name="demo_vertical2">
											</div>
										</td>
										<td class="product-item-totle"><a href="{{ route('beauty_salon.shop-cart') }}" class="site-button">Add To Cart</a></td>
										<td class="product-item-close"><a href="javascript:void(0);" data-dismiss="alert" class="fa fa-times"></a></td>
									</tr>
									<tr class="alert">
										<td class="product-item-img"><img src="{{ asset('beauty_salon/images/product/thumb/item5.jpg') }}" alt=""></td>
										<td class="product-item-name">Prduct Item 3</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity max-w80">
												<input id="demo_vertical7" type="text" value="1" name="demo_vertical2">
											</div>
										</td>
										<td class="product-item-totle"><a href="{{ route('beauty_salon.shop-cart') }}" class="site-button">Add To Cart</a></td>
										<td class="product-item-close"><a href="javascript:void(0);" data-dismiss="alert" class="fa fa-times"></a></td>
									</tr>
								</tbody>
							</table>
						</div>
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

