<ul id="sidebarnav">
    <!-- User Profile-->
    <li class="sidebar-item {{ Request::is('doadboard*') ? 'active' : '' }}"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{!! route('home') !!}"
            aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span class="hide-menu">Trang chủ</span></a>
    </li>

    <li class="sidebar-item {{ Request::is('doadboard*') ? 'active' : '' }}"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{!! route('users.index') !!}"
            aria-expanded="false">
            <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Tài khoản</span></a>
    </li>

    <li class="sidebar-item {{ Request::is('doadboard*') ? 'active' : '' }}"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{!! route('managerStaff.index') !!}"
            aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span class="hide-menu">Quản lí nhân viên</span></a>
    </li>

</ul>
