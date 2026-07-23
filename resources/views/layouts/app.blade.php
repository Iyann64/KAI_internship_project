<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Program Magang PT KAI')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/unit.css') }}">
    @stack('styles')
</head>
<body>

    {{-- NAVBAR --}}
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="nav-logo">
                <div class="logo-box">
                    <img src="{{ asset('images/logo-KAI.png') }}" alt="Logo KAI" class="nav-logo-img">
                </div>
                <p class="nav-title" style="font-weight: bold; font-style: italic; color: navy;">Internship Program</p>      
            </a>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">Tentang</a></li>
                <li><a href="/units" class="{{ request()->is('units*') ? 'active' : '' }}">Unit Magang</a></li>
                <li><a href="/pendaftaran" class="{{ request()->is('pendaftaran*') ? 'active' : '' }}">Pendaftaran</a></li>
                <li><a href="/cek-status" class="{{ request()->is('cek-status') ? 'active' : '' }}">Cek Status</a></li>
                <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Kontak</a></li>
            </ul>
            <div class="nav-actions">
                <a href="{{ route('login') }}" class="btn-masuk">MASUK</a>
                <a href="{{ route('register') }}" class="btn-daftar">DAFTAR</a>
                <a href="/pendaftaran/step1-data-diri" class="btn-daftar">DAFTAR MAGANG</a>
            </div>
            <button class="hamburger" id="hamburger" onclick="toggleMobile()">
                <span></span><span></span><span></span>
            </button>
        </div>
            <div class="mobile-menu" id="mobileMenu">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="/about">Tentang</a>
            <a href="/units">Unit Magang</a>
            <a href="/pendaftaran">Pendaftaran</a>
            <a href="/cek-status">Cek Status</a>
            <a href="/contact">Kontak</a>
            <div class="mobile-actions">
                <a href="{{ route('login') }}" class="btn-masuk">MASUK</a>
                <a href="{{ route('register') }}" class="btn-daftar">DAFTAR</a>
                <a href="/pendaftaran/step1-data-diri" class="btn-daftar">DAFTAR MAGANG</a>
            </div>
        </div>
    </nav>

    {{-- CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- MODAL UNIT MAGANG (Frame 2) --}}
    <div class="modal-overlay" id="unitModal" onclick="closeUnitModal(event)">
        <div class="modal-box">
            <button class="modal-close" onclick="closeUnitModal(null, true)">&#x2715;</button>
            <h2 class="modal-title">Unit Magang</h2>
            <p class="modal-sub">pilih unit kerja sesuai minat dan kopetensi anda</p>
            <div class="unit-grid">
                <div class="unit-card" onclick="openDetailModal('si')">
                    <div class="unit-icon">🖥️</div>
                    <h3>Sistem Informasi</h3>
                    <span class="kuota-badge">Kuota: 10</span>
                    <p>Pengembangan Aplikasi, Databases Dan IT Support.</p>
                    <span class="lihat-detail">Lihat Detail →</span>
                </div>
                <div class="unit-card" onclick="openDetailModal('sdm')">
                    <div class="unit-icon">👥</div>
                    <h3>SDM (Human capital)</h3>
                    <span class="kuota-badge">Kuota: 6</span>
                    <p>Administrasi SDM, rekrutmen, pelatihan, dan pengembangan.</p>
                    <span class="lihat-detail">Lihat Detail →</span>
                </div>
                <div class="unit-card" onclick="openDetailModal('ops')">
                    <div class="unit-icon">🚆</div>
                    <h3>Operasional</h3>
                    <span class="kuota-badge">Kuota: 12</span>
                    <p>Mendukung kegiatan Operasional kereta API.</p>
                    <span class="lihat-detail">Lihat Detail →</span>
                </div>
                <div class="unit-card" onclick="openDetailModal('keu')">
                    <div class="unit-icon">💰</div>
                    <h3>Keuangan</h3>
                    <span class="kuota-badge">Kuota: 8</span>
                    <p>Administrasi Keuangan, anggaran dan pelaporan.</p>
                    <span class="lihat-detail">Lihat Detail →</span>
                </div>
                <div class="unit-card" onclick="openDetailModal('huk')">
                    <div class="unit-icon">⚖️</div>
                    <h3>Hukum</h3>
                    <span class="kuota-badge">Kuota: 6</span>
                    <p>Administrasi Hukum dan kepatuhan perusahaan.</p>
                    <span class="lihat-detail">Lihat Detail →</span>
                </div>
                <div class="unit-card" onclick="openDetailModal('tjsl')">
                    <div class="unit-icon">📣</div>
                    <h3>Komunikasi & TJSL</h3>
                    <span class="kuota-badge">Kuota: 15</span>
                    <p>Komunikasi perusahaan & tanggung jawab sosial.</p>
                    <span class="lihat-detail">Lihat Detail →</span>
                </div>
            </div>
            <div style="text-align:center; margin-top: 24px;">
                <button class="btn-semua">Lihat Semua lowongan</button>
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL UNIT (Frame 3) --}}
    <div class="modal-overlay" id="detailModal" onclick="closeDetailModal(event)">
        <div class="modal-box modal-detail">
            <button class="modal-close" onclick="closeDetailModal(null, true)">&#x2715;</button>
            <div class="breadcrumb">Beranda &gt; Unit magang &gt; <span id="detailBreadcrumb">Sistem informasi</span></div>
            <div class="detail-header">
                <div>
                    <h2 class="detail-title" id="detailTitle">SISTEM INFORMASI</h2>
                    <p class="detail-kuota" id="detailKuota">Kuota : 10 Mahasiswa</p>
                    <p class="detail-desc" id="detailDesc">Unit Sistem informasi bertanggung jawab dalam pengembangan sistem, pengelolaan data, infrastruktur IT dan layanan teknologi informasi di lingkungan PT KAI</p>
                </div>
                <div class="detail-img-box" id="detailImgBox">
                    <span id="detailImgLabel">Teknologi Informasi</span>
                </div>
            </div>
            <div class="detail-body">
                <div class="kualifikasi-box">
                    <h4>KUALIFIKASI</h4>
                    <ul id="detailKualifikasi">
                        <li>✅ Siswa/Mahasiswa aktif</li>
                        <li>✅ Jurusan Informasi/Informatika / Jurusan Informatika/Teknik Komputer</li>
                        <li>✅ Ipk Minimal 3.00</li>
                        <li>✅ Memahami Dasar Programan</li>
                        <li>✅ Bersedia magang sesuai peraturan KAI dan janji unit sistem informasi</li>
                    </ul>
                </div>
                <div class="dokumen-box" id="dokumen-modal">
                    <h4>DOKUMEN PERSYARATAN PENGAJUAN</h4>
                    <ul>
                        <li>📄 Surat pengantar dari kampus</li>
                        <li>📄 Kartu tanda mahasiswa (KTM)</li>
                        <li>📄 Proposal magang</li>
                        <li>📄 Dokumen pendukung pengajuan terbaru</li>
                        <li>📄 Transkrip nilai</li>
                    </ul>
                </div>
            </div>
            <div style="text-align:center; margin-top: 28px;">
                <button class="btn-daftar-unit">DAFTAR PADA UNIT INI</button>
            </div>
        </div>
    </div>

    {{-- FOOTER --}}
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <div class="logo-box footer-logo">
                    <img src="{{ asset('images/logo-KAI.png') }}" alt="Logo KAI" class="footer-logo-img">
                </div>
                <p>Drive III Palembang</p>
            </div>
            <div class="footer-center">
                <p>PPD PT kereta Api Indonesia (persero) © 2025. All Rights Reserved</p>
            </div>
            <div class="footer-right">
                <div class="socials">
                    <a href="#">𝕏</a>
                    <a href="#">f</a>
                    <a href="#">▶</a>
                    <a href="#">in</a>
                    <a href="#">💬</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
