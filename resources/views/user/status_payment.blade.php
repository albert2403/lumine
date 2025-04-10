@extends('layouts.dashboard')

@section('content')
<div class="container py-5">
  <h2 class="fw-bold mb-4 text-center">Status Pembayaran</h2>

  <div class="card shadow-sm border-0 rounded-4 mx-auto p-4" style="max-width: 720px;">
    <div class="text-center mb-4">
      <div class="mb-2">
        <i class="bi bi-credit-card fs-1 text-primary"></i>
      </div>
      <h5 class="fw-semibold mb-1">Pembayaran Terakhir</h5>
      <small class="text-muted">Cek rincian status pembayaran kamu di bawah ini</small>
    </div>

    <div class="row g-4 text-start">
      <div class="col-sm-6">
        <small class="text-muted">Status Pembayaran</small>
        <div class="d-flex align-items-center mt-1">
          <span class="me-2">10 April 2025</span>
          <span class="badge bg-success">Lunas</span>
        </div>
      </div>

      <div class="col-sm-6">
        <small class="text-muted">Nomor Invoice</small>
        <div class="fw-semibold mt-1">INV-20250410-001</div>
      </div>

      <div class="col-sm-6">
        <small class="text-muted">Metode Pembayaran</small>
        <div class="fw-semibold mt-1">Transfer Bank (BCA)</div>
      </div>

      <div class="col-sm-6">
        <small class="text-muted">Total Pembayaran</small>
        <div class="fw-bold text-success mt-1">Rp2.500.000</div>
      </div>
    </div>

    <div class="d-flex justify-content-end mt-4">
      <button class="btn btn-outline-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#riwayatPembayaranModal">
        <i class="bi bi-clock-history me-1"></i> Riwayat Pembayaran
      </button>
    </div>
  </div>
</div>

<!-- Modal Riwayat Pembayaran -->
<div class="modal fade" id="riwayatPembayaranModal" tabindex="-1" aria-labelledby="riwayatPembayaranModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-sm">
      <div class="modal-header">
        <h5 class="modal-title fw-semibold" id="riwayatPembayaranModalLabel">Riwayat Pembayaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-bordered align-middle">
            <thead class="table-light">
              <tr>
                <th>Tanggal</th>
                <th>Invoice</th>
                <th>Metode</th>
                <th>Total</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>10 April 2025</td>
                <td>INV-20250410-001</td>
                <td>Transfer Bank (BCA)</td>
                <td>Rp2.500.000</td>
                <td><span class="badge bg-success">Lunas</span></td>
              </tr>
              <tr>
                <td>15 Maret 2025</td>
                <td>INV-20250315-001</td>
                <td>QRIS</td>
                <td>Rp2.000.000</td>
                <td><span class="badge bg-success">Lunas</span></td>
              </tr>
              <tr>
                <td>20 Februari 2025</td>
                <td>INV-20250220-001</td>
                <td>Transfer Bank (BNI)</td>
                <td>Rp1.750.000</td>
                <td><span class="badge bg-danger">Gagal</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


