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
    <div class="card-dashboard top-selling overflow-auto">
      <div class="card-body-dashboard pb-3">

        <div class="calendar">
          <div class="title-container">
            <h5 class="embed-title">Schedules</h5>
          </div>

          <div class="calendar-container container-fluid">
            <iframe class="calendar-iframe" src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23F6BF26&ctz=UTC&src=anVuaXNhcmVzaWx2b3NhQGdtYWlsLmNvbQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&src=N2RtMGQ5aWM3OXNrODU0OWhtZGZwMTZpYmlqbjlsN2hAaW1wb3J0LmNhbGVuZGFyLmdvb2dsZS5jb20&src=aHQzamxmYWFjNWxmZDYyNjN1bGZoNHRxbDhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23039BE5&color=%2333B679&color=%230B8043&color=%237986CB&color=%23B39DDB"  width="900" height="600" frameborder="0" scrolling="no"></iframe>

          </div>
        </div>

        <div class="drive">
          <div class="title-container">
            <h5 class="embed-title">Products</h5>
          </div>

          <div class="drive-product container-fluid">
            <iframe class="drive-iframe" src="https://drive.google.com/embeddedfolderview?id=1ghZRZKPiFd0bkyGem8_bHAqU-CWAni8X#grid" style="width:100%; height:600px;"></iframe>
          </div>
        </div>

      </div>
    </div>
  </div><!-- End Top Selling -->

@stop