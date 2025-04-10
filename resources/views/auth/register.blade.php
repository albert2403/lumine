@extends('layouts.app')

@section('content')
<div class="bg-gradient-primary-to-secondary min-vh-100 d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden my-5">
          <div class="row g-0">
            <!-- Gambar Kiri -->
            <div class="col-lg-5 d-none d-lg-block bg-light">
              <img src="{{ asset('template/dashboard/img/undraw_rocket.svg') }}" 
                   alt="Register Image" 
                   class="img-fluid h-100 w-100 object-fit-cover">
            </div>

            <!-- Form Register -->
            <div class="col-lg-7 bg-white">
              <div class="p-5">
                <div class="text-center mb-4">
                  <h1 class="h4 text-gray-900 fw-bold">Create an Account!</h1>
                  <p class="text-muted small">Isi data kamu untuk mulai menggunakan layanan kami</p>
                </div>

                <form class="user">
                  <!-- Nama & Nomor HP -->
                  <div class="row mb-3">
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                    </div>
                    <div class="col-sm-6 mt-3 mt-sm-0">
                      <input type="number" class="form-control form-control-user" id="examplePhone" placeholder="Phone Number">
                    </div>
                  </div>

                  <!-- Email -->
                  <div class="mb-3">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                  </div>

                  <!-- Password -->
                  <div class="mb-4">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>

                  <!-- Tombol -->
                  <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary btn-user btn-block w-75 mx-auto">
                      Register Account
                    </button>
                  </div>
                </form>

                <hr class="my-4">

                <div class="text-center">
                  <a class="small" href="login.html">Already have an account? Login!</a>
                </div>
              </div>
            </div>
          </div> <!-- /row -->
        </div> <!-- /card -->
      </div>
    </div>
  </div>
</div>
@endsection
