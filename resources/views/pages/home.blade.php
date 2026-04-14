@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="section d-flex align-items-center" style="min-height:100vh; background: linear-gradient(to right, #79AE6F, #9FCB98);">
    <div class="container text-center">
        <div class="glass p-5 mx-auto" style="max-width:700px;" data-aos="zoom-in">
            <h1 class="fw-bold">Dari Limbah Menjadi Berkah</h1>
            <p>Edukasi pengolahan limbah dari hulu ke hilir secara berkelanjutan</p>
            <div class="mt-4">
                <a href="#" class="btn btn-green me-2">Mulai Belajar</a>
                <a href="#" class="btn btn-outline-dark">Lihat Sistem</a>
            </div>
        </div>
    </div>
</section>

<!-- TENTANG -->
<section class="section">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Kenapa Sirkunomi?</h2>

        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="glass p-4">
                    <h5>Limbah</h5>
                    <p>Kelola limbah menjadi sumber daya</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="glass p-4">
                    <h5>Edukasi</h5>
                    <p>Belajar sistem berkelanjutan</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="glass p-4">
                    <h5>Ekosistem</h5>
                    <p>Hulu ke hilir terintegrasi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SISTEM -->
<section class="section" style="background:#FFFFFF;">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Sistem Hulu ke Hilir</h2>

        <div class="d-flex flex-wrap justify-content-center gap-3">
            <div class="glass p-3" data-aos="fade-down" data-aos-delay="100">Limbah</div>
            <div class="glass p-3" data-aos="fade-down" data-aos-delay="200">Pilah</div>
            <div class="glass p-3" data-aos="fade-down" data-aos-delay="300">Bank Sampah</div>
            <div class="glass p-3" data-aos="fade-down" data-aos-delay="400">Kompos</div>
            <div class="glass p-3" data-aos="fade-down" data-aos-delay="500">Peternakan</div>
            <div class="glass p-3" data-aos="fade-down" data-aos-delay="600">Perkebunan</div>
        </div>

        <!-- Circular System -->
        <div class="solar-system">

            <!-- SUN -->
            <div class="sun">
                <img src="{{ asset('build/assets/images/logo.svg') }}" alt="Logo Sirkunomi">
                Sirkunomi
            </div>

            <!-- ORBIT 1 -->
            <div class="orbit orbit-1">
                <div class="planet">♻️</div>
            </div>

            <!-- ORBIT 2 -->
            <div class="orbit orbit-2">
                <div class="planet">🧴</div>
            </div>

            <!-- ORBIT 3 -->
            <div class="orbit orbit-3">
                <div class="planet">⚡</div>
            </div>

            <!-- ORBIT 4 -->
            <div class="orbit orbit-4">
                <div class="planet">🌿</div>
            </div>

            <!-- ORBIT 5 -->
            <div class="orbit orbit-5">
                <div class="planet">🧱</div>
            </div>

        </div>
    </div>
</section>

<!-- EDUKASI -->
<section class="section">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Edukasi Terbaru</h2>

        <div class="row">
            @for ($i = 1; $i <= 3; $i++)
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="glass p-3">
                    <h5>Judul Artikel {{ $i }}</h5>
                    <p>Deskripsi singkat edukasi...</p>
                    <a href="#" class="btn btn-sm btn-green">Baca</a>
                </div>
        </div>
        @endfor
    </div>
    </div>
</section>

<!-- PANDUAN -->
<section class="section" style="background:#FFFFFF;">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Panduan Praktis</h2>

        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                <div class="glass p-4">
                    <h5>Cara Membuat Kompos</h5>
                    <a href="#" class="btn btn-green mt-2">Mulai</a>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-left">
                <div class="glass p-4">
                    <h5>Memulai Bank Sampah</h5>
                    <a href="#" class="btn btn-green mt-2">Mulai</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background:#FFFFFF;">
    <div class="container">
        <div class="footer-illustration">
            <img src="{{ asset('build/assets/images/header-eco.png') }}" alt="Eco Illustration">
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section text-center" style="background:linear-gradient(to right, #79AE6F, #9FCB98); color:white;">
    <div class="container" data-aos="zoom-in">
        <h2>Mulai dari Rumah, Ubah Masa Depan</h2>
        <a href="#" class="btn btn-light mt-3">Gabung Gerakan</a>
    </div>
</section>

@endsection