<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item  {{ $navLink == 'dahsboard' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('homeadmin') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="true" aria-controls="auth">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Kelola Data</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse show" id="auth" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ $navLink == 'users' ? 'active' : '' }}">
                        <a class="nav-link " href="{{ route('users.index') }}"> User </a>
                    </li>
                    <li class="nav-item {{ $navLink == 'alumni' ? 'active' : '' }}">
                        <a class="nav-link " href="{{ route('alumni.index') }}"> Alumni </a>
                    </li>
                    <li class="nav-item {{ $navLink == 'company' ? 'active' : '' }}">
                        <a class="nav-link " href="{{ route('company.index') }}"> Company </a>
                    </li>
                    <li class="nav-item {{ $navLink == 'kabkota' ? 'active' : '' }}">
                        <a class="nav-link " href="{{ route('kabkota.index') }}"> Kab/Kota </a>
                    </li>
                    <li class="nav-item {{ $navLink == 'prodi' ? 'active' : '' }}">
                        <a class="nav-link " href="{{ route('prodi.index') }}"> Prodi </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item  {{ $navLink == 'certificates' ? 'active' : '' }}">
            <a class="nav-link"
                href="{{ route('certificates.index') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Certificates</span>
            </a>
        </li>
        <li class="nav-item  {{ $navLink == 'events' ? 'active' : '' }}">
            <a class="nav-link"
                href="#">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Events</span>
            </a>
        </li>
        <li class="nav-item  {{ $navLink == 'jobs' ? 'active' : '' }}">
            <a class="nav-link"
                href="{{ route('jobs.index') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Jobs</span>
            </a>
        </li>
        <li class="nav-item  {{ $navLink == 'forums' ? 'active' : '' }}">
            <a class="nav-link"
                href="{{ route('forums.index') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Forum</span>
            </a>
        </li>
    </ul>
</nav>
