<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::view('/units', 'units.index');
Route::get('/units/{unit}', function ($unitId) {
    $units = [
        '1' => [
            'id' => '1',
            'name' => 'Sistem Informasi',
            'emoji' => '💻',
            'kuota' => '10 Mahasiswa',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Jakarta Pusat',
            'tunjangan' => 'Rp 1.500.000',
            'jenis' => 'Full-time',
            'desc' => 'Unit Sistem Informasi bertanggung jawab dalam pengembangan sistem, pengelolaan data, infrastruktur IT, dan layanan teknologi informasi di lingkungan PT Kereta Api Indonesia (Persero).',
            'highlights' => [
                'Pengembangan Aplikasi Enterprise',
                'Database Design & Management',
                'IT Infrastructure & Networking',
                'Cybersecurity & Data Protection',
                'Technical Support & Troubleshooting'
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Informatika/Teknik Informatika/Teknik Komputer',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami dasar pemrograman (PHP, JavaScript, SQL)',
                'Bersedia magang sesuai peraturan dan jadwal yang ditentukan'
            ],
            'dokumen' => [
                '📄 Surat pengantar dari kampus/universitas',
                '🪪 Kartu Tanda Mahasiswa (KTM) aktif',
                '📝 Proposal magang sesuai format yang ditentukan',
                '📄 Curriculum Vitae (CV) terbaru',
                '📊 Transkrip nilai akademik'
            ],
            'benefit' => [
                'Pengalaman kerja langsung di perusahaan BUMN terkemuka',
                'Mentoring dan bimbingan dari profesional berpengalaman',
                'Tunjangan bulanan selama masa magang',
                'Sertifikat resmi dari PT Kereta Api Indonesia (Persero)',
                'Kesempatan mengikuti program rekrutmen karyawan tetap'
            ],
            'gallery' => [
                ['emoji' => '🖥️', 'label' => 'Database', 'color' => '#FF6B00'],
                ['emoji' => '🔒', 'label' => 'Keamanan', 'color' => '#0047B8'],
                ['emoji' => '☁️', 'label' => 'Cloud', 'color' => '#0f766e'],
                ['emoji' => '📊', 'label' => 'Analytics', 'color' => '#7c3aed']
            ],
            'gradient' => 'linear-gradient(135deg, #003087 0%, #0047B8 40%, #FF6B00 100%)',
            'img_gradient' => 'linear-gradient(135deg, #1a1a3e, #003087)',
            'img_label' => 'IT Development'
        ],
        '2' => [
            'id' => '2',
            'name' => 'SDM (Human Capital)',
            'emoji' => '👥',
            'kuota' => '6 Mahasiswa',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Jakarta Pusat',
            'tunjangan' => 'Rp 1.500.000',
            'jenis' => 'Full-time',
            'desc' => 'Unit SDM (Human Capital) bertanggung jawab dalam administrasi kepegawaian, rekrutmen, pelatihan, dan pengembangan sumber daya manusia di lingkungan PT Kereta Api Indonesia (Persero).',
            'highlights' => [
                'Administrasi SDM & Kepegawaian',
                'Rekrutmen & Seleksi Karyawan',
                'Pelatihan & Pengembangan',
                'Manajemen Kinerja',
                'Hubungan Industrial'
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Manajemen SDM / Psikologi / Administrasi Bisnis',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami dasar manajemen SDM',
                'Bersedia magang sesuai peraturan KAI'
            ],
            'dokumen' => [
                '📄 Surat pengantar dari kampus/universitas',
                '🪪 Kartu Tanda Mahasiswa (KTM) aktif',
                '📝 Proposal magang',
                '📄 Curriculum Vitae (CV) terbaru',
                '📊 Transkrip nilai'
            ],
            'benefit' => [
                'Pengalaman HR di perusahaan BUMN',
                'Mentoring dari praktisi HR profesional',
                'Tunjangan bulanan selama magang',
                'Sertifikat resmi PT KAI',
                'Kesempatan karier di lingkungan KAI'
            ],
            'gallery' => [
                ['emoji' => '📋', 'label' => 'Rekrutmen', 'color' => '#00539f'],
                ['emoji' => '📚', 'label' => 'Pelatihan', 'color' => '#0f766e'],
                ['emoji' => '🤝', 'label' => 'Hub. Industrial', 'color' => '#7c3aed'],
                ['emoji' => '📈', 'label' => 'Kinerja', 'color' => '#b45309']
            ],
            'gradient' => 'linear-gradient(135deg, #00539f 0%, #00a6d6 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #003087, #00539f)',
            'img_label' => 'Human Capital'
        ],
        '3' => [
            'id' => '3',
            'name' => 'Operasional',
            'emoji' => '🚆',
            'kuota' => '12 Mahasiswa',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Jakarta Pusat',
            'tunjangan' => 'Rp 1.500.000',
            'jenis' => 'Full-time',
            'desc' => 'Unit Operasional bertanggung jawab dalam mendukung dan memastikan kelancaran operasional kereta api di lingkungan PT Kereta Api Indonesia Divre III Palembang.',
            'highlights' => [
                'Manajemen Operasional Kereta Api',
                'Pengaturan Jadwal Perjalanan',
                'Koordinasi Stasiun & Depo',
                'Keselamatan & Keamanan Perjalanan',
                'Pelayanan Pelanggan'
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Teknik Perkeretaapian / Transportasi / Teknik Mesin',
                'IPK Minimal 2.80 dari skala 4.00',
                'Memahami operasional transportasi',
                'Bersedia magang sesuai peraturan KAI'
            ],
            'dokumen' => [
                '📄 Surat pengantar dari kampus',
                '🪪 KTM aktif',
                '📝 Proposal magang',
                '📄 CV terbaru',
                '📊 Transkrip nilai'
            ],
            'benefit' => [
                'Pengalaman operasional lapangan',
                'Bimbingan dari ahli operasional',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Jaringan profesional transportasi'
            ],
            'gallery' => [
                ['emoji' => '🚉', 'label' => 'Stasiun', 'color' => '#0f766e'],
                ['emoji' => '🛤️', 'label' => 'Jalur KA', 'color' => '#003087'],
                ['emoji' => '⏱️', 'label' => 'Jadwal', 'color' => '#b45309'],
                ['emoji' => '🛡️', 'label' => 'Keselamatan', 'color' => '#7c3aed']
            ],
            'gradient' => 'linear-gradient(135deg, #0f766e 0%, #34d399 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #0f766e, #34d399)',
            'img_label' => 'Operasional KA'
        ],
        '4' => [
            'id' => '4',
            'name' => 'Keuangan',
            'emoji' => '💰',
            'kuota' => '8 Mahasiswa',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Jakarta Pusat',
            'tunjangan' => 'Rp 1.500.000',
            'jenis' => 'Full-time',
            'desc' => 'Unit Keuangan bertanggung jawab dalam administrasi keuangan perusahaan, pengelolaan anggaran, serta pelaporan keuangan di lingkungan PT Kereta Api Indonesia (Persero).',
            'highlights' => [
                'Administrasi Keuangan Perusahaan',
                'Pengelolaan Anggaran',
                'Pelaporan Keuangan',
                'Audit Internal',
                'Perpajakan'
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Akuntansi / Keuangan / Ekonomi',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami dasar akuntansi dan keuangan',
                'Bersedia magang sesuai peraturan KAI'
            ],
            'dokumen' => [
                '📄 Surat pengantar dari kampus',
                '🪪 KTM aktif',
                '📝 Proposal magang',
                '📄 CV terbaru',
                '📊 Transkrip nilai'
            ],
            'benefit' => [
                'Pengalaman keuangan perusahaan BUMN',
                'Mentoring dari profesional keuangan',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Kesempatan karier di bidang finance'
            ],
            'gallery' => [
                ['emoji' => '📊', 'label' => 'Akuntansi', 'color' => '#7c3aed'],
                ['emoji' => '📋', 'label' => 'Anggaran', 'color' => '#b45309'],
                ['emoji' => '📑', 'label' => 'Pelaporan', 'color' => '#003087'],
                ['emoji' => '🔍', 'label' => 'Audit', 'color' => '#0f766e']
            ],
            'gradient' => 'linear-gradient(135deg, #7c3aed 0%, #a78bfa 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #7c3aed, #a78bfa)',
            'img_label' => 'Finance'
        ],
        '5' => [
            'id' => '5',
            'name' => 'Hukum',
            'emoji' => '⚖️',
            'kuota' => '6 Mahasiswa',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Jakarta Pusat',
            'tunjangan' => 'Rp 1.500.000',
            'jenis' => 'Full-time',
            'desc' => 'Unit Hukum bertanggung jawab dalam administrasi hukum, kepatuhan regulasi, dan penanganan aspek legal perusahaan di lingkungan PT Kereta Api Indonesia (Persero).',
            'highlights' => [
                'Administrasi Hukum Perusahaan',
                'Kepatuhan Regulasi',
                'Kontrak & Perjanjian',
                'Litigasi & Mediasi',
                'Legal Opinion & Advisory'
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Hukum / Ilmu Hukum',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami hukum perusahaan dan regulasi',
                'Bersedia magang sesuai peraturan KAI'
            ],
            'dokumen' => [
                '📄 Surat pengantar dari kampus',
                '🪪 KTM aktif',
                '📝 Proposal magang',
                '📄 CV terbaru',
                '📊 Transkrip nilai'
            ],
            'benefit' => [
                'Pengalaman legal di perusahaan BUMN',
                'Bimbingan dari legal profesional',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Jaringan profesional hukum'
            ],
            'gallery' => [
                ['emoji' => '📜', 'label' => 'Legal', 'color' => '#b45309'],
                ['emoji' => '⚖️', 'label' => 'Litigasi', 'color' => '#7c3aed'],
                ['emoji' => '📝', 'label' => 'Kontrak', 'color' => '#003087'],
                ['emoji' => '🔏', 'label' => 'Kepatuhan', 'color' => '#0f766e']
            ],
            'gradient' => 'linear-gradient(135deg, #b45309 0%, #f59e0b 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #b45309, #f59e0b)',
            'img_label' => 'Legal'
        ],
        '6' => [
            'id' => '6',
            'name' => 'Komunikasi & TJSL',
            'emoji' => '📣',
            'kuota' => '15 Mahasiswa',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Jakarta Pusat',
            'tunjangan' => 'Rp 1.500.000',
            'jenis' => 'Full-time',
            'desc' => 'Unit Komunikasi & TJSL bertanggung jawab dalam komunikasi perusahaan, hubungan publik, dan tanggung jawab sosial perusahaan di lingkungan PT Kereta Api Indonesia (Persero).',
            'highlights' => [
                'Komunikasi Perusahaan',
                'Hubungan Masyarakat',
                'Media & Publikasi',
                'Tanggung Jawab Sosial',
                'Branding & Promosi'
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Ilmu Komunikasi / Public Relations / Jurnalistik',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami dasar komunikasi perusahaan',
                'Bersedia magang sesuai peraturan KAI'
            ],
            'dokumen' => [
                '📄 Surat pengantar dari kampus',
                '🪪 KTM aktif',
                '📝 Proposal magang',
                '📄 CV terbaru',
                '📊 Transkrip nilai'
            ],
            'benefit' => [
                'Pengalaman komersial di BUMN',
                'Mentoring dari profesional komunikasi',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Kesempatan karier di bidang komunikasi'
            ],
            'gallery' => [
                ['emoji' => '📡', 'label' => 'Media', 'color' => '#003087'],
                ['emoji' => '🤝', 'label' => 'CSR', 'color' => '#0f766e'],
                ['emoji' => '📱', 'label' => 'Digital', 'color' => '#7c3aed'],
                ['emoji' => '🎯', 'label' => 'Branding', 'color' => '#b45309']
            ],
            'gradient' => 'linear-gradient(135deg, #155e75 0%, #22c55e 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #155e75, #22c55e)',
            'img_label' => 'Komunikasi'
        ]
    ];

    if (!isset($units[$unitId])) {
        abort(404);
    }

    return view('units.detail', ['unit' => $units[$unitId]]);
});
Route::view('/pendaftaran', 'pendaftaran.index');
Route::view('/pendaftaran/step1-data-diri', 'pendaftaran.step1-data-diri');
Route::view('/pendaftaran/step1', 'pendaftaran.step1-data-diri');
Route::view('/pendaftaran/step2', 'pendaftaran.step2-data-akademik');
Route::view('/pendaftaran/step3', 'pendaftaran.step3-pilih-unit');
Route::view('/pendaftaran/step4', 'pendaftaran.step4-upload-berkas');
Route::view('/pendaftaran/step5', 'pendaftaran.step5-verifikasi');
Route::view('/pendaftaran/success', 'pendaftaran.success');
Route::view('/contact', 'contact');
Route::view('/about', 'pages.about');
