@extends('beauty_salon.layouts.app')

@section('title', 'Membership Plans | BeautyZone')

@section('content')
<div class="page-content bg-white">
    <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('beauty_salon/images/banner/bnr1.jpg') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Membership Plans</h1>
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('beauty_salon.index') }}">Home</a></li>
                        <li>Membership Plans</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section-full content-inner bg-white">
        <div class="container">
            <div class="section-head text-black text-center">
                <h2 class="text-primary m-b10">Choose Your Membership</h2>
                <p>Get exclusive pricing and premium salon benefits with our membership plans.</p>
            </div>

            <div class="row">
                @forelse ($plans as $plan)
                    <div class="col-lg-4 col-md-6 m-b30">
                        <div class="p-a30 border text-center h-100" style="border-radius:16px;">
                            <h4 class="text-primary m-b10">{{ $plan->name }}</h4>
                            <p class="m-b5" style="font-size:26px;font-weight:800;">Rs. {{ number_format((float) $plan->final_price, 2) }}</p>
                            <p class="m-b10" style="text-decoration:line-through;color:#888;">Rs. {{ number_format((float) $plan->price, 2) }}</p>
                            <p class="m-b10">
                                @if ($plan->discount_type === 'percentage')
                                    {{ rtrim(rtrim(number_format((float) $plan->discount_value, 2), '0'), '.') }}% OFF
                                @else
                                    Rs. {{ number_format((float) $plan->discount_value, 2) }} OFF
                                @endif
                            </p>
                            <p class="m-b15">Validity: {{ $plan->expiry_days }} day(s)</p>
                            <p class="m-b20">{{ $plan->description ?: 'Premium membership benefits for regular salon clients.' }}</p>

                            @auth
                                @if (auth()->user()->role === 'user')
                                    <form method="post" action="{{ route('beauty_salon.memberships.purchase', $plan) }}">
                                        @csrf
                                        <button type="submit" class="site-button">Buy Now</button>
                                    </form>
                                @endif
                            @else
                                <a href="{{ route('beauty_salon.login') }}" class="site-button">Login to Buy</a>
                            @endauth
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No active membership plans right now.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
