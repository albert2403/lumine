@extends('layouts.dashboard')

@php
  $guestNames = [
    'Budi Santoso', 'Rina Wijaya', 'Andi Kurniawan', 'Siti Nurhaliza',
    'Agus Salim', 'Tina Amelia', 'Dedi Mulyadi', 'Ayu Lestari',
    'Rizky Febian', 'Nina Anjani'
  ];
@endphp

@section('content')
<div class="container-fluid px-4">
  <div class="mb-3 d-flex justify-content-between align-items-center">
    <span class="badge bg-gradient-primary-to-secondary text-white d-inline-flex align-items-center px-3 py-2">
      <i class="bi bi-card-list me-2 fs-5"></i>
      <span class="fs-5 fw-bold">Daftar Tamu</span>
    </span>

    <div>
      <button class="btn btn-outline-danger btn-sm me-2">
        <i class="bi bi-trash-fill me-1"></i> Hapus Terpilih
      </button>
      <button class="btn btn-outline-success btn-sm">
        <i class="bi bi-file-earmark-excel me-1"></i> Download Report
      </button>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle text-center">
      <thead class="table-primary">
        <tr>
          <th><input type="checkbox" id="checkAll"></th>
          <th>Nama</th>
          <th>Tipe Tamu</th>
          <th>Tipe Undangan</th>
          <th>Sapaan</th>
          <th>WhatsApp</th>
          <th>Event</th>
          <th>Jumlah Tamu</th>
          <th>QR</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @for($i = 0; $i < count($guestNames); $i++)
        <tr>
          <td><input type="checkbox" name="guest[]" value="{{ $i }}"></td>
          <td>{{ $guestNames[$i] }}</td>
          <td><span class="badge bg-info text-dark">VIP</span></td>
          <td>Group</td>
          <td>Keluarga</td>
          <td>+628123456789{{ $i }}</td>
          <td>Pernikahan A & B</td>
          <td>4</td>
          <td>
            <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#qrModal{{ $i }}">
              <i class="bi bi-qr-code-scan"></i>
            </button>
          </td>
          <td>
            <div class="d-flex justify-content-center gap-1 flex-wrap">
              <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $i }}">
                <i class="bi bi-pencil-square"></i>
              </button>
              <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $i }}">
                <i class="bi bi-trash"></i>
              </button>
              <button class="btn btn-sm btn-info text-white" data-bs-toggle="modal" data-bs-target="#shareModal{{ $i }}">
                <i class="bi bi-share-fill"></i>
              </button>
            </div>
          </td>
        </tr>

        {{-- Modal edit --}}
        {{-- @include('guest.partials.modal_edit', ['id' => $i]) --}}

        {{-- Modal delete --}}
        {{-- @include('guest.partials.modal_delete', ['id' => $i]) --}}

        {{-- Modal share --}}
        {{-- @include('guest.partials.modal_share', ['id' => $i]) --}}

        {{-- Modal QR --}}
        {{-- @include('guest.partials.modal_qr', ['id' => $i]) --}}
        @endfor
      </tbody>
    </table>
  </div>

  {{-- Pagination Dummy --}}
  <nav aria-label="Page navigation" class="mt-3">
    <ul class="pagination justify-content-end">
      <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
      @for($page = 1; $page <= 3; $page++)
      <li class="page-item {{ $page === 1 ? 'active' : '' }}"><a class="page-link" href="#">{{ $page }}</a></li>
      @endfor
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>
</div>
@endsection
