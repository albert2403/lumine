@extends('layouts.dashboard')

@section('content')

  <div class="container">
    <div class="row justify-content-center align-items-start">

    {{-- Card: List Guest --}}
    {{-- Card: Total Guest --}}
    <div class="col-md-4 mb-4">
      <div class="card rounded shadow-sm h-100 d-flex flex-column justify-content-between">
      <div class="card-body text-center">
        <div class="mb-3">
        <span class="badge bg-gradient-primary-to-secondary text-white d-inline-flex align-items-center px-3 py-2">
          <i class="bi bi-people-fill me-2 fs-5"></i>
          <span class="fs-6 fw-semibold">Total Tamu</span>
        </span>
        </div>

        {{-- Total Guest Static --}}
        <h3 class="fw-bold text-primary mb-1">128 Orang</h3>
        <p class="text-muted small mb-0">telah diundang</p>
      </div>

      <div class="card-footer bg-white border-0 text-center">
        <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
      </div>
      </div>
    </div>


    {{-- Card: Form Add Guest --}}
    <div class="col-md-8 mb-4">
      <div class="card rounded shadow-sm">
      <div class="card-body">
        <div class="p-4">

        {{-- Judul --}}
        <div class="mb-3">
          <span
          class="badge bg-gradient-primary-to-secondary text-white d-inline-flex align-items-center px-2 py-1">
          <i class="bi bi-person-plus-fill me-2 fs-5"></i>
          <span class="fs-5 fw-bold">Tambah Tamu</span>
          </span>
        </div>

        {{-- Form --}}
        <form class="user">

          <div class="form-group mb-3">
          <label for="guestName" class="fw-bold">Nama Tamu</label>
          <input type="text" class="form-control" id="guestName"
            placeholder="Contoh: Budi Santoso / Keluarga Hasan">
          </div>

          <div class="form-group mb-3">
          <label for="guestType" class="fw-bold">Tipe Tamu</label>
          <select class="form-select" id="guestType">
            <option selected disabled>Pilih tipe tamu...</option>
            <option value="vip">VIP</option>
            <option value="umum">Umum</option>
            <option value="group">Group / Keluarga</option>
          </select>
          </div>

          <div class="form-group mb-3">
          <label for="totalGuest" class="fw-bold">Jumlah Orang</label>
          <input type="number" class="form-control" id="totalGuest" placeholder="Contoh: 2">
          </div>

          <div class="form-group mb-3">
          <label for="guestNote" class="fw-bold">Catatan Tambahan</label>
          <textarea class="form-control" id="guestNote" rows="3"
            placeholder="Contoh: Anak kecil 2 orang, vegetarian, dsb."></textarea>
          </div>

          <div class="form-group text-center">
          <button type="submit" class="btn btn-primary btn-user btn-block w-75 mx-auto">
            Simpan Tamu
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