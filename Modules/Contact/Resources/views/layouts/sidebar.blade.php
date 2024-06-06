<li class="nav-item @if(str_contains(Route::currentRouteName(), 'contact')) active @endif">
    <a href="{{ route(activeGuard().'.contacts.index') }}">
        <span class="icon text-center">
            <i style="width: 20px;" class="fa-solid fa-message mx-2"></i>
        </span>
        <span class="text">{{ __('trans.contact_us') }}</span>
    </a>
</li>