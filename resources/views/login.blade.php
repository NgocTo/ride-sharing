@extends('layouts.app')
@section('content')

<h2 class="text-green text-center font-weight-bold">Log in</h2>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone number</label>
    <input type="tel" class="form-control shadow p-3 mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone number">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control shadow p-3 mb-5" id="exampleInputPassword1" placeholder="Enter password">
  </div>
  <!-- <div class="form-group form-check"> -->
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
  

  <button type="submit" class="btn btn-primary btn-block">Log in</button>
  <div class="text-center">
    <p class=" p-3 m-3">OR</p>
  </div>
</form>

<style>

  .btn{
    /* font-weight:600; */
    font-size:20px;
    padding:8px;
  }
/* .or{
    margin:10px;
  } */
  h2{
 margin-top:30px;
  margin-bottom:40px;
  }
  form{
    margin:10px;
    padding:10px;
  }


  </style>
@endsection