@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container-xxl px-4 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-6">
                    <h1 class="display-4 fw-bolder mb-3">
                        <span class="text-white d-inline">Tentang Kami</span>
                    </h1>
                    <p class="lead text-white-50">
                        Lumine hadir sebagai solusi digital modern untuk membantu Anda mengelola tamu undangan, RSVP,
                        dan check-in acara secara efisien dan praktis.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Visi Misi -->
    <section class="py-5 bg-light">
        <div class="container-xxl px-4">
            <div class="row g-5">
                <div class="col-md-6">
                    <h3 class="fw-bold text-gradient">Visi Kami</h3>
                    <p class="text-muted">Membantu setiap penyelenggara acara menciptakan pengalaman digital yang mudah,
                        aman, dan elegan bagi para tamunya.</p>
                </div>
                <div class="col-md-6">
                    <h3 class="fw-bold text-gradient">Misi Kami</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Menyediakan platform manajemen tamu all-in-one</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Meningkatkan efisiensi check-in dan validasi hadiah</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Mempermudah distribusi undangan digital</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Menyediakan data dan laporan pasca-acara</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Nilai-Nilai -->
    <section class="py-5 bg-white">
        <div class="container-xxl px-4 text-center">
            <h3 class="fw-bold text-gradient mb-4">Nilai-Nilai Kami</h3>
            <div class="row g-4">
                <div class="col-md-3">
                    <i class="bi bi-shield-lock-fill display-4 text-gradient"></i>
                    <h5 class="fw-bold mt-3">Keamanan</h5>
                    <p class="text-muted">Data tamu Anda aman dan terlindungi dengan enkripsi modern.</p>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-lightning-fill display-4 text-gradient"></i>
                    <h5 class="fw-bold mt-3">Efisiensi</h5>
                    <p class="text-muted">Check-in dan validasi tamu dalam hitungan detik.</p>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-stars display-4 text-gradient"></i>
                    <h5 class="fw-bold mt-3">Inovasi</h5>
                    <p class="text-muted">Fitur terus berkembang mengikuti kebutuhan zaman.</p>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-people-fill display-4 text-gradient"></i>
                    <h5 class="fw-bold mt-3">User-Centered</h5>
                    <p class="text-muted">Dirancang untuk kemudahan Anda dan tamu Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Siapa Kami -->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container-xxl px-4 text-center">
            <h3 class="fw-bold mb-4">Siapa Kami?</h3>
            <p class="fs-5 mx-auto" style="max-width: 720px;">
                Kami adalah tim pengembang dengan passion terhadap teknologi dan pengalaman event yang tak terlupakan.
                Dengan pengalaman di industri teknologi dan event planning, kami menciptakan Lumine untuk membawa acara
                Anda ke level yang lebih modern dan terstruktur.
            </p>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 text-center bg-white">
        <div class="container px-5">
            <h2 class="fw-bolder mb-4 text-gradient">Siap Digitalisasi Acaramu?</h2>
            <p class="fs-5 mb-4">Gabung sekarang dan buat tamumu terkesan dengan sistem yang rapi dan modern.</p>
            <a href="{{ route('register') }}" class="btn btn-lg bg-gradient-primary-to-secondary text-white fw-bold px-5 py-3 shadow">
                Daftar Sekarang
            </a>
        </div>
    </section>
@endsection
