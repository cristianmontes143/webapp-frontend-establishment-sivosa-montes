@extends('dashboard.pages.main-dashboard')
@section('content')

@include('dashboard.dashboardpart.navigation')
@include('dashboard.dashboardpart.sidebar')

<div>
  <table class="table table-warning table-striped ">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
          <th scope = "col"> <a href="{{route('dashboard.adduser')}} " type="button" class="btn btn-info">Add</a></th>
        </tr>
      </thead>

      <tbody>
        @foreach ($data as $user)
        <tr>
            <th>{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <th scope = "col"> <a href="{{ route('dashboard.userupdate', ['id' => $user->id]) }} "
                type="button" class="btn btn-success">Update</a></th>
            <th scope = "col"> <a href="{{ route('dashboard.userdelete', ['id' => $user->id]) }} "
                  type="button" class="btn btn-danger">Delete</a></th>

        </tr>
            
        @endforeach
      </tbody>
   
    </table>


  </div>

  @stop