@extends('dashboard.pages.main-dashboard')
@section('content')

@include('dashboard.dashboardpart.navigation')
@include('dashboard.dashboardpart.sidebar')
<div class="card-body">
    <h6 class="card-title">Announcement</h6>
    <table class="table table-warning table-striped ">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Header</th>
          <th scope="col">Sub Header</th>
          <th scope="col">image</th>
          <th scope="col">description</th>
          <th scope="col">user_id</th>
          <th scope="col">actions</th>
          <th scope = "col"> <a href="{{route('dashboard.addannouncement')}} " type="button" class="btn btn-info">Add</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $announcement)
        <tr>
            <th>{{ $announcement->id }}</th>
            <td>{{ $announcement->header }}</td>
            <td>{{ $announcement->sub_header }}</td>
            <td> 
              <img src="{{asset ($announcement->image) }}" width="70px" height="70px" alt="image">
            </td>
            <td>{{ $announcement->description }}</td>
            <td>{{ $announcement->user_id }}</td>
            <th scope = "col"> <a href="{{ route('dashboard.announcementupdate', ['id' => $announcement->id]) }} "
                 type="button" class="btn btn-success">Update</a></th>
            <th scope = "col"> <a href="{{ route('dashboard.announcementdelete', ['id' => $announcement->id]) }} "
                  type="button" class="btn btn-danger">Delete</a></th>

        </tr>
            
        @endforeach
        {{-- <tr>
          <th scope="row"><a href="#">#2457</a></th>
          <td>Brandon Jacob</td>
          <td><a href="#" class="text-primary">At praesentium minu</a></td>
          <td>$64</td>
          <td><span class="badge bg-success">Approved</span></td>
          <td><button type="button" class="btn btn-success">Update</button> <button type="button" class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
          <th scope="row"><a href="#">#2147</a></th>
          <td>Bridie Kessler</td>
          <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
          <td>$47</td>
          <td><span class="badge bg-warning">Pending</span></td>
          <td><button type="button" class="btn btn-success">Update</button> <button type="button" class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
          <th scope="row"><a href="#">#2049</a></th>
          <td>Ashleigh Langosh</td>
          <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
          <td>$147</td>
          <td><span class="badge bg-success">Approved</span></td>
          <td><button type="button" class="btn btn-success">Update</button> <button type="button" class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
          <th scope="row"><a href="#">#2644</a></th>
          <td>Angus Grady</td>
          <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
          <td>$67</td>
          <td><span class="badge bg-danger">Rejected</span></td>
          <td><button type="button" class="btn btn-success">Update</button> <button type="button" class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
          <th scope="row"><a href="#">#2644</a></th>
          <td>Raheem Lehner</td>
          <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
          <td>$165</td>
          <td><span class="badge bg-success">Approved</span></td>
          <td><button type="button" class="btn btn-success">Update</button> <button type="button" class="btn btn-danger">Delete</button></td>
        </tr> --}}
      </tbody>
    </table>

</div>
@stop