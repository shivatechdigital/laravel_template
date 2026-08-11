@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Book Appointment - Beauty Salon')

@section('page_styles')
<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('beauty_salon/plugins/smartwizard/css/smart_wizard.css') }}">
<link rel="stylesheet" href="{{ asset('beauty_salon/plugins/datepicker/css/bootstrap-datetimepicker.min.css') }}">
@endsection

@section('content')
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary" style="background-image:url({{ asset('beauty_salon/images/banner/bnr1.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Booking</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
							<li>Booking</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-full content-inner-2">
                <div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="text-center m-b50">
								<h2 class="text-primary">Book Your Appointment</h2>
								<p>Fill out the form below to schedule your beauty appointment</p>
							</div>
							@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
<ul class="m-b0">
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form class="booking-form bg-white p-4 border radius-sm" action="{{ route('beauty_salon.booking.submit') }}" method="post">
@csrf
								<div class="row">
									<!-- Service Category -->
									<div class="col-lg-6 col-md-6 form-group">
										<label class="font-weight-bold">Category *</label>
										<select class="form-control" required name="category">
											<option value="">Select Category</option>
											<option value="facial" @selected(old('category') === 'facial')>Facial Treatment</option>
											<option value="hair" @selected(old('category') === 'hair')>Hair Styling</option>
											<option value="makeup" @selected(old('category') === 'makeup')>Makeup Services</option>
											<option value="spa" @selected(old('category') === 'spa')>Spa & Massage</option>
											<option value="nails" @selected(old('category') === 'nails')>Nail Services</option>
											<option value="bridal" @selected(old('category') === 'bridal')>Bridal Package</option>
										</select>
									</div>
									
									<!-- Specific Service -->
									<div class="col-lg-6 col-md-6 form-group">
										<label class="font-weight-bold">Service *</label>
										<select class="form-control" required name="service">
											<option value="">Select Service</option>
											<option value="basic-facial" @selected(old('service') === 'basic-facial')>Basic Facial</option>
											<option value="anti-aging-facial" @selected(old('service') === 'anti-aging-facial')>Anti-Aging Facial</option>
											<option value="hair-cut-styling" @selected(old('service') === 'hair-cut-styling')>Hair Cut & Styling</option>
											<option value="hair-coloring" @selected(old('service') === 'hair-coloring')>Hair Coloring</option>
											<option value="party-makeup" @selected(old('service') === 'party-makeup')>Party Makeup</option>
											<option value="bridal-makeup" @selected(old('service') === 'bridal-makeup')>Bridal Makeup</option>
											<option value="full-body-massage" @selected(old('service') === 'full-body-massage')>Full Body Massage</option>
											<option value="manicure-pedicure" @selected(old('service') === 'manicure-pedicure')>Manicure & Pedicure</option>
											<option value="nail-art" @selected(old('service') === 'nail-art')>Nail Art</option>
										</select>
									</div>

									<!-- Appointment Date -->
									<div class="col-lg-6 col-md-6 form-group">
										<label class="font-weight-bold">Preferred Date *</label>
										<input name="appointment_date" class="form-control" placeholder="Select Date" type="date" required value="{{ old('appointment_date') }}">
									</div>

									<!-- Time Slot -->
									<div class="col-lg-6 col-md-6 form-group">
										<label class="font-weight-bold">Preferred Time *</label>
										<select class="form-control" required name="appointment_time">
											<option value="">Select Time</option>
											<option value="09:00" @selected(old('appointment_time') === '09:00')>9:00 AM</option>
											<option value="10:00" @selected(old('appointment_time') === '10:00')>10:00 AM</option>
											<option value="11:00" @selected(old('appointment_time') === '11:00')>11:00 AM</option>
											<option value="12:00" @selected(old('appointment_time') === '12:00')>12:00 PM</option>
											<option value="13:00" @selected(old('appointment_time') === '13:00')>1:00 PM</option>
											<option value="14:00" @selected(old('appointment_time') === '14:00')>2:00 PM</option>
											<option value="15:00" @selected(old('appointment_time') === '15:00')>3:00 PM</option>
											<option value="16:00" @selected(old('appointment_time') === '16:00')>4:00 PM</option>
											<option value="17:00" @selected(old('appointment_time') === '17:00')>5:00 PM</option>
											<option value="18:00" @selected(old('appointment_time') === '18:00')>6:00 PM</option>
										</select>
									</div>

									<!-- Customer Name -->
									<div class="col-lg-4 col-md-4 form-group">
										<label class="font-weight-bold">Full Name *</label>
										<input class="form-control" placeholder="Your Full Name" type="text" required name="customer_name" value="{{ old('customer_name') }}">
									</div>

									<!-- Phone Number -->
									<div class="col-lg-4 col-md-4 form-group">
										<label class="font-weight-bold">Phone Number *</label>
										<input class="form-control" placeholder="Your Phone Number" type="tel" required name="customer_phone" value="{{ old('customer_phone') }}">
									</div>

									<!-- Email -->
									<div class="col-lg-4 col-md-4 form-group">
										<label class="font-weight-bold">Email Address *</label>
										<input class="form-control" placeholder="your.email@example.com" type="email" required name="customer_email" value="{{ old('customer_email') }}">
									</div>

									<!-- Additional Notes -->
									<div class="col-12 form-group">
										<label class="font-weight-bold">Additional Notes (Optional)</label>
										<textarea class="form-control" rows="3" placeholder="Any special requests or notes..." name="notes">{{ old('notes') }}</textarea>
									</div>

									<!-- Submit Button -->
									<div class="col-12" style="display: flex; align-items: center; justify-content: center;">
										<button class="btn btn-success">Book Appointment</button>
									</div>
								</div>
							</form>
							</div>
						</div>
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
<script src="{{ asset('beauty_salon/plugins/datepicker/js/moment.js') }}"></script><!-- DATEPICKER JS -->
<script src="{{ asset('beauty_salon/plugins/datepicker/js/bootstrap-datetimepicker.min.js') }}"></script><!-- DATEPICKER JS -->
<script src="{{ asset('beauty_salon/plugins/smartwizard/js/jquery.smartWizard.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('beauty_salon/js/styleSwitcher.js') }}"></script>
@endsection


