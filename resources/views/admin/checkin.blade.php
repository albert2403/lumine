@extends('layouts.dashboard')

@section('content')
<div class="container-fluid px-4">
  <div class="mb-4">
    <h2 class="fw-bold">Scan QR Tamu</h2>
    <p class="text-muted">Arahkan kamera ke QR code undangan untuk mulai proses check-in.</p>
  </div>

  {{-- Kamera scanner (placeholder) --}}
  <div class="card shadow-sm border-0 mb-4">
    <div class="card-body text-center">
      <div class="rounded border bg-dark p-3" style="height: 300px;">
        <p class="text-white-50 mt-5">[ Live Camera View Placeholder ]</p>
        <p class="text-white-50">Fitur ini aktif jika kamera diizinkan browser</p>
      </div>
      <div class="mt-3">
        <button class="btn btn-outline-primary btn-sm"><i class="bi bi-camera-video"></i> Aktifkan Kamera</button>
      </div>
    </div>
  </div>

  {{-- Info QR yang ke-scan (dummy) --}}
  <div class="alert alert-info">
    <strong>QR Terbaca:</strong> <code>guest-09</code> - Budi Santoso
    <button class="btn btn-sm btn-success float-end"><i class="bi bi-arrow-right-circle"></i> Lanjut Check-in</button>
  </div>
</div>
@endsection
