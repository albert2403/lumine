@extends('layouts.dashboard')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="card-header bg-success text-white d-flex align-items-center">
                        <i class="bi bi-person-check me-2 fs-4"></i>
                        <h5 class="mb-0">Check-in Tamu</h5>
                    </div>
                    <div class="card-body">
                        {{-- TAMU INFO (dummy) --}}
                        <div class="mb-4 text-center">
                            <div class="mb-3 text-center">
                                <label class="form-label fw-semibold">Nama Tamu</label>
                                <input type="text" class="form-control text-center fw-bold fs-5" value="Budi Santoso">
                            </div>
                            <div class="badge bg-primary">VIP - Group</div>
                            <p class="text-muted mb-0">Acara: <strong>Pernikahan A & B</strong></p>
                            <p class="text-muted mb-3">Jumlah Tamu: <strong>4</strong></p>
                        </div>

                        {{-- QR Thumbnail --}}
                        <div class="text-center mb-4">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ urlencode('guest-budi-santoso') }}"
                                alt="QR Code" class="border rounded">
                        </div>

                        {{-- FORM CHECK-IN --}}
                        <form>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Jumlah yang Hadir</label>
                                <input type="number" class="form-control" value="4" min="1" max="4">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Metode Gift</label>
                                <select class="form-select">
                                    <option selected>-- Pilih --</option>
                                    <option>Angpao</option>
                                    <option>Transfer</option>
                                    <option>Hadiah</option>
                                </select>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="souvenirGiven">
                                <label class="form-check-label" for="souvenirGiven">
                                    Sudah menerima souvenir
                                </label>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-check-circle me-1"></i> Konfirmasi Check-in
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <small class="text-muted">Scan via QR Code untuk check-in otomatis</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
