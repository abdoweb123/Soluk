<li class="nav-item @if(str_contains(Route::currentRouteName(), 'beneficiaries')) active @endif">

    <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#beneficiaries" aria-controls="beneficiaries" aria-expanded="true" aria-label="Toggle navigation">
        <span class="icon text-center">
             <i style="width: 20px;" class="fa fa-user mx-2"></i>
        </span>
        <span class="text">{{ __('trans.beneficiaries') }}</span>
    </a>

    <ul id="beneficiaries" class="dropdown-nav mx-4 collapse" style="">
        <li><a href="{{ route('admin.beneficiaries.index') }}">{{ __('trans.viewAll') }}</a></li>
        <li><a href="{{ route('admin.beneficiaries.create') }}">{{ __('trans.add') }}</a></li>
    </ul>

</li>