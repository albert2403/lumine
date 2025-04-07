@extends('layouts.dashboard')

@section('content')

  <div class="container">
    <div class="row justify-content-center align-items-start">

    {{-- Card: List Events --}}
    <div class="col-md-4 mb-4">
      <div class="card rounded shadow-sm h-100 d-flex flex-column justify-content-between">
      <div class="card-body">
        <div class="mb-3 text-center">
        <span class="badge bg-gradient-primary-to-secondary text-white d-inline-flex align-items-center px-2 py-1">
          <i class="bi bi-calendar-week-fill me-1"></i> List Event
        </span>
        </div>

        {{-- List Event Static --}}
        <div class="table-responsive mb-3">
        <table class="table table-sm table-borderless mb-0">
          <thead class="text-muted">
          <tr>
            <th>Nama Event</th>
            <th class="text-end">Tanggal</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>Resepsi Pernikahan</td>
            <td class="text-end">12 Mei 2025</td>
          </tr>
          <tr>
            <td>Acara Lamaran</td>
            <td class="text-end">01 Mei 2025</td>
          </tr>
          <tr>
            <td>Ulang Tahun</td>
            <td class="text-end">25 April 2025</td>
          </tr>
          </tbody>
        </table>
        </div>
      </div>

      <div class="card-footer bg-white border-0 text-center">
        <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
      </div>
      </div>
    </div>


    {{-- Card: Form Create Event --}}
    <div class="col-md-8 mb-4">
      <div class="card rounded shadow-sm">
      <div class="card-body">
        <div class="p-4">

        {{-- Judul: Create Event --}}
        <div class="mb-3">
          <span
          class="badge bg-gradient-primary-to-secondary text-white d-inline-flex align-items-center px-2 py-1">
          <i class="bi bi-calendar2-plus-fill me-1"></i>
          <span class="fs-5 fw-bold">Create Event</span>
          </span>
        </div>

        {{-- Form --}}
        <form class="user">

          <div class="form-group mb-3">
          <label for="eventName" class="fw-bold">Nama Acara</label>
          <input type="text" class="form-control" id="eventName" placeholder="Contoh: Resepsi Pernikahan">
          </div>

          <div class="form-group mb-3">
          <label for="eventDate" class="fw-bold">Tanggal Acara</label>
          <input type="date" class="form-control" id="eventDate">
          </div>

          <div class="form-group row mb-3">
          <div class="col-sm-6">
            <label for="startTime" class="fw-bold">Waktu Mulai</label>
            <input type="time" class="form-control" id="startTime">
          </div>
          <div class="col-sm-6">
            <label for="endTime" class="fw-bold">Waktu Selesai</label>
            <input type="time" class="form-control" id="endTime">
          </div>
          </div>

          <div class="form-group form-check mb-3">
          <input type="checkbox" class="form-check-input" id="noEndTime">
          <label class="form-check-label fw-bold" for="noEndTime">Tampilkan '- selesai' pada undangan</label>
          </div>

          <div class="form-group mb-3">
          <label for="eventDescription" class="fw-bold">Deskripsi Acara</label>
          <textarea class="form-control" id="eventDescription" rows="3"
            placeholder="Deskripsi singkat tentang acara..."></textarea>
          </div>

          <div class="form-group mb-3">
          <label for="fullAddress" class="fw-bold">Alamat Acara Lengkap</label>
          <input type="text" class="form-control" id="fullAddress" placeholder="Jl. Contoh No.123, Jakarta">
          </div>

          <div class="form-group mb-3">
          <label for="addressDescription" class="fw-bold">Deskripsi Alamat (Patokan, dsb)</label>
          <textarea class="form-control" id="addressDescription" rows="2"
            placeholder="Dekat gedung serbaguna, samping minimarket..."></textarea>
          </div>

          <div class="form-group mb-4">
          <label for="mapLink" class="fw-bold">Alamat Singkat Google Maps</label>
          <input type="text" class="form-control" id="mapLink" placeholder="https://maps.app.goo.gl/xxxxxxx">
          </div>

          <div class="form-group text-center">
          <button type="submit" class="btn btn-primary btn-user btn-block w-75 mx-auto">
            Simpan Event
          </button>
          </div>

        </form>

        </div>
      </div>
      </div>
    </div>

    </div>
  </div>

@endsection