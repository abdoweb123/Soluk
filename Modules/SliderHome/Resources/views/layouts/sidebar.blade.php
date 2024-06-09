<li class="nav-item @if(str_contains(Route::currentRouteName(), 'SliderHome')) active @endif">
    <a href="{{ route(activeGuard().'.SliderHome.index') }}">
        <span class="icon text-center">
            <i style="width: 20px;" class="fa-regular fa-images mx-2"></i>
        </span>
        <span class="text">{{ __('trans.SliderHome') }}</span>
    </a>
</li>