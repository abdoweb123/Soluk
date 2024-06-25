<li class="nav-item @if(str_contains(Route::currentRouteName(), 'parents')) active @endif">

    <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#parents" aria-controls="parents" aria-expanded="true" aria-label="Toggle navigation">
        <span class="icon text-center">
           <i style="width: 20px;" class="fa-solid fa-user-tag mx-2"></i>
        </span>
        <span class="text">{{ __('trans.parents') }}</span>
    </a>

    <ul id="parents" class="dropdown-nav mx-4 collapse" style="">
        <li><a href="{{ route('admin.parents.index') }}">{{ __('trans.viewAll') }}</a></li>
        <li><a href="{{ route('admin.parents.create') }}">{{ __('trans.add') }}</a></li>
    </ul>
</li>