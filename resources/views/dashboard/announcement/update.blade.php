@extends('dashboard.pages.main-dashboard')
@section('content')

@include('dashboard.dashboardpart.navigation')
@include('dashboard.dashboardpart.sidebar')
<div class="card-body">

    <h6 class="card-title">Update Announcement</h6>
    <form method="POST" action="{{ route('dashboard.update', ['id' => $announcement->id])}} ">
        
      @csrf

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Header</label>
        <input type="text" value="{{$announcement->header }}" class="form-control"
           id="exampleFormControlInput1" placeholder="header" name ="header" required>
        <div class="invalid-feedback">Please, fil up the header!</div>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Sub_header</label>
        <input type="text" value= "{{$announcement->sub_header }}" class="form-control" 
          id="exampleFormControlInput1" placeholder="Sub_Header" name ="sub_header" required>
        <div class="invalid-feedback">Please, fill up sub_header!</div>
      </div>
      <div class="mb-3">
        <label for="formFile"  class="form-label">Image</label>
        <input value= "{{$announcement->image }}" class="form-control"  type="file" 
          id="formFile" name ="image"  required>
      </div>
      <div class="form-floating">
        <textarea value= "{{$announcement->description }}" class="form-control"  placeholder="Leave a comment here" 
            id="floatingTextarea2" name ="description" style="height: 100px " required></textarea>
        <label for="floatingTextarea2">Description</label>
      </div>
      <div>___________</div>
      <button type="submit" class="btn btn-info btn-lg" style="float:right;" >Update </button>

    </form>


</div>
@stop