<li class="nav-item @if(str_contains(Route::currentRouteName(), 'children_programs')) active @endif">

    <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#children_programs" aria-controls="children_programs" aria-expanded="true" aria-label="Toggle navigation">
        <span class="icon text-center">
            <i style="width: 10px;" class="fa fa-tasks mx-0"></i>
            <i style="width: 10px;" class="fa-solid fa-children mx-2"></i>
        </span>
        <span class="text">{{ __('trans.children_programs') }}</span>
    </a>

    <ul id="children_programs" class="dropdown-nav mx-4 collapse" style="">
        <li><a href="{{ route('admin.children_programs.index') }}">{{ __('trans.viewAll') }}</a></li>
        <li><a href="{{ route('admin.children_programs.create') }}">{{ __('trans.add') }}</a></li>
    </ul>
</li>

