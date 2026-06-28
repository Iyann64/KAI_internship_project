@extends('layouts.app')

@section('title', 'Verifikasi & Konfirmasi - Pendaftaran Magang')

@section('content')
<div class="container section">
    <div class="registration-container">

        {{-- Header --}}
        <section class="reg-header" style="margin-bottom: 40px;">
            <p class="hero-eyebrow" style="margin: 0 auto 16px;">LANGKAH 5 DARI 5</p>
            <h1>Verifikasi & Konfirmasi</h1>
            <p>Silakan verifikasi semua data yang Anda masukkan. Pastikan data sudah benar sebelum melakukan pengajuan final.</p>
        </section>

        {{-- Progress Bar --}}
        <div class="progress-bar-wrap">
            <div class="progress-step-list">
                <a href="/pendaftaran/step1-data-diri" class="progress-step-item completed" style="text-decoration: none; color: inherit;">
                    <div class="progress-step-circle"><span>✓</span></div>
                    <span class="progress-step-label">Data Diri</span>
                </a>
                <a href="/pendaftaran/step2" class="progress-step-item completed" style="text-decoration: none; color: inherit;">
                    <div class="progress-step-circle"><span>✓</span></div>
                    <span class="progress-step-label">Akademik</span>
                </a>
                <a href="/pendaftaran/step3" class="progress-step-item completed" style="text-decoration: none; color: inherit;">
                    <div class="progress-step-circle"><span>✓</span></div>
                    <span class="progress-step-label">Pilih Unit</span>
                </a>
                <a href="/pendaftaran/step4" class="progress-step-item completed" style="text-decoration: none; color: inherit;">
                    <div class="progress-step-circle"><span>✓</span></div>
                    <span class="progress-step-label">Berkas</span>
                </a>
                <a href="/pendaftaran/step5" class="progress-step-item active" style="text-decoration: none; color: inherit;">
                    <div class="progress-step-circle"><span>5</span></div>
                    <span class="progress-step-label">Verifikasi</span>
                </a>
            </div>
        </div>

        {{-- Verification Card --}}
        <div class="form-card-kai">
            <div class="form-card-header">
                <span class="form-card-icon">✅</span>
                <div>
                    <h2>Verifikasi & Konfirmasi Data</h2>
                    <p>Silakan verifikasi semua data yang Anda masukkan</p>
                </div>
            </div>

            <!-- Data Diri Section -->
            <div class="form-section-kai">
                <h3 class="form-section-title">Data Diri</h3>
                <div class="verification-item">
                    <div class="verification-label">Nama Lengkap:</div>
                    <div class="verification-value">
                        [Nama yang diinput]
                        <a href="/pendaftaran/step1" class="edit-btn">Edit</a>
                    </div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">NIM:</div>
                    <div class="verification-value">
                        [NIM yang diinput]
                    </div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Email:</div>
                    <div class="verification-value">
                        [Email yang diinput]
                    </div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">No. HP:</div>
                    <div class="verification-value">
                        [No. HP yang diinput]
                    </div>
                </div>
            </div>

            <!-- Data Akademik Section -->
            <div class="form-section-kai">
                <h3 class="form-section-title">Data Akademik</h3>
                <div class="verification-item">
                    <div class="verification-label">Nama Kampus:</div>
                    <div class="verification-value">
                        [Kampus yang diinput]
                        <a href="/pendaftaran/step2" class="edit-btn">Edit</a>
                    </div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Program Studi:</div>
                    <div class="verification-value">
                        [Program Studi yang diinput]
                    </div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">IPK Kumulatif:</div>
                    <div class="verification-value">
                        [IPK yang diinput]
                    </div>
                </div>
            </div>

            <!-- Unit Selection Section -->
            <div class="form-section-kai">
                <h3 class="form-section-title">Pilihan Unit Magang</h3>
                <div class="verification-item">
                    <div class="verification-label">Unit yang Dipilih:</div>
                    <div class="verification-value">
                        [Unit yang dipilih]
                        <a href="/pendaftaran/step3" class="edit-btn">Edit</a>
                    </div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Motivasi:</div>
                    <div class="verification-value">
                        [Motivasi yang diinput]
                    </div>
                </div>
            </div>

            <!-- Documents Section -->
            <div class="form-section-kai">
                <h3 class="form-section-title">Dokumen yang Diupload</h3>
                <div class="verification-item">
                    <div class="verification-label">Surat Pengantar:</div>
                    <div class="verification-value">
                         Sudah diupload <a href="/pendaftaran/step4" class="edit-btn">Edit</a>
                    </div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Kartu Tanda Mahasiswa:</div>
                    <div class="verification-value">
                         Sudah diupload
                    </div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Proposal Magang:</div>
                    <div class="verification-value">
                         Sudah diupload
                    </div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">CV:</div>
                    <div class="verification-value">
                         Sudah diupload
                    </div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Transkip Nilai:</div>
                    <div class="verification-value">
                         Sudah diupload
                    </div>
                </div>
            </div>

            <!-- Acknowledgement -->
            <form action="/pendaftaran/submit" method="POST">
                @csrf

                <div class="acknowledgement">
                    <h4>Pernyataan & Konfirmasi</h4>
                    <div class="checkbox-group">
                        <input type="checkbox" id="confirm1" name="confirm_data" value="1" required>
                        <label for="confirm1">Saya menyatakan bahwa semua data yang saya isi adalah benar dan dapat dipertanggungjawabkan.</label>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="confirm2" name="confirm_terms" value="1" required>
                        <label for="confirm2">Saya bersedia mengikuti semua peraturan dan ketentuan program magang PT Kereta Api Indonesia.</label>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="confirm3" name="confirm_data_usage" value="1" required>
                        <label for="confirm3">Saya memberikan izin kepada PT KAI untuk menggunakan data saya untuk keperluan proses rekrutmen magang.</label>
                    </div>
                </div>

                {{-- Form Actions --}}
                <div class="form-actions-kai">
                    <a href="/pendaftaran/step4" class="btn-kai-secondary" style="text-decoration: none; text-align: center; display: flex; align-items: center; justify-content: center; gap: 8px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                        Kembali
                    </a>
                    <button type="submit" class="btn-kai-primary">
                        Kirim Pendaftaran
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    </button>
                </div>
            </form>

            {{-- Additional Info --}}
            <div style="background: #e3f2fd; border-left: 4px solid #003f7f; padding: 1.5rem; border-radius: 5px; margin-top: 2rem;">
                <h4 style="color: #003f7f; margin-bottom: 0.5rem;">Informasi Penting</h4>
                <ul style="margin-left: 1.5rem; color: #555; font-size: 0.9rem;">
                    <li>Anda akan menerima email konfirmasi setelah pengajuan berhasil</li>
                    <li>Tim HR akan menghubungi Anda dalam 2-3 minggu kerja untuk proses selanjutnya</li>
                    <li>Silakan periksa email Anda secara berkala untuk informasi terbaru</li>
                    <li>Jika ada pertanyaan, hubungi bagian HR melalui email atau telepon yang tertera di website Kami</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection 