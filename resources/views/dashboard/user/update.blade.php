@extends('dashboard.pages.main-dashboard')
@section('content')

@include('dashboard.dashboardpart.navigation')
@include('dashboard.dashboardpart.sidebar')
<div class="card-body">

    <h6 class="card-title">Update User</h6>
    <form method="POST" action="{{ route('dashboard.updateuser', ['id' => $user->id])}} ">
      @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" value="{{$user->name }}" class="form-control" id="exampleFormControlInput1" placeholder="name" name ="name" required>
        <div class="invalid-feedback">Please, fil up the name!</div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">email</label>
        <input type="text" value="{{$user->email }}" class="form-control" id="email" type="email" placeholder="email" name ="email" required>
        <div class="invalid-feedback">Please, fill up email!</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="text"  class="form-control" id="exampleInputPassword1" name ="password" required autocomplete="new-password">
      </div>
      <button type="submit" class="btn btn-info">Update </button>

    </form>


</div>
@stop