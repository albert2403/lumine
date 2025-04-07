@extends('layouts.dashboard')

@section('content')

<div class="container">
  <div class="row text-center justify-content-center">

    <!-- Card: Remaining Days -->
    <div class="col-sm-4 mb-4">
      <div class="card h-100 rounded shadow-sm">
        <div class="card-body d-flex flex-column justify-content-between align-items-center">
          <div>
            <span class="badge bg-gradient-primary-to-secondary text-white d-inline-flex align-items-center px-2 py-1">
              <i class="bi bi-clock-fill me-1"></i> Remaining Days
            </span>
          </div>
          <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center w-100">
            <h2 class="fw-bold text-primary mb-1">01 : 12 : 32 : 05</h2>
            <small class="text-muted" style="font-size: 0.95rem;">Hari : Jam : Menit : Detik</small>
          </div>
          <a href="#" class="btn btn-primary w-100 mt-3">Lihat Event</a>
        </div>
      </div>
    </div>

    <!-- Card: Invitation -->
    <div class="col-sm-4 mb-4">
      <div class="card h-100 rounded shadow-sm">
        <div class="card-body d-flex flex-column justify-content-between align-items-center">
          <div class="text-center w-100 flex-grow-1 d-flex flex-column align-items-center">
            <div class="mb-3">
              <span class="badge bg-gradient-primary-to-secondary text-white d-inline-flex align-items-center px-2 py-1">
                <i class="bi bi-envelope-paper-fill me-1"></i> Invitation
              </span>
            </div>
            <h1 class="fw-bold text-dark mb-1">1</h1>
            <i class="bi bi-person-check-fill text-primary mb-1" style="font-size: 1.75rem;"></i>
            <p class="card-text mb-0 text-muted">Terakhir diubah:</p>
            <p class="card-text text-muted mb-3">11/11/25</p>
          </div>
          <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
        </div>
      </div>
    </div>

    <!-- Card: PIC -->
    <div class="col-sm-4 mb-4">
      <div class="card h-100 rounded shadow-sm">
        <div class="card-body d-flex flex-column justify-content-between">
          <div class="text-center">
            <h2 class="card-title badge bg-gradient-primary-to-secondary text-white text-wrap">
              <i class="bi bi-person-circle me-1"></i> Personal In Charge &middot; PIC
            </h2>
            <h1 class="card-text fw-bold text-dark text-wrap">2</h1>
            <i class="bi bi-people-fill display-5 text-primary mb-2"></i>
            <p class="card-text">Orang</p>
          </div>
          <a href="#" class="btn btn-primary mt-3">Lihat Detail</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Baris bawah: Detail Paket, Status Pembayaran, Tema Undangan -->
<div class="row text-center justify-content-center">

<!-- Card: Detail Paket -->
<div class="col-sm-4 mb-4">
  <div class="card h-100 rounded shadow-sm">
    <div class="card-body d-flex flex-column justify-content-between align-items-center">
      <div class="mb-3">
        <span class="badge bg-gradient-primary-to-secondary text-white d-inline-flex align-items-center px-2 py-1">
          <i class="bi bi-card-list me-1"></i> Detail Paket
        </span>
      </div>
      <h4 class="fw-bold text-dark mb-3">Paket Premium</h4>
      <a href="#" class="btn btn-primary w-100">Lihat Detail Paket</a>
    </div>
  </div>
</div>

<!-- Card: Status Pembayaran -->
<div class="col-sm-4 mb-4">
  <div class="card h-100 rounded shadow-sm">
    <div class="card-body d-flex flex-column justify-content-between align-items-center">
      <div class="mb-3">
        <span class="badge bg-gradient-primary-to-secondary text-white d-inline-flex align-items-center px-2 py-1">
          <i class="bi bi-cash-stack me-1"></i> Status Pembayaran
        </span>
      </div>
      <h4 class="fw-bold text-dark mb-3">Belum Dibayar</h4>
      <a href="#" class="btn btn-primary w-100">Bayar Sekarang</a>
    </div>
  </div>
</div>

<!-- Card: Tema Undangan -->
<div class="col-sm-4 mb-4">
  <div class="card h-100 rounded shadow-sm">
    <div class="card-body d-flex flex-column justify-content-between align-items-center">
      <div class="mb-3">
        <span class="badge bg-gradient-primary-to-secondary text-white d-inline-flex align-items-center px-2 py-1">
          <i class="bi bi-palette-fill me-1"></i> Tema Undangan
        </span>
      </div>
      <h4 class="fw-bold text-dark mb-3">Elegant Pastel</h4>
      <a href="#" class="btn btn-primary w-100">Ganti Tema</a>
    </div>
  </div>
</div>

</div>

</div>

@endsection
