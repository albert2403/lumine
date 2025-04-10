@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 pb-5 text-center">
            <h1 class="display-4 fw-bolder mb-3">Our Services</h1>
            <p class="lead text-white-50">Lumine memberikan solusi lengkap untuk digitalisasi acara Anda</p>
        </div>
    </header>

    <!-- Services List -->
    <section class="py-5 bg-light">
        <div class="container px-5">
            <div class="row gx-5 gy-4 text-center">
                <div class="col-md-4">
                    <i class="bi bi-qr-code-scan display-4 text-gradient mb-3"></i>
                    <h5 class="fw-bold">QR Invitation</h5>
                    <p class="text-muted">Undangan digital modern yang bisa diakses lewat WhatsApp atau email dan dipindai saat kedatangan.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-people-fill display-4 text-gradient mb-3"></i>
                    <h5 class="fw-bold">Guest Management</h5>
                    <p class="text-muted">Pantau daftar tamu, RSVP, konfirmasi kehadiran, hingga pengaturan tempat duduk.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-gift display-4 text-gradient mb-3"></i>
                    <h5 class="fw-bold">Gift & Souvenir Validation</h5>
                    <p class="text-muted">Catat pemberian hadiah dan distribusi souvenir langsung dari dashboard saat check-in.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-clipboard-data display-4 text-gradient mb-3"></i>
                    <h5 class="fw-bold">Real-Time Check-in</h5>
                    <p class="text-muted">Pantau kehadiran tamu secara langsung dengan sistem QR dan role usher yang bertugas.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-bar-chart-line-fill display-4 text-gradient mb-3"></i>
                    <h5 class="fw-bold">Event Analytics</h5>
                    <p class="text-muted">Lihat statistik kehadiran, feedback, dan laporan lengkap setelah acara selesai.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-envelope-paper-heart display-4 text-gradient mb-3"></i>
                    <h5 class="fw-bold">RSVP Personalization</h5>
                    <p class="text-muted">Personalisasi pesan RSVP dan terima feedback langsung dari tamu secara elegan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-gradient-primary-to-secondary text-white text-center">
        <div class="container px-5">
            <h2 class="fw-bolder mb-4">Butuh Layanan Spesial untuk Acara Anda?</h2>
            <p class="fs-5 mb-4">Kami siap bantu custom kebutuhan event Anda. Konsultasikan dengan tim kami secara gratis!</p>
            <a href="{{ route('contact') }}" class="btn btn-lg btn-light fw-bold px-5 py-3 shadow">Hubungi Kami</a>
        </div>
    </section>
@endsection
