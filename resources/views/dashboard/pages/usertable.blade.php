@extends('dashboard.pages.main-dashboard')
@section('content')

@include('dashboard.dashboardpart.navigation')
@include('dashboard.dashboardpart.sidebar')

<div class="card-body">
  <h6 class="card-title">Users</h6>
  <table class="table">
      <thead>
        <tr>
          <th class="table-header" scope="col">Id</th>
          <th class="table-header" scope="col">Name</th>
          <th class="table-header" scope="col">Email</th>
          <th class="table-header" scope="col">Action</th>
          <th class="table-header" scope = "col"> <a href="{{route('dashboard.adduser')}} " type="button" class="btn btn-info">Add</a></th>
        </tr>
      </thead>

      <tbody>
        @foreach ($data as $user)
        <tr class="table-content">
            <th>{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <th class="table-header" scope = "col"> <a href="{{ route('dashboard.userupdate', ['id' => $user->id]) }} "
                type="button" class="btn btn-success">Update</a></th>
            <th class="table-header" scope = "col"> <a href="{{ route('dashboard.userdelete', ['id' => $user->id]) }} "
                  type="button" class="btn btn-danger">Delete</a></th>
        </tr>
        @endforeach
      </tbody>  
    </table>
  </div>
  @stop