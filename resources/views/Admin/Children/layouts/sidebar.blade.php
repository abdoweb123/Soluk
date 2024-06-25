<li class="nav-item @if(str_contains(Route::currentRouteName(), 'children')) active @endif">

    <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#children" aria-controls="children" aria-expanded="true" aria-label="Toggle navigation">
        <span class="icon text-center">
            <i style="width: 20px;" class="fa-solid fa-children mx-2"></i>
        </span>
        <span class="text">{{ __('trans.children') }}</span>
    </a>

    <ul id="children" class="dropdown-nav mx-4 collapse" style="">
        <li><a href="{{ route('admin.children.index') }}">{{ __('trans.viewAll') }}</a></li>
        <li><a href="{{ route('admin.children.create') }}">{{ __('trans.add') }}</a></li>
    </ul>
</li>

