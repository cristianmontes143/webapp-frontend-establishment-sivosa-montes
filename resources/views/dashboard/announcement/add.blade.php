@extends('dashboard.pages.main-dashboard')
@section('content')

@include('dashboard.dashboardpart.navigation')
@include('dashboard.dashboardpart.sidebar')
<div class="card-body">
    <h6 class="card-title">Add Announcement</h6>
    <form method="POST" action="{{route('dashboard.announcementadd')}} ">
      @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Header</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="header" name ="header" required>
        <div class="invalid-feedback">Please, fil up the header!</div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Sub_header</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Sub_Header" name ="sub_header" required>
        <div class="invalid-feedback">Please, fill up sub_header!</div>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control" type="file" id="formFile" name ="image">
      </div>
      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name ="description" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Description</label>
      </div>
      <button type="submit" class="btn btn-info">Add </button>

    </form>


</div>
@stop