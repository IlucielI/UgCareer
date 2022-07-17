<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link nav-item @if(Route::currentRouteName() == 'homeadmin') active @endif" href="{{ route('homeadmin') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-item @if(Route::currentRouteName() == 'alumni.index') active @endif" href="{{ route('alumni.index') }}">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Alumni Data</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-item @if(Route::currentRouteName() == 'company.index') active @endif" href="{{ route('company.index') }}">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Company Data</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-item @if(Route::currentRouteName() == 'kabkota.index') active @endif" href="{{ route('kabkota.index') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Kab/Kota List</span>
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-item @if(Route::currentRouteName() == 'prodi.index') active @endif" href="{{ route('prodi.index') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Prodi List</span>
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-item @if(Route::currentRouteName() == 'certificates.index') active @endif" href="{{ route('certificates.index') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Certificates</span>
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-item @if(Route::currentRouteName() == 'events.index') active @endif" href="{{ route('events.index') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Events</span>
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-item @if(Route::currentRouteName() == 'jobseekers.index') active @endif" href="{{ route('jobseekers.index') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Jobseeker</span>
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-item @if(Route::currentRouteName() == 'forums.index') active @endif" href="{{ route('forums.index') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Forum</span>
        </a>
    </li>
  </ul>
</nav>
