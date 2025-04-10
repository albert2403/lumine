@extends('layouts.dashboard')

@php
  $guestNames = [
    'Budi Santoso', 'Rina Wijaya', 'Andi Kurniawan', 'Siti Nurhaliza',
    'Agus Salim', 'Tina Amelia', 'Dedi Mulyadi', 'Ayu Lestari',
    'Rizky Febian', 'Nina Anjani'
  ];

  $searchQuery = request('search');
  $filteredGuests = array_filter($guestNames, function($name) use ($searchQuery) {
    return !$searchQuery || stripos($name, $searchQuery) !== false;
  });
  $filteredGuests = array_values($filteredGuests);
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

  {{-- Search --}}
  <div class="row mb-3">
    <div class="col-md-6">
      <form method="GET" action="">
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Cari nama tamu..." value="{{ request('search') }}">
          <button class="btn btn-outline-primary" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>

  {{-- Table --}}
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
        @forelse($filteredGuests as $i => $name)
        <tr>
          <td><input type="checkbox" name="guest[]" value="{{ $i }}"></td>
          <td>{{ $name }}</td>
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

        {{-- Modal Edit --}}
        <div class="modal fade" id="editModal{{ $i }}" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
              <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title fw-semibold">Edit Tamu - {{ $name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Tamu</label>
                    <input type="text" class="form-control" value="{{ $name }}">
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-semibold">Nomor WhatsApp</label>
                    <input type="text" class="form-control" value="+628123456789{{ $i }}">
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-semibold">Jumlah Tamu</label>
                    <input type="number" class="form-control" value="4">
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-semibold">Event</label>
                    <select class="form-select">
                      <option selected>Pernikahan A & B</option>
                      <option>Pernikahan C & D</option>
                      <option>Reuni Akbar 2025</option>
                      <option>Gathering Kantor</option>
                    </select>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-warning btn-sm text-dark">Simpan</button>
              </div>
            </div>
          </div>
        </div>

        {{-- Modal Share --}}
        <div class="modal fade" id="shareModal{{ $i }}" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
              <div class="modal-header bg-info text-white">
                <h5 class="modal-title fw-semibold">Bagikan Undangan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <label class="form-label fw-semibold">Link Undangan</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="guestLink{{ $i }}" value="https://acara.com/invite/{{ $i }}" readonly>
                  <button class="btn btn-outline-primary" type="button" onclick="copyToClipboard('guestLink{{ $i }}')">
                    <i class="bi bi-clipboard"></i>
                  </button>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>

        {{-- Modal QR --}}
        <div class="modal fade" id="qrModal{{ $i }}" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header bg-secondary text-white">
                <h5 class="modal-title">QR Code Tamu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body text-center">
                <div class="mb-3">
                  <strong>{{ $name }}</strong><br>
                  <small>Pernikahan A & B</small>
                </div>
                <div class="p-3 border rounded bg-light d-inline-block">
                  <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ urlencode('guest-'.$i) }}" alt="QR Code">
                </div>
                <div class="mt-3">
                  <button class="btn btn-outline-primary btn-sm" onclick="copyToClipboard('qrLink{{ $i }}')">
                    <i class="bi bi-clipboard"></i> Salin Link
                  </button>
                  <input type="text" id="qrLink{{ $i }}" class="form-control form-control-sm mt-2 text-center" value="{{ url('checkin/pernikahan-a-b/'.Str::slug($name)) }}" readonly>
                </div>
              </div>
            </div>
          </div>
        </div>

        @empty
        <tr>
          <td colspan="10">Tamu tidak ditemukan.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  {{-- Dummy Pagination --}}
  <nav class="mt-3">
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

@push('scripts')
<script>
  function copyToClipboard(id) {
    const copyText = document.getElementById(id);
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
  }
</script>
@endpush
