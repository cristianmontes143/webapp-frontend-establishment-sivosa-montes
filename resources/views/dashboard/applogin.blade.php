@extends('dashboard.pages.main-dashboard')
{{-- <section class=" section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
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
                <div class="exit position-absolute top-0 end-0 pe-3 pt-3 fs-3"><a href=" {{asset('http://webapp-frontend-establishment-sivosa-montes.test/#')}} " class="x"><i class="bi bi-x-octagon"></i></a></div>
                <h5 class="card-title-login text-center pb-0 fs-4">Login to Your Octagon Account</h5>
              </div>
              <form method="POST" class="text-field-login row g-3 needs-validation" action="{{route('login')}}">
                @csrf
                <div class="col-12">
                  <label for="yourUsername" class="form-label text-dark">Username</label>
                  <label for="email" class="form-label text-dark">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="email" class="form-control" id="yourUsername" required>
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
                <div class="col-12">
                  <p class="small mb-0 text-dark">Don't have account? <a class="small mb-0 text-white" href="pages-register.htm">Create an account</a></p>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
</section> --}}
</div>
</main><!-- End #main -->