@extends('layouts.app')

@section('content')
<div class="bg-gradient-primary-to-secondary min-vh-100 d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
          <div class="row g-0">
            <!-- Gambar Kiri -->
            <div class="col-lg-6 d-none d-lg-block bg-light">
              <img src="{{ asset('template/dashboard/img/undraw_posting_photo.svg') }}" 
                   alt="Login Image" 
                   class="img-fluid h-100 w-100 object-fit-cover">
            </div>

            <!-- Form Login -->
            <div class="col-lg-6 bg-white">
              <div class="p-5">
                <div class="text-center mb-4">
                  <h1 class="h4 text-gray-900 fw-bold">Welcome Back!</h1>
                  <p class="text-muted small">Masuk untuk melanjutkan ke dashboard</p>
                </div>

                <form class="user">
                  <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                           placeholder="Masukkan email kamu...">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                           placeholder="Masukkan password...">
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="customCheck">
                    <label class="form-check-label small text-muted" for="customCheck">Ingat saya</label>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block w-100">
                    Login
                  </button>
                </form>

                <hr class="my-4">
                <div class="text-center">
                  <a class="small" href="forgot-password.html">Lupa Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="register.html">Buat Akun Baru!</a>
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
