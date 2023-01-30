@extends('dashboard.pages.main-dashboard')
@section('content')

@include('dashboard.dashboardpart.navigation')
@include('dashboard.dashboardpart.sidebar')
<div class="card-body">
    <h6 class="card-title">Announcement</h6>
    <table class="table">
      <thead>
        <tr>
          <th class="table-header" scope="col">Id</th>
          <th class="table-header" scope="col">Header</th>
          <th class="table-header" scope="col">Sub Header</th>
          <th class="table-header" scope="col">image</th>
          <th class="table-header" scope="col">description</th>
          <th class="table-header" scope="col">user id</th>
          <th class="table-header" scope="col">actions</th>
          <th class="table-header" scope = "col"> <a href="{{route('dashboard.addannouncement')}} " type="button" class="btn btn-info">Add</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $announcement)
        <tr class="table-content">
            <th>{{ $announcement->id }}</th>
            <td>{{ $announcement->header }}</td>
            <td>{{ $announcement->sub_header }}</td>
            <td> 
              <img src="{{asset ('images/'.$announcement->image) }}" width="70px" height="70px" alt="image">
            </td>
            <td>{{ $announcement->description }}</td>
            <td>{{ $announcement->user_id }}</td>
            <th class="table-header" scope = "col"> <a href="{{ route('dashboard.announcementupdate', ['id' => $announcement->id]) }} "
                 type="button" class="btn btn-success">Update</a></th>
            <th class="table-header" scope = "col"> <a href="{{ route('dashboard.announcementdelete', ['id' => $announcement->id]) }} "
                  type="button" class="btn btn-danger">Delete</a></th>

        </tr>
            
        @endforeach
      </tbody>
    </table>

</div>
@stop