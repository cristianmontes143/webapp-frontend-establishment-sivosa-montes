@extends('dashboard.pages.main-dashboard')
@section('content')

@include('dashboard.dashboardpart.navigation')
@include('dashboard.dashboardpart.sidebar')
<div class="card-body">
    <h6 class="card-title">Users</h6>

    <table class="table datatable ">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Header</th>
          <th scope="col">Sub Header</th>
          <th scope="col">image</th>
          <th scope="col">description</th>
          <th scope="col">user_id</th>
          <th scope="col">actions</th>
          <th scope = "col"> <button type="button" class="btn btn-info">Add</button></th>
        </tr>
      </thead>
    </table>

</div>
@stop