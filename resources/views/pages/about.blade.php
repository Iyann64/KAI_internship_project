@extends('layouts.app')

@section('title', 'Tentang Kami - PT Kereta Api Indonesia')

@section('content')
<div class="container section">

    {{-- HERO --}}
    <section class="about-hero">
        <p class="hero-eyebrow" style="margin: 0 auto 16px;">TENTANG KAMI</p>
        <h1>PT Kereta Api Indonesia<br><span style="color: var(--kai-orange);">(Persero)</span></h1>
        <p>Mengenal lebih dekat perusahaan transportasi perkeretaapian terbesar di Indonesia</p>
    </section>

    {{-- SEJARAH --}}
    <section class="about-history">
        <div class="history-grid">
            <div class="history-image">
                <div class="history-img-placeholder">
                    <img src="{{ asset('images/kantor-kai.jpeg') }}" alt="Sejarah KAI" class="history-img">
                </div>
            </div>
            <div class="history-text">
                <span class="section-eyebrow">SEJARAH</span>
                <h2 class="section-title">Perjalanan KAI Menjadi<br>BUMN Kebanggaan Indonesia</h2>
                <p>PT Kereta Api Indonesia (Persero) adalah Badan Usaha Milik Negara yang menyelenggarakan jasa transportasi kereta api di Indonesia. Berdiri sejak 28 September 1945, KAI telah menjadi tulang punggung transportasi darat yang menghubungkan berbagai wilayah di Nusantara.</p>
                <p>Sejak tahun 1999, KAI resmi berubah status menjadi Perseroan Terbatas (PT) dengan nama PT Kereta Api Indonesia (Persero). Hingga saat ini, KAI terus berinovasi dan berkembang menjadi perusahaan transportasi modern yang melayani jutaan penumpang setiap tahunnya.</p>
                <div class="history-stats">
                    <div class="history-stat">
                        <span class="history-stat-number">1945</span>
                        <span class="history-stat-label">Tahun Berdiri</span>
                    </div>
                    <div class="history-stat">
                        <span class="history-stat-number">78+</span>
                        <span class="history-stat-label">Tahun Melayani</span>
                    </div>
                    <div class="history-stat">
                        <span class="history-stat-number">200+</span>
                        <span class="history-stat-label">Rute Aktif</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- VISI MISI REDESIGN --}}
    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/akhlak-design.css?v=3') }}" type="text/css">
    @endpush

    <section class="vm-pattern-bg">
        <div style="max-width: 1000px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <p style="font-size: 14px; font-weight: 700; color: #1A1A2E; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 12px;">STUDIO SHODWE</p>
                <h2 style="font-size: 48px; font-weight: 900; color: #003087; text-transform: uppercase; letter-spacing: 1px; line-height: 1.1; margin: 0;">Visi & Misi</h2>
            </div>

            <div style="background: #1e2a4a; border-radius: 16px; margin-bottom: 24px; overflow: hidden; box-shadow: 0 8px 40px rgba(0,0,0,0.12);">
                <div style="background: #e8783b; color: #fff; padding: 14px 24px; font-size: 14px; font-weight: 700; text-align: center; letter-spacing: 1px; text-transform: uppercase;">Visi Unggul Kita</div>
                <div style="color: #fff; padding: 24px; font-size: 14px; line-height: 1.8;">
                    <p style="margin: 0; color: #fff;">Menjadi perusahaan transportasi terbaik di Asia Tenggara yang berfokus pada solusi mobilitas dan logistik yang aman, terpercaya, dan berkelanjutan.</p>
                </div>
            </div>

            <div style="background: #1e2a4a; border-radius: 16px; margin-bottom: 24px; overflow: hidden; box-shadow: 0 8px 40px rgba(0,0,0,0.12);">
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

    {{-- DIREKTORAT --}}
    <section class="about-directorate">
        <div class="directorate-header">
            <span class="section-eyebrow" style="margin: 0 auto 12px; display: block; width: fit-content;">STRUKTUR</span>
            <h2 class="section-title" style="text-align: center;">Direktorat Divre III Palembang</h2>
            <p style="text-align: center; color: var(--kai-muted); max-width: 600px; margin: 0 auto 40px;">Bersama membangun layanan perkeretaapian yang lebih baik untuk Indonesia</p>
        </div>
        <div class="directorate-grid">
            <div class="director-card">
                <div class="director-avatar">DK</div>
                <h3>Dwi Kusnanto</h3>
                <span class="director-role">Kepala Divre III Palembang</span>
                <p>Memimpin seluruh operasional dan layanan kereta api di wilayah Divre III Palembang.</p>
            </div>
            <div class="director-card">
                <div class="director-avatar">AH</div>
                <h3>Ahmad Hidayat</h3>
                <span class="director-role">Wakil Kepala Divre</span>
                <p>Mendukung koordinasi operasional dan pengembangan layanan di wilayah Divre III.</p>
            </div>
            <div class="director-card">
                <div class="director-avatar">RS</div>
                <h3>Rina Safitri</h3>
                <span class="director-role">Kepala Bidang SDM</span>
                <p>Mengelola pengembangan sumber daya manusia dan program magang di lingkungan Divre III.</p>
            </div>
            <div class="director-card">
                <div class="director-avatar">BP</div>
                <h3>Bambang Prasetyo</h3>
                <span class="director-role">Kepala Bidang Operasional</span>
                <p>Memastikan kelancaran operasional kereta api dan keselamatan perjalanan.</p>
            </div>
        </div>
    </section>

    {{-- MILESTONE --}}
    <section class="about-milestone">
        <div class="milestone-header">
            <span class="section-eyebrow" style="margin: 0 auto 12px; display: block; width: fit-content;">CAPAIAN</span>
            <h2 class="section-title" style="text-align: center;">Perjalanan & Capaian KAI</h2>
        </div>
        <div class="milestone-timeline">
            <div class="milestone-item">
                <div class="milestone-year">1945</div>
                <div class="milestone-dot"></div>
                <div class="milestone-content">
                    <h4>Berdirinya DKARI</h4>
                    <p>Djawatan Kereta Api Republik Indonesia (DKARI) didirikan pada 28 September 1945.</p>
                </div>
            </div>
            <div class="milestone-item">
                <div class="milestone-year">1999</div>
                <div class="milestone-dot"></div>
                <div class="milestone-content">
                    <h4>Menjadi PT KAI</h4>
                    <p>Perusahaan berubah status dari Perum menjadi PT Kereta Api Indonesia (Persero).</p>
                </div>
            </div>
            <div class="milestone-item">
                <div class="milestone-year">2011</div>
                <div class="milestone-dot"></div>
                <div class="milestone-content">
                    <h4>Peluncuran Kereta Eksekutif</h4>
                    <p>KAI meluncurkan berbagai layanan kereta eksekutif modern dengan standar internasional.</p>
                </div>
            </div>
            <div class="milestone-item">
                <div class="milestone-year">2020</div>
                <div class="milestone-dot"></div>
                <div class="milestone-content">
                    <h4>Digitalisasi Layanan</h4>
                    <p>Peluncuran aplikasi KAI Access, pembelian tiket online, dan digitalisasi operasional.</p>
                </div>
            </div>
            <div class="milestone-item">
                <div class="milestone-year">2025</div>
                <div class="milestone-dot"></div>
                <div class="milestone-content">
                    <h4>Menuju Transportasi Modern</h4>
                    <p>KAI terus berinovasi menuju perusahaan transportasi modern, aman, dan berkelanjutan.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="cta-section">
        <h2>Bergabunglah Bersama KAI</h2>
        <p>Mulailah perjalanan karier Anda melalui Program Magang PT Kereta Api Indonesia. Dapatkan pengalaman berharga di perusahaan BUMN terkemuka.</p>
        <a href="/pendaftaran" class="cta-button">Daftar Magang Sekarang</a>
    </section>

</div>
@endsection