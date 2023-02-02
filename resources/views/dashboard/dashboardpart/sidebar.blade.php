  
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard.announcement') }}">
          <i class="bi bi-grid"></i>
          <span>Announcements</span>
        </a>
      </li><!-- End Dashboard Nav -->
     
<!-- Users -->
    <li class="nav-item">
      <a class="nav-link " href="{{ route('dashboard.user') }}">
        <i class="bi bi-grid"></i>
        <span>User</span>
      </a>
    </li>
  </ul>

  </aside><!-- End Sidebar-->