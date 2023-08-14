
<li class="nav-item {{ Request::is('doadboard*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('home') !!}">Trang chủ</a>
</li>
<li class="nav-item }">
    <a class="nav-link" href="{!! route('managerStaff.index') !!}">Manager Staff</a>
</li>
<li class="nav-item }">
    <a class="nav-link" href="{!! route('auth.verify') !!}">Verify</a>
</li>

