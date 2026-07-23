<?php

use Illuminate\Support\Facades\Route;

// ============ AUTH ROUTES ============
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// ============ PAGE ROUTES ============
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::view('/units', 'units.index');
Route::get('/units/{unit}', function ($unitId) {
    $units = [
        '1' => [
            'id' => '1',
            'name' => 'Jalan Jembatan',
            'emoji' => '🛤️',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit Jalan Jembatan bertanggung jawab dalam pemeliharaan dan pengelolaan jalan rel serta jembatan kereta api untuk memastikan keselamatan dan kelancaran perjalanan kereta api.',
            'visi' => 'Menjadi unit infrastruktur perkeretaapian yang unggul dalam pemeliharaan dan pengelolaan jalan rel serta jembatan untuk mendukung keselamatan dan kelancaran operasional kereta api.',
            'misi' => [
                'Melaksanakan pemeliharaan jalan rel secara berkala dan terencana',
                'Mengelola inspeksi dan perawatan jembatan kereta api',
                'Menerapkan teknologi modern dalam pengelolaan geometri jalan rel',
                'Menjaga standar keselamatan infrastruktur perkeretaapian',
                'Mengembangkan kompetensi SDM di bidang infrastruktur'
            ],
            'tugas' => [
                'Pemeliharaan Jalan Rel',
                'Inspeksi & Perawatan Jembatan',
                'Pengelolaan Geometri Jalan Rel',
                'Pengendalian Mutu Infrastruktur',
                'Keselamatan Infrastruktur Perkeretaapian'
            ],
            'tugas_desc' => [
                'Melakukan pemeliharaan rutir dan pemeliharaan besar jalan rel untuk memastikan kualitas perkeretaapian',
                'Menginspeksi dan memperbaiki jembatan kereta api secara berkala',
                'Mengelola dan mengontrol geometri jalan rel sesuai standar',
                'Melakukan pengendalian mutu terhadap material dan pekerjaan infrastruktur',
                'Memastikan keselamatan infrastruktur untuk operasional kereta api'
            ],
            'dokumen' => [
                '📄 Surat pengantar dari kampus/universitas',
                '🪪 Kartu Tanda Mahasiswa (KTM) aktif',
                '📝 Proposal magang sesuai format yang ditentukan',
                '📄 Dokumen pendukung pengajuan terbaru',
                '📊 Transkrip nilai akademik'
            ],
            'aktivitas_harian' => [
                ['waktu' => '07:00 - 08:00', 'aktivitas' => 'Briefing & Persiapan Alat', 'deskripsi' => 'Rapat singkat tim dan persiapan peralatan untuk pekerjaan hari ini.'],
                ['waktu' => '08:00 - 10:00', 'aktivitas' => 'Inspeksi Jalan Rel', 'deskripsi' => 'Melakukan pengecekan kondisi jalan rel di seksi yang ditentukan.'],
                ['waktu' => '10:00 - 12:00', 'aktivitas' => 'Pemeliharaan Infrastruktur', 'deskripsi' => 'Melakukan perbaikan dan pemeliharaan jalan rel serta jembatan.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Pengecekan Kembali', 'deskripsi' => 'Melakukan pengecekan ulang area yang telah diperbaiki.'],
                ['waktu' => '15:00 - 16:30', 'aktivitas' => 'Pelaporan & Dokumentasi', 'deskripsi' => 'Mendokumentasikan hasil pekerjaan dan menyusun laporan harian.']
            ],
            'teknologi' => [
                ['icon' => '🔧', 'nama' => 'Alat Pemeliharaan Rel', 'deskripsi' => 'Perkakas dan mesin untuk perbaikan jalan rel.'],
                ['icon' => '🚗', 'nama' => 'Kendaraan Inspeksi', 'deskripsi' => 'Kereta inspeksi untuk monitoring kondisi rel.'],
                ['icon' => '📐', 'nama' => 'Alat Ukur Geometri', 'deskripsi' => 'Peralatan untuk mengukur dan mengkalibrasi geometri rel.'],
                ['icon' => '🏗️', 'nama' => 'Material Konstruksi', 'deskripsi' => 'Besi rel, ballast, dan material konstruksi perkeretaapian.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit Jalan Jembatan memberikan pengalaman langsung dalam pemeliharaan infrastruktur perkeretaapian dengan bimbingan dari ahli teknik berpengalaman.',
                'poin' => [
                    'Belajar langsung dari ahli infrastruktur perkeretaapian',
                    'Terlibat dalam proyek pemeliharaan jalan rel nyata',
                    'Mendapatkan pemahaman tentang standar keselamatan kereta api',
                    'Mengembangkan skill teknis dan manajerial',
                    'Kesempatan karir di bidang infrastruktur BUMN'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi & Safety Induction', 'deskripsi' => 'Pengenalan unit, prosedur keselamatan, dan lingkungan kerja.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan Dasar Infrastruktur', 'deskripsi' => 'Pelatihan tentang jenis-jenis perkeretaapian dan standar teknis.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan di Lokasi', 'deskripsi' => 'Mulai mengikuti kegiatan pemeliharaan di lapangan dengan mentor.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Mini', 'deskripsi' => 'Mengerjakan proyek pemeliharaan kecil secara mandiri.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi & Presentasi', 'deskripsi' => 'Presentasi hasil magang dan evaluasi kinerja.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan penerbitan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '🔧', 'nama' => 'Teknik Pemeliharaan', 'deskripsi' => 'Kemampuan melakukan perbaikan dan pemeliharaan infrastruktur.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '📐', 'nama' => 'Teknik Pengukuran', 'deskripsi' => 'Kemampuan menggunakan alat ukur dan kalibrasi.', 'level' => '65%', 'level_label' => 'Menengah'],
                ['icon' => '🛡️', 'nama' => 'Keselamatan Kerja', 'deskripsi' => 'Pemahaman dan penerapan K3 di lingkungan kerja.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '📊', 'nama' => 'Dokumentasi', 'deskripsi' => 'Kemampuan membuat laporan dan dokumentasi pekerjaan.', 'level' => '60%', 'level_label' => 'Menengah']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah magang di Unit Jalan Jembatan berbahaya?', 'jawaban' => 'Tidak, dengan prosedur keselamatan (K3) yang diterapkan secara ketat, risiko dapat diminimalkan. Semua peserta magang mendapatkan safety induction sebelum mulai bekerja.'],
                ['pertanyaan' => 'Berapa lama durasi magang?', 'jawaban' => 'Durasi magang di Unit Jalan Jembatan berkisar antara 3 hingga 6 bulan, tergantung pada kebutuhan dan kinerja peserta.'],
                ['pertanyaan' => 'Apakah ada sarana beribadah di lokasi kerja?', 'jawaban' => 'Ya, setiap lokasi kerja dilengkapi dengan mushola untuk sholat berjamaah dan tempat ibadah lainnya.']
            ],
            'gallery' => [
                ['img' => asset('images/Unit  Jalan Jembatan/1778410687744546_240120245e_berita_semarang.jpg'), 'label' => 'Jalur Rel'],
                ['img' => asset('images/Unit  Jalan Jembatan/Kendaraan-Inspeksi-Rel-Kereta-yang-Andal-untuk-Pemeriksaan-Jalur-Kereta-Trolley-Transfer.jpg'), 'label' => 'Inspeksi'],
                ['img' => asset('images/Unit  Jalan Jembatan/pengecekan-wesel-4v0d-dom.jpg'), 'label' => 'Perawatan'],
                ['img' => asset('images/Unit  Jalan Jembatan/Perawatan-Jalur-Kereta-Api-240619-pf-3.jpg'), 'label' => 'Pemeliharaan']
            ],
            'gradient' => 'linear-gradient(135deg, #4a5568 0%, #718096 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #4a5568, #718096)',
            'img_label' => 'Infrastruktur Rel'
        ],
        '2' => [
            'id' => '2',
            'name' => 'Pengamanan',
            'emoji' => '🛡️',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit Pengamanan bertugas menjaga keamanan dan ketertiban di lingkungan operasional PT KAI Divre III Palembang, termasuk aset dan personel perusahaan.',
            'visi' => 'Menjadi unit pengamanan yang profesional dan andal dalam menjamin keamanan operasional PT KAI Divre III Palembang.',
            'misi' => [
                'Melaksanakan patroli dan pengawasan keamanan secara rutin',
                'Mengelola sistem pengamanan aset perusahaan',
                'Koordinasi dengan aparat keamanan pemerintah',
                'Meningkatkan kesiapsiagaan dalam penanganan gangguan keamanan',
                'Mengembangkan kompetensi personel security'
            ],
            'tugas' => [
                'Pengamanan Aset Perusahaan',
                'Pengamanan Operasional Kereta Api',
                'Pengawasan & Patroli',
                'Penanganan Gangguan Keamanan',
                'Koordinasi dengan Aparat Keamanan'
            ],
            'tugas_desc' => [
                'Melindungi aset perusahaan dari ancaman pencurian dan perusakan',
                'Menjaga keselamatan operasional kereta api dan personel',
                'Melakukan patroli rutin di area stasiun dan lingkungan perusahaan',
                'Menangani masalah keamanan dan gangguan yang mungkin timbul',
                'Berkoodinasi dengan pihak kepolisian dan instansi terkait'
            ],
            'aktivitas_harian' => [
                ['waktu' => '06:30 - 07:30', 'aktivitas' => 'Briefing & Alokasi Personel', 'deskripsi' => 'Rapat pagi tim security dan penempatan personel di pos-pos penting.'],
                ['waktu' => '07:30 - 10:00', 'aktivitas' => 'Patroli Pagi', 'deskripsi' => 'Melakukan patroli di areaPerimeter stasiun dan area vital lainnya.'],
                ['waktu' => '10:00 - 12:00', 'aktivitas' => 'Pemeriksaan peralatan keamanan', 'deskripsi' => 'Cek sistem CCTV, alarm, dan peralatan pengamanan lainnya.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Pengawasan Akses', 'deskripsi' => 'Mengawasi dan memeriksa akses masuk area terbatas perusahaan.'],
                ['waktu' => '15:00 - 16:30', 'aktivitas' => 'Koordinasi & Pelaporan', 'deskripsi' => 'Koordinasi dengan unit terkait dan pembuatan laporan harian.']
            ],
            'teknologi' => [
                ['icon' => '📹', 'nama' => 'CCTV & Monitoring', 'deskripsi' => 'Sistem kamera pengawau dan monitoring 24/7.'],
                ['icon' => '🚨', 'nama' => 'Alarm System', 'deskripsi' => 'Sistem alarm dan notifikasi darurat.'],
                ['icon' => '🚗', 'nama' => 'Kendaraan Patroli', 'deskripsi' => 'Kendaraan roda 2 dan 4 untuk patroli keamanan.'],
                ['icon' => '📻', 'nama' => 'Radio Komunikasi', 'deskripsi' => 'Peralatan komunikasi two-way radio untuk koordinasi tim.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit Pengamanan memberikan pengalaman kerja di bidang keamanan perusahaan dengan pelatihan standard BUMN.',
                'poin' => [
                    'Belajar dari ahli keamanan berpengalaman',
                    'Terlibat dalam sistem pengamanan terintegrasi',
                    'Mendapatkan pengetahuan tentang prosedur keamanan BUMN',
                    'Mengembangkan skill komunikasi dan koordinasi',
                    'Sertifikat kelulusan magang resmi PT KAI'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi & Safety Induction', 'deskripsi' => 'Pengenalan sistem keamanan dan prosedur dasar.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan Security Basic', 'deskripsi' => 'Pelatihan dasar keamanan, first aid, dan emergency response.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan di Pos', 'deskripsi' => 'Mulai tugas keamanan di pos-pos penting dengan mentor.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Project Patroli Mandiri', 'deskripsi' => 'Melakukan patroli dan pengawasan secara mandiri.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi & Sertifikasi', 'deskripsi' => 'Evaluasi kinerja dan sertifikasi kelulusan.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan pengambilan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '🛡️', 'nama' => 'Keamanan', 'deskripsi' => 'Kemampuan dalam pengamanan aset dan personel.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '🤝', 'nama' => 'Komunikasi', 'deskripsi' => 'Kemampuan koordinasi dan komunikasi efektif.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '🚨', 'nama' => 'Emergency Response', 'deskripsi' => 'Kemampuan menangani situasi darurat dengan tepat.', 'level' => '65%', 'level_label' => 'Menengah'],
                ['icon' => '📋', 'nama' => 'Pelaporan', 'deskripsi' => 'Kemampuan membuat laporan keamanan yang jelas.', 'level' => '70%', 'level_label' => 'Menengah']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah ada ketentuan jasmani khusus?', 'jawaban' => 'Peserta harus dalam kondisi fisik yang sehat dan tidak menggunakan kacamata untuk tugas patroli lapangan.'],
                ['pertanyaan' => 'Apakah ada ujian masuk?', 'jawaban' => 'Ya, ada psikotes dan uji kesamaptaan jasmani sebagai bagian dari seleksi akhir.'],
                ['pertanyaan' => 'Apakah ada tunjangan selama magang?', 'jawaban' => 'Ya, peserta magang mendapatkan tunjangan bulanan sesuai ketentuan PT KAI.']
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Manajemen Keamanan / Hukum / Administrasi',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami dasar manajemen SDM',
                'Bersedia magang sesuai peraturan KAI'
            ],
            'dokumen' => [
                '📄 Surat pengantar dari kampus/universitas',
                '🪪 Kartu Tanda Mahasiswa (KTM) aktif',
                '📝 Proposal magang',
                '📄 Dokumen pendukung pengajuan terbaru',
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
                '📄 Dokumen pendukung pengajuan terbaru',
                '📊 Transkrip nilai'
            ],
            'benefit' => [
                'Pengalaman keamanan di BUMN',
                'Pelatihan pengamanan aset',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Kesempatan pengembangan diri'
            ],
            'gallery' => [
                ['img' => asset('images/Unit Pengamanan/6955284edaa61.jpeg'), 'label' => 'Pengamanan'],
                ['img' => asset('images/Unit Pengamanan/1764216095alan_pasukan.png'), 'label' => 'Security Team'],
                ['img' => asset('images/Unit Pengamanan/IMG-20240130-WA0016.jpg'), 'label' => 'Patroli'],
                ['img' => asset('images/Unit Pengamanan/IMG-20251111-WA0059-1024x683.jpg'), 'label' => 'Keselamatan']
            ],
            'gradient' => 'linear-gradient(135deg, #1e3a5f 0%, #3b82f6 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #1e3a5f, #3b82f6)',
            'img_label' => 'Security'
        ],
        '3' => [
            'id' => '3',
            'name' => 'Sarana',
            'emoji' => '🚃',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit Sarana mengelola perawatan dan pengoperasian sarana kereta api termasuk lokomotif, kereta, dan gerbong di lingkungan PT KAI Divre III Palembang.',
            'visi' => 'Menjadi unit sarana yang unggul dalam perawatan dan pengoperasian armada kereta api untuk mendukung pelayanan transportasi yang aman dan nyaman.',
            'misi' => [
                'Melaksanakan perawatan rutin dan besar lokomotif serta kereta',
                'Mengelola armada sarana untuk optimalisasi penggunaan',
                'Menjaga keselamatan dan kenyamanan sarana perkeretaapian',
                'Menerapkan sistem kelistrikan yang efisien',
                'Mengembangkan kompetensi teknisi sarana'
            ],
            'tugas' => [
                'Perawatan Lokomotif & Kereta',
                'Inspeksi Sarana Kereta Api',
                'Pengelolaan Armada',
                'Sistem Kelistrikan Sarana',
                'Keselamatan Sarana Perkeretaapian'
            ],
            'tugas_desc' => [
                'Melakukan pemeliharaan rutin dan perbaikan lokomotif, kereta, dan gerbong',
                'Menginspeksi kondisi sarana secara berkala sebelum dan sesudah perjalanan',
                'Mengelola penempatan dan penggunaan armada sesuai jadwal',
                'Memelihara dan memonitor sistem kelistrikan sarana',
                'Memastikan keselamatan sarana untuk penumpang dan personel'
            ],
            'aktivitas_harian' => [
                ['waktu' => '06:00 - 07:00', 'aktivitas' => 'Briefing & Cek Sarana', 'deskripsi' => 'Pemeriksaan kondisi sarana yang akan beroperasi hari ini.'],
                ['waktu' => '07:00 - 10:00', 'aktivitas' => 'Pemeliharaan Pagi', 'deskripsi' => 'Pelaksanaan pemeliharaan rutin di bengkel sarana.'],
                ['waktu' => '10:00 - 12:00', 'aktivitas' => 'Inspeksi Sarana', 'deskripsi' => 'Pengecekan menyeluruh kondisi lokomotif dan gerbong.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Perbaikan Lanjutan', 'deskripsi' => 'Melanjutkan pekerjaan perbaikan yang belum selesai.'],
                ['waktu' => '15:00 - 16:30', 'aktivitas' => 'Pelaporan & Dokumentasi', 'deskripsi' => 'Pembuatan laporan pemeliharaan dan input data sistem.']
            ],
            'teknologi' => [
                ['icon' => '🔧', 'nama' => 'Alat Bengkel', 'deskripsi' => 'Perkakas dan peralatan bengkel untuk perawatan sarana.'],
                ['icon' => '⚡', 'nama' => 'Sistem Kelistrikan', 'deskripsi' => 'Peralatan kelistrikan dan panel kontrol sarana.'],
                ['icon' => '🔍', 'nama' => 'Alat Diagnostik', 'deskripsi' => 'Mesin scanner dan alat deteksi kerusakan.'],
                ['icon' => '🏭', 'nama' => 'Spare Part', 'deskripsi' => 'Suku cadang asli dan stok perawatan sarana.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit Sarana memberikan pengalaman kerja di bidang perawatan dan pengoperasian kereta api dengan standar BUMN.',
                'poin' => [
                    'Belajar dari teknisi sarana berpengalaman',
                    'Terlibat dalam perawatan lokomotif dan kereta',
                    'Mendapatkan pengetahuan tentang sistem kereta api',
                    'Mengembangkan skill teknis mekanik dan kelistrikan',
                    'Sertifikat resmi PT KAI'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi & Safety Induction', 'deskripsi' => 'Pengenalan unit, prosedur keselamatan bengkel.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan Dasar Sarana', 'deskripsi' => 'Pelatihan tentang komponen lokomotif dan gerbong.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan di Bengkel', 'deskripsi' => 'Mulai mengikuti kegiatan perawatan di bengkel.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Perawatan', 'deskripsi' => 'Mengerjakan proyek perawatan kecil secara mandiri.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi & Presentasi', 'deskripsi' => 'Presentasi hasil magang dan evaluasi kinerja.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan penerbitan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '🔧', 'nama' => 'Teknik Mekanik', 'deskripsi' => 'Kemampuan dalam perbaikan dan perawatan mesin.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '⚡', 'nama' => 'Kelistrikan', 'deskripsi' => 'Pemahaman sistem kelistrikan sarana kereta.', 'level' => '65%', 'level_label' => 'Menengah'],
                ['icon' => '🛡️', 'nama' => 'K3', 'deskripsi' => 'Pemahaman keselamatan kerja di bengkel.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '📋', 'nama' => 'Dokumentasi', 'deskripsi' => 'Kemampuan pencatatan laporan perawatan.', 'level' => '60%', 'level_label' => 'Menengah']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah ada kode etik khusus?', 'jawaban' => 'Ya, peserta magang harus mematuhiaturan K3 dan standar kerja bengkel yang berlaku.'],
                ['pertanyaan' => 'Berapa jam kerja sehari?', 'jawaban' => 'Jam kerja adalah 8 jam sehari sesuai jadwal shift yang ditentukan.'],
                ['pertanyaan' => 'Apakah disediakan tempat istirahat?', 'jawaban' => 'Ya, unit ini menyediakan ruang istirahat dan mushola untuk karyawan dan peserta magang.']
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Teknik Mesin / Teknik Elektro / Teknik Perkeretaapian',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami dasar permesinan dan kelistrikan',
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
                'Pengalaman teknis perkeretaapian',
                'Bimbingan dari ahli sarana',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Jaringan profesional teknik'
            ],
            'gallery' => [
                ['img' => asset('images/Unit Sarana/01kk1183f8kb7q0an5c3816wjy.jpg'), 'label' => 'Bogie'],
                ['img' => asset('images/Unit Sarana/images.jpg'), 'label' => 'Perawatan'],
                ['img' => asset('images/Unit Sarana/perawatan-lokomotif-dan-rel-kereta-api-jelang-lebaran_169.jpeg'), 'label' => 'Lokomotif'],
                ['img' => asset('images/Unit Sarana/RAMP-CHECK-Petugas-melakukan-pengecekan.jpg'), 'label' => 'Pengecekan']
            ],
            'gradient' => 'linear-gradient(135deg, #0f766e 0%, #34d399 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #0f766e, #34d399)',
            'img_label' => 'Sarana KA'
        ],
        '4' => [
            'id' => '4',
            'name' => 'Akuntan & Fasilitas Penumpang',
            'emoji' => '🎫',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit Akuntan & Fasilitas Penumpang menangani akuntansi perusahaan serta pengelolaan fasilitas dan pelayanan bagi penumpang kereta api di Divre III Palembang.',
            'visi' => 'Menjadi unit yang unggul dalam pengelolaan akuntansi dan fasilitas penumpang untuk mendukung operasional PT KAI yang profesional.',
            'misi' => [
                'Menyelenggarakan akuntansi yang akurat dan sesuai standar',
                'Mengelola fasilitas penumpang yang bersih dan nyaman',
                'Memberikan pelayanan prima kepada penumpang',
                'Mengadministrasi keuangan dengan efektif',
                'Mengembangkan kompetensi SDM di bidang akuntansi dan pelayanan'
            ],
            'tugas' => [
                'Akuntansi Perusahaan',
                'Pengelolaan Fasilitas Penumpang',
                'Pelayanan Pelanggan Stasiun',
                'Kebersihan & Kenyamanan Stasiun',
                'Pelaporan & Administrasi Keuangan'
            ],
            'tugas_desc' => [
                'Mencatat dan melaporkan transaksi keuangan perusahaan dengan akurat',
                'Memelihara kebersihan dan kenyamanan fasilitas stasiun',
                'Melayani penumpang dengan ramah dan profesional',
                'Mengelola fasilitas penumpang seperti toilet, ruang tunggu, dan kantin',
                'Membuat laporan administrasi keuangan bulanan dan tahunan'
            ],
            'aktivitas_harian' => [
                ['waktu' => '07:30 - 08:30', 'aktivitas' => 'Briefing & Persiapan', 'deskripsi' => 'Rapat singkat dan persiapan pelayanan hari ini.'],
                ['waktu' => '08:30 - 11:00', 'aktivitas' => 'Pelayanan Penumpang', 'deskripsi' => 'Melayani penumpang di loket dan informasi stasiun.'],
                ['waktu' => '11:00 - 12:00', 'aktivitas' => 'Pemeriksaan Fasilitas', 'deskripsi' => 'Cek kebersihan dan kondisi fasilitas penumpang.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Administrasi Keuangan', 'deskripsi' => 'Pembukuan dan administrasi akuntansi.'],
                ['waktu' => '15:00 - 16:30', 'aktivitas' => 'Pelaporan', 'deskripsi' => 'Pembuatan laporan harian dan input data sistem.']
            ],
            'teknologi' => [
                ['icon' => '💻', 'nama' => 'Sistem Akuntansi', 'deskripsi' => 'Software akuntansi dan sistem pembukuan.'],
                ['icon' => '🎫', 'nama' => 'Ticketing System', 'deskripsi' => 'Sistem penjualan dan reservasi tiket.'],
                ['icon' => '📊', 'nama' => 'Excel & Database', 'deskripsi' => 'Tools untuk laporan dan analisis data.'],
                ['icon' => '📱', 'nama' => 'Komunikasi Pelanggan', 'deskripsi' => 'Sistem informasi dan layanan pelanggan.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit Akuntan & Fasilitas Penumpang memberikan pengalaman di bidang akuntansi dan pelayanan pelanggan.',
                'poin' => [
                    'Belajar dari profesional akuntansi dan pelayanan',
                    'Mengelola sistem pembukuan dan pelayanan',
                    'Mendapatkan pengalaman di bidang finance dan service',
                    'Mengembangkan skill komunikasi dan administrasi',
                    'Sertifikat resmi PT KAI'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi', 'deskripsi' => 'Pengenalan unit, standar pelayanan, dan prosedur kerja.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan Dasar', 'deskripsi' => 'Pelatihan akuntansi dasar dan teknik pelayanan.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan', 'deskripsi' => 'Mulai melayani penumpang dengan bimbingan mentor.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Mandiri', 'deskripsi' => 'Menangani tugas akuntansi dan pelayanan secara mandiri.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi', 'deskripsi' => 'Evaluasi kinerja dan sertifikasi.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan pengambilan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '💰', 'nama' => 'Akuntansi', 'deskripsi' => 'Kemampuan dalam pembukuan dan pelaporan keuangan.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '🤝', 'nama' => 'Pelayanan', 'deskripsi' => 'Kemampuan melayani pelanggan dengan prima.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '📋', 'nama' => 'Administrasi', 'deskripsi' => 'Kemampuan mengelola dokumen dan data.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '💬', 'nama' => 'Komunikasi', 'deskripsi' => 'Kemampuan berkomunikasi secara efektif.', 'level' => '75%', 'level_label' => 'Mahir']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah magang di unit ini berhubungan dengan akuntansi?', 'jawaban' => 'Ya, magang di unit ini mencakup pelajaran akuntansi, administrasi keuangan, dan pelayanan pelanggan.'],
                ['pertanyaan' => 'Apakah ada ujian untuk magang di unit ini?', 'jawaban' => 'Ya, peserta akan mengikuti seleksi termasuk psikotes dan wawancara untuk memastikan kesesuaian角色.'],
                ['pertanyaan' => 'Apakah ada tunjangan during magang?', 'jawaban' => 'Ya, peserta magang mendapatkan tunjangan bulanan sesuai ketentuan PT KAI.']
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Akuntansi / Manajemen / Ekonomi',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami dasar akuntansi dan pelayanan publik',
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
                'Pengalaman akuntansi & pelayanan',
                'Bimbingan dari profesional',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Pengembangan soft skills'
            ],
            'gallery' => [
                ['img' => asset('images/sistem informasi/_Vl5iD-BuLpVA3vEAMCcxjI-kFehtj49tnT7s3DMTeNVkM2WjRVi_41L5oMeyqia0bGgnJIF8eHhEHJbNZ2cuhaQwMQVp7Yxk5rsrTniOtpVghf3O0-uDYrMerQ1zCnL9BgPKsHhCICrU1voANXm77qYyoRhdoOKumpl9PFnvD2_dFImm8D3DzmAEFgE0SWc.jpg'), 'label' => 'Layanan'],
                ['img' => asset('images/sistem informasi/b_KoLuiC1rWMJCEVH6XCC6eDeXgwlizr0jZgUDq_DgF1C2D6p5dQexX5yYvj7XdUAJYaz5PYiGIzrpvlIzLYaMdlmHZxJkHX3ihKChxuaLANO9hJALZfW_keq2t3OclaqYJ-HatflZftRYdqLe2oN1RbpDBuqIWN17TnR43attDkl3-cC1g2DoDw8rWV9gQD.jpg'), 'label' => 'Akuntansi'],
                ['img' => asset('images/sistem informasi/WEVvF4wNpyF0ZpEXqM_koAOvXIz8bWFx5sG_zuiKj4Fx0oguaTeaWeuINMhZhz6ymlrtvzmVS-Dy4AahjdXPUuF5_fiIykGvhEl4MSJ_Dr8B6KEMnpPNUUMr2DDfRTStqsFtXMS7oYWPiosmvXzX0EPrJSZaTivMAQQRdAX1BMYwt85aBvNT9xkv-LXCQgF2.jpg'), 'label' => 'Fasilitas']
            ],
            'gradient' => 'linear-gradient(135deg, #6b21a8 0%, #c084fc 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #6b21a8, #c084fc)',
            'img_label' => 'Akuntan & Fasilitas'
        ],
        '5' => [
            'id' => '5',
            'name' => 'Angkutan Barang',
            'emoji' => '📦',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit Angkutan Barang mengelola layanan angkutan barang dan logistik menggunakan sarana kereta api di wilayah Divre III Palembang.',
            'visi' => 'Menjadi unit angkutan barang yang andal dan efisien dalam mendukung kebutuhan logistik nasional.',
            'misi' => [
                'Mengelola operasional angkutan barang dengan efektif',
                'Menyediakan layanan logistik yang kompetitif',
                'Mengoptimalkan penggunaan gerbong dan lokomotif',
                'Meningkatkan kepuasan pelanggan melalui pelayanan prima',
                'Mengembangkan SDM di bidang logistik dan distribusi'
            ],
            'tugas' => [
                'Manajemen Angkutan Barang',
                'Logistik & Distribusi',
                'Operasional Gerbong Barang',
                'Administrasi Pengiriman',
                'Layanan Pelanggan Bisnis'
            ],
            'tugas_desc' => [
                'Mengkoordinasikan pengangkutan barang melalui kereta api',
                'Merencanakan dan melaksanakan distribusi barang',
                'Mengoperasikan gerbong barang sesuai standar',
                'Mengurus dokumentasi dan administrasi pengiriman',
                'Menangani kebutuhan dan permintaan pelanggan'
            ],
            'aktivitas_harian' => [
                ['waktu' => '06:30 - 08:00', 'aktivitas' => 'Briefing & Persiapan', 'deskripsi' => 'Rapat koordinasi dan persiapan operasional hari ini.'],
                ['waktu' => '08:00 - 10:30', 'aktivitas' => 'Loading & Unloading', 'deskripsi' => 'Proses muat dan bongkar barang di lokasi.'],
                ['waktu' => '10:30 - 12:00', 'aktivitas' => 'Administrasi', 'deskripsi' => 'Pembukuan dan administrasi pengiriman.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Koordinasi Distribusi', 'deskripsi' => 'Koordinasi dengan pelanggan dan tracking pengiriman.'],
                ['waktu' => '15:00 - 16:30', 'aktivitas' => 'Evaluasi & Pelaporan', 'deskripsi' => 'Evaluasi operasional hari ini dan persiapan besok.']
            ],
            'teknologi' => [
                ['icon' => '🚂', 'nama' => 'Lokomotif Barang', 'deskripsi' => 'Lokomotif khusus untuk angkutan barang.'],
                ['icon' => '🚃', 'nama' => 'Gerbong Kargo', 'deskripsi' => 'Gerbong khusus untuk berbagai jenis barang.'],
                ['icon' => '📦', 'nama' => 'Sistem Manajemen Gudang', 'deskripsi' => 'Software untuk manajemen inventory dan gudang.'],
                ['icon' => '📊', 'nama' => 'Tracking System', 'deskripsi' => 'Sistem pelacakan posisi dan status pengiriman.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit Angkutan Barang memberikan pengalaman di bidang logistik dan distribusi dengan standar BUMN.',
                'poin' => [
                    'Belajar dari ahli logistik berpengalaman',
                    'Terlibat dalam operasional angkutan barang',
                    'Mendapatkan pengetahuan tentang supply chain',
                    'Mengembangkan skill manajemen dan administrasi',
                    'Sertifikat resmi PT KAI'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi', 'deskripsi' => 'Pengenalan unit, prosedur keselamatan, dan sistem kerja.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan Dasar', 'deskripsi' => 'Pelatihan logistik, administrasi, dan sistem tracking.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan Operasi', 'deskripsi' => 'Mulai mengikuti operasional angkutan dengan mentor.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Mandiri', 'deskripsi' => 'Menangani tugas operasional secara mandiri.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi', 'deskripsi' => 'Evaluasi kinerja dan sertifikasi.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan pengambilan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '📦', 'nama' => 'Logistik', 'deskripsi' => 'Kemampuan mengelola distribusi dan supply chain.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '📋', 'nama' => 'Administrasi', 'deskripsi' => 'Kemampuan administrasi dan dokumentasi pengiriman.', 'level' => '65%', 'level_label' => 'Menengah'],
                ['icon' => '🤝', 'nama' => 'Pelayanan', 'deskripsi' => 'Kemampuan melayani pelanggan dengan baik.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '📊', 'nama' => 'Reporting', 'deskripsi' => 'Kemampuan membuat laporan operasional.', 'level' => '60%', 'level_label' => 'Menengah']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah magang di Unit Angkutan Barang berat?', 'jawaban' => 'Tidak terlalu berat, tetapi membutuhkan ketahanan fisik untuk activities loading dan unloading.'],
                ['pertanyaan' => 'Apakah ada kesempatan karir setelah magang?', 'jawaban' => 'Ya, peserta dengan kinerja baik berpeluang menjadi karyawan tetap PT KAI.'],
                ['pertanyaan' => 'Apakah ada tunjangan selama magang?', 'jawaban' => 'Ya, peserta magang mendapatkan tunjangan bulanan sesuai ketentuan PT KAI.']
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Manajemen Logistik / Transportasi / Ekonomi',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami dasar logistik dan distribusi',
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
                'Pengalaman logistik di BUMN',
                'Bimbingan dari ahli angkutan',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Jaringan profesional logistik'
            ],
            'gallery' => [
                ['img' => asset('images/Unit Angkutan Barang/7AD60EDE-14D8-4F2C-80ED-741735F68772.jpeg'), 'label' => 'Logistik'],
                ['img' => asset('images/Unit Angkutan Barang/5948d4eb7d1c7070351618.jpeg'), 'label' => 'Batu Bara'],
                ['img' => asset('images/Unit Angkutan Barang/img_news_1773721553-d33caa4f81.jpeg'), 'label' => 'Admin'],
                ['img' => asset('images/Unit Angkutan Barang/Screenshot_20260606-193257.jpg'), 'label' => 'Minyak dan Gas']
            ],
            'gradient' => 'linear-gradient(135deg, #b45309 0%, #f59e0b 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #b45309, #f59e0b)',
            'img_label' => 'Angkutan Barang'
        ],
        '6' => [
            'id' => '6',
            'name' => 'PBJ (Pengendalian Barang & Jasa)',
            'emoji' => '📋',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit PBJ (Pengendalian Barang dan Jasa) mengelola proses pengadaan barang dan jasa serta pengendaliannya di lingkungan PT KAI Divre III Palembang.',
            'visi' => 'Menjadi unit pengelolaan pengadaan yang transparan, efisien, dan akuntabel dalam mendukung operasional PT KAI.',
            'misi' => [
                'Mengelola proses pengadaan barang dan jasa sesuai standar',
                'Membangun relationship dengan vendor yang berkualitas',
                'Menjamin kontrol kualitas pengadaan',
                'Mengadministrasi kontrak dengan baik',
                'Mengembangkan kompetensi SDM di bidang procurement'
            ],
            'tugas' => [
                'Pengadaan Barang & Jasa',
                'Manajemen Vendor',
                'Kontrol Kualitas Pengadaan',
                'Administrasi Kontrak',
                'Evaluasi & Reporting Pengadaan'
            ],
            'tugas_desc' => [
                'Melaksanakan proses pengadaan barang dan jasa sesuai SOP',
                'Mengelola database dan relationship dengan vendor',
                'Melakukan quality control terhadap barang/jasa yang dibeli',
                'Mengelola dokumentasi dan administrasi kontrak',
                'Membuat laporan evaluasi pengadaan secara periodik'
            ],
            'aktivitas_harian' => [
                ['waktu' => '08:00 - 09:00', 'aktivitas' => 'Briefing & Review Jadwal', 'deskripsi' => 'Review jadwal pengadaan yang akan dilakukan.'],
                ['waktu' => '09:00 - 11:00', 'aktivitas' => 'Evaluasi Vendor', 'deskripsi' => 'Penilaian dan evaluasi kinerja vendor.'],
                ['waktu' => '11:00 - 12:00', 'aktivitas' => 'Administrasi Kontrak', 'deskripsi' => 'Pembuatan dan pengaturan kontrak pengadaan.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Quality Control', 'deskripsi' => 'Pemeriksaan kualitas barang/jasan yang diterima.'],
                ['waktu' => '15:00 - 16:30', 'aktivitas' => 'Reporting & Dokumentasi', 'deskripsi' => 'Pembuatan laporan dan input data sistem.']
            ],
            'teknologi' => [
                ['icon' => '💻', 'nama' => 'E-Procurement System', 'deskripsi' => 'Sistem pengadaan elektronik perusahaan.'],
                ['icon' => '📊', 'nama' => 'Database Vendor', 'deskripsi' => 'Sistem manajemen database vendor terpercaya.'],
                ['icon' => '📋', 'nama' => 'Document Management', 'deskripsi' => 'Sistem pengelolaan dokumen kontrak.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit PBJ memberikan pengalaman di bidang pengadaan barang dan jasa dengan standar BUMN.',
                'poin' => [
                    'Belajar dari ahli procurement berpengalaman',
                    'Terlibat dalam proses pengadaan barang/jasa',
                    'Mendapatkan pengetahuan tentang tender dan lelang',
                    'Mengembangkan skill administrasi dan komunikasi',
                    'Sertifikat resmi PT KAI'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi', 'deskripsi' => 'Pengenalan unit, SOP pengadaan, dan sistem e-procurement.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan', 'deskripsi' => 'Pelatihan pengadaan, manajemen vendor, dan kontrak.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan', 'deskripsi' => 'Mulai mengikuti proses pengadaan dengan mentor.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Mandiri', 'deskripsi' => 'Menangani tugas pengadaan secara mandiri.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi', 'deskripsi' => 'Evaluasi kinerja dan sertifikasi.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '📋', 'nama' => 'Procurement', 'deskripsi' => 'Kemampuan dalam pengadaan barang dan jasa.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '🤝', 'nama' => 'Negotiation', 'deskripsi' => 'Kemampuan negoisasi dengan vendor.', 'level' => '65%', 'level_label' => 'Menengah'],
                ['icon' => '📊', 'nama' => 'Reporting', 'deskripsi' => 'Kemampuan membuat laporan pengadaan.', 'level' => '70%', 'level_label' => 'Menengah']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah magang di Unit PBJ membutuhkan kemampuan khusus?', 'jawaban' => 'Tidak khusus, tetapi kemampuan komunikasi dan administrasi akan sangat membantu.'],
                ['pertanyaan' => 'Apakah ada kesempatan kerja setelah magang?', 'jawaban' => 'Ya, peserta dengan kinerja baik akan dipertimbangkan untuk menjadi karyawan tetap.']
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Manajemen / Administrasi Bisnis / Hukum',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami dasar pengadaan barang/jasa',
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
                'Pengalaman pengadaan di BUMN',
                'Pemahaman proses tender & lelang',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Kesempatan networking bisnis'
            ],
            'gallery' => [
                ['img' => asset('images/pbj(pengendalian barang dan jasa)/FNKw4aC_Sz_ibSfGK6vztdF8lKQ3rSPC7P53JZpiDcQFfU8tZG9ets3o06vF6r8Y0Vod4uP0u2xy5BpDSB639RqA1D64mr61dxSZvhKJ4vTgoG5Kiszr4BKCFEwPdJjNvF1ijvr-5fOissvpM6rjhF1TGd3fi95AYZ3FZYUQPGY.jpg'), 'label' => 'Pengadaan'],
                ['img' => asset('images/pbj(pengendalian barang dan jasa)/m2AJZGb111T5Qi2FZ9YhWPQw32x3WYpnpD35on-AMSWR9etkyOMvMuFXIb4750-vzOSkk0-kgHJXQcYMgFD0saHiZZXtviVSjsT1jq4FHa2W96i_5Cwe_0oWlIB5VyJ9lN73HZAPpP0xEJiL1Zx-MmpG.jpg'), 'label' => 'Vendor']
            ],
            'gradient' => 'linear-gradient(135deg, #065f46 0%, #10b981 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #065f46, #10b981)',
            'img_label' => 'PBJ'
        ],
        '7' => [
            'id' => '7',
            'name' => 'Keuangan',
            'emoji' => '💰',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit Keuangan bertanggung jawab dalam administrasi keuangan perusahaan, pengelolaan anggaran, serta pelaporan keuangan di lingkungan PT KAI Divre III Palembang.',
            'visi' => 'Menjadi unit keuangan yang unggul dalam pengelolaan keuangan dan anggaran untuk mendukung pertumbuhan PT KAI.',
            'misi' => [
                'Mengelola keuangan perusahaan dengan akurat',
                'Mengoptimalkan penggunaan anggaran',
                'Menyusun laporan keuangan yang transparan',
                'Melakukan audit internal secara berkala',
                'Mengembangkan kompetensi SDM di bidang keuangan'
            ],
            'tugas' => [
                'Administrasi Keuangan Perusahaan',
                'Pengelolaan Anggaran',
                'Pelaporan Keuangan',
                'Audit Internal',
                'Perpajakan'
            ],
            'tugas_desc' => [
                'Mencatat dan melaporkan semua transaksi keuangan perusahaan',
                'Mengalokasikan dan memantau penggunaan anggaran perusahaan',
                'Menyusun laporan keuangan bulanan, triwulan, dan tahunan',
                'Melakukan audit internal untuk memastikan kontrol yang baik',
                'Menangani kewajiban perpajakan dan pelaporan pajak'
            ],
            'aktivitas_harian' => [
                ['waktu' => '08:00 - 09:30', 'aktivitas' => 'Review & Validasi Transaksi', 'deskripsi' => 'Pemeriksaan dan validasi transaksi keuangan yang masuk.'],
                ['waktu' => '09:30 - 11:30', 'aktivitas' => 'Pembukuan', 'deskripsi' => 'Pencatatan transaksi keuangan ke dalam sistem akuntansi.'],
                ['waktu' => '11:30 - 12:00', 'aktivitas' => 'Koordinasi dengan Unit', 'deskripsi' => 'Koordinasi dengan unit lain terkait anggaran dan pengeluaran.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Pelaporan & Analisis', 'deskripsi' => 'Pembuatan laporan keuangan dan analisis anggaran.'],
                ['waktu' => '15:00 - 16:30', 'aktivitas' => 'Administrasi & Arsip', 'deskripsi' => 'Pengelolaan dokumen keuangan dan arsip transaksi.']
            ],
            'teknologi' => [
                ['icon' => '💻', 'nama' => 'Sistem Akuntansi', 'deskripsi' => 'Software akuntansi terintegrasi perusahaan.'],
                ['icon' => '📊', 'nama' => 'Excel & BI Tools', 'deskripsi' => 'Tools untuk analisis data dan laporan keuangan.'],
                ['icon' => '🏦', 'nama' => 'Sistem Perbankan', 'deskripsi' => 'Sistem internet banking dan rekonsiliasi bank.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit Keuangan memberikan pengalaman di bidang akuntansi dan pengelolaan keuangan perusahaan BUMN.',
                'poin' => [
                    'Belajar dari profesional keuangan berpengalaman',
                    'Terlibat dalam proses akuntansi dan pelaporan',
                    'Mendapatkan pengetahuan tentang standar perusahaan',
                    'Mengembangkan skill analisis dan administrasi',
                    'Sertifikat resmi PT KAI'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi', 'deskripsi' => 'Pengenalan unit, sistem akuntansi, dan prosedur.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan', 'deskripsi' => 'Pelatihan akuntansi dasar dan sistem perusahaan.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan', 'deskripsi' => 'Mulai pembukuan dan administrasi dengan mentor.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Mandiri', 'deskripsi' => 'Menangani tugas keuangan secara mandiri.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi', 'deskripsi' => 'Evaluasi kinerja dan sertifikasi.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '💰', 'nama' => 'Akuntansi', 'deskripsi' => 'Kemampuan dalam pembukuan dan pelaporan.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '📊', 'nama' => 'Analisis Keuangan', 'deskripsi' => ' Kemampuan menganalisis data keuangan.', 'level' => '65%', 'level_label' => 'Menengah'],
                ['icon' => '📋', 'nama' => 'Administrasi', 'deskripsi' => 'Kemampuan administrasi yang detail.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '💻', 'nama' => 'Sistem Akuntansi', 'deskripsi' => 'Penggunaan software akuntansi.', 'level' => '65%', 'level_label' => 'Menengah']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah perlu pengetahuan akuntansi lanjut?', 'jawaban' => 'Tidak perlu, pengetahuan dasar akuntansi sudah cukup untuk magang di unit ini.'],
                ['pertanyaan' => 'Apakah ada sertifikasi khusus?', 'jawaban' => 'Tidak ada, tapi pengalaman di unit ini bisa menjadi bekal carte luar biasa.']
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
                '📄 Dokumen pendukung pengajuan terbaru',
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
                ['img' => asset('images/Keuangan/BmHetkx34rudxrGqEQH-06psnPBQ4JHIykOKkPYLqDygBaN_aEj91waiBaPeSNTJX_EwCreJq8oJaN8Gm_Vq5td_jVgb1YnjHWhgY_WoqTI1XZ8jXVaN_aIY3iNT-zUu9wfkc6YxLnu-nL84BIek6z-RrzhZzyh5LRtYKL4LktQ.jpg'), 'label' => 'Akuntansi'],
                ['img' => asset('images/Keuangan/DVv2IZ2OX9cFW480OYWsO7JwAe7XRCYa2fmlhJRa-dFV5WbBma6ekGJasMQHtvKLBVfDxafKM54NcD-a56pZw6nCKKEATYy0SY95O5V1uxE59DTZ4Wr2OSQTL7okIPan8XHTYfVjRLyMaM12GLztGllVHjxHRMawTT0o8XDYcB4.jpg'), 'label' => 'Anggaran'],
                ['img' => asset('images/Keuangan/SIF6g6z7uIZpZMEPA-GyTCPMuHO-bIDN6TzSHqfvZ2hVflj59-XDmhPda_4qIGdEYKbngGRJgdm6MVdcb0-FaGsYEO15_n9dTGhk8ZMYUVPOQlScOE4X5nZx2HbKTqDbjicBZzTG-yA2EQ3611wzsJZOe3YSwCkv1HDNGfTvGgk.jpg'), 'label' => 'Pelaporan']
            ],
            'gradient' => 'linear-gradient(135deg, #7c3aed 0%, #a78bfa 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #7c3aed, #a78bfa)',
            'img_label' => 'Finance'
        ],
        '8' => [
            'id' => '8',
            'name' => 'Operasi',
            'emoji' => '🚆',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit Operasi menjalankan dan mengawasi kegiatan operasional perjalanan kereta api di wilayah Divre III Palembang untuk memastikan pelayanan yang aman dan tepat waktu.',
            'visi' => 'Menjadi unit operasi yang andal dalam mengelola perjalanan kereta api untuk memberikan pelayanan transportasi terbaik.',
            'misi' => [
                'Melaksanakan pengaturan perjalanan kereta api yang aman',
                'Mengelola operasional stasiun dengan efektif',
                'Melaksanakan koordinasi perjalanan KA',
                'Menjaga keselamatan operasional',
                'Menyediakan pelayanan pelanggan yang prima'
            ],
            'tugas' => [
                'Pengaturan Perjalanan Kereta Api',
                'Manajemen Operasional Stasiun',
                'Koordinasi Perjalanan KA',
                'Keselamatan Operasional',
                'Pelayanan Pelanggan'
            ],
            'tugas_desc' => [
                'Menjalankan dan mengawasi perjalanan kereta api sesuai jadwal',
                'Mengelola aktivitas operasional di stasiun',
                'Melakukan koordinasi dengan unit terkait untuk kelancaran perjalanan',
                'Memastikan prosedur keselamatan operasional terpenuhi',
                'Melayani dan membantu penumpang di stasiun'
            ],
            'aktivitas_harian' => [
                ['waktu' => '05:30 - 06:30', 'aktivitas' => 'Persiapan Operasional', 'deskripsi' => 'Persiapan stasiun dan cek kondisi sarana yang akan beroperasi.'],
                ['waktu' => '06:30 - 08:30', 'aktivitas' => 'Pelayanan dan Informasi', 'deskripsi' => 'Pelayanan penumpang, informasi jadwal, dan penjualan tiket.'],
                ['waktu' => '08:30 - 10:30', 'aktivitas' => 'Koordinasi dengan PPKA', 'deskripsi' => 'Koordinasi dengan PPKA dan petugas perjalanan di seluruh stasiun.'],
                ['waktu' => '10:30 - 12:00', 'aktivitas' => 'Monitoring Perjalanan', 'deskripsi' => 'Monitoring posisi dan kondisi kereta api yang sedang berjalan.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Penanganan Permasalahan', 'deskripsi' => 'Menangani keluhan penumpang dan masalah operasional.'],
                ['waktu' => '15:00 - 16:30', 'aktivitas' => 'Koordinasi & Pelaporan', 'deskripsi' => 'Koordinasi akhir hari dan pembuatan laporan operasional.']
            ],
            'teknologi' => [
                ['icon' => '📡', 'nama' => 'Sistem Komunikasi', 'deskripsi' => 'Radio dan sistem komunikasi dengan kereta api.'],
                ['icon' => '💻', 'nama' => 'Sistem Penjadwalan', 'deskripsi' => 'Software untuk penjadwalan perjalanan kereta api.'],
                ['icon' => '📊', 'nama' => 'Monitoring System', 'deskripsi' => 'Sistem monitoring perjalanan dan posisi kereta.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit Operasi memberikan pengalaman operasional perkeretaapian dengan standar profesional.',
                'poin' => [
                    'Belajar dari ahli operasi perkeretaapian',
                    'Terlibat dalam manajemen perjalanan kereta api',
                    'Mendapatkan pengetahuan tentang sistem operasional KA',
                    'Mengembangkan skill manajemen dan koordinasi',
                    'Sertifikat resmi PT KAI'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi', 'deskripsi' => 'Pengenalan unit, prosedur operasional, dan sistem keselamatan.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan', 'deskripsi' => 'Pelatihan operasi, penjadwalan, dan prosedur stasiun.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan', 'deskripsi' => 'Mulai mengikuti operasional di stasiun dengan mentor.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Mandiri', 'deskripsi' => 'Menangani tugas operasional secara mandiri.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi', 'deskripsi' => 'Evaluasi kinerja dan sertifikasi.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '🚆', 'nama' => 'Operasional', 'deskripsi' => 'Kemampuan mengelola operasional kereta api.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '📋', 'nama' => 'Koordinasi', 'deskripsi' => 'Kemampuan koordinasi antar unit.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '🤝', 'nama' => 'Pelayanan', 'deskripsi' => 'Kemampuan melayani penumpang.', 'level' => '65%', 'level_label' => 'Menengah'],
                ['icon' => '⚡', 'nama' => 'Problem Solving', 'deskripsi' => 'Kemampuan menangani masalah operasional.', 'level' => '70%', 'level_label' => 'Menengah']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah Operasi KA stress?', 'jawaban' => 'Ya, unit operasi membutuhkan konsentrasi tinggi karena terkait dengan keselamatan perjalanan.'],
                ['pertanyaan' => 'Apakah ada shift kerja?', 'jawaban' => 'Ya, unit ini bekerjashift pagi, siang, dan malam sesuai jadwal.'],
                ['pertanyaan' => 'Apakah ada prosedur keselamatan yang ketat?', 'jawaban' => 'Sangat ketat, karena operasi KA berkaitan dengan keselamatan penumpang dan personel.']
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Teknik Perkeretaapian / Transportasi / Manajemen',
                'IPK Minimal 3.00 dari skala 4.00',
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
                'Pengalaman operasional perkeretaapian',
                'Bimbingan dari ahli operasi',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Jaringan profesional transportasi'
            ],
            'gallery' => [
                ['img' => asset('images/Unit Operasi/2026_02_22_172857_1771747595._large.jpg'), 'label' => 'Stasiun'],
                ['img' => asset('images/Unit Operasi/kereta-api-jarak-jauh-kembali-beroperasi-di-era-new-normal_169.jpeg'), 'label' => 'Perjalanan'],
                ['img' => asset('images/Unit Operasi/ppka-1024x531.jpg'), 'label' => 'Jadwal'],
                ['img' => asset('images/Unit Operasi/public-208.jpg'), 'label' => 'Keselamatan']
            ],
            'gradient' => 'linear-gradient(135deg, #0f766e 0%, #34d399 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #0f766e, #34d399)',
            'img_label' => 'Operasi KA'
        ],
        '9' => [
            'id' => '9',
            'name' => 'Sinyal & Telekomunikasi (INTEL)',
            'emoji' => '📡',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit Sinyal dan Telekomunikasi (INTEL) mengelola sistem persinyalan dan telekomunikasi untuk keselamatan dan kelancaran perjalanan kereta api.',
            'visi' => 'Menjadi unit yang andal dalam pengelolaan sistem persinyalan dan telekomunikasi untuk keselamatan operasional kereta api.',
            'misi' => [
                'Mengelola sistem persinyalan kereta api secara andal',
                'Menjaga kelancaran telekomunikasi perkeretaapian',
                'Melakukan pemeliharaan peralatan sinyal secara berkala',
                'Mengimplementasikan sistem kendali perjalanan modern',
                'Mengembangkan kompetensi SDM di bidang teknik'
            ],
            'tugas' => [
                'Sistem Persinyalan Kereta Api',
                'Telekomunikasi Perkeretaapian',
                'Pemeliharaan Peralatan Sinyal',
                'Sistem Kendali Perjalanan KA',
                'Teknologi Informasi Operasional'
            ],
            'tugas_desc' => [
                'Mengelola dan memelihara sistem persinyalan di jalur KA',
                'Menjaga konektivitas telekomunikasi antar stasiun dan kereta',
                'Melakukan perawatan dan kalibrasi peralatan sinyal',
                'Mengoperasikan sistem kendali perjalanan kereta api',
                'Mendukung operasional dengan teknologi informasi'
            ],
            'aktivitas_harian' => [
                ['waktu' => '07:00 - 08:00', 'aktivitas' => 'Briefing & Monitoring', 'deskripsi' => 'Pemeriksaan sistem persinyalan dan monitoring sarana telekomunikasi.'],
                ['waktu' => '08:00 - 10:00', 'aktivitas' => 'Pemeliharaan Peralatan', 'deskripsi' => 'Pemeriksaan dan perawatan peralatan sinyal di lapangan.'],
                ['waktu' => '10:00 - 12:00', 'aktivitas' => 'Testing Sistem', 'deskripsi' => 'Pengujian sistem persinyalan dan kendali lalu lintas KA.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Koordinasi dengan Operasi', 'deskripsi' => 'Koordinasi dengan unit Operasi untuk jadwal perjalanan.'],
                ['waktu' => '15:00 - 16:30', 'aktivitas' => 'Pelaporan & Dokumentasi', 'deskripsi' => 'Pembuatan laporan pemeriksaan dan dokumentasi maintenance.']
            ],
            'teknologi' => [
                ['icon' => '📡', 'nama' => 'Sistem Sinyal Kereta', 'deskripsi' => 'Peralatan persinyalan dan kelistrikan perkeretaapian.'],
                ['icon' => '📻', 'nama' => 'Radio Komunikasi', 'deskripsi' => 'Sistem komunikasi two-way radio dan komunikasi data.'],
                ['icon' => '🖥️', 'nama' => 'Kontrol Panel', 'deskripsi' => 'Panel kontrol dan monitoring sistem sinyal.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit Sinyal & Telekomunikasi memberikan pengalaman di bidang sistem persinyalan dan telekomunikasi perkeretaapian.',
                'poin' => [
                    'Belajar dari ahli teknik sinyal berpengalaman',
                    'Terlibat dalam pemeliharaan sistem persinyalan',
                    'Mendapatkan pengetahuan tentang telekomunikasi KA',
                    'Mengembangkan skill teknik dan telekomunikasi',
                    'Sertifikat resmi PT KAI'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi', 'deskripsi' => 'Pengenalan unit, sistem sinyal, dan prosedur keselamatan.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan', 'deskripsi' => 'Pelatihan sistem sinyal, telekomunikasi, dan peralatan.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan', 'deskripsi' => 'Mulai pemeliharaan dan monitoring sistem dengan mentor.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Mandiri', 'deskripsi' => 'Menangani tugas pemeliharaan secara mandiri.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi', 'deskripsi' => 'Evaluasi kinerja dan sertifikasi.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '📡', 'nama' => 'Sistem Sinyal', 'deskripsi' => 'Kemampuan dalam pengelolaan sinyal kereta api.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '📻', 'nama' => 'Telekomunikasi', 'deskripsi' => 'Kemampuan dalam sistem komunikasi.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '🔧', 'nama' => 'Perawatan', 'deskripsi' => 'Kemampuan perawatan peralatan teknik.', 'level' => '65%', 'level_label' => 'Menengah']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah magang di Unit INTEL berbahaya?', 'jawaban' => 'Dengan prosedur keselamatan yang diterapkan, risiko dapat diminimalkan.'],
                ['pertanyaan' => 'Apakah ada ujian masuk khusus?', 'jawaban' => 'Ada psikotes dan uji kesehatan, terutama penglihatan yang baik.']
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Teknik Elektro / Teknik Telekomunikasi / Informatika',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami dasar sistem sinyal dan telekomunikasi',
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
                'Pengalaman sistem sinyal KA',
                'Bimbingan dari ahli telekomunikasi',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Kesempatan di bidang teknologi'
            ],
            'gallery' => [
                ['img' => asset('images/Unit Sintel/68c7a89271429.jpg'), 'label' => 'Sinyal'],
                ['img' => asset('images/Unit Sintel/fOxTmsbd-Sistem-Persinyalan-Kereta-Api-1.webp'), 'label' => 'Telekomunikasi'],
                ['img' => asset('images/Unit Sintel/images.jpg'), 'label' => 'Kontrol'],
                ['img' => asset('images/Unit Sintel/public-607.jpg'), 'label' => 'Perawatan']
            ],
            'gradient' => 'linear-gradient(135deg, #1e3a5f 0%, #3b82f6 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #1e3a5f, #3b82f6)',
            'img_label' => 'Sinyal & Telekomunikasi'
        ],
        '10' => [
            'id' => '10',
            'name' => 'Bangunan',
            'emoji' => '🏗️',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit Bangunan bertanggung jawab dalam pembangunan dan pemeliharaan infrastruktur bangunan di lingkungan PT KAI Divre III Palembang.',
            'visi' => 'Menjadi unit pembangunan yang unggul dalam mewujudkan infrastruktur bangunan yang berkualitas dan berkelanjutan.',
            'misi' => [
                'Melaksanakan pembangunan gedung dan fasilitas sesuai standar',
                'Menjaga kualitas dan fungsi bangunan yang ada',
                'Mengelola perencanaan konstruksi yang efisien',
                'Melaksanakan pengawasan proyek secara ketat',
                'Mengembangkan kompetensi SDM di bidang konstruksi'
            ],
            'tugas' => [
                'Pembangunan Gedung & Fasilitas',
                'Pemeliharaan Bangunan',
                'Perencanaan Konstruksi',
                'Pengawasan Proyek Bangunan',
                'Manajemen Aset Bangunan'
            ],
            'tugas_desc' => [
                'Melaksanakan pembangunan gedung dan fasilitas perusahaan',
                'Memelihara dan memperbaiki bangunan yang sudah ada',
                'Merencanakan konstruksi bangunan baru atau renovasi',
                'Mengawasi progres dan kualitas proyek bangunan',
                'Mengelola inventaris dan kondisi aset bangunan'
            ],
            'aktivitas_harian' => [
                ['waktu' => '07:30 - 08:30', 'aktivitas' => 'Briefing & Review Proyek', 'deskripsi' => 'Review progres proyek dan peninjauan lokasi konstruksi.'],
                ['waktu' => '08:30 - 10:30', 'aktivitas' => 'Inspeksi Lapangan', 'deskripsi' => 'Pemeriksaan kondisi bangunan dan progres pembangunan.'],
                ['waktu' => '10:30 - 12:00', 'aktivitas' => 'Koordinasi dengan Kontraktor', 'deskripsi' => 'Diskusi dan koordinasi dengan kontraktor atau vendor.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Pemeliharaan & Perbaikan', 'deskripsi' => 'Pelaksanaan pemeliharaan rutin dan perbaikan bangunan.'],
                ['waktu' => '15:00 - 16:30', 'aktivitas' => 'Pelaporan & Dokumentasi', 'deskripsi' => 'Pembuatan laporan progres dan dokumentasi proyek.']
            ],
            'teknologi' => [
                ['icon' => '🏗️', 'nama' => 'Alat Konstruksi', 'deskripsi' => 'Peralatan konstruksi dan pembangunan.'],
                ['icon' => '📐', 'nama' => 'Survey & Desain', 'deskripsi' => 'Alat Survey dan perancangan bangunan.'],
                ['icon' => '📊', 'nama' => 'Project Management Tools', 'deskripsi' => 'Software untuk manajemen proyek konstruksi.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit Bangunan memberikan pengalaman di bidang konstruksi dan pemeliharaan bangunan.',
                'poin' => [
                    'Belajar dari ahli konstruksi berpengalaman',
                    'Terlibat dalam proyek pembangunan dan pemeliharaan',
                    'Mendapatkan pengetahuan tentang standar konstruksi',
                    'Mengembangkan skill manajemen proyek',
                    'Sertifikat resmi PT KAI'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi', 'deskripsi' => 'Pengenalan unit, standar konstruksi, dan prosedur keselamatan.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan', 'deskripsi' => 'Pelatihan konstruksi, perencanaan, dan pengawasan.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan', 'deskripsi' => 'Mulai mengikuti proyek dengan mentor.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Mandiri', 'deskripsi' => 'Menangani tugas pembangunan/pemeliharaan.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi', 'deskripsi' => 'Evaluasi kinerja dan sertifikasi.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '🏗️', 'nama' => 'Konstruksi', 'deskripsi' => 'Kemampuan dalam proses konstruksi bangunan.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '📋', 'nama' => 'Manajemen Proyek', 'deskripsi' => 'Kemampuan mengelola proyek konstruksi.', 'level' => '65%', 'level_label' => 'Menengah'],
                ['icon' => '🛡️', 'nama' => 'K3', 'deskripsi' => 'Pemahaman keselamatan konstruksi.', 'level' => '75%', 'level_label' => 'Mahir']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah magang di Unit Bangunan berbahaya?', 'jawaban' => 'Dengan APD dan prosedur keselamatan, risiko dapat diminimalkan.'],
                ['pertanyaan' => 'Apakah ada sertifikasi khusus?', 'jawaban' => 'Tidak ada, tapi pengalaman sangat berharga di bidang konstruksi.']
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Teknik Sipil / Arsitektur / Teknik Bangunan',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami dasar konstruksi bangunan',
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
                'Pengalaman konstruksi di BUMN',
                'Bimbingan dari ahli bangunan',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Jaringan profesional konstruksi'
            ],
            'gallery' => [
                ['img' => asset('images/Unit Bangunan/20230104_062935.jpg'), 'label' => 'Konstruksi']
            ],
            'gradient' => 'linear-gradient(135deg, #92400e 0%, #fbbf24 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #92400e, #fbbf24)',
            'img_label' => 'Bangunan'
        ],
        '11' => [
            'id' => '11',
            'name' => 'HUMAS',
            'emoji' => '📢',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit Hubungan Masyarakat (HUMAS) mengelola komunikasi publik, media, dan citra perusahaan serta menyebarluaskan informasi kepada masyarakat.',
            'visi' => 'Menjadi unit komunikasi yang unggul dalam membangun citra positif dan hubungan yang harmonis antara PT KAI dan stakeholders.',
            'misi' => [
                'Mengelola komunikasi publik yang transparan dan efektif',
                'Membangun hubungan media yang kuat dan berkelanjutan',
                'Mempublikasikan informasi perusahaan secara akurat',
                'Mengelola acara dan kegiatan perusahaan',
                'Mengembangkan kompetensi SDM di bidang komunikasi'
            ],
            'tugas' => [
                'Komunikasi Publik',
                'Hubungan Media',
                'Publikasi & Dokumentasi',
                'Manajemen Acara & Kegiatan',
                'Citra & Branding Perusahaan'
            ],
            'tugas_desc' => [
                'Menjalankan komunikasi dengan publik dan stakeholder',
                'Menjaga hubungan baik dengan media massa',
                'Mempublikasikan kegiatan dan informasi perusahaan',
                'Mengelola acara perusahaan dan event publik',
                'Membangun dan menjaga citra positif perusahaan'
            ],
            'aktivitas_harian' => [
                ['waktu' => '08:00 - 09:00', 'aktivitas' => 'Monitoring Media & Berita', 'deskripsi' => 'Pemantauan berita dan media sosial terkait PT KAI.'],
                ['waktu' => '09:00 - 11:00', 'aktivitas' => 'Konten & Publikasi', 'deskripsi' => 'Pembuatan konten untuk media sosial dan publikasi.'],
                ['waktu' => '11:00 - 12:00', 'aktivitas' => 'Koordinasi dengan Media', 'deskripsi' => 'Diskusi dan koordinasi dengan jurnalis atau media.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Acara & Dokumentasi', 'deskripsi' => 'Persiapan acara atau dokumentasi kegiatan perusahaan.'],
                ['waktu' => '15:00 - 16:30', 'aktivitas' => 'Pelaporan & Planning', 'deskripsi' => 'Pembuatan laporan dan perencanaan komunikasi.']
            ],
            'teknologi' => [
                ['icon' => '📱', 'nama' => 'Social Media Tools', 'deskripsi' => 'Tools untuk mengelola media sosial perusahaan.'],
                ['icon' => '📸', 'nama' => 'Kamera & Video', 'deskripsi' => 'Peralatan dokumentasi foto dan video.'],
                ['icon' => '🎨', 'nama' => 'Design Tools', 'deskripsi' => 'Software desain grafis dan editing.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit HUMAS memberikan pengalaman di bidang komunikasi dan public relations.',
                'poin' => [
                    'Belajar dari profesional komunikasi',
                    'Terlibat dalam manajemen media dan publikasi',
                    'Mendapatkan pengetahuan tentang corporate communication',
                    'Mengembangkan skill public speaking dan writing',
                    'Sertifikat resmi PT KAI'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi', 'deskripsi' => 'Pengenalan unit, brand guideline, dan prosedur komunikasi.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan', 'deskripsi' => 'Pelatihan komunikasi, media relations, dan content creation.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan', 'deskripsi' => 'Mulai membuat konten dan handling media dengan mentor.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Mandiri', 'deskripsi' => 'Menangani tugas komunikasi secara mandiri.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi', 'deskripsi' => 'Evaluasi kinerja dan sertifikasi.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '📝', 'nama' => 'Writing', 'deskripsi' => 'Kemampuan menulis konten dan artikel.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '🎤', 'nama' => 'Public Speaking', 'deskripsi' => 'Kemampuan berbicara di depan umum.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '📱', 'nama' => 'Social Media', 'deskripsi' => 'Kemampuan mengelola platform media sosial.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '🤝', 'nama' => 'Media Relations', 'deskripsi' => 'Kemampuan berkomunikasi dengan media.', 'level' => '70%', 'level_label' => 'Menengah']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah magang di HUMAS kreatif?', 'jawaban' => 'Ya, unit ini mengutamakan kreativitas dalam menyusun konten dan komunikasi.'],
                ['pertanyaan' => 'Apakah ada peluang karir di bidang komunikasi?', 'jawaban' => 'Ya, pengalaman di unit ini sangat berharga untuk karier di bidang komunikasi dan humas.']
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Ilmu Komunikasi / Public Relations / Jurnalistik',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memiliki kemampuan komunikasi yang baik',
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
                'Pengalaman humas di BUMN',
                'Mentoring dari profesional komunikasi',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Pengembangan jaringan media'
            ],
            'gallery' => [
                ['img' => asset('images/HUMAS/-rl3M6c6UWuxfXZuHYm5LkeJ9tasOvwtIOh_AevTPTqEXOk-LoVXUi_UDNOZfK4t7_Oe_FKeGd5Ih6eL73d_DklEsWW2S7vqHr0v37J-DVT5MX9d6YG1nZcZ4uNcMy6dxp0J-z8tSTQp-WEy3QxNurAFzl61EFXn3mtv5lTg09y78SFGNWt8D_6zmHBgtKqt.jpg'), 'label' => 'Publikasi'],
                ['img' => asset('images/HUMAS/j-mXhJm3Z1oBGUeAp2GCsTsA_aHscsSHAgQXyH84eZUdiYBojiEXuv9zcgEO7WC2T1BO0EGDA0XbNBuXvXNZzc84j4Hzvv5rGDPvZAgox0znITZnG_LmWa7AF4ia9VHuKrHJoynpKh24WUUDdiy-aSouYxHygXpqnZgwV0bIdPOzKtleiXirGFylvldK15gH.jpg'), 'label' => 'Dokumentasi'],
                ['img' => asset('images/HUMAS/moBE741MsXTXyTiUO2cN9VAmvBGRKc92XxyiKGJ2tXhCjKd-BdAyq5QjvIomKNSj7TvxDNry-Ze0XaJBkzsQE1C3kZy78ZLesWP0Dh4Djb0m-HRZT0Tj7j_kv8TxGGnhMWzN83LdI5NfoD61beBH0bEaXdpau48masWw6soVUARLLpSfqO3NtrYsZjo9rk4d.jpg'), 'label' => 'Media Sosial'],
                ['img' => asset('images/HUMAS/xEO8PYJWgkOznt_Y1ntI4AbxFRQjm4n4ABIU5Q7jP9XEcHtvLrMKzqFWqBf5a6yxHsw8kd7eUCM1H07ekG6shtWCKALgVxbyX2R-YKobZEJ7kj2eJ9tOgqFRYqWVVsW4U-juJ2QPa1sZtYIz9k3JxkKBaMGHVyP5_oOoEzcimNKCgcG1XVkRfMsWK3iFyI8K.jpg'), 'label' => 'Acara']
            ],
            'gradient' => 'linear-gradient(135deg, #155e75 0%, #22d3ee 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #155e75, #22d3ee)',
            'img_label' => 'HUMAS'
        ],
        '12' => [
            'id' => '12',
            'name' => 'Hukum',
            'emoji' => '⚖️',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit Hukum bertanggung jawab dalam administrasi hukum, kepatuhan regulasi, dan penanganan aspek legal perusahaan di PT KAI Divre III Palembang.',
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
                '📄 Dokumen pendukung pengajuan terbaru',
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
                ['img' => asset('images/HUKUM/l-PuXEEcMYbDRheZ1pcnyWGnxn5T9XCcEai5Hh8ATv1TV35cypG_mtT9P4KPjbQKmg4QAPOsa61RlSduLKpCWOQkTVDtDGUnvR5pX6aOH6TVPmeACKTtN-fRKUoF3TLQ9MgHz1qBzW0qdKV4fSh7JbHJi-W8yq2k-Rp3540i513QOYuP0v6hmj2r-98feRia.jpg'), 'label' => 'Legal'],
                ['img' => asset('images/HUKUM/moBE741MsXTXyTiUO2cN9VAmvBGRKc92XxyiKGJ2tXhCjKd-BdAyq5QjvIomKNSj7TvxDNry-Ze0XaJBkzsQE1C3kZy78ZLesWP0Dh4Djb0m-HRZT0Tj7j_kv8TxGGnhMWzN83LdI5NfoD61beBH0bEaXdpau48masWw6soVUARLLpSfqO3NtrYsZjo9rk4d.jpg'), 'label' => 'Litigasi'],
                ['img' => asset('images/HUKUM/8kIopwg30dsoXGnIQEtPq-7MZmyAb0VpyyQzNRAETNjl94Yl7g9S-o-diwO92WPYaf8VDse6u5hnOJJFKu4fu4Di0oFO-ogBDD--4Eru1W7dZ2bhm9dSxIHOM0PUHbxI3WZau8x2LN0uRawVOBppK-zDauckfUc48UonyCgmcNzHjcBW7wIHSTV5xkP9GdaZ.jpg'), 'label' => 'Kontrak'],
                ['img' => asset('images/HUKUM/IELZpgrIrVA-POlWepXh42NPaj0SPUYAHxJM_s5zBcp4q7RqNu9Qt4kzrF8qOk7STJsqyRTmbGdRqcFY41H7U2pHhjs89e60X4F7B8ZkF293pi2Ew8PnqU52IMJ2MS1hjUaqqjBn6G-4hW1hD_ZTffOrJiIQNkSFTCi-aepSvzOlfwc8xNZTJ_slCRXJPxFq.jpg'), 'label' => 'Kepatuhan']
            ],
            'gradient' => 'linear-gradient(135deg, #b45309 0%, #f59e0b 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #b45309, #f59e0b)',
            'img_label' => 'Hukum'
        ],
        '13' => [
            'id' => '13',
            'name' => 'Aset',
            'emoji' => '🏛️',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit Aset mengelola inventarisasi, pemeliharaan, dan optimalisasi aset perusahaan di lingkungan PT KAI Divre III Palembang.',
            'visi' => 'Menjadi unit pengelolaan aset yang unggul dalam inventarisasi, pemeliharaan, dan optimalisasi aset perusahaan untuk mendukung operasional PT KAI.',
            'misi' => [
                'Mengelola inventarisasi aset secara akurat dan terkini',
                'Melaksanakan pemeliharaan aset untuk memperpanjang umur manfaat',
                'Mengoptimalkan pemanfaatan aset perusahaan',
                'Melakukan pelaporan dan administrasi aset yang transparan',
                'Mengembangkan kompetensi SDM di bidang manajemen aset'
            ],
            'tugas' => [
                'Inventarisasi Aset Perusahaan',
                'Pemeliharaan & Perawatan Aset',
                'Optimalisasi Pemanfaatan Aset',
                'Pelaporan & Administrasi Aset',
                'Penilaian & Sertifikasi Aset'
            ],
            'tugas_desc' => [
                'Melakukan pencatatan dan inventarisasi seluruh aset perusahaan',
                'Menyusun dan melaksanakan program pemeliharaan aset secara berkala',
                'Menganalisis dan merekomendasikan optimalisasi pemanfaatan aset',
                'Membuat laporan dan dokumentasi administrasi aset perusahaan',
                'Melakukan penilaian dan sertifikasi aset sesuai standar yang berlaku'
            ],
            'aktivitas_harian' => [
                ['waktu' => '08:00 - 09:00', 'aktivitas' => 'Briefing & Review Prioritas', 'deskripsi' => 'Rapat singkat tim dan review prioritas pekerjaan hari ini.'],
                ['waktu' => '09:00 - 11:00', 'aktivitas' => 'Inventarisasi & Pemeriksaan Aset', 'deskripsi' => 'Melakukan pengecekan dan pencatatan kondisi aset perusahaan.'],
                ['waktu' => '11:00 - 12:00', 'aktivitas' => 'Koordinasi dengan Unit', 'deskripsi' => 'Koordinasi dengan unit lain terkait pemeliharaan aset.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Pelaporan & Dokumentasi', 'deskripsi' => 'Pembuatan laporan inventarisasi dan input data sistem.'],
                ['waktu' => '15:00 - 16:30', 'aktivitas' => 'Evaluasi & Perencanaan', 'deskripsi' => 'Evaluasi kondisi aset dan perencanaan pemeliharaan.']
            ],
            'teknologi' => [
                ['icon' => '💻', 'nama' => 'SIMS (Asset Management)', 'deskripsi' => 'Sistem informasi manajemen aset perusahaan.'],
                ['icon' => '📊', 'nama' => 'Database & Spreadsheet', 'deskripsi' => 'Tools untuk inventarisasi dan pelaporan data aset.'],
                ['icon' => '📱', 'nama' => 'Barcode Scanner & RFID', 'deskripsi' => 'Peralatan untuk pelacakan dan identifikasi aset.'],
                ['icon' => '📋', 'nama' => 'Document Management', 'deskripsi' => 'Sistem pengelolaan dokumen dan sertifikat aset.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit Aset memberikan pengalaman di bidang manajemen aset perusahaan dengan standar BUMN.',
                'poin' => [
                    'Belajar dari praktisi manajemen aset berpengalaman',
                    'Terlibat dalam proses inventarisasi dan pemeliharaan aset',
                    'Mendapatkan pengetahuan tentang standar aset BUMN',
                    'Mengembangkan skill administrasi dan manajemen data',
                    'Sertifikat resmi PT KAI'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi', 'deskripsi' => 'Pengenalan unit, prosedur manajemen aset, dan sistem informasi.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan', 'deskripsi' => 'Pelatihan inventarisasi, administrasi aset, dan sistem perusahaan.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan', 'deskripsi' => 'Mulai mengikuti kegiatan inventarisasi dan pelaporan dengan mentor.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Mandiri', 'deskripsi' => 'Menangani tugas manajemen aset secara mandiri.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi', 'deskripsi' => 'Evaluasi kinerja dan sertifikasi.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '📋', 'nama' => 'Inventarisasi', 'deskripsi' => 'Kemampuan dalam pencatatan dan pengelolaan data aset.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '💻', 'nama' => 'Sistem Informasi', 'deskripsi' => 'Penggunaan sistem manajemen aset perusahaan.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '📊', 'nama' => 'Pelaporan', 'deskripsi' => 'Kemampuan membuat laporan dan dokumentasi.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '🔍', 'nama' => 'Audit & Evaluasi', 'deskripsi' => 'Kemampuan melakukan penilaian dan evaluasi aset.', 'level' => '65%', 'level_label' => 'Menengah']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah magang di Unit Aset membutuhkan kemampuan khusus?', 'jawaban' => 'Tidak khusus, tetapi kemampuan administrasi dan pengelolaan data akan sangat membantu.'],
                ['pertanyaan' => 'Apakah ada kesempatan karir setelah magang?', 'jawaban' => 'Ya, peserta dengan kinerja baik berpeluang menjadi karyawan tetap di bidang manajemen aset.']
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Manajemen Aset / Akuntansi / Administrasi',
                'IPK Minimal 3.00 dari skala 4.00',
                'Teliti dan mampu mengelola data administrasi',
                'Bersedia magang sesuai peraturan KAI'
            ],
            'dokumen' => [
                '📄 Surat pengantar dari kampus',
                '🪪 KTM aktif',
                '📝 Proposal magang',
                '📄 Dokumen pendukung pengajuan terbaru',
                '📊 Transkrip nilai'
            ],
            'benefit' => [
                'Pengalaman manajemen aset BUMN',
                'Pemahaman inventarisasi aset negara',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Kesempatan pengembangan karier'
            ],
            'gallery' => [
                ['img' => asset('images/ASET/4fyBkNXFk9sMNSjOxpGVu1JRxfzN9V3BuqUxNfFgvIyHtegYSsHPaKCc17ltAJD7GpJwckTKdfN1Hi0WEBc2oxstNV-7i-XeqpPg36djTy8P6Wlms4KQlucCWQzQoo1n9DrUP4v0m5laq0KQiEUZVmbwFpTggxnRh7GvSRp5T-MA6YHrvhPtvU6nxlhUhrly.jpg'), 'label' => 'Aset'],
                ['img' => asset('images/ASET/5NVnZKt19NVQ3W8s6uykY0sI3JNioAD8QPGSVcmixm1RS_i_dHLFc3Jn0sHU0BGJm-w0EEUuTp9Xp2WR5gr1PJo_pdqw7R9_XUqZxqzq7IHdBlDeOQx24zNy2R6vRgZF283mdn5mp3mZ0PcvMBBe_Ri1J1FqBIPepKpuaWf1mdhDghKWENbanacYK_OJIb8Q.jpg'), 'label' => 'Inventaris'],
                ['img' => asset('images/ASET/JCJ_bldnXic4glf3TC7uW9X9WeljUyh238VQGA4cejHDNrtyen9Dd2ZhFY28YPZHtn_W7hKJhSJS4j-tIAxnC53LknhfZz92XJq9Jkz0w-s4Pk_1Ts9gPKpNgETQ60LLyMoYeE9X9ycME56v-e8U3Jz6KjbRjofkjsIffYPD-RjSe0HR1o9xMCa8xLtBtdtr.jpg'), 'label' => 'Pelaporan'],
                ['img' => asset('images/ASET/ywKwWsesEkABy9MKwzJTfp8F7OcYzts1vUITT_4hLepgKRD9g2yMz9B-CxZEqJCc1EcnPhpB_9xQmjh1kvwyywAS0Xn9FKVzYb-BpVBORwTRT1MB3ugRf55bnXYNmPuF44FVphnXTAWqGHKuZjmqnAhyI7gkiLb_9nUNxoJNVR2X4czXgO5xnEjPdRpIdsCZ.jpg'), 'label' => 'Audit Aset']
            ],
            'gradient' => 'linear-gradient(135deg, #4a5568 0%, #9ca3af 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #4a5568, #9ca3af)',
            'img_label' => 'Manajemen Aset'
        ],
        '14' => [
            'id' => '14',
            'name' => 'SDM & Umum',
            'emoji' => '👥',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit SDM & Umum mengelola administrasi sumber daya manusia, rekrutmen, pelatihan, serta urusan umum di lingkungan PT KAI Divre III Palembang.',
            'visi' => 'Menjadi unit SDM yang unggul dalam pengelolaan sumber daya manusia dan urusan umum untuk mendukung kinerja PT KAI.',
            'misi' => [
                'Mengelola administrasi kepegawaian secara efektif dan efisien',
                'Melakukan rekrutmen dan seleksi SDM yang berkualitas',
                'Menyelenggarakan pelatihan dan pengembangan kompetensi',
                'Mengelola kinerja dan kompensasi karyawan',
                'Menyelenggarakan urusan umum dan rumah tangga perusahaan'
            ],
            'tugas' => [
                'Administrasi Kepegawaian',
                'Rekrutmen & Seleksi',
                'Pelatihan & Pengembangan',
                'Manajemen Kinerja',
                'Urusan Umum & Rumah Tangga'
            ],
            'tugas_desc' => [
                'Mengelola administrasi kepegawaian mulai dari absensi hingga pensiun',
                'Melakukan proses rekrutmen dan seleksi kandidat karyawan',
                'Menyusun dan melaksanakan program pelatihan karyawan',
                'Memonitor dan mengevaluasi kinerja karyawan secara periodik',
                'Mengelola fasilitas dan urusan umum perusahaan'
            ],
            'aktivitas_harian' => [
                ['waktu' => '08:00 - 09:00', 'aktivitas' => 'Briefing & Review Kebutuhan', 'deskripsi' => 'Rapat singkat dan review kebutuhan SDM hari ini.'],
                ['waktu' => '09:00 - 11:00', 'aktivitas' => 'Administrasi Kepegawaian', 'deskripsi' => 'Pembukuan dan pengelolaan data kepegawaian.'],
                ['waktu' => '11:00 - 12:00', 'aktivitas' => 'Koordinasi dengan Karyawan', 'deskripsi' => 'Diskusi dan konsultasi dengan karyawan terkait urusan SDM.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Pelatihan & Pengembangan', 'deskripsi' => 'Pelaksanaan program pelatihan atau workshop karyawan.'],
                ['waktu' => '15:00 - 16:30', 'aktivitas' => 'Pelaporan & Perencanaan', 'deskripsi' => 'Pembuatan laporan SDM dan perencanaan program ke depan.']
            ],
            'teknologi' => [
                ['icon' => '💻', 'nama' => 'HRIS System', 'deskripsi' => 'Sistem informasi manajemen kepegawaian.'],
                ['icon' => '📊', 'nama' => 'Excel & Database', 'deskripsi' => 'Tools untuk analisis data dan pelaporan SDM.'],
                ['icon' => '📱', 'nama' => 'Communications Tools', 'deskripsi' => 'Platform komunikasi dan kolaborasi internal.'],
                ['icon' => '📋', 'nama' => 'Document Management', 'deskripsi' => 'Sistem pengelolaan dokumen dan arsip kepegawaian.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit SDM & Umum memberikan pengalaman di bidang manajemen SDM dan administrasi perusahaan.',
                'poin' => [
                    'Belajar dari praktisi SDM berpengalaman',
                    'Terlibat dalam proses administrasi dan pengembangan SDM',
                    'Mendapatkan pengetahuan tentang manajemen karyawan',
                    'Mengembangkan skill komunikasi dan administrasi',
                    'Sertifikat resmi PT KAI'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi', 'deskripsi' => 'Pengenalan unit, sistem HR, dan prosedur kerja SDM.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan', 'deskripsi' => 'Pelatihan administrasi SDM, rekrutmen, dan pelatihan karyawan.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan', 'deskripsi' => 'Mulai mengikuti aktivitas SDM dengan bimbingan mentor.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Mandiri', 'deskripsi' => 'Menangani tugas SDM secara mandiri.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi', 'deskripsi' => 'Evaluasi kinerja dan sertifikasi.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan pengambilan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '🤝', 'nama' => 'Komunikasi', 'deskripsi' => 'Kemampuan berkomunikasi secara efektif dengan karyawan.', 'level' => '80%', 'level_label' => 'Sangat Mahir'],
                ['icon' => '📋', 'nama' => 'Administrasi', 'deskripsi' => 'Kemampuan mengelola administrasi dan dokumentasi.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '📊', 'nama' => 'Data Analysis', 'deskripsi' => 'Kemampuan menganalisis data SDM untuk pelaporan.', 'level' => '70%', 'level_label' => 'Menengah'],
                ['icon' => '🎯', 'nama' => 'Problem Solving', 'deskripsi' => 'Kemampuan menangani masalah karyawan dengan tepat.', 'level' => '75%', 'level_label' => 'Mahir']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah magang di Unit SDM menantang?', 'jawaban' => 'Ya, unit ini membutuhkan kemampuan komunikasi dan empati yang tinggi untuk berinteraksi dengan karyawan.'],
                ['pertanyaan' => 'Apakah ada kesempatan karir setelah magang?', 'jawaban' => 'Ya, peserta dengan kinerja baik berpeluang menjadi karyawan tetap di bidang SDM.']
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Manajemen SDM / Psikologi / Administrasi Bisnis',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami dasar manajemen SDM',
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
                'Pengalaman HR di perusahaan BUMN',
                'Mentoring dari praktisi SDM',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Kesempatan karier di bidang SDM'
            ],
            'gallery' => [
                ['img' => asset('images/SDM & UMUM/bJJaEvoxgJuj-Ou-FSwsIMkXzYiCbw1gNJeDSFTxeW8OojTfcmUYPJ9fOjxAiUN-yg-d9A1zhlIl_Pi28ocwyY3aq5P1rkKgqXjEkZttLc1fvMAoLbeb75XhYZ-HZ7g1WjqAgJ8GgFPJ5pjNYhwL84KSZ4w_SneBcTesFzYlZNgYVP64_z7Ik2PZEpGzc-1c.jpg'), 'label' => 'Kepegawaian'],
                ['img' => asset('images/SDM & UMUM/fzUqTCvsN3ztMA818XBUTW9zrZQdxAO2MFiceFfAjYVTNKPt14Abna30dxK3I6lbMbae64ZRlf0p1tpy2jwNgaPvjmD89yTKrptIbGtXVA1pqy2nrvRtKiZZHfjsB85C7qDQwvto3Mly0evbODXazmMtEFgGjriYTbSXqhXG7alYecG7FN3aH6_dVzrC-mXX.jpg'), 'label' => 'Pelatihan'],
                ['img' => asset('images/SDM & UMUM/KBSxVw6ssunPQTrvBzdI5FaSn2sFDA3cHwM6j8xzockpCA_FNxJxa0B6A4HepTOOMXvXx4R67ki78GlL0BCD6T9KJl4DdYDvZ8zY3wdCnNBDZlKg0J5rLZL-6Iv6jWeyN2Qf9SRg3RjrnPPx-4VIMWe5x1lo_r9SxObt2Ai_vMG5u2aP9gRnsk3WvbuRPTs-.jpg'), 'label' => 'Rekrutmen'],
                ['img' => asset('images/SDM & UMUM/wXZWuT3Ev4qDcN9z1eEQrW-WNnIy27NR9BPTIaJeUv67hVBc5XmusJGs90ageslvQCv_L--4ihLqvj1Jv8jIR_H62pxfmuTnhwR_oDFaSH4Ed5RJRSub7kZ-uXJEG2iBe4BrobfkQgupsA4veUzPYVEgeTh5VJDVrUgs8Owl-P5Wxl8d3hrhnUepJOyMoSOM.jpg'), 'label' => 'Kinerja']
            ],
            'gradient' => 'linear-gradient(135deg, #00539f 0%, #00a6d6 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #00539f, #00a6d6)',
            'img_label' => 'SDM & Umum'
        ],
        '15' => [
            'id' => '15',
            'name' => 'LRT',
            'emoji' => '🚄',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit LRT mengelola operasional dan pemeliharaan Layanan Kereta Api Ringan (LRT) di wilayah Divre III Palembang.',
            'visi' => 'Menjadi unit operasional LRT yang unggul dalam penyediaan layanan transportasi modern yang aman, nyaman, dan terjangkau.',
            'misi' => [
                'Melaksanakan operasional LRT yang aman dan tepat waktu',
                'Melakukan pemeliharaan sarana LRT secara berkala',
                'Memberikan pelayanan prima kepada penumpang',
                'Menjaga keselamatan operasional LRT',
                'Mengelola stasiun dan fasilitas LRT dengan baik'
            ],
            'tugas' => [
                'Operasional LRT',
                'Pemeliharaan Sarana LRT',
                'Pelayanan Penumpang LRT',
                'Keselamatan Operasional LRT',
                'Pengelolaan Stasiun LRT'
            ],
            'tugas_desc' => [
                'Mengoperasikan dan mengawasi perjalanan kereta LRT sesuai jadwal',
                'Melakukan pemeliharaan rutin dan perbaikan sarana LRT',
                'Melayani penumpang dengan ramah dan profesional',
                'Memastikan prosedur keselamatan operasional terpenuhi',
                'Mengelola stasiun dan fasilitas penumpang LRT'
            ],
            'aktivitas_harian' => [
                ['waktu' => '05:00 - 06:00', 'aktivitas' => 'Persiapan Operasional', 'deskripsi' => 'Pemeriksaan kondisi sarana LRT dan persiapan stasiun.'],
                ['waktu' => '06:00 - 08:00', 'aktivitas' => 'Pelayanan Penumpang', 'deskripsi' => 'Pelayanan di stasiun, penjualan tiket, dan informasi penumpang.'],
                ['waktu' => '08:00 - 10:00', 'aktivitas' => 'Monitoring Perjalanan', 'deskripsi' => 'Monitoring posisi dan kondisi LRT yang sedang beroperasi.'],
                ['waktu' => '10:00 - 12:00', 'aktivitas' => 'Pemeliharaan Sarana', 'deskripsi' => 'Pemeriksaan dan perawatan sarana LRT di depot.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat', 'deskripsi' => 'Break siang.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Koordinasi & Pelaporan', 'deskripsi' => 'Koordinasi dengan unit terkait dan pembuatan laporan operasional.'],
                ['waktu' => '15:00 - 17:00', 'aktivitas' => 'Penutupan Operasional', 'deskripsi' => 'Pembersihan stasiun dan persiapan penutupan hari ini.']
            ],
            'teknologi' => [
                ['icon' => '🚄', 'nama' => 'Sistem Kendali LRT', 'deskripsi' => 'Sistem otomatis untuk pengelolaan perjalanan LRT.'],
                ['icon' => '💻', 'nama' => 'Integrated Control Center', 'deskripsi' => 'Pusat kendali terpadu untuk monitoring operasional.'],
                ['icon' => '📡', 'nama' => 'Komunikasi & Signaling', 'deskripsi' => 'Sistem komunikasi dan persinyalan LRT modern.'],
                ['icon' => '📱', 'nama' => 'Ticketing System', 'deskripsi' => 'Sistem penjualan dan manajemen tiket elektronik.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit LRT memberikan pengalaman operasional transportasi modern dengan standar internasional.',
                'poin' => [
                    'Belajar dari ahli operasional LRT berpengalaman',
                    'Terlibat dalam operasional transportasi modern',
                    'Mendapatkan pengetahuan tentang sistem LRT terintegrasi',
                    'Mengembangkan skill operasional dan pelayanan',
                    'Sertifikat resmi PT KAI'
                ]
            ],
            'timeline' => [
                ['judul' => 'Orientasi', 'deskripsi' => 'Pengenalan sistem LRT, prosedur keselamatan, dan operasional stasiun.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan', 'deskripsi' => 'Pelatihan operasi LRT, sistem ticketing, dan prosedur keselamatan.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Pendampingan', 'deskripsi' => 'Mulai mengikuti operasional di stasiun dengan mentor.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Mandiri', 'deskripsi' => 'Menangani tugas operasional secara mandiri.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi', 'deskripsi' => 'Evaluasi kinerja dan sertifikasi.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan', 'deskripsi' => 'Penutupan program dan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '🚄', 'nama' => 'Operasional LRT', 'deskripsi' => 'Kemampuan mengoperasikan sistem transportasi LRT.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '🤝', 'nama' => 'Pelayanan', 'deskripsi' => 'Kemampuan melayani penumpang dengan prima.', 'level' => '80%', 'level_label' => 'Sangat Mahir'],
                ['icon' => '🛡️', 'nama' => 'Keselamatan', 'deskripsi' => 'Pemahaman dan penerapan prosedur keselamatan operasional.', 'level' => '80%', 'level_label' => 'Sangat Mahir'],
                ['icon' => '📋', 'nama' => 'Koordinasi', 'deskripsi' => 'Kemampuan koordinasi dengan unit operasional.', 'level' => '70%', 'level_label' => 'Menengah']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah operasi LRT stres?', 'jawaban' => 'Memerlukan konsentrasi tinggi, tetapi dengan sistem otomatis yang memadai, risiko dapat dikelola dengan baik.'],
                ['pertanyaan' => 'Apakah ada sistem keamanan yang ketat?', 'jawaban' => 'Ya, LRT dilengkapi dengan sistem keselamatan modern dan prosedur operasional yang ketat.']
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Teknik Elektro / Teknik Mesin / Transportasi / Manajemen',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memiliki minat di bidang transportasi modern',
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
                'Pengalaman operasional LRT',
                'Bimbingan dari ahli LRT',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Kesempatan di transportasi modern'
            ],
            'gallery' => [
                ['img' => asset('images/LRT/IEef8nIv2rrBMbhWrtbAsBIEUyqGEO0D0VuyilgqjShHcC8Zc3KpA4rZXmzgcyPh22h-gqacD5Q48wLwumVHxHW2qqwtYrx7HgrEdnLnqfRDic5yo3-aANV1eBBbg4pU9YCQCKRo1vDcAItxTIiH7I760shaiTSN9ocXsXOsCdie45miRZuCHFvL62yeFlNC.jpg'), 'label' => 'LRT'],
                ['img' => asset('images/LRT/KkX2IaAk8kUo32MBxBe_TTOLKYbz-NT5Us3C4WBvULkPpEFrX9bvt6VMBOZiFgoy6DBnuqsS05Di94jFuQeA5Wtv437JZEuMXECA-W3ctYkc74tgqitqZ028DGbcwuED792xrc9xI2nnOA44doyqT0M3kaxMIe4t8vXudnawapRSFUB-v_yfzr-MQkMHEstD.jpg'), 'label' => 'Stasiun'],
                ['img' => asset('images/LRT/QZ2pOXzQuGRGJmB3nUis-h1iXVD9aDq1u1m6YzkJ7bBqoyPoxhaTbKDT-NGtPfErBe8ChEtAm4snA_j8MN_r6x4AWyQ09fMPEHdgvDacFSkHUMptVgn1EH0jtumhoNmrQ2PPT2L0j8k5KnFP6k8NQoMYbwR6vSXlxWShXEfkFzTPzVrCcCv2XI1Blg8cr4bJ.jpg'), 'label' => 'Operasi'],
                ['img' => asset('images/LRT/MJcdVYyJh1qVANAxSDD-3ks9cT22GnRZaL67VsBNeM01_r6M_omWinAGFP9wxtx11dKrz04y9RW3bWhYQKJZhb12lHhD78jDqjeUR7VGn9B5pi6rgSwHgKYk9FlOHVvRASEYquMYU4RjuP-U89cvhuKymiS9DxArggu2qFtb1tb1h6EjD6PKWAdzgPC2si3L.jpg'), 'label' => 'Perawatan']
            ],
            'gradient' => 'linear-gradient(135deg, #0d9488 0%, #5eead4 40%, #003087 100%)',
            'img_gradient' => 'linear-gradient(135deg, #0d9488, #5eead4)',
            'img_label' => 'LRT'
        ],
        '16' => [
            'id' => '16',
            'name' => 'Sistem Informasi',
            'emoji' => '💻',
            'kuota' => 'Tersedia',
            'durasi' => '3 - 6 Bulan',
            'lokasi' => 'Divre III Palembang',
            'tunjangan' => 'Sesuai ketentuan',
            'jenis' => 'Full-time',
            'desc' => 'Unit Sistem Informasi bertanggung jawab dalam pengembangan sistem, pengelolaan data, infrastruktur IT, dan layanan teknologi informasi di lingkungan PT KAI Divre III Palembang.',
            'highlights' => [
                'Pengembangan Aplikasi Enterprise',
                'Database Design & Management',
                'IT Infrastructure & Networking',
                'Cybersecurity & Data Protection',
                'Technical Support & Troubleshooting'
            ],
            'visi' => 'Menjadi unit penggerak transformasi digital yang handal dan inovatif dalam mendukung operasional PT KAI Divre III Palembang.',
            'misi' => [
                'Mengembangkan sistem informasi yang terintegrasi dan andal',
                'Meningkatkan kompetensi SDM di bidang teknologi informasi',
                'Menerapkan standar keamanan informasi terbaik',
                'Memberikan layanan IT yang responsif dan berkualitas',
                'Mendukung digitalisasi proses bisnis perusahaan'
            ],
            'tugas' => [
                'Pengembangan & Pemeliharaan Aplikasi',
                'Manajemen Database & Data Center',
                'Jaringan & Infrastruktur IT',
                'Keamanan Sistem Informasi',
                'Helpdesk & Technical Support',
                'Implementasi Sistem Baru'
            ],
            'tugas_desc' => [
                'Mengembangkan dan memelihara aplikasi perusahaan sesuai kebutuhan bisnis',
                'Mengelola database, backup data, dan menjaga ketersediaan data center',
                'Merancang, mengelola, dan memonitor jaringan komputer perusahaan',
                'Menerapkan kebijakan keamanan siber dan melindungi aset informasi',
                'Memberikan bantuan teknis kepada pengguna dan menyelesaikan masalah IT',
                'Melakukan analisis, instalasi, dan migrasi sistem informasi baru'
            ],
            'aktivitas_harian' => [
                ['waktu' => '08:00 - 09:00', 'aktivitas' => 'Briefing Pagi & Cek Sistem', 'deskripsi' => 'Rapat singkat tim IT dan pengecekan sistem yang berjalan untuk memastikan tidak ada kendala.'],
                ['waktu' => '09:00 - 11:00', 'aktivitas' => 'Pengembangan Aplikasi', 'deskripsi' => 'Melakukan coding, testing, dan debugging aplikasi sesuai tugas yang diberikan.'],
                ['waktu' => '11:00 - 12:00', 'aktivitas' => 'Monitoring Server & Database', 'deskripsi' => 'Memantau kinerja server, database, dan melakukan optimasi jika diperlukan.'],
                ['waktu' => '12:00 - 13:00', 'aktivitas' => 'Istirahat & Sholat', 'deskripsi' => 'Break siang dan ibadah.'],
                ['waktu' => '13:00 - 15:00', 'aktivitas' => 'Technical Support & Troubleshooting', 'deskripsi' => 'Membantu pengguna yang mengalami kendala teknis dan menyelesaikan ticket support.'],
                ['waktu' => '15:00 - 16:00', 'aktivitas' => 'Dokumentasi & Reporting', 'deskripsi' => 'Mendokumentasikan pekerjaan dan menyusun laporan kegiatan harian.'],
                ['waktu' => '16:00 - 16:30', 'aktivitas' => 'Review & Closing', 'deskripsi' => 'Review pekerjaan hari ini dan persiapan untuk hari berikutnya.']
            ],
            'teknologi' => [
                ['icon' => '🐘', 'nama' => 'PHP & Laravel', 'deskripsi' => 'Framework utama untuk pengembangan aplikasi web perusahaan.'],
                ['icon' => '🗄️', 'nama' => 'MySQL / PostgreSQL', 'deskripsi' => 'Sistem manajemen database relasional untuk penyimpanan data.'],
                ['icon' => '📡', 'nama' => 'Jaringan LAN/WAN', 'deskripsi' => 'Infrastruktur jaringan yang menghubungkan seluruh divisi.'],
                ['icon' => '☁️', 'nama' => 'Cloud & Server', 'deskripsi' => 'Layanan cloud computing dan manajemen server on-premise.'],
                ['icon' => '🔐', 'nama' => 'Firewall & Antivirus', 'deskripsi' => 'Sistem keamanan untuk melindungi jaringan dan data perusahaan.']
            ],
            'program_magang' => [
                'deskripsi' => 'Program magang di Unit Sistem Informasi dirancang untuk memberikan pengalaman langsung dalam pengembangan dan pengelolaan teknologi informasi di perusahaan BUMN.',
                'poin' => [
                    'Belajar langsung dari praktisi IT berpengalaman',
                    'Terlibat dalam proyek pengembangan aplikasi nyata',
                    'Mendapatkan pemahaman tentang infrastruktur IT perusahaan',
                    'Mengembangkan skill teknis dan non-teknis',
                    'Berkesempatan mengikuti sertifikasi IT'
                ]
            ],
            'timeline' => [
                ['judul' => 'Onboarding & Orientasi', 'deskripsi' => 'Pengenalan lingkungan kerja, visi misi unit, dan pembagian mentor.', 'durasi' => 'Minggu 1'],
                ['judul' => 'Pelatihan Dasar IT KAI', 'deskripsi' => 'Pelatihan tentang sistem, tools, dan prosedur yang digunakan di unit IT.', 'durasi' => 'Minggu 2-3'],
                ['judul' => 'Proyek Pengembangan', 'deskripsi' => 'Mulai terlibat dalam proyek pengembangan aplikasi atau pemeliharaan sistem.', 'durasi' => 'Minggu 4-8'],
                ['judul' => 'Proyek Mandiri', 'deskripsi' => 'Mengerjakan proyek kecil secara mandiri dengan bimbingan mentor.', 'durasi' => 'Minggu 9-12'],
                ['judul' => 'Evaluasi & Presentasi', 'deskripsi' => 'Presentasi hasil magang dan evaluasi kinerja oleh tim IT.', 'durasi' => 'Minggu 13-14'],
                ['judul' => 'Penutupan & Sertifikat', 'deskripsi' => 'Penutupan program magang dan penerbitan sertifikat.', 'durasi' => 'Minggu 15-16']
            ],
            'kompetensi' => [
                ['icon' => '💻', 'nama' => 'Pemrograman Web', 'deskripsi' => 'Menguasai PHP, JavaScript, HTML/CSS dan framework Laravel.', 'level' => '75%', 'level_label' => 'Mahir'],
                ['icon' => '🗄️', 'nama' => 'Database SQL', 'deskripsi' => 'Kemampuan menulis query, optimasi, dan manajemen database.', 'level' => '70%', 'level_label' => 'Mahir'],
                ['icon' => '🔧', 'nama' => 'Troubleshooting IT', 'deskripsi' => 'Kemampuan mendiagnosis dan menyelesaikan masalah teknis.', 'level' => '80%', 'level_label' => 'Mahir'],
                ['icon' => '🌐', 'nama' => 'Jaringan Dasar', 'deskripsi' => 'Pemahaman konsep jaringan, IP addressing, dan konfigurasi.', 'level' => '60%', 'level_label' => 'Menengah'],
                ['icon' => '📊', 'nama' => 'Analisis Data', 'deskripsi' => 'Mampu mengolah dan menganalisis data untuk kebutuhan pelaporan.', 'level' => '65%', 'level_label' => 'Menengah'],
                ['icon' => '🤝', 'nama' => 'Komunikasi Tim', 'deskripsi' => 'Kemampuan bekerja sama dalam tim dan berkomunikasi efektif.', 'level' => '85%', 'level_label' => 'Sangat Mahir']
            ],
            'faq' => [
                ['pertanyaan' => 'Apakah magang di Unit SI dibayar?', 'jawaban' => 'Ya, peserta magang mendapatkan tunjangan bulanan sesuai ketentuan yang berlaku di PT KAI.'],
                ['pertanyaan' => 'Berapa lama durasi magang di Unit SI?', 'jawaban' => 'Durasi magang di Unit Sistem Informasi berkisar antara 3 hingga 6 bulan, tergantung pada kebijakan dan kebutuhan unit.'],
                ['pertanyaan' => 'Jurusan apa saja yang bisa mendaftar?', 'jawaban' => 'Kami menerima mahasiswa dari jurusan Informatika, Teknik Informatika, Teknik Komputer, Sistem Informasi, dan jurusan terkait lainnya.'],
                ['pertanyaan' => 'Apakah ada sertifikat setelah magang?', 'jawaban' => 'Ya, peserta yang menyelesaikan program magang akan mendapatkan sertifikat resmi dari PT Kereta Api Indonesia (Persero).']
            ],
            'kualifikasi' => [
                'Siswa/Mahasiswa aktif minimal semester 4',
                'Jurusan Informatika/Teknik Informatika/Teknik Komputer',
                'IPK Minimal 3.00 dari skala 4.00',
                'Memahami dasar pemrograman (PHP, JavaScript, SQL)',
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
                'Pengalaman IT di perusahaan BUMN',
                'Mentoring dari profesional IT',
                'Tunjangan bulanan',
                'Sertifikat PT KAI',
                'Kesempatan karier di bidang IT'
            ],
            'gallery' => [
                ['img' => asset('images/sistem informasi/_Vl5iD-BuLpVA3vEAMCcxjI-kFehtj49tnT7s3DMTeNVkM2WjRVi_41L5oMeyqia0bGgnJIF8eHhEHJbNZ2cuhaQwMQVp7Yxk5rsrTniOtpVghf3O0-uDYrMerQ1zCnL9BgPKsHhCICrU1voANXm77qYyoRhdoOKumpl9PFnvD2_dFImm8D3DzmAEFgE0SWc.jpg'), 'label' => 'Database'],
                ['img' => asset('images/sistem informasi/b_KoLuiC1rWMJCEVH6XCC6eDeXgwlizr0jZgUDq_DgF1C2D6p5dQexX5yYvj7XdUAJYaz5PYiGIzrpvlIzLYaMdlmHZxJkHX3ihKChxuaLANO9hJALZfW_keq2t3OclaqYJ-HatflZftRYdqLe2oN1RbpDBuqIWN17TnR43attDkl3-cC1g2DoDw8rWV9gQD.jpg'), 'label' => 'Keamanan'],
                ['img' => asset('images/sistem informasi/WEVvF4wNpyF0ZpEXqM_koAOvXIz8bWFx5sG_zuiKj4Fx0oguaTeaWeuINMhZhz6ymlrtvzmVS-Dy4AahjdXPUuF5_fiIykGvhEl4MSJ_Dr8B6KEMnpPNUUMr2DDfRTStqsFtXMS7oYWPiosmvXzX0EPrJSZaTivMAQQRdAX1BMYwt85aBvNT9xkv-LXCQgF2.jpg'), 'label' => 'Cloud'],
                ['img' => asset('images/sistem informasi/WEVvF4wNpyF0ZpEXqM_koAOvXIz8bWFx5sG_zuiKj4Fx0oguaTeaWeuINMhZhz6ymlrtvzmVS-Dy4AahjdXPUuF5_fiIykGvhEl4MSJ_Dr8B6KEMnpPNUUMr2DDfRTStqsFtXMS7oYWPiosmvXzX0EPrJSZaTivMAQQRdAX1BMYwt85aBvNT9xkv-LXCQgF2.jpg'), 'label' => 'Analytics']
            ],
            'gradient' => 'linear-gradient(135deg, #003087 0%, #0047B8 40%, #FF6B00 100%)',
            'img_gradient' => 'linear-gradient(135deg, #1a1a3e, #003087)',
            'img_label' => 'IT Development'
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
Route::view('/cek-status', 'status.cek-status');
Route::view('/contact', 'contact');
Route::view('/about', 'pages.about');
