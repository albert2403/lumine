@extends('layouts.app')

@section('content')
    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <!-- Header text content -->
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                            <div class="text-uppercase">Checkin System &middot; QR Invitation &middot; Personal RSVP</div>
                        </div>
                        <div class="fs-3 fw-light text-muted">Offering You a Highly</div>

                        <h3 class="display-5 fw-bolder mb-3">
                            <span class="text-gradient d-inline">Event and Guest Management Platform</span>
                        </h3>

                        <div class="fs-5 text-muted" style="max-width: 600px;">
                            Make your dream wedding more effective, efficient, and modern with Lumine — the most complete
                            digital wedding solution!
                        </div>

                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mt-4 mb-3">
    <!-- Button: Get Start -->
    <a 
        class="btn bg-gradient-primary-to-secondary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder text-white shadow-sm border-0"
        href="resume.html"
        style="box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); transition: transform 0.2s ease-in-out;"
        onmouseover="this.style.transform='scale(1.03)'"
        onmouseout="this.style.transform='scale(1)'"
    >
        Get Start
    </a>

    <!-- Button: Projects -->
    <a 
        class="btn btn-lg px-5 py-3 fs-6 fw-bolder text-dark bg-white shadow-sm border-0"
        href="projects.html"
        style="transition: all 0.3s ease-in-out;"
        onmouseover="this.style.background = 'linear-gradient(to right, #4e54c8, #8f94fb)'; this.style.color = '#fff';"
        onmouseout="this.style.background = 'white'; this.style.color = '#343a40';"
    >
        Projects
    </a>
</div>

                        
                    </div>
                </div>
                <div class="col-xxl-7">
                    <!-- Header profile picture -->
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">

                        <!-- Gambar akan otomatis mengikuti lebar container -->
                        <img class="img-fluid profile-img" src="{{ asset('template/index/img/digital_product_1.jpg') }}"
                            alt="Undangan Digital" style="max-height: 500px; object-fit: contain;" />

                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
