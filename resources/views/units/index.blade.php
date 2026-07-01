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
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #4a5568, #718096);">🛤️</div>
                <h3>Jalan Jembatan</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Unit yang bertanggung jawab dalam pemeliharaan dan pengelolaan jalan rel serta jembatan kereta api.</p>
            <div class="unit-card-footer">
                <a href="/units/1" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 2 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #1e3a5f, #3b82f6);">🛡️</div>
                <h3>Pengamanan</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Unit yang bertugas menjaga keamanan dan ketertiban di lingkungan operasional PT KAI.</p>
            <div class="unit-card-footer">
                <a href="/units/2" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 3 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #0f766e, #34d399);">🚃</div>
                <h3>Sarana</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Unit yang mengelola perawatan dan pengoperasian sarana kereta api termasuk lokomotif dan gerbong.</p>
            <div class="unit-card-footer">
                <a href="/units/3" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 4 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #6b21a8, #c084fc);">🎫</div>
                <h3>Akuntan & Fasilitas Penumpang</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Unit yang menangani akuntansi perusahaan serta fasilitas dan pelayanan bagi penumpang kereta api.</p>
            <div class="unit-card-footer">
                <a href="/units/4" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 5 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #b45309, #f59e0b);">📦</div>
                <h3>Angkutan Barang</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Unit yang mengelola layanan angkutan barang dan logistik menggunakan sarana kereta api.</p>
            <div class="unit-card-footer">
                <a href="/units/5" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 6 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #065f46, #10b981);">📋</div>
                <h3>PBJ (Pengendalian Barang & Jasa)</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Unit yang mengelola pengadaan barang dan jasa serta pengendaliannya di lingkungan PT KAI.</p>
            <div class="unit-card-footer">
                <a href="/units/6" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 7 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #7c3aed, #a78bfa);">💰</div>
                <h3>Keuangan</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Administrasi Keuangan, pengelolaan anggaran, dan pelaporan keuangan perusahaan.</p>
            <div class="unit-card-footer">
                <a href="/units/7" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 8 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #0f766e, #34d399);">🚆</div>
                <h3>Operasi</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Unit yang menjalankan dan mengawasi kegiatan operasional perjalanan kereta api.</p>
            <div class="unit-card-footer">
                <a href="/units/8" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 9 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #1e3a5f, #3b82f6);">📡</div>
                <h3>Sinyal & Telekomunikasi (INTEL)</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Unit yang mengelola sistem persinyalan dan telekomunikasi untuk keselamatan perjalanan kereta api.</p>
            <div class="unit-card-footer">
                <a href="/units/9" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 10 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #92400e, #fbbf24);">🏗️</div>
                <h3>Bangunan</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Unit yang bertanggung jawab dalam pembangunan dan pemeliharaan infrastruktur bangunan PT KAI.</p>
            <div class="unit-card-footer">
                <a href="/units/10" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 11 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #155e75, #22d3ee);">📢</div>
                <h3>HUMAS</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Unit Hubungan Masyarakat yang mengelola komunikasi publik, media, dan citra perusahaan.</p>
            <div class="unit-card-footer">
                <a href="/units/11" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 12 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #b45309, #f59e0b);">⚖️</div>
                <h3>Hukum</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Administrasi Hukum, kepatuhan regulasi, dan penanganan aspek legal perusahaan.</p>
            <div class="unit-card-footer">
                <a href="/units/12" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 13 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #4a5568, #9ca3af);">🏛️</div>
                <h3>Aset</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Unit yang mengelola inventarisasi, pemeliharaan, dan optimalisasi aset perusahaan.</p>
            <div class="unit-card-footer">
                <a href="/units/13" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 14 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #00539f, #00a6d6);">👥</div>
                <h3>SDM & Umum</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Administrasi SDM, rekrutmen, pelatihan, dan pengelolaan sumber daya manusia serta urusan umum.</p>
            <div class="unit-card-footer">
                <a href="/units/14" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 15 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge" style="background: linear-gradient(135deg, #0d9488, #5eead4);">🚄</div>
                <h3>LRT</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Unit yang mengelola operasional dan pemeliharaan Layanan Kereta Api Ringan (LRT).</p>
            <div class="unit-card-footer">
                <a href="/units/15" class="unit-link-detail">Lihat Detail</a>
            </div>
        </div>

        {{-- Unit 16 --}}
        <div class="unit-item-card">
            <div class="unit-card-top">
                <div class="unit-icon-badge">💻</div>
                <h3>Sistem Informasi</h3>
            </div>
            <span class="unit-quota-badge">Kuota: Tersedia</span>
            <p>Pengembangan Aplikasi, Database, dan IT Support untuk mendukung operasional perusahaan.</p>
            <div class="unit-card-footer">
                <a href="/units/16" class="unit-link-detail">Lihat Detail</a>
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