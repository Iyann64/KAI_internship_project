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

    {{-- VISI MISI --}}
    <section class="about-vm">
        <div class="vm-container">
            <div class="vm-card vm-visi">
                <div class="vm-icon">🎯</div>
                <h3>Visi</h3>
                <p>Menjadi perusahaan transportasi terbaik di Asia Tenggara yang berfokus pada solusi mobilitas dan logistik yang aman, terpercaya, dan berkelanjutan.</p>
            </div>
            <div class="vm-card vm-misi">
                <div class="vm-icon">🚀</div>
                <h3>Misi</h3>
                <ul>
                    <li>Menyediakan jasa transportasi dan logistik yang aman, nyaman, tepat waktu, dan terintegrasi</li>
                    <li>Mengembangkan bisnis yang inovatif dan berkelanjutan untuk memberikan nilai tambah bagi pemangku kepentingan</li>
                    <li>Membangun sumber daya manusia yang kompeten dan berintegritas tinggi</li>
                    <li>Menerapkan tata kelola perusahaan yang baik (GCG) secara konsisten</li>
                </ul>
            </div>
            <div class="vm-card vm-nilai">
                <div class="vm-icon">💎</div>
                <h3>Nilai AKHLAK</h3>
                <ul>
                    <li><strong>A</strong>manah — Memegang teguh kepercayaan yang diberikan</li>
                    <li><strong>K</strong>ompeten — Terus belajar dan mengembangkan kapabilitas</li>
                    <li><strong>H</strong>armonis — Saling peduli dan menghargai perbedaan</li>
                    <li><strong>L</strong>oyal — Berdedikasi untuk kepentingan bangsa dan negara</li>
                    <li><strong>A</strong>daptif — Terus berinovasi dan antusias menggerakkan perubahan</li>
                    <li><strong>K</strong>olaboratif — Membangun kerja sama yang sinergis</li>
                </ul>
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