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

{{-- NEW VALUES SECTION --}}
@push('styles')
<link rel="stylesheet" href="{{ asset('css/akhlak-design.css?v=3') }}" type="text/css">
@endpush

<section class="vm-pattern-bg">
    <div style="max-width: 1000px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 64px;">
            <p style="font-size: 14px; font-weight: 700; color: #1A1A2E; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 16px;">STUDIO SHODWE</p>
            <h2 style="font-size: 48px; font-weight: 900; color: #003087; text-transform: uppercase; letter-spacing: 1px; line-height: 1.1; margin: 0;">Visi & Misi</h2>
        </div>

        <div class="vm-card">
            <div style="background: #e8783b; color: #fff; padding: 14px 24px; font-size: 14px; font-weight: 700; text-align: center; letter-spacing: 1px; text-transform: uppercase;">Visi Unggul Kita</div>
            <div style="color: #fff; padding: 24px; font-size: 14px; line-height: 1.8;">
                <p style="margin: 0; color: #fff;">Menjadi perusahaan transportasi terbaik di Asia Tenggara yang berfokus pada solusi mobilitas dan logistik yang aman, terpercaya, dan berkelanjutan.</p>
            </div>
        </div>

        <div class="vm-card">
            <div style="background: #e8783b; color: #fff; padding: 14px 24px; font-size: 14px; font-weight: 700; text-align: center; letter-spacing: 1px; text-transform: uppercase;">Misi Strategis Kita</div>
            <div style="color: #fff; padding: 24px; font-size: 14px; line-height: 1.8;">
                <ul style="list-style: disc; padding-left: 20px; margin: 0;">
                    <li style="margin-bottom: 8px; color: #fff;">Menyediakan jasa transportasi dan logistik yang aman, nyaman, tepat waktu, dan terintegrasi</li>
                    <li style="margin-bottom: 8px; color: #fff;">Mengembangkan bisnis yang inovatif dan berkelanjutan untuk memberikan nilai tambah bagi pemangku kepentingan</li>
                    <li style="margin-bottom: 8px; color: #fff;">Membangun sumber daya manusia yang kompeten dan berintegritas tinggi</li>
                    <li style="margin-bottom: 8px; color: #fff;">Menerapkan tata kelola perusahaan yang baik (GCG) secara konsisten</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- SECTION SEPARATOR --}}
<div class="section-separator">
    <span class="line"></span>
    <span class="diamond"></span>
    <span class="line"></span>
</div>

<section class="akhlak-section">
    <div class="akhlak-container">

        {{-- HEADER --}}
        <div class="akhlak-header">
            <p class="akhlak-subtitle">CORE VALUES</p>
            <h2 class="akhlak-title">AKH<span>LAK</span></h2>
            <p class="akhlak-description">
                Nilai-nilai utama AKHLAK menjadi fondasi budaya kerja insan PT Kereta Api Indonesia
                dalam memberikan pelayanan prima dan mewujudkan visi perusahaan.
            </p>
        </div>

        {{-- FLOWER DIAGRAM --}}
        <div class="akhlak-flower">
            <div class="akhlak-center-text">AKH<span>LAK</span></div>

            {{-- PETALS --}}
            <div class="petal-wrap petal-h">
                <div class="petal-shape petal-teal"></div>
                <span class="petal-letter">H</span>
                <span class="petal-tooltip">Saling peduli & menghargai</span>
            </div>
            <div class="petal-wrap petal-l">
                <div class="petal-shape petal-dark"></div>
                <span class="petal-letter">L</span>
                <span class="petal-tooltip">Berdedikasi untuk Bangsa</span>
            </div>
            <div class="petal-wrap petal-k1">
                <div class="petal-shape petal-orange"></div>
                <span class="petal-letter">K</span>
                <span class="petal-tooltip">Terus belajar & berkembang</span>
            </div>
            <div class="petal-wrap petal-a1">
                <div class="petal-shape petal-teal"></div>
                <span class="petal-letter">A</span>
                <span class="petal-tooltip">Antusias menghadapi perubahan</span>
            </div>
            <div class="petal-wrap petal-a2">
                <div class="petal-shape petal-dark"></div>
                <span class="petal-letter">A</span>
                <span class="petal-tooltip">Memegang teguh kepercayaan</span>
            </div>
            <div class="petal-wrap petal-k2">
                <div class="petal-shape petal-orange"></div>
                <span class="petal-letter">K</span>
                <span class="petal-tooltip">Membangun sinergi tim</span>
            </div>


            {{-- LABEL CARDS --}}
            <div class="flower-label label-h label-left">
                <span class="label-pill pill-dark">HARMONIS</span>
                <p>Saling peduli dan menghargai perbedaan</p>
            </div>
            <div class="flower-label label-l label-right">
                <span class="label-pill pill-teal">LOYAL</span>
                <p>Berdedikasi & mengutamakan kepentingan Bangsa dan Negara</p>
            </div>
            <div class="flower-label label-k1 label-left">
                <span class="label-pill pill-dark">KOMPETEN</span>
                <p>Terus belajar dan mengembangkan kapabilitas</p>
            </div>
            <div class="flower-label label-a1 label-right">
                <span class="label-pill pill-teal">ADAPTIF</span>
                <p>Terus berinovasi dan antusias dalam menggerakkan atau menghadapi perubahan</p>
            </div>
            <div class="flower-label label-a2 label-left">
                <span class="label-pill pill-dark">AMANAH</span>
                <p>Memegang teguh kepercayaan yang diberikan</p>
            </div>
            <div class="flower-label label-k2 label-right">
                <span class="label-pill pill-teal">KOLABORATIF</span>
                <p>Membangun kerja sama yang strategis</p>
            </div>
        </div>

        {{-- MOBILE FALLBACK LIST --}}
        <div class="akhlak-mobile-list">
            <div class="akhlak-mobile-item">
                <div class="akhlak-mobile-icon">🤝</div>
                <div class="akhlak-mobile-info">
                    <h4>HARMONIS</h4>
                    <p>Saling peduli dan menghargai perbedaan</p>
                </div>
            </div>
            <div class="akhlak-mobile-item">
                <div class="akhlak-mobile-icon">🇮🇩</div>
                <div class="akhlak-mobile-info">
                    <h4>LOYAL</h4>
                    <p>Berdedikasi & mengutamakan kepentingan Bangsa dan Negara</p>
                </div>
            </div>
            <div class="akhlak-mobile-item">
                <div class="akhlak-mobile-icon">📚</div>
                <div class="akhlak-mobile-info">
                    <h4>KOMPETEN</h4>
                    <p>Terus belajar dan mengembangkan kapabilitas</p>
                </div>
            </div>
            <div class="akhlak-mobile-item">
                <div class="akhlak-mobile-icon">🚀</div>
                <div class="akhlak-mobile-info">
                    <h4>ADAPTIF</h4>
                    <p>Terus berinovasi dan antusias dalam menghadapi perubahan</p>
                </div>
            </div>
            <div class="akhlak-mobile-item">
                <div class="akhlak-mobile-icon">🛡️</div>
                <div class="akhlak-mobile-info">
                    <h4>AMANAH</h4>
                    <p>Memegang teguh kepercayaan yang diberikan</p>
                </div>
            </div>
            <div class="akhlak-mobile-item">
                <div class="akhlak-mobile-icon">🤲</div>
                <div class="akhlak-mobile-info">
                    <h4>KOLABORATIF</h4>
                    <p>Membangun kerja sama yang strategis</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection