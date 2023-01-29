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
      <div class="card-body-dashboard pb-3">

        <div class="calendar">
          <div class="title-container">
            <h5 class="embed-title">Schedules <span>| Today</span></h5>
          </div>

          <div class="calendar-container container-fluid">
            <iframe src="https://calendar.google.com/calendar/embed?src=junisaresilvosa%40gmail.com&ctz=UTC" style="border: 0" width="900" height="600" frameborder="0" scrolling="no"></iframe>
          </div>
        </div>

        <div class="drive">
          <div class="title-container">
            <h5 class="embed-title">Products <span>| Today</span></h5>
          </div>

          <div class="drive-product container-fluid">
            <iframe src="https://drive.google.com/embeddedfolderview?id=1ghZRZKPiFd0bkyGem8_bHAqU-CWAni8X#grid" style="width:100%; height:600px; border:0;"></iframe>
          </div>
        </div>

      </div>
    </div>
  </div><!-- End Top Selling -->

@stop