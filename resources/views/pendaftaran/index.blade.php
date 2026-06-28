@extends('layouts.app')

@section('title', 'Pendaftaran Magang')

@section('content')
<div class="container section">
    <!-- Intro Section -->
    <div class="registration-intro">
        <h1>📝 Pendaftaran Program Magang</h1>
        <p>PT Kereta Api Indonesia (Persero)</p>
        <p style="font-size: 1rem;">Bergabunglah dengan ribuan mahasiswa yang telah merasakan pengalaman magang di BUMN terkemuka Indonesia</p>
    </div>

    <!-- Steps Overview -->
    <div class="steps-container">
        <div class="step-card">
            <div class="step-number">①</div>
            <h3>Data Diri</h3>
            <p>Isi informasi pribadi dan alamat Anda</p>
        </div>

        <div class="step-card">
            <div class="step-number">②</div>
            <h3>Data Akademik</h3>
            <p>Masukkan informasi kampus dan akademik</p>
        </div>

        <div class="step-card">
            <div class="step-number">③</div>
            <h3>Pilih Unit</h3>
            <p>Pilih unit magang yang diminati</p>
        </div>

        <div class="step-card">
            <div class="step-number">④</div>
            <h3>Upload Dokumen</h3>
            <p>Unggah semua dokumen yang diperlukan</p>
        </div>

        <div class="step-card">
            <div class="step-number">⑤</div>
            <h3>Verifikasi</h3>
            <p>Verifikasi dan kirim pendaftaran</p>
        </div>
    </div>

    <!-- Requirements Section -->
    <div class="requirements-section">
        <h2>✅ Syarat & Ketentuan Pendaftaran</h2>

        <div class="requirements-grid">
            <div class="requirement-item">
                <h3>🎓 Persyaratan Umum</h3>
                <ul>
                    <li>Mahasiswa aktif semester 5 ke atas</li>
                    <li>IPK minimal 3.00</li>
                    <li>Tidak sedang cuti kuliah</li>
                    <li>Sehat jasmani dan rohani</li>
                    <li>Bersedia magang full-time</li>
                </ul>
            </div>

            <div class="requirement-item">
                <h3>📄 Dokumen yang Diperlukan</h3>
                <ul>
                    <li>Surat pengantar dari kampus</li>
                    <li>Kartu Tanda Mahasiswa (KTM)</li>
                    <li>Proposal magang (max 5 halaman)</li>
                    <li>Curriculum Vitae (CV)</li>
                    <li>Transkip nilai</li>
                </ul>
            </div>

            <div class="requirement-item">
                <h3>💡 Tips Mendaftar</h3>
                <ul>
                    <li>Persiapkan semua dokumen sebelum mendaftar</li>
                    <li>Isi data dengan lengkap dan benar</li>
                    <li>Upload dokumen dalam format PDF (max 2MB)</li>
                    <li>Tulis motivasi dengan jelas dan menarik</li>
                    <li>Tunggu email konfirmasi dari tim HR</li>
                </ul>
            </div>

            <div class="requirement-item">
                <h3>⏰ Jadwal Penting</h3>
                <ul>
                    <li>Pembukaan: Juni 2026</li>
                    <li>Penutupan: September 2026</li>
                    <li>Hasil seleksi: 2-3 minggu kerja</li>
                    <li>Orientasi: Sesuai jadwal</li>
                    <li>Mulai magang: Oktober 2026</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Unit Information Section -->
    <div class="requirements-section">
        <h2>🏢 Pilihan Unit Magang</h2>
        <p style="margin-bottom: 1.5rem; color: #666;">Kami menawarkan berbagai unit magang di departemen strategis PT KAI. Pilih sesuai dengan minat dan keahlian Anda:</p>

        <div class="requirements-grid">
            <div class="requirement-item">
                <h3>💻 Sistem Informasi</h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Pengembangan aplikasi, manajemen database, dan IT support.</p>
                <small style="color: #999;">Kuota: 10 orang</small>
            </div>

            <div class="requirement-item">
                <h3>👨‍💼 SDM</h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Administrasi SDM, rekrutmen, dan pengembangan karyawan.</p>
                <small style="color: #999;">Kuota: 6 orang</small>
            </div>

            <div class="requirement-item">
                <h3>⚙️ Operasional</h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Mendukung operasional kereta api dan logistik.</p>
                <small style="color: #999;">Kuota: 12 orang</small>
            </div>

            <div class="requirement-item">
                <h3>📊 Keuangan</h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Administrasi keuangan, anggaran, dan pelaporan.</p>
                <small style="color: #999;">Kuota: 8 orang</small>
            </div>

            <div class="requirement-item">
                <h3>⚖️ Hukum</h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Administrasi hukum dan peraturan perusahaan.</p>
                <small style="color: #999;">Kuota: 6 orang</small>
            </div>

            <div class="requirement-item">
                <h3>📢 Komunikasi & TJSL</h3>
                <p style="color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Komunikasi perusahaan dan tanggung jawab sosial.</p>
                <small style="color: #999;">Kuota: 15 orang</small>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="cta-section">
        <h2>🚀 Siap Memulai Perjalanan Karir Anda?</h2>
        <p>Jangan lewatkan kesempatan untuk bergabung dengan PT Kereta Api Indonesia. Daftar sekarang dan raih pengalaman magang yang berharga!</p>
        <a href="/pendaftaran/step1-data-diri" class="cta-button">Mulai Mendaftar Sekarang →</a>
    </div>

    <!-- FAQ Section -->
    <div style="margin-top: 3rem;">
        <h2 style="color: #003f7f; text-align: center; margin-bottom: 2rem;">❓ Pertanyaan yang Sering Diajukan</h2>

        <div class="requirements-grid">
            <div style="background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                <h4 style="color: #003f7f; margin-bottom: 0.5rem;">Berapa lama durasi program magang?</h4>
                <p style="color: #666; font-size: 0.9rem;">Program magang berlangsung selama 3-6 bulan tergantung kebutuhan unit dan kesepakatan bersama.</p>
            </div>

            <div style="background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                <h4 style="color: #003f7f; margin-bottom: 0.5rem;">Apakah ada tunjangan magang?</h4>
                <p style="color: #666; font-size: 0.9rem;">Ya, peserta magang akan menerima tunjangan bulanan sebesar Rp 1.500.000 dan fasilitas lainnya.</p>
            </div>

            <div style="background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                <h4 style="color: #003f7f; margin-bottom: 0.5rem;">Bagaimana cara mendapatkan kredit SKS?</h4>
                <p style="color: #666; font-size: 0.9rem;">Konsultasikan dengan akademik kampus Anda tentang sistem kredit SKS untuk magang.</p>
            </div>

            <div style="background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                <h4 style="color: #003f7f; margin-bottom: 0.5rem;">Apakah ada kesempatan menjadi karyawan tetap?</h4>
                <p style="color: #666; font-size: 0.9rem;">Ya, peserta magang yang berprestasi memiliki kesempatan untuk melamar posisi tetap di PT KAI.</p>
            </div>
        </div>
    </div>
</div>
@endsection
