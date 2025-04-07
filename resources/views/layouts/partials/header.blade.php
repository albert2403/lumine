<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <div class="row w-100 align-items-center">
                {{-- Kiri: Logo --}}
                <div class="col-4">
                    <a class="navbar-brand fw-bolder text-primary" href="{{ route('index') }}">Lumine</a>
                </div>

                {{-- Tengah: Navigasi --}}
                <div class="col-4 text-center">
                    <ul class="navbar-nav d-flex flex-row justify-content-center gap-3 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>

                {{-- Kanan: Login / Register --}}
                <div class="col-4 text-end">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
                </div>
            </div>
        </div>
    </nav>

</div>