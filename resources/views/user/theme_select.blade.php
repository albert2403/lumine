@extends('layout.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Pilih Tema Undangan</h2>
    <div class="row">
        <!-- Tema 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/themes/floral.jpg') }}" class="card-img-top" alt="Floral Theme">
                <div class="card-body">
                    <h5 class="card-title">Floral</h5>
                    <p class="card-text">Tema dengan nuansa bunga, cocok untuk acara pernikahan outdoor.</p>
                    <a href="#" class="btn btn-outline-secondary btn-sm">Preview</a>
                    <button class="btn btn-primary btn-sm">Pilih Tema</button>
                </div>
            </div>
        </div>

        <!-- Tema 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/themes/minimalist.jpg') }}" class="card-img-top" alt="Minimalist Theme">
                <div class="card-body">
                    <h5 class="card-title">Minimalist</h5>
                    <p class="card-text">Desain simpel dan elegan untuk undangan modern.</p>
                    <a href="#" class="btn btn-outline-secondary btn-sm">Preview</a>
                    <button class="btn btn-primary btn-sm">Pilih Tema</button>
                </div>
            </div>
        </div>

        <!-- Tema 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/themes/classic.jpg') }}" class="card-img-top" alt="Classic Theme">
                <div class="card-body">
                    <h5 class="card-title">Classic</h5>
                    <p class="card-text">Nuansa klasik dengan warna hangat dan elegan.</p>
                    <a href="#" class="btn btn-outline-secondary btn-sm">Preview</a>
                    <button class="btn btn-primary btn-sm">Pilih Tema</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
