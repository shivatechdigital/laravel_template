@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Pricing')

@section('content')
<div class="page-content bg-white">
    <div class="dlab-bnr-inr overlay-primary" style="background-image:url({{ asset('beauty_salon/images/banner/bnr1.jpg') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Pricing</h1>
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
                        <li>Pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block">
        <div class="section-full content-inner-2 bg-white">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="text-primary m-b10">Our Pricing Plans</h2>
                    <div class="dlab-separator-outer m-b0">
                        <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                    </div>
                    <p>Choose the package that suits your beauty routine. Admin can add and edit all plans from dashboard.</p>
                </div>

                <div class="row">
                    @forelse ($plans as $plan)
                        <div class="col-lg-4 col-md-6 m-b30">
                            <div class="icon-bx-wraper p-lr20 p-b30 p-t20 bg-white center fly-box-ho" style="min-height:340px;border:1px solid #f0e3ea;">
                                @if ($plan->service)
                                    <span class="site-button-secondry" style="display:inline-block;margin-bottom:10px;">{{ $plan->service->title }}</span>
                                @endif
                                <h4 class="text-primary m-b5">{{ $plan->name }}</h4>
                                @if ($plan->description)
                                    <p>{{ $plan->description }}</p>
                                @endif

                                @if (!empty($plan->sub_service_prices))
                                    <ul style="text-align:left; padding-left:20px; margin:15px 0 0;">
                                        @foreach ($plan->sub_service_prices as $item)
                                            <li>
                                                <strong>{{ $item['name'] ?? 'Sub Service' }}</strong>
                                                @if (!empty($item['price']))
                                                    - Rs. {{ number_format((float) $item['price'], 2) }}
                                                @endif
                                                @if (!empty($item['description']))
                                                    <div style="font-size:12px;color:#666;">{{ $item['description'] }}</div>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>No pricing plans available right now.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_scripts')
<script src="{{ asset('beauty_salon/js/jquery.min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/wow/wow.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/counter/waypoints-min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/counter/counterup.min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/masonry/masonry-3.1.4.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/masonry/masonry.filter.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/rangeslider/rangeslider.js') }}"></script>
<script src="{{ asset('beauty_salon/js/custom.min.js') }}"></script>
<script src="{{ asset('beauty_salon/js/dz.carousel.min.js') }}"></script>
<script src="{{ asset('beauty_salon/js/dz.ajax.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('beauty_salon/js/styleSwitcher.js') }}"></script>
@endsection
