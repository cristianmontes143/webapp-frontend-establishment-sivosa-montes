@extends('dashboard.pages.main-dashboard')
@section('content')

@include('dashboard.dashboardpart.navigation')
@include('dashboard.dashboardpart.sidebar')
<div class="card-body">

    <h6 class="card-title">Delete User</h6>
    <form method="POST" action="{{ route('dashboard.deleteuser', ['id' => $user->id])}} ">
      @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input disabled type="text" value="{{$user->name }}" class="form-control" id="exampleFormControlInput1" placeholder="name" name ="name" required>
        <div class="invalid-feedback">Please, fil up the name!</div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">email</label>
        <input disabled type="text" value="{{$user->email }}" class="form-control" id="email" type="email" placeholder="email" name ="email" required>
        <div class="invalid-feedback">Please, fill up email!</div>
      </div>
      <button type="submit" class="btn btn-info">Delete </button>

    </form>


</div>
@stop