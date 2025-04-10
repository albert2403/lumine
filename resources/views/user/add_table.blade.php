@extends('layouts.dashboard')

@section('content')
<div class="container-fluid px-4">
  <div class="row">
    {{-- Form Assign Tamu ke Meja --}}
    <div class="col-md-6 mb-4">
      <div class="card border-0 shadow-sm">
        <div class="card-header bg-white fw-bold d-flex justify-content-between align-items-center">
          Table Management
          <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahMeja">+ Tambah Meja</button>
        </div>
        <div class="card-body">
          <form action="#" method="POST">
            {{-- @csrf --}}
            <div class="mb-3">
              <label class="form-label">Nama Tamu</label>
              <select class="form-select">
                <option value="">Pilih Tamu</option>
                <option value="1">Budi Santoso</option>
                <option value="2">Siti Aminah</option>
                <option value="3">Andi Wijaya</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Meja</label>
              <select class="form-select">
                <option value="">Pilih Meja</option>
                <option value="1">Meja 1</option>
                <option value="2">Meja 2</option>
                <option value="3">Meja 3</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Jumlah Tamu</label>
              <input type="text" class="form-control" value="4 Orang" readonly>
            </div>

            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-success">Simpan Tamu</button>
              <a href="#" class="btn btn-outline-secondary">Lihat Meja</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    {{-- Daftar Meja --}}
    <div class="col-md-6 mb-4">
      <div class="card border-0 shadow-sm">
        <div class="card-header bg-white fw-bold">Daftar Meja</div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <div>
                <strong>Meja A1</strong><br>
                <small class="text-muted">4 Tamu</small>
              </div>
              <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetailMeja">Detail</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <div>
                <strong>Meja B2</strong><br>
                <small class="text-muted">6 Tamu</small>
              </div>
              <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetailMeja">Detail</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <div>
                <strong>Meja VIP</strong><br>
                <small class="text-muted">2 Tamu</small>
              </div>
              <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetailMeja">Detail</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Detail Meja -->
<div class="modal fade" id="modalDetailMeja" tabindex="-1" aria-labelledby="modalDetailMejaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content border-0 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalDetailMejaLabel">Detail Meja A1</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <strong>Nama Meja:</strong> Meja A1
        </div>
        <div class="mb-3">
          <strong>Jumlah Kursi:</strong> 8
        </div>
        <div class="mb-3">
          <strong>Daftar Tamu:</strong>
          <ul class="list-group mt-2">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span>Budi Santoso</span>
              <div>
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Hapus</button>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span>Siti Aminah</span>
              <div>
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Hapus</button>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span>Andi Wijaya</span>
              <div>
                <button class="btn btn-sm btn-warning me-1">Edit</button>
                <button class="btn btn-sm btn-danger">Hapus</button>
              </div>
            </li>
          </ul>
        </div>

        <div class="text-end">
          <button class="btn btn-sm btn-success">+ Tambah Tamu</button>
        </div>
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah Meja -->
<div class="modal fade" id="modalTambahMeja" tabindex="-1" aria-labelledby="modalTambahMejaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-0 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahMejaLabel">Tambah Meja Baru</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST">
          {{-- @csrf --}}
          <div class="mb-3">
            <label class="form-label">Nama Meja</label>
            <input type="text" name="desk_name" class="form-control" placeholder="Contoh: Meja 1">
          </div>
          <div class="mb-3">
            <label class="form-label">Jumlah Kursi</label>
            <input type="number" name="seat_count" class="form-control" placeholder="Contoh: 8">
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-success">Simpan Meja</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
