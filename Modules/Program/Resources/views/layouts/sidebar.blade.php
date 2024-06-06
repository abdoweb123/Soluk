<li class="nav-item @if(str_contains(Route::currentRouteName(), 'programs')) active @endif">
    <a href="{{ route(activeGuard().'.programs.index') }}">
        <span class="icon text-center">
            <i style="width: 20px;" class="fa fa-tasks mx-2"></i>
        </span>
        <span class="text">{{ __('trans.programs') }}</span>
    </a>
</li>