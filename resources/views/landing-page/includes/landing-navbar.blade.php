    <!--====== Preloader Part Start ======-->
    <div class="preloader">
        <div class="loader">
            <div class="logo">
                <img src="{{asset('landing-page-asset/Logo_L_vector.png')}}" alt="">
            </div>
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Preloader Part Ends ======-->

    <!--====== Navbar Style 7 Part Start ======-->
    <div class="navigation">
        <header class="navbar-style-7 position-relative">
            <div class="container">

                @include('landing-page.includes.landing-navbar-mobile')

            </div>
    
            <div class="navbar-container navbar-sidebar-7">
                <!-- navbar close  Ends -->
                <div class="navbar-close d-lg-none">
                    <a class="close-mobile-menu-7" href="javascript:void(0)"><i class="bi bi-x-lg"></i></a>
                </div>
                <!-- navbar close  Ends -->
    
                <!-- navbar top Start -->
                <div class="navbar-top-wrapper">
                    <div class="container-lg">
                        <div class="navbar-top d-lg-flex justify-content-between">
                            <!-- navbar top left Start -->
                            <div class="navbar-top-left">
                                <ul class="navbar-top-link">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <!-- navbar top left Ends -->
                            <!-- navbar top right Start -->
                            <div class="navbar-top-right">
                                <ul class="navbar-top-link">
                                    <li>
                                        <select>
                                            <option value="0">$ USD</option>
                                            <option value="1">€ EURO</option>
                                            <option value="2">$ CAD</option>
                                            <option value="3">₹ INR</option>
                                            <option value="4">¥ CNY</option>
                                            <option value="5">৳ BDT</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select>
                                            <option value="0">English</option>
                                            <option value="1">Español</option>
                                            <option value="2">Filipino</option>
                                            <option value="3">Français</option>
                                            <option value="4">العربية</option>
                                            <option value="5">हिन्दी</option>
                                            <option value="6">বাংলা</option>
                                        </select>
                                    </li>
                                    <li>
                                        <!-- The overlay -->
                                        <section id="myNav" class="overlay">
                                            <!-- Button to close the overlay navigation -->
                                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                                                <i class="bi bi-x-octagon"></i>                                           
                                            </a>

                                            <!-- Overlay content -->
                                            <div class="overlay-content section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                                                <div class="container-login">
                                                  <div class="row justify-content-center">
                                                    <div class="login-card col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                                                      <div class="d-flex justify-content-center py-4">
                                                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                                                          <img src=" " alt="">
                                                        </a>
                                                      </div><!-- End Logo -->
                                                      <div class="card mb-3">
                                                        <div class="card-body">
                                                          <div class="pt-4 pb-2">
                                                            <h5 class="card-title-login text-center pb-0 fs-4">Login to Your Octagon Account</h5>
                                                          </div>
                                                          <form method="POST" class="text-field-login row g-3 needs-validation" action="{{route('login')}}">
                                                            @csrf
                                                            <div class="col-12">
                                                              {{-- <label for="yourUsername" class="form-label text-dark">Username</label> --}}
                                                              <label for="email" class="form-label text-dark">Username</label>
                                                              <div class="input-group has-validation">
                                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                                {{-- <input type="text" name="email" class="form-control" id="yourUsername" required> --}}
                                                                <input type="text" name="email" class="form-control" id="email" required>
                                                                <div class="invalid-feedback">Please enter your username.</div>
                                                              </div>
                                                            </div>
                                                            <div class="col-12">
                                                              <label for="yourPassword" class="form-label text-dark">Password</label>
                                                              <input type="password" name="password" class="form-control" id="yourPassword" required>
                                                              <div class="invalid-feedback">Please enter your password!</div>
                                                            </div>
                                                            <div class="col-12">
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                                                <label class="form-check-label text-dark" for="rememberMe">Remember me</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-12">
                                                              <button class="btn btn-danger w-100" type="submit">Login</button>
                                                              
                                                            </div>
                                                          </form>
                                            
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </section>
                                            <!-- Use any element to open/show the overlay navigation menu -->
                                            {{-- <span onclick="openNav()">open</span> --}}
                                        <button onclick="openNav()" type="button" class="btn btn-warning" >Login</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar top right Ends -->
                        </div>
                    </div>
                </div>
                <!-- navbar top Ends -->

<!-- Division -->
                
                @include('landing-page.includes.landing-navbar-web')

            </div>
            <div class="overlay-7"></div>
        </header>
    </div>
    <!--====== Navbar Style 7 Part Ends ======-->