@extends('layouts.dashboard')

@section('content')

<div class="container">
  <div class="row justify-content-center align-items-start">

    {{-- Card: Daftar Semua Event --}}
    <div class="col-md-12 mb-4">
      <div class="card rounded shadow-sm h-100 d-flex flex-column justify-content-between">
        <div class="card-body">
          {{-- Header --}}
          <div class="mb-3 text-center">
            <span class="badge bg-gradient-primary-to-secondary text-white d-inline-flex align-items-center px-2 py-1">
              <i class="bi bi-calendar-range-fill me-1"></i>
              <span class="fs-5 fw-bold">Daftar Event Anda</span>
            </span>
          </div>

          {{-- Tabel Event --}}
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead class="table-light text-muted">
                <tr>
                  <th>#</th>
                  <th>Nama Event</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Alamat</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                {{-- Baris Event Contoh --}}
                <tr>
                  <td>1</td>
                  <td class="fw-semibold text-dark">Resepsi Pernikahan</td>
                  <td>12 Mei 2025</td>
                  <td>10:00 - 13:00</td>
                  <td>Jl. Mawar No. 12, Jakarta</td>
                  <td class="text-center">
                    <button type="button" class="btn btn-sm btn-primary px-3" data-bs-toggle="modal" data-bs-target="#eventDetailModal">
                      <i class="bi bi-eye-fill me-1"></i> Detail
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="fw-semibold text-dark">Acara Lamaran</td>
                  <td>01 Mei 2025</td>
                  <td>14:00 - 16:00</td>
                  <td>Jl. Melati No. 8, Bandung</td>
                  <td class="text-center">
                    <button type="button" class="btn btn-sm btn-primary px-3" data-bs-toggle="modal" data-bs-target="#eventDetailModal">
                      <i class="bi bi-eye-fill me-1"></i> Detail
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        {{-- Footer dengan Tombol Tambah --}}
        <div class="card-footer bg-white border-0 text-center">
          <a href="#" class="btn btn-success w-100">
            <i class="bi bi-calendar-plus me-1"></i> Tambah Event
          </a>
        </div>
      </div>
    </div>

  </div>
</div>

{{-- Modal: Detail Event --}}
<div class="modal fade" id="eventDetailModal" tabindex="-1" aria-labelledby="eventDetailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded shadow-sm border-0">

      {{-- Header sebagai bagian dari "card header" --}}
      <div class="modal-header bg-primary text-white rounded-top">
        <h5 class="modal-title fw-bold" id="eventDetailModalLabel">Detail Event</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      {{-- Body sebagai "card body" --}}
      <div class="modal-body">
        <dl class="row mb-0">
          <dt class="col-sm-4 fw-bold">Nama Event</dt>
          <dd class="col-sm-8">Resepsi Pernikahan</dd>

          <dt class="col-sm-4 fw-bold">Tanggal</dt>
          <dd class="col-sm-8">12 Mei 2025</dd>

          <dt class="col-sm-4 fw-bold">Waktu</dt>
          <dd class="col-sm-8">10:00 - 13:00</dd>

          <dt class="col-sm-4 fw-bold">Alamat Lengkap</dt>
          <dd class="col-sm-8">Jl. Mawar No. 12, Jakarta</dd>

          <dt class="col-sm-4 fw-bold">Deskripsi Alamat</dt>
          <dd class="col-sm-8">Samping gedung serbaguna, dekat taman kota</dd>

          <dt class="col-sm-4 fw-bold">Google Maps</dt>
          <dd class="col-sm-8">
            <a href="https://maps.app.goo.gl/xxxxx" target="_blank">https://maps.app.goo.gl/xxxxx</a>
          </dd>
        </dl>
      </div>

      {{-- Footer seperti card-footer --}}
      <div class="modal-footer bg-white border-top-0 rounded-bottom">
        <a href="{{ route('user.create_event') }}" class="btn btn-primary fw-bold w-100">Edit Event</a>
      </div>

    </div>
  </div>
</div>


@endsection
