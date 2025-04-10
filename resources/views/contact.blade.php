@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 text-center">
            <h1 class="display-4 fw-bold">Hubungi Kami</h1>
            <p class="lead mb-0">Lumine siap bantu kamu mewujudkan event impianmu.</p>
        </div>
    </header>

    <!-- Kontak Section -->
    <section class="py-5">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-4">
                    <h3 class="fw-bold mb-3">Info Kontak</h3>
                    <p class="text-muted">Hubungi kami untuk konsultasi, kerja sama, atau sekadar tanya-tanya soal layanan Lumine.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-telephone text-primary me-2"></i> +62 812 3456 7890</li>
                        <li class="mb-2"><i class="bi bi-envelope text-primary me-2"></i> support@lumine.id</li>
                        <li class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i> Jakarta, Indonesia</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#" class="text-decoration-none me-3"><i class="bi bi-instagram fs-4 text-danger"></i></a>
                        <a href="#" class="text-decoration-none me-3"><i class="bi bi-facebook fs-4 text-primary"></i></a>
                        <a href="#" class="text-decoration-none"><i class="bi bi-whatsapp fs-4 text-success"></i></a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h3 class="fw-bold mb-3">Formulir Kontak</h3>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Masukkan email Anda">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor WhatsApp</label>
                            <input type="text" class="form-control" placeholder="+62 8xxx xxxx xxxx">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pesan</label>
                            <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda..."></textarea>
                        </div>
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#thanksModal">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="thanksModal" tabindex="-1" aria-labelledby="thanksModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 shadow" style="overflow: hidden;">
                <div class="modal-header bg-gradient-primary-to-secondary text-white">
                    <h5 class="modal-title" id="thanksModalLabel">🎉 Terima Kasih!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="mb-0">Pesan kamu sudah terkirim. Tim <strong>Lumine</strong> akan segera menghubungi kamu!</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-outline-primary rounded-pill" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>  
        </div>
    </div>
    
@endsection
