<ul id="sidebarnav">
    <!-- User Profile-->
    <li class="sidebar-item {{ Request::is('doadboard*') ? 'active' : '' }}"> <a
            class="sidebar-link waves-effect waves-dark sidebar-link" href="{!! route('home') !!}"
            aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                class="hide-menu">{{ trans('auth.home') }}</span></a>
    </li>

    <li class="sidebar-item {{ Request::is('doadboard*') ? 'active' : '' }}"> <a
            class="sidebar-link waves-effect waves-dark sidebar-link" href="{!! route('users.index') !!}"
            aria-expanded="false">
            <i class="mdi me-2 mdi-account-check"></i><span
                class="hide-menu">{{ trans('auth.account_manager') }}</span></a>
    </li>

    <li class="sidebar-item {{ Request::is('doadboard*') ? 'active' : '' }}"> <a
            class="sidebar-link waves-effect waves-dark sidebar-link" href="{!! route('manager_staff.index') !!}"
            aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                class="hide-menu">{{ trans('auth.manager_staff') }}</span></a>
    </li>

    <li class="sidebar-item {{ Request::is('doadboard*') ? 'active' : '' }}"> <a
            class="sidebar-link waves-effect waves-dark sidebar-link" href="{!! route('settings.index') !!}"
            aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                class="hide-menu">{{ trans('auth.settings') }}</span></a>
    </li>

</ul>
