<li class="nav-item @if(str_contains(Route::currentRouteName(), 'serviceDetails')) active @endif">

    <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#serviceDetails" aria-controls="serviceDetails" aria-expanded="true" aria-label="Toggle navigation">
        <span class="icon text-center">
             <i style="width: 20px;" class="fa-brands fa-servicestack mx-2"></i>
        </span>
        <span class="text">{{ __('trans.serviceDetails') }}</span>
    </a>

    <ul id="serviceDetails" class="dropdown-nav mx-4 collapse" style="">
        <li><a href="{{ route('admin.serviceDetails.index') }}">{{ __('trans.viewAll') }}</a></li>
        <li><a href="{{ route('admin.serviceDetails.create') }}">{{ __('trans.add') }}</a></li>
    </ul>

</li>