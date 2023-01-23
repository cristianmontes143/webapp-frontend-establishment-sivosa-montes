@extends('dashboard.pages.main-dashboard')
@section('content')

@include('dashboard.dashboardpart.navigation')
@include('dashboard.dashboardpart.sidebar')
<!-- Start Page Title -->
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
</div>
  <!-- End Page Title -->

   <!-- Top Selling -->
   <div class="col-12">
    <div class="card top-selling overflow-auto">
      {{-- <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Filter</h6>
          </li>

          <li><a class="dropdown-item" href="#">Today</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
          <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
      </div> --}}
      <div class="card-body pb-3">
        <div class="top-selling-table">
          <h5 class="table">Top Selling <span>| Today</span></h5>

        </div>

        <table class="table table-warning table-striped">
          <thead>
            <tr>
              <th scope="col">Preview</th>
              <th scope="col">Product</th>
              <th scope="col">Price</th>
              <th scope="col">Sold</th>
              <th scope="col">Revenue</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
              <td><a href="#" class="text-dark fw-bold">Cellphone</a></td>
              <td>$64</td>
              <td class="fw-bold">124</td>
              <td>$7,936</td>
            </tr>
            <tr>
              <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
              <td><a href="#" class="text-dark fw-bold">Laptop</a></td>
              <td>$534</td>
              <td class="fw-bold">98</td>
              <td>$52,332</td>
            </tr>
            <tr>
              <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
              <td><a href="#" class="text-dark fw-bold">Printer</a></td>
              <td>$243</td>
              <td class="fw-bold">74</td>
              <td>$17,982</td>
            </tr>
            <tr>
              <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
              <td><a href="#" class="text-dark fw-bold">Tablet</a></td>
              <td>$89</td>
              <td class="fw-bold">63</td>
              <td>$5,607</td>
            </tr>
            <tr>
              <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
              <td><a href="#" class="text-dark fw-bold">Accesories</a></td>
              <td>$79</td>
              <td class="fw-bold">41</td>
              <td>$3,239</td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>
  </div><!-- End Top Selling -->

@stop