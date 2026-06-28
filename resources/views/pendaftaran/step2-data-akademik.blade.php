@extends('layouts.app')

@section('title', 'Data Akademik - Pendaftaran Magang')

@section('styles')

@endsection

@section('content')
<div class="container section">
    <div class="registration-container">
        {{-- Progress Bar --}}
        <div class="progress-bar-wrap">
            <div class="progress-step-list">
                <a href="/pendaftaran/step1-data-diri" class="progress-step-item completed" style="text-decoration: none; color: inherit;">
                    <div class="progress-step-circle"><span>✓</span></div>
                    <span class="progress-step-label">Data Diri</span>
                </a>
                <a href="/pendaftaran/step2" class="progress-step-item active" style="text-decoration: none; color: inherit;">
                    <div class="progress-step-circle"><span>2</span></div>
                    <span class="progress-step-label">Akademik</span>
                </a>
                <a href="/pendaftaran/step3" class="progress-step-item" style="text-decoration: none; color: inherit;">
                    <div class="progress-step-circle"><span>3</span></div>
                    <span class="progress-step-label">Pilih Unit</span>
                </a>
                <a href="/pendaftaran/step4" class="progress-step-item" style="text-decoration: none; color: inherit;">
                    <div class="progress-step-circle"><span>4</span></div>
                    <span class="progress-step-label">Berkas</span>
                </a>
                <a href="/pendaftaran/step5" class="progress-step-item" style="text-decoration: none; color: inherit;">
                    <div class="progress-step-circle"><span>5</span></div>
                    <span class="progress-step-label">Verifikasi</span>
                </a>
            </div>
        </div>

        {{-- Form Card --}}
        <form action="/pendaftaran/simpan-data-akademik" method="POST" class="form-card-kai">
            @csrf

            <div class="form-card-header">
                <span class="form-card-icon">📚</span>
                <div>
                    <h2>Data Akademik</h2>
                    <p>Silakan isi data akademik Anda dengan lengkap dan benar</p>
                </div>
            </div>

            <!-- Informasi Kampus Section -->
            <div class="form-section">
                <h3> Informasi Kampus</h3>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Kampus <span class="required">*</span></label>
                        <input type="text" name="nama_kampus" required placeholder="Masukkan nama kampus Anda">
                    </div>
                    <div class="form-group">
                        <label>Program Studi <span class="required">*</span></label>
                        <input type="text" name="program_studi" required placeholder="Contoh: Teknik Informatika">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Fakultas <span class="required">*</span></label>
                        <input type="text" name="fakultas" required placeholder="Masukkan nama fakultas">
                    </div>
                    <div class="form-group">
                        <label>Tingkat/Semester <span class="required">*</span></label>
                        <input type="text" name="tingkat_semester" required placeholder="Contoh: Semester 7">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>IPK Kumulatif <span class="required">*</span></label>
                        <input type="number" name="ipk_kumulatif" required step="0.01" placeholder="Contoh: 3.50">
                        <small>Nilai minimal 3.00</small>
                    </div>
                    <div class="form-group">
                        <label>Tahun Masuk <span class="required">*</span></label>
                        <input type="number" name="tahun_masuk" required placeholder="Contoh: 2021">
                    </div>
                </div>

                <div class="form-row full">
                    <div class="form-group">
                        <label>Alamat Asal Kampus <span class="required">*</span></label>
                        <textarea name="alamat_kampus" required placeholder="Masukkan alamat lengkap kampus"></textarea>
                    </div>
                </div>
            </div>

            {{-- Prestasi Section --}}
            <div class="form-section-kai">
                <h3 class="form-section-title">Prestasi & Keahlian</h3>

                <div class="form-row full">
                    <div class="form-group">
                        <label>Keahlian/Skills Anda <span class="required">*</span></label>
                        <textarea name="keahlian" required placeholder="Contoh: Java, Python, Database Management, Web Development, etc."></textarea>
                        <small>Sebutkan keahlian teknis yang Anda miliki</small>
                    </div>
                </div>

                <div class="form-row full">
                    <div class="form-group">
                        <label>Prestasi/Sertifikasi (Jika Ada)</label>
                        <textarea name="prestasi" placeholder="Contoh: Juara OSN, Sertifikasi Oracle, etc. (Opsional)"></textarea>
                        <small>Sebutkan prestasi atau sertifikasi yang pernah Anda raih</small>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Pengalaman Magang Sebelumnya</label>
                        <select name="pengalaman_magang">
                            <option value="">-- Pilih Opsi --</option>
                            <option value="tidak_ada">Tidak Ada</option>
                            <option value="kurang_3bulan">Kurang dari 3 Bulan</option>
                            <option value="3_6bulan">3-6 Bulan</option>
                            <option value="lebih_6bulan">Lebih dari 6 Bulan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Perolehan SKS</label>
                        <input type="number" name="perolehan_sks" placeholder="Jumlah SKS yang telah dicapai">
                    </div>
                </div>
            </div>

            {{-- Informasi Dosen Pembimbing Section --}}
            <div class="form-section-kai">
                <h3 class="form-section-title">Informasi Dosen Pembimbing</h3>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Dosen Pembimbing <span class="required">*</span></label>
                        <input type="text" name="nama_dosen" required placeholder="Masukkan nama dosen pembimbing">
                    </div>
                    <div class="form-group">
                        <label>NIP Dosen <span class="required">*</span></label>
                        <input type="text" name="nip_dosen" required placeholder="Masukkan NIP dosen pembimbing">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Email Dosen <span class="required">*</span></label>
                        <input type="email" name="email_dosen" required placeholder="Masukkan email dosen pembimbing">
                    </div>
                    <div class="form-group">
                        <label>No. HP Dosen <span class="required">*</span></label>
                        <input type="tel" name="no_hp_dosen" required placeholder="Masukkan nomor HP dosen">
                    </div>
                </div>
            </div>

            {{-- Form Actions --}}
            <div class="form-actions-kai">
                <a href="/pendaftaran/step1-data-diri" class="btn-kai-secondary" style="text-decoration: none; text-align: center; display: flex; align-items: center; justify-content: center; gap: 8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                    Kembali
                </a>
                <button type="submit" class="btn-kai-primary">
                    Selanjutnya
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
