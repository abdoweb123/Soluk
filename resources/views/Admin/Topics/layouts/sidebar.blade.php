<li class="nav-item @if(str_contains(Route::currentRouteName(), 'topics')) active @endif">

    <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#topics" aria-controls="topics" aria-expanded="true" aria-label="Toggle navigation">
        <span class="icon text-center">
            <i style="width: 20px;" class="fa-solid fa-child mx-2"></i>
        </span>
        <span class="text">{{ __('trans.topics') }}</span>
    </a>

    <ul id="topics" class="dropdown-nav mx-4 collapse" style="">
        <li><a href="{{ route('admin.topics.index') }}">{{ __('trans.viewAll') }}</a></li>
        <li><a href="{{ route('admin.topics.create') }}">{{ __('trans.add') }}</a></li>
    </ul>
</li>

