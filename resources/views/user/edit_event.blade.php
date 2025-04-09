@extends('layouts.dashboard')

@section('content')

  <div class="container">
    <div class="row justify-content-center align-items-start">

    {{-- Card: Form Edit Event --}}
    <div class="col-md-8 mb-4">
      <div class="card rounded shadow-sm">
      <div class="card-body">
        <div class="p-4">

        {{-- Judul: Edit Event --}}
        <div class="mb-3">
          <span
          class="badge bg-gradient-primary-to-secondary text-white d-inline-flex align-items-center px-2 py-1">
          <i class="bi bi-pencil-square me-1"></i>
          <span class="fs-5 fw-bold">Edit Event</span>
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