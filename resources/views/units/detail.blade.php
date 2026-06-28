@extends('layouts.app')

@section('title', $unit['name'] . ' - Detail Unit Magang - PT Kereta Api Indonesia')

@section('content')
<div class="container section">

    {{-- Breadcrumb --}}
    <nav class="det-breadcrumb">
        <a href="{{ route('home') }}">Beranda</a>
        <span class="det-sep">›</span>
        <a href="/units">Unit Magang</a>
        <span class="det-sep">›</span>
        <span class="det-current">{{ $unit['name'] }}</span>
    </nav>

    {{-- HERO BESAR dengan BACKGROUND GAMBAR --}}
    <div class="det-hero">
        <div class="det-hero-bg" style="background: {{ $unit['gradient'] ?? 'linear-gradient(135deg, #003087 0%, #0047B8 40%, #FF6B00 100%)' }};">
            <div class="det-hero-overlay"></div>
            <div class="det-hero-body">
                <div class="det-hero-badge">UNIT MAGANG</div>
                <h1 class="det-hero-title">{{ $unit['name'] }}</h1>
                <p class="det-hero-desc">{{ $unit['desc'] }}</p>
                <div class="det-hero-stats">
                    <div class="det-stat">
                        <span class="det-stat-icon">👥</span>
                        <div>
                            <strong>{{ $unit['kuota'] }}</strong>
                            <small>Kuota Tersedia</small>
                        </div>
                    </div>
                    <div class="det-stat">
                        <span class="det-stat-icon">⏱️</span>
                        <div>
                            <strong>{{ $unit['durasi'] }}</strong>
                            <small>Durasi Magang</small>
                        </div>
                    </div>
                    <div class="det-stat">
                        <span class="det-stat-icon">📍</span>
                        <div>
                            <strong>{{ $unit['lokasi'] }}</strong>
                            <small>Lokasi</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="det-hero-visual">
                <span class="det-hero-emoji">{{ $unit['emoji'] }}</span>
            </div>
        </div>
    </div>

    {{-- TENTANG UNIT + GAMBAR --}}
    <div class="det-about">
        <div class="det-about-text">
            <h2>Tentang Unit Ini</h2>
            <p>{{ $unit['desc'] }}</p>
            <p>Bergabunglah dengan tim {{ $unit['name'] }} KAI dan dapatkan pengalaman langsung dalam mengembangkan potensi Anda di lingkungan PT Kereta Api Indonesia (Persero).</p>
            <div class="det-highlights">
                @foreach($unit['highlights'] as $highlight)
                <div class="det-highlight">
                    <span class="det-hl-icon">{{ $loop->iteration <= 3 ? $unit['emoji'] : '✨' }}</span>
                    <span>{{ $highlight }}</span>
                </div>
                @endforeach
            </div>
        </div>
        <div class="det-about-img">
            <div class="det-img-box" style="background: {{ $unit['img_gradient'] ?? 'linear-gradient(135deg, #1a1a3e, #003087)' }};">
                <span class="det-img-emoji">{{ $unit['emoji'] }}</span>
                <span class="det-img-label">{{ $unit['img_label'] ?? 'Internship' }}</span>
            </div>
        </div>
    </div>

    {{-- GALLERY KECIL --}}
    <div class="det-gallery">
        @foreach($unit['gallery'] as $item)
        <div class="det-gallery-item" style="background: {{ $item['color'] }};">
            <span class="det-gal-emoji">{{ $item['emoji'] }}</span>
            <span class="det-gal-label">{{ $item['label'] }}</span>
        </div>
        @endforeach
    </div>

    {{-- DETAIL INFO --}}
    <div class="det-details">
        {{-- Kolom Kiri --}}
        <div class="det-detail-main">
            {{-- Kualifikasi --}}
            <div class="det-card">
                <div class="det-card-head">
                    <span class="det-card-icon">📋</span>
                    <h3>Kualifikasi</h3>
                </div>
                <ul class="det-list">
                    @if(isset($unit['kualifikasi']))
                        @foreach($unit['kualifikasi'] as $kualifikasi)
                            <li><span class="det-check">✓</span> {{ $kualifikasi }}</li>
                        @endforeach
                    @else
                        <li><span class="det-check">✓</span> Siswa/Mahasiswa aktif minimal semester 4</li>
                        <li><span class="det-check">✓</span> Jurusan sesuai dengan bidang unit</li>
                        <li><span class="det-check">✓</span> IPK Minimal 3.00 dari skala 4.00</li>
                        <li><span class="det-check">✓</span> Memiliki minat dan kemampuan di bidang terkait</li>
                        <li><span class="det-check">✓</span> Bersedia magang sesuai peraturan dan jadwal yang ditentukan</li>
                    @endif
                </ul>
            </div>

            {{-- Benefit --}}
            <div class="det-card">
                <div class="det-card-head">
                    <span class="det-card-icon">🎁</span>
                    <h3>Benefit</h3>
                </div>
                <ul class="det-list">
                    @if(isset($unit['benefit']))
                        @foreach($unit['benefit'] as $benefit)
                            <li><span class="det-check">✓</span> {{ $benefit }}</li>
                        @endforeach
                    @else
                        <li><span class="det-check">✓</span> Pengalaman kerja di perusahaan BUMN terkemuka</li>
                        <li><span class="det-check">✓</span> Mentoring dari profesional berpengalaman</li>
                        <li><span class="det-check">✓</span> Tunjangan bulanan selama masa magang</li>
                        <li><span class="det-check">✓</span> Sertifikat resmi dari PT Kereta Api Indonesia (Persero)</li>
                        <li><span class="det-check">✓</span> Kesempatan mengikuti program rekrutmen karyawan tetap</li>
                    @endif
                </ul>
            </div>
        </div>

        {{-- Kolom Kanan --}}
        <div class="det-detail-side">
            {{-- Dokumen --}}
            <div class="det-card">
                <div class="det-card-head">
                    <span class="det-card-icon">📄</span>
                    <h3>Dokumen</h3>
                </div>
                <ul class="det-list">
                    @if(isset($unit['dokumen']))
                        @foreach($unit['dokumen'] as $dokumen)
                            <li><span class="det-emoji-check">{{ $dokumen }}</span></li>
                        @endforeach
                    @else
                        <li><span class="det-emoji-check">📄</span> Surat pengantar dari kampus/universitas</li>
                        <li><span class="det-emoji-check">🪪</span> Kartu Tanda Mahasiswa (KTM) aktif</li>
                        <li><span class="det-emoji-check">📝</span> Proposal magang sesuai format yang ditentukan</li>
                        <li><span class="det-emoji-check">📄</span> Curriculum Vitae (CV) terbaru</li>
                        <li><span class="det-emoji-check">📊</span> Transkrip nilai akademik</li>
                    @endif
                </ul>
            </div>

            

            {{-- Bantuan --}}
            <div class="det-help">
                <span class="det-help-icon">❓</span>
                <h4>Butuh Bantuan?</h4>
                <p>Hubungi tim HR kami untuk informasi lebih lanjut tentang program magang di unit {{ $unit['name'] }} dan proses pendaftaran.</p>
                <a href="/contact" class="det-help-link">Hubungi Kami →</a>
            </div>
        </div>
    </div>

    {{-- CTA FOOTER --}}
    <div class="det-cta">
        <div class="det-cta-text">
            <h2>Tertarik Bergabung di {{ $unit['name'] }}?</h2>
            <p>Daftarkan diri Anda sekarang dan mulailah perjalanan karier bersama PT Kereta Api Indonesia</p>
        </div>
        <div class="det-cta-actions">
            <a href="/pendaftaran" class="det-btn-primary">
                Daftar Sekarang
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
            <a href="/units" class="det-btn-secondary">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                Lihat Unit Lain
            </a>
        </div>
    </div>

</div>
@endsection