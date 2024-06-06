<li class="nav-item @if(str_contains(Route::currentRouteName(), 'centers')) active @endif">

    <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#centers" aria-controls="centers" aria-expanded="true" aria-label="Toggle navigation">
        <span class="icon text-center">
             <i style="width: 20px;" class="fas fa-star mx-2"></i>
        </span>
        <span class="text">{{ __('trans.centers') }}</span>
    </a>

    <ul id="centers" class="dropdown-nav mx-4 collapse" style="">
        <li><a href="{{ route('admin.centers.index') }}">{{ __('trans.viewAll') }}</a></li>
        <li><a href="{{ route('admin.centers.create') }}">{{ __('trans.add') }}</a></li>
    </ul>

</li>