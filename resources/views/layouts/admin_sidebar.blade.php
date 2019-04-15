<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item {{ $pageName == 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>

</ul>