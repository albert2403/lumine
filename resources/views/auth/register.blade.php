@extends('layouts.app')

@section('content')
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-5 d-none d-lg-block bg-register-image">
        <img src="{{ asset('template/dashboard/img/undraw_rocket.svg') }}" alt="">
      </div>
      <div class="col-lg-7">
      <div class="p-5">
        <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
        </div>
        <form class="user">
        <div class="form-group row">
          <div class="col-sm-6 mb-3 mb-sm-0">
          <input type="text" class="form-control form-control-user" id="exampleFirstName"
            placeholder="First Name">
          </div>
          <div class="col-sm-6">
          <input type="number" class="form-control form-control-user" id="exampleInputEmail"
            placeholder="Phone Number">
          </div>
        </div>

        <!-- Email -->
        <div class="form-group row justify-content-center">
          <div class="col-sm-12 mb-3 mb-sm-0">
          <input type="email" class="form-control form-control-user" id="exampleInputEmail"
            placeholder="Email Address">
          </div>
        </div>

        <!-- Password -->
        <div class="form-group row justify-content-center">
          <div class="col-sm-12 mb-3 mb-sm-0">
          <input type="password" class="form-control form-control-user" id="exampleInputPassword"
            placeholder="Password">
          </div>
        </div>

        <!-- Button Submit -->
        <div class="form-group row justify-content-center">
          <div class="col-sm-8 mb-3 mb-sm-0">
          <a type="submit" class="btn btn-primary btn-user btn-block">
            Register Account
          </a>
          </div>
        </div>

        </form>
        <hr>
        <div class="text-center">
        <a class="small" href="login.html">Already have an account? Login!</a>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
@endsection