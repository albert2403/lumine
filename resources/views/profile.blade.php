@extends('layouts.dashboard')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-10 col-lg-8">
      <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

        <!-- Gradient Header -->
        <div class="bg-gradient-primary-to-secondary text-white text-center py-4 px-3">
          <h3 class="fw-bold mb-1">Profil Pengguna</h3>
          <p class="mb-0 small">Informasi akun kamu</p>
        </div>

        <!-- Card Body -->
        <div class="p-4">
          <div class="row gy-3">

            <div class="col-12">
              <div class="bg-light rounded px-3 py-2 d-flex justify-content-between align-items-center">
                <span class="text-muted">Nama Lengkap</span>
                <span class="fw-semibold text-dark">John Doe</span>
              </div>
            </div>

            <div class="col-12">
              <div class="bg-light rounded px-3 py-2 d-flex justify-content-between align-items-center">
                <span class="text-muted">Email</span>
                <span class="fw-semibold text-dark">johndoe@email.com</span>
              </div>
            </div>

            <div class="col-12">
              <div class="bg-light rounded px-3 py-2 d-flex justify-content-between align-items-center">
                <span class="text-muted">Nomor HP</span>
                <span class="fw-semibold text-dark">+62 812-3456-7890</span>
              </div>
            </div>

          </div>

          <div class="text-center mt-4">
            <a href="#" class="btn btn-gradient-primary-to-secondary px-4 py-2 rounded-pill shadow-sm">
              <i class="bi bi-pencil-square me-2"></i> Edit Profil
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
