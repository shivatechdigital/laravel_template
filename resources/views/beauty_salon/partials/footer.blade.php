@if(request()->routeIs('beauty_salon.index'))
    @include('beauty_salon.partials.footer-home')
@else
    @include('beauty_salon.partials.footer-inner')
@endif
