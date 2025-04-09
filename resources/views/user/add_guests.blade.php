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
                            <span
                                class="badge bg-gradient-primary-to-secondary text-white d-inline-flex align-items-center px-3 py-2">
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

                                {{-- Tipe Tamu --}}
                                <div class="form-group mb-3">
                                    <label for="guestCategory" class="fw-bold">Tipe Tamu</label>
                                    <select class="form-select" id="guestCategory">
                                        <option selected disabled>Pilih tipe tamu...</option>
                                        <option value="regular">Regular</option>
                                        <option value="vip">VIP</option>
                                    </select>
                                </div>

                                {{-- Tipe (Personal / Group) --}}
                                <div class="form-group mb-3">
                                    <label for="guestType" class="fw-bold">Tipe</label>
                                    <select class="form-select" id="guestType">
                                        <option selected disabled>Pilih tipe...</option>
                                        <option value="personal">Personal</option>
                                        <option value="group">Group / Keluarga</option>
                                    </select>
                                </div>

                                {{-- Sapaan --}}
                                <div class="form-group mb-3">
                                    <label for="guestSalutation" class="fw-bold">Sapaan</label>
                                    <select class="form-select" id="guestSalutation">
                                        <option selected disabled>Pilih sapaan...</option>
                                        <option value="Bapak">Bapak</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Saudara">Saudara</option>
                                        <option value="Saudari">Saudari</option>
                                    </select>
                                </div>

                                {{-- Nama --}}
                                <div class="form-group mb-3">
                                    <label for="guestName" class="fw-bold">Nama</label>
                                    <input type="text" class="form-control" id="guestName"
                                        placeholder="Contoh: Budi Santoso / Keluarga Hasan">
                                </div>

                                {{-- WhatsApp --}}
                                <div class="form-group mb-3">
                                    <label for="guestWhatsapp" class="fw-bold">Nomor WhatsApp</label>
                                    <input type="text" class="form-control" id="guestWhatsapp"
                                        placeholder="Contoh: 081234567890">
                                </div>

                                {{-- Acara --}}
                                <div class="form-group mb-3">
                                    <label for="eventSelect" class="fw-bold">Diundang ke Acara</label>
                                    <select class="form-select" id="eventSelect">
                                        <option selected disabled>Pilih acara...</option>
                                        <option value="1">Pernikahan Fulan & Fulana</option>
                                        <option value="2">Syukuran Rumah Baru</option>
                                        {{-- ini nanti bisa pake @foreach dari daftar event --}}
                                    </select>
                                </div>

                                {{-- Jumlah Maksimal Tamu --}}
                                <div class="form-group mb-3">
                                    <label for="totalGuest" class="fw-bold">Jumlah Tamu Undangan (maksimal)</label>
                                    <input type="number" class="form-control" id="totalGuest" placeholder="Contoh: 2">
                                </div>

                                {{-- Tombol Submit --}}
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
