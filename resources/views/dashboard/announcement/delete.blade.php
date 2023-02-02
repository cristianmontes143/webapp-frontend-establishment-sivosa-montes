@extends('dashboard.pages.main-dashboard')
@section('content')

@include('dashboard.dashboardpart.navigation')
@include('dashboard.dashboardpart.sidebar')
<div class="card-body">

    <h6 class="card-title">Delete Announcement</h6>
    <form method="POST" action="{{ route('dashboard.delete', ['id' => $announcement->id])}} ">
        
      @csrf

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Header</label>
        <input disabled type="text" value="{{$announcement->header }}" class="form-control">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Sub_header</label>
        <input disabled type="text" value= "{{$announcement->sub_header }}" class="form-control">
      </div>
      <button type="submit" class="btn btn-danger btn-lg">Delete</button>

    </form>


</div>
@stop