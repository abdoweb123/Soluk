<li class="nav-item @if(str_contains(Route::currentRouteName(), 'specialists')) active @endif">
    <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#specialists" aria-controls="specialists" aria-expanded="true" aria-label="Toggle navigation">
        <span class="icon text-center">
           <i style="width: 20px;" class="fa-solid fa-user-tag mx-2"></i>
        </span>
        <span class="text">{{ __('trans.specialists') }}</span>
    </a>

    <ul id="specialists" class="dropdown-nav mx-4 collapse" style="">
        <li><a href="{{ route('admin.specialists.index') }}">{{ __('trans.viewAll') }}</a></li>
        <li><a href="{{ route('admin.specialists.create') }}">{{ __('trans.add') }}</a></li>
    </ul>

</li>