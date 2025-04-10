@extends('layouts.dashboard')

@section('content')
<div class="container-fluid px-4">
  <div class="mb-4">
    <h3 class="fw-bold">Laporan Tamu</h3>
    <p class="text-muted">Detail rekap kehadiran dan statistik tamu undangan</p>
  </div>

  {{-- Summary Cards --}}
  <div class="row mb-4">
    <div class="col-md-3">
      <div class="card border-start-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="text-xs fw-bold text-primary text-uppercase mb-1">Total Tamu</div>
          <div class="h5 mb-0 fw-bold text-gray-800">250</div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-start-success shadow h-100 py-2">
        <div class="card-body">
          <div class="text-xs fw-bold text-success text-uppercase mb-1">Hadir</div>
          <div class="h5 mb-0 fw-bold text-gray-800">220</div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-start-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="text-xs fw-bold text-danger text-uppercase mb-1">Tidak Hadir</div>
          <div class="h5 mb-0 fw-bold text-gray-800">30</div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-start-info shadow h-100 py-2">
        <div class="card-body">
          <div class="text-xs fw-bold text-info text-uppercase mb-1">Persentase Kehadiran</div>
          <div class="h5 mb-0 fw-bold text-gray-800">88%</div>
        </div>
      </div>
    </div>
  </div>

  {{-- Tabel Detail --}}
  <div class="card shadow mb-4">
    <div class="card-header bg-primary text-white">
      <h6 class="m-0 fw-bold">Detail Kehadiran Tamu</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered align-middle text-center">
          <thead class="table-light">
            <tr>
              <th>Nama</th>
              <th>WhatsApp</th>
              <th>Jumlah Tamu</th>
              <th>Check-in</th>
              <th>Waktu Check-in</th>
              <th>Souvenir</th>
            </tr>
          </thead>
          <tbody>
            {{-- Dummy data sementara --}}
            <tr>
              <td>Budi Santoso</td>
              <td>+6281234567890</td>
              <td>4</td>
              <td><span class="badge bg-success">Hadir</span></td>
              <td>10:15 WIB</td>
              <td><span class="badge bg-primary">Sudah</span></td>
            </tr>
            <tr>
              <td>Rina Wijaya</td>
              <td>+6281234567891</td>
              <td>2</td>
              <td><span class="badge bg-danger">Tidak Hadir</span></td>
              <td>-</td>
              <td><span class="badge bg-secondary">-</span></td>
            </tr>
            {{-- ... tambahkan sesuai data --}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
