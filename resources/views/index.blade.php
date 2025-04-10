@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header class="py-5">
        <div class="container-xxl px-4 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                            <div class="text-uppercase">Checkin System &middot; QR Invitation &middot; Personal RSVP</div>
                        </div>
                        <div class="fs-3 fw-light text-muted">Offering You a Highly</div>
                        <h3 class="display-5 fw-bolder mb-3 text-wrap text-break">
                            <span class="text-gradient d-inline">Event and Guest Management Platform</span>
                        </h3>
                        <div class="fs-5 text-muted" style="max-width: 600px;">
                            Make your dream wedding more effective, efficient, and modern with Lumine — the most complete
                            digital wedding solution!
                        </div>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mt-4 mb-3">
                            <a class="btn bg-gradient-primary-to-secondary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder text-white shadow-sm border-0"
                                href="{{ route('register') }}">
                                Get Started
                            </a>
                            <a class="btn btn-lg px-5 py-3 fs-6 fw-bolder text-dark bg-white shadow-sm border-0"
                                href="#features">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                        <img class="img-fluid profile-img" src="{{ asset('template/index/img/digital_product_1.jpg') }}"
                            alt="Undangan Digital" style="max-height: 500px; object-fit: contain;" />
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Fitur -->
    <section id="features" class="py-5 bg-light">
        <div class="container-xxl px-4">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Kenapa Pilih Lumine?</h2>
                <p class="text-muted">Satu platform, semua kebutuhan manajemen tamu terpenuhi.</p>
            </div>
            <div class="row gx-5">
                <div class="col-md-4 text-center mb-4">
                    <i class="bi bi-qr-code-scan display-4 text-primary mb-3"></i>
                    <h5 class="fw-bold">QR Invitation</h5>
                    <p class="text-muted">Undangan digital dengan QR code unik yang mudah dipindai dan aman.</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <i class="bi bi-person-lines-fill display-4 text-primary mb-3"></i>
                    <h5 class="fw-bold">Guest Management</h5>
                    <p class="text-muted">Kelola daftar tamu, status RSVP, dan kehadiran hanya dalam satu dashboard.</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <i class="bi bi-gift display-4 text-primary mb-3"></i>
                    <h5 class="fw-bold">Gift & Souvenir Validation</h5>
                    <p class="text-muted">Validasi kado dan souvenir langsung saat check-in, real-time dan akurat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cara Kerja -->
    <section class="py-5">
        <div class="container-xxl px-4">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('template/index/img/how-it-works.png') }}" alt="How it works"
                        class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6">
                    <h3 class="fw-bold mb-3">Cara Kerja Lumine</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0"><i class="bi bi-check-circle text-success me-2"></i> Buat acara dan daftar tamu</li>
                        <li class="list-group-item border-0"><i class="bi bi-check-circle text-success me-2"></i> Kirim undangan via WhatsApp / Email</li>
                        <li class="list-group-item border-0"><i class="bi bi-check-circle text-success me-2"></i> Tamu hadir & scan QR saat datang</li>
                        <li class="list-group-item border-0"><i class="bi bi-check-circle text-success me-2"></i> Validasi kehadiran & souvenir</li>
                        <li class="list-group-item border-0"><i class="bi bi-check-circle text-success me-2"></i> Cek laporan & feedback pasca acara</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-gradient-primary-to-secondary text-white text-center">
        <div class="container-xxl px-4">
            <h2 class="fw-bolder mb-4">Siap Digitalisasi Acaramu?</h2>
            <p class="fs-5 mb-4">Mulai dengan Lumine dan buat pengalaman tak terlupakan bagi tamu undanganmu.</p>
            <a href="{{ route('register') }}" class="btn btn-lg btn-light fw-bold px-5 py-3 shadow">Daftar Sekarang</a>
        </div>
    </section>
@endsection
