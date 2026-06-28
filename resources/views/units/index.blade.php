@extends('layouts.app')

@section('title', 'Unit Magang - PT Kereta Api Indonesia')

@section('content')
<div class="container section">

    {{-- Hero Section --}}
    <section class="contact-hero" style="margin-bottom: 40px;">
        <p class="hero-eyebrow" style="margin: 0 auto 16px;">UNIT MAGANG</p>
        <h1>Unit Magang</h1>
        <p>Pilih unit kerja sesuai minat, bakat, dan kompetensi Anda untuk memulai perjalanan karier bersama PT Kereta Api Indonesia</p>
    </section>

    {{-- Search Filter --}}
    <div class="filter-section filter-section-enhanced">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        <input type="text" id="searchUnits" placeholder="Cari unit magang...">
        <button class="btn-filter">Cari</button>
    </div>

    {{-- Units Grid --}}
    <div class="units-card-grid" id="unitsGrid">
        {{-- Unit 1 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge">💻</div>
                <h3>Sistem Informasi</h3>
            </div>
            <span class="unit-quota-badge">Kuota: 10 Mahasiswa</span>
            <p>Pengembangan Aplikasi, Database, dan IT Support untuk mendukung operasional perusahaan.</p>
            <div class="unit-card-footer">
                <a href="/units/1" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 2 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #00539f, #00a6d6);">👥</div>
                <h3>SDM (Human Capital)</h3>
            </div>
            <span class="unit-quota-badge">Kuota: 6 Mahasiswa</span>
            <p>Administrasi SDM, rekrutmen, pelatihan, dan pengembangan sumber daya manusia.</p>
            <div class="unit-card-footer">
                <a href="/units/2" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 3 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #0f766e, #34d399);">🚆</div>
                <h3>Operasional</h3>
            </div>
            <span class="unit-quota-badge">Kuota: 12 Mahasiswa</span>
            <p>Mendukung kegiatan Operasional kereta api dan memastikan kelancaran pelayanan.</p>
            <div class="unit-card-footer">
                <a href="/units/3" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 4 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #7c3aed, #a78bfa);">💰</div>
                <h3>Keuangan</h3>
            </div>
            <span class="unit-quota-badge">Kuota: 8 Mahasiswa</span>
            <p>Administrasi Keuangan, pengelolaan anggaran, dan pelaporan keuangan perusahaan.</p>
            <div class="unit-card-footer">
                <a href="/units/4" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 5 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #b45309, #f59e0b);">⚖️</div>
                <h3>Hukum</h3>
            </div>
            <span class="unit-quota-badge">Kuota: 6 Mahasiswa</span>
            <p>Administrasi Hukum, kepatuhan regulasi, dan penanganan aspek legal perusahaan.</p>
            <div class="unit-card-footer">
                <a href="/units/5" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 6 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #155e75, #22c55e);">📣</div>
                <h3>Komunikasi & TJSL</h3>
            </div>
            <span class="unit-quota-badge">Kuota: 15 Mahasiswa</span>
            <p>Komunikasi perusahaan, hubungan publik, dan tanggung jawab sosial perusahaan.</p>
            <div class="unit-card-footer">
                <a href="/units/6" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>
    </div>

    {{-- Info Box --}}
    <div class="info-box-enhanced">
        <div class="info-box-icon">💡</div>
        <div class="info-box-content">
            <h4>Tips Memilih Unit</h4>
            <ul>
                <li>Pilih unit yang sesuai dengan jurusan dan minat Anda</li>
                <li>Pertimbangkan pengalaman dan keterampilan yang ingin dikembangkan</li>
                <li>Persiapkan dokumen persyaratan sesuai unit pilihan</li>
                <li>Hubungi tim HR untuk konsultasi lebih lanjut</li>
            </ul>
        </div>
    </div>

</div>

<script>
    document.getElementById('searchUnits').addEventListener('keyup', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        document.querySelectorAll('.unit-item-card').forEach(card => {
            const text = card.textContent.toLowerCase();
            card.style.display = text.includes(searchTerm) ? 'block' : 'none';
        });
    });
</script>
@endsection