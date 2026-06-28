@extends('layouts.app')

@section('title', 'Program Magang PT Kereta Api Indonesia')

@section('content')

{{-- HERO SECTION --}}
<section class="hero">
    <div class="hero-bg">
        <div class="hero-overlay"></div>
        <img src="{{ asset('images/KAI_image.jpeg') }}" alt="KAI Train" class="hero-img">
    </div>
    <div class="hero-content">
        <div class="hero-text">
            <div class="hero-logo-wrapper">
            </div>
            <p class="hero-eyebrow">PROGRAM MAGANG</p>
            <h1 class="hero-title">PT KERETA API<br>INDONESIA</h1>
            <p class="hero-tagline">Bangun kompetensi, pengalaman, dan karier<br>bersama KAI untuk Indonesia.</p>
            <div class="hero-btns">
                <a href="/pendaftaran" class="btn-hero-primary">Daftar Magang</a>
                <a href="/contact" class="btn-hero-secondary">Hubungi Kami</a>
            </div>
            <p class="hero-note">Bangun Kompetensi, Pengalaman, dan Karir Bersama KAI →</p>
        </div>
    </div>
</section>

{{-- STATS BAR --}}
<section class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon">👤</div>
            <div class="stat-info">
                <span class="stat-number">965+</span>
                <span class="stat-label">Pendaftar</span>
                <span class="stat-sub">Tahun 2024</span>
            </div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <div class="stat-icon">🏢</div>
            <div class="stat-info">
                <span class="stat-number">25</span>
                <span class="stat-label">Unit Kerja</span>
                <span class="stat-sub">Tersedia</span>
            </div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <div class="stat-icon">✅</div>
            <div class="stat-info">
                <span class="stat-number">98%</span>
                <span class="stat-label">Proses Digital</span>
                <span class="stat-sub">Paperless</span>
            </div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <div class="stat-icon">⏱️</div>
            <div class="stat-info">
                <span class="stat-number">100%</span>
                <span class="stat-label">Tracking Online</span>
                <span class="stat-sub">Real time</span>
            </div>
        </div>
    </div>
</section>

{{-- TENTANG PROGRAM --}}
<section class="about-section">
    <div class="about-container">
        <div class="about-left">
            <span class="section-eyebrow">TENTANG PROGRAM</span>
            <h2 class="section-title">Program Magang PT Kereta Api<br>Indonesia (Persero) Divre III<br>Palembang</h2>
            <p>Program magang PT KAI merupakan wadah bagi mahasiswa untuk memperoleh pengalaman kerja nyata, mengembangkan kompetensi profesional, serta memahami proses bisnis perusahaan transportasi perkeretaapian Indonesia.</p>
            <p>Peserta magang akan mendapatkan kesempatan untuk belajar langsung bersama para profesional di berbagai unit kerja PT KAI sesuai dengan bidang keilmuan yang dimiliki.</p>
            <a href="/units" class="btn-outline-orange" style="display: inline-block; text-decoration: none;">Lihat Unit Magang →</a>
        </div>
        <div class="about-right">
            <div class="about-img-grid">
                <img src="{{ asset('images/kegiatan.png') }}" alt="Magang KAI" class="about-img about-img-main">
                <img src="{{ asset('images/kegiatan.png') }}" alt="Magang KAI" class="about-img about-img-side">
            </div>
        </div>
    </div>
</section>

{{-- KARIER SECTION --}}
<section class="career-section">
    <div class="career-container">
        <div class="career-left">
            <div class="career-img-wrap">
                <img src="{{ asset('images/kegiatan.png') }}" alt="Karier KAI">
            </div>
        </div>
        <div class="career-right">
            <span class="section-eyebrow">KARIER</span>
            <h2 class="section-title orange">Bangun Karier Bersama PT KAI</h2>
            <p>Dapatkan pengalaman belajar yang berharga melalui Program Magang PT KAI. Kembangkan kemampuan akademik, keterampilan profesional, serta wawasan industri transportasi modern dalam lingkungan kerja yang inovatif dan kolaboratif.</p>
            <p><strong>Mulailah perjalanan karier Anda bersama PT Kereta Api Indonesia.</strong></p>
            <a href="/pendaftaran" class="btn-hero-primary" style="display:inline-block; margin-top:16px;">Daftar Sekarang</a>
        </div>
    </div>
</section>

{{-- KAI VALUES SECTION --}}
<section class="values-section">
    <div class="values-container">
        <span class="section-eyebrow" style="text-align:center; margin: 0 auto 12px; display: block; width: fit-content;">NILAI-NILAI KAI</span>
        <h2 class="section-title" style="text-align:center; max-width: 600px; margin: 0 auto 48px;">Budaya Perusahaan <span style="color: var(--kai-orange);">AKHLAK</span></h2>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">A</div>
                <h3>Amanah</h3>
                <p>Memegang teguh kepercayaan yang diberikan</p>
            </div>
            <div class="value-card">
                <div class="value-icon">K</div>
                <h3>Kompeten</h3>
                <p>Terus belajar dan mengembangkan kapabilitas</p>
            </div>
            <div class="value-card">
                <div class="value-icon">H</div>
                <h3>Harmonis</h3>
                <p>Saling peduli dan menghargai perbedaan</p>
            </div>
            <div class="value-card">
                <div class="value-icon">L</div>
                <h3>Loyal</h3>
                <p>Berdedikasi dan mengutamakan kepentingan bangsa</p>
            </div>
            <div class="value-card">
                <div class="value-icon">A</div>
                <h3>Adaptif</h3>
                <p>Terus berinovasi dan antusias menggerakkan perubahan</p>
            </div>
            <div class="value-card">
                <div class="value-icon">K</div>
                <h3>Kolaboratif</h3>
                <p>Membangun kerja sama yang sinergis</p>
            </div>
        </div>
    </div>
</section>

@endsection