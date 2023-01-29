  
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="http://webapp-frontend-establishment-sivosa-montes.test/dashboard" class="logo d-flex align-items-center">
        <img src="{{asset('dashboard-asset/assets/img/Logo_L_vector.png')}} " alt="">
        {{-- <span class="d-none d-lg-block">Octagon</span> --}}
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('dashboard-asset/assets/img/Logo_Symbol_L.jpg')}} " alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2 text-white">Cristian Montes</span>
          </a>
          <!-- End Profile Iamge Icon -->

        </li>
        <!-- End Profile Nav -->

        <li class="nav-item">
          <form action="{{ route('logout') }}" method="post">
              @csrf
              <button class="d-flex align-items-center btn btn-outline-warning" type="submit" >
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
              </button>
          </form>
        </li>
      </ul>
    </nav>
    <!-- End Icons Navigation -->
    
  </header>
  <!-- End Header -->