@php
    $mode = $mode ?? 'topbar';
    $links = $globalSocialLinks ?? collect();
@endphp

@if ($mode === 'topbar')
    @foreach ($links as $link)
        <li>
            <a href="{{ $link->url }}" class="site-button-link {{ $link->css_class ?: $link->platform }} hover" {{ $link->open_new_tab ? 'target=_blank rel=noopener' : '' }}>
                <i class="{{ $link->icon_class }}"></i>
            </a>
        </li>
    @endforeach
@endif

@if ($mode === 'footer')
    @foreach ($links as $link)
        <li>
            <a href="{{ $link->url }}" class="site-button {{ $link->css_class ?: $link->platform }} circle" {{ $link->open_new_tab ? 'target=_blank rel=noopener' : '' }}>
                <i class="{{ $link->icon_class }}"></i>
            </a>
        </li>
    @endforeach
@endif

@if ($mode === 'contact')
    @foreach ($links as $link)
        <li>
            <a href="{{ $link->url }}" class="{{ $link->icon_class }} bg-primary" {{ $link->open_new_tab ? 'target=_blank rel=noopener' : '' }}></a>
        </li>
    @endforeach
@endif

@if ($mode === 'share')
    @foreach ($links as $link)
        <li>
            <a href="{{ $link->url }}" class="site-button {{ $link->css_class ?: $link->platform }} button-sm" {{ $link->open_new_tab ? 'target=_blank rel=noopener' : '' }}>
                <i class="{{ $link->icon_class }}"></i> {{ $link->label }}
            </a>
        </li>
    @endforeach
@endif

@if ($mode === 'author')
    @foreach ($links as $link)
        <a href="{{ $link->url }}" {{ $link->open_new_tab ? 'target=_blank rel=noopener' : '' }}>
            <i class="{{ $link->icon_class }}"></i>
        </a>
    @endforeach
@endif
