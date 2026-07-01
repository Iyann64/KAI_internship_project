@extends('layouts.app')

@section('title', $unit['name'] . ' - Detail Unit Magang - PT Kereta Api Indonesia')

@section('content')
<div class="container section">

    {{-- BREADCRUMB --}}
    <nav class="det-breadcrumb">
        <a href="{{ route('home') }}">Beranda</a>
        <span class="det-sep">›</span>
        <a href="/units">Unit Magang</a>
        <span class="det-sep">›</span>
        <span class="det-current">{{ $unit['name'] }}</span>
    </nav>

    {{-- 1. HERO SECTION --}}
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

    {{-- 2. TENTANG UNIT --}}
    <div class="det-about">
        <div class="det-about-text">
            <div class="det-section-label">TENTANG UNIT</div>
            <h2>{{ $unit['name'] }}</h2>
            <p>{{ $unit['desc'] }}</p>
            <p>Bergabunglah dengan tim {{ $unit['name'] }} KAI dan dapatkan pengalaman langsung dalam mengembangkan potensi Anda di lingkungan PT Kereta Api Indonesia (Persero) Divre III Palembang.</p>
        </div>
        <div class="det-about-img">
            <div class="det-img-box" style="background: {{ $unit['img_gradient'] ?? 'linear-gradient(135deg, #1a1a3e, #003087)' }};">
                <span class="det-img-emoji">{{ $unit['emoji'] }}</span>
                <span class="det-img-label">{{ $unit['img_label'] ?? 'Internship' }}</span>
            </div>
        </div>
    </div>

    {{-- 3. STATISTIK UNIT --}}
    @if(isset($unit['statistik']))
    <div class="det-section">
        <div class="det-section-label">STATISTIK UNIT</div>
        <h2 class="det-section-title">Data & Statistik</h2>
        <div class="det-stats-grid">
            @foreach($unit['statistik'] as $stat)
            <div class="det-stat-card">
                <span class="det-stat-card-number">{{ $stat['angka'] }}</span>
                <span class="det-stat-card-label">{{ $stat['label'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    {{-- 4. VISI & MISI --}}
    @if(isset($unit['visi']) || isset($unit['misi']))
    <div class="det-section">
        <div class="det-section-label">VISI & MISI</div>
        <h2 class="det-section-title">Visi dan Misi {{ $unit['name'] }}</h2>
        <div class="det-vm-grid">
            @if(isset($unit['visi']))
            <div class="det-vm-card">
                <div class="det-vm-icon">🎯</div>
                <h3>Visi</h3>
                <p>{{ $unit['visi'] }}</p>
            </div>
            @endif
            @if(isset($unit['misi']))
            <div class="det-vm-card">
                <div class="det-vm-icon">📋</div>
                <h3>Misi</h3>
                <ul class="det-list">
                    @foreach($unit['misi'] as $item)
                    <li><span class="det-check">✓</span> {{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
    @endif

    {{-- 5. TUGAS DAN TANGGUNG JAWAB --}}
    @if(isset($unit['tugas']))
    <div class="det-section">
        <div class="det-section-label">TUGAS & TANGGUNG JAWAB</div>
        <h2 class="det-section-title">Apa Yang Dilakukan Unit Ini</h2>
        <div class="det-grid-2col">
            @foreach($unit['tugas'] as $index => $tugas)
            <div class="det-task-card">
                <span class="det-task-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                <div>
                    <h4>{{ $tugas }}</h4>
                    <p>{{ $unit['tugas_desc'][$index] ?? 'Bertanggung jawab dalam pelaksanaan tugas ini sesuai prosedur yang berlaku.' }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    {{-- 6. AKTIVITAS HARIAN --}}
    @if(isset($unit['aktivitas_harian']))
    <div class="det-section">
        <div class="det-section-label">AKTIVITAS HARIAN</div>
        <h2 class="det-section-title">Kegiatan Sehari-hari</h2>
        <div class="det-timeline-alt">
            @foreach($unit['aktivitas_harian'] as $index => $aktivitas)
            <div class="det-timeline-item-alt">
                <div class="det-timeline-time">{{ $aktivitas['waktu'] ?? 'Jam ke-' . ($index + 1) }}</div>
                <div class="det-timeline-dot-alt"></div>
                <div class="det-timeline-content-alt">
                    <h4>{{ $aktivitas['aktivitas'] }}</h4>
                    <p>{{ $aktivitas['deskripsi'] ?? '' }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    {{-- 7. TEKNOLOGI & PERALATAN --}}
    @if(isset($unit['teknologi']))
    <div class="det-section">
        <div class="det-section-label">TEKNOLOGI & PERALATAN</div>
        <h2 class="det-section-title">Peralatan & Teknologi yang Digunakan</h2>
        <div class="det-tech-grid">
            @foreach($unit['teknologi'] as $tech)
            <div class="det-tech-card">
                <span class="det-tech-icon">{{ $tech['icon'] ?? '🔧' }}</span>
                <h4>{{ $tech['nama'] }}</h4>
                <p>{{ $tech['deskripsi'] ?? '' }}</p>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    {{-- 8. PROGRAM MAGANG --}}
    @if(isset($unit['program_magang']))
    <div class="det-section">
        <div class="det-section-label">PROGRAM MAGANG</div>
        <h2 class="det-section-title">Program Magang di {{ $unit['name'] }}</h2>
        <div class="det-program-card">
            <div class="det-program-header">
                <span class="det-program-icon">{{ $unit['emoji'] }}</span>
                <div>
                    <h3>Program Magang {{ $unit['name'] }}</h3>
                    <p>{{ $unit['program_magang']['deskripsi'] ?? 'Program magang yang dirancang untuk memberikan pengalaman kerja nyata.' }}</p>
                </div>
            </div>
            <div class="det-program-grid">
                @foreach($unit['program_magang']['poin'] ?? [] as $poin)
                <div class="det-program-poin">
                    <span class="det-check">✓</span>
                    <span>{{ $poin }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    {{-- 9. TIMELINE KEGIATAN MAGANG --}}
    @if(isset($unit['timeline']))
    <div class="det-section">
        <div class="det-section-label">TIMELINE KEGIATAN MAGANG</div>
        <h2 class="det-section-title">Alur Kegiatan Magang</h2>
        <div class="det-timeline">
            @foreach($unit['timeline'] as $index => $tahap)
            <div class="det-timeline-item">
                <div class="det-timeline-marker">
                    <span class="det-timeline-step">{{ $index + 1 }}</span>
                </div>
                <div class="det-timeline-content">
                    <h4>{{ $tahap['judul'] ?? $tahap }}</h4>
                    <p>{{ $tahap['deskripsi'] ?? '' }}</p>
                    @if(isset($tahap['durasi']))
                    <span class="det-timeline-durasi">⏱️ {{ $tahap['durasi'] }}</span>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    {{-- 10. KOMPETENSI YANG AKAN DIPELAJARI --}}
    @if(isset($unit['kompetensi']))
    <div class="det-section">
        <div class="det-section-label">KOMPETENSI</div>
        <h2 class="det-section-title">Kompetensi yang Akan Dipelajari</h2>
        <div class="det-comp-grid">
            @foreach($unit['kompetensi'] as $kompetensi)
            <div class="det-comp-card">
                <span class="det-comp-icon">{{ $kompetensi['icon'] ?? '⭐' }}</span>
                <h4>{{ $kompetensi['nama'] ?? $kompetensi }}</h4>
                <p>{{ $kompetensi['deskripsi'] ?? '' }}</p>
                <div class="det-comp-level">
                    <div class="det-comp-bar">
                        <div class="det-comp-fill" style="width: {{ $kompetensi['level'] ?? '80%' }}"></div>
                    </div>
                    <span>{{ $kompetensi['level_label'] ?? 'Menengah' }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    {{-- 11. GALERI --}}
    @if(isset($unit['gallery']))
    <div class="det-section">
        <div class="det-section-label">GALERI</div>
        <h2 class="det-section-title">Galeri Unit</h2>
        <div class="det-gallery">
            @foreach($unit['gallery'] as $item)
            <div class="det-gallery-item" @if(isset($item['color'])) style="background: {{ $item['color'] }};" @endif>
                @if(isset($item['img']))
                    <img src="{{ $item['img'] }}" alt="{{ $item['label'] }}" class="det-gal-img">
                @else
                    <span class="det-gal-emoji">{{ $item['emoji'] ?? '🖼️' }}</span>
                @endif
                <span class="det-gal-label">{{ $item['label'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    {{-- 12. FAQ --}}
    @if(isset($unit['faq']))
    <div class="det-section">
        <div class="det-section-label">FAQ</div>
        <h2 class="det-section-title">Pertanyaan Umum</h2>
        <div class="det-faq">
            @foreach($unit['faq'] as $index => $item)
            <div class="det-faq-item">
                <div class="det-faq-question" onclick="toggleFaq(this)">
                    <span class="det-faq-q">Q{{ $index + 1 }}</span>
                    <h4>{{ $item['tanya'] ?? $item['pertanyaan'] ?? '' }}</h4>
                    <span class="det-faq-toggle">+</span>
                </div>
                <div class="det-faq-answer">
                    <p>{{ $item['jawab'] ?? $item['jawaban'] ?? '' }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    {{-- 13. PERSYARATAN, BENEFIT, DOKUMEN (Horizontal 3 kolom) --}}
    <div class="det-section">
        <div class="det-section-label">PERSYARATAN</div>
        <h2 class="det-section-title">Syarat, Benefit & Dokumen</h2>
        <div class="det-card-row">
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
        </div>
    </div>

    {{-- CTA FOOTER --}}
    <div class="det-cta">
        <div class="det-cta-text">
            <h2>Tertarik Bergabung di {{ $unit['name'] }}?</h2>
            <p>Daftarkan diri Anda sekarang dan mulailah perjalanan karier bersama PT Kereta Api Indonesia</p>
        </div>
        <div class="det-cta-actions">
            <a href="/pendaftaran/step1-data-diri" class="det-btn-primary">
                Daftar Sekarang
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
            <a href="/units" class="det-btn-secondary">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                Lihat Unit Lain
            </a>
        </div>
    </div>

    {{-- Bantuan --}}
    <div class="det-help">
        <span class="det-help-icon">❓</span>
        <h4>Butuh Bantuan?</h4>
        <p>Hubungi tim HR kami untuk informasi lebih lanjut tentang program magang di unit {{ $unit['name'] }} dan proses pendaftaran.</p>
        <a href="/contact" class="det-help-link">Hubungi Kami →</a>
    </div>

</div>

<script>
function toggleFaq(element) {
    element.classList.toggle('active');
    const answer = element.nextElementSibling;
    const toggle = element.querySelector('.det-faq-toggle');
    if (answer.style.maxHeight) {
        answer.style.maxHeight = null;
        toggle.textContent = '+';
    } else {
        answer.style.maxHeight = answer.scrollHeight + 'px';
        toggle.textContent = '−';
    }
}
</script>
@endsection