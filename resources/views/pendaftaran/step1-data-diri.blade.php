@extends('layouts.app')

@section('title', 'Pendaftaran Magang - Data Diri')

@section('content')
<div class="container section">
    <div class="registration-container">

        {{-- Header --}}
        <section class="reg-header" style="margin-bottom: 40px;">
            <p class="hero-eyebrow" style="margin: 0 auto 16px;">LANGKAH 1 DARI 5</p>
            <h1>Data Diri</h1>
            <p>Isi informasi pribadi Anda dengan lengkap dan benar untuk memulai proses pendaftaran magang</p>
        </section>

        {{-- Progress Bar --}}
        <div class="progress-bar-wrap">
            <div class="progress-step-list">
                <a href="/pendaftaran/step1-data-diri" class="progress-step-item active" style="text-decoration: none; color: inherit;">
                    <div class="progress-step-circle"><span>1</span></div>
                    <span class="progress-step-label">Data Diri</span>
                </a>
                <a href="/pendaftaran/step2" class="progress-step-item" style="text-decoration: none; color: inherit;">
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
        <form action="/pendaftaran/simpan-data-diri" method="POST" class="form-card-kai">
            @csrf

            <div class="form-card-header">
                <span class="form-card-icon">📋</span>
                <div>
                    <h2>Informasi Pribadi</h2>
                    <p>Lengkapi data diri Anda di bawah ini</p>
                </div>
            </div>

            {{-- Data Pribadi --}}
            <div class="form-section-kai">
                <h3 class="form-section-title">Data Pribadi</h3>

                <div class="form-row-kai">
                    <div class="form-group-kai">
                        <label>Nama Lengkap <span class="required-star">*</span></label>
                        <input type="text" name="nama_lengkap" required placeholder="Masukkan nama lengkap sesuai KTP">
                    </div>
                    <div class="form-group-kai">
                        <label>NIM <span class="required-star">*</span></label>
                        <input type="text" name="nim" required placeholder="Masukkan NIM Anda">
                    </div>
                </div>

                <div class="form-row-kai">
                    <div class="form-group-kai">
                        <label>Email <span class="required-star">*</span></label>
                        <input type="email" name="email" required placeholder="contoh@email.com">
                    </div>
                    <div class="form-group-kai">
                        <label>No. HP/WhatsApp <span class="required-star">*</span></label>
                        <input type="tel" name="no_hp" required placeholder="08xx-xxxx-xxxx">
                    </div>
                </div>

                <div class="form-row-kai">
                    <div class="form-group-kai">
                        <label>Tanggal Lahir <span class="required-star">*</span></label>
                        <input type="date" name="tanggal_lahir" required>
                    </div>
                    <div class="form-group-kai">
                        <label>Jenis Kelamin <span class="required-star">*</span></label>
                        <select name="jenis_kelamin" required>
                            <option value="">-- Pilih --</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-row-kai">
                    <div class="form-group-kai">
                        <label>Tempat Lahir <span class="required-star">*</span></label>
                        <input type="text" name="tempat_lahir" required placeholder="Masukkan tempat lahir">
                    </div>
                    <div class="form-group-kai">
                        <label>Agama <span class="required-star">*</span></label>
                        <select name="agama" required>
                            <option value="">-- Pilih --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- Alamat --}}
            <div class="form-section-kai">
                <h3 class="form-section-title">Alamat Tinggal</h3>

                <div class="form-row-kai full">
                    <div class="form-group-kai">
                        <label>Alamat Lengkap <span class="required-star">*</span></label>
                        <textarea name="alamat" required placeholder="Masukkan alamat lengkap (nama jalan, nomor rumah, RT/RW)"></textarea>
                    </div>
                </div>

                <div class="form-row-kai">
                    <div class="form-group-kai">
                        <label>Provinsi <span class="required-star">*</span></label>
                        <input type="text" name="provinsi" required placeholder="Contoh: Sumatera Selatan">
                    </div>
                    <div class="form-group-kai">
                        <label>Kota/Kabupaten <span class="required-star">*</span></label>
                        <input type="text" name="kota" required placeholder="Contoh: Palembang">
                    </div>
                </div>

                <div class="form-row-kai">
                    <div class="form-group-kai">
                        <label>Kecamatan <span class="required-star">*</span></label>
                        <input type="text" name="kecamatan" required placeholder="Masukkan kecamatan">
                    </div>
                    <div class="form-group-kai">
                        <label>Kode Pos <span class="required-star">*</span></label>
                        <input type="text" name="kode_pos" required placeholder="Contoh: 30127">
                    </div>
                </div>
            </div>

            {{-- Orang Tua --}}
            <div class="form-section-kai">
                <h3 class="form-section-title">Informasi Orang Tua/Wali</h3>

                <div class="form-row-kai">
                    <div class="form-group-kai">
                        <label>Nama Orang Tua/Wali <span class="required-star">*</span></label>
                        <input type="text" name="nama_orang_tua" required placeholder="Masukkan nama orang tua/wali">
                    </div>
                    <div class="form-group-kai">
                        <label>No. HP Orang Tua <span class="required-star">*</span></label>
                        <input type="tel" name="no_hp_orang_tua" required placeholder="08xx-xxxx-xxxx">
                    </div>
                </div>

                <div class="form-row-kai full">
                    <div class="form-group-kai">
                        <label>Alamat Orang Tua <span class="required-star">*</span></label>
                        <textarea name="alamat_orang_tua" required placeholder="Masukkan alamat lengkap orang tua/wali"></textarea>
                    </div>
                </div>

                <div class="form-row-kai">
                    <div class="form-group-kai">
                        <label>Pekerjaan Orang Tua</label>
                        <input type="text" name="pekerjaan_orang_tua" placeholder="Contoh: PNS, Wiraswasta, dll">
                    </div>
                    <div class="form-group-kai">
                        <label>Penghasilan Orang Tua</label>
                        <select name="penghasilan_ortu">
                            <option value="">-- Pilih --</option>
                            <option value="<1jt">Kurang dari Rp 1.000.000</option>
                            <option value="1-3jt">Rp 1.000.000 - Rp 3.000.000</option>
                            <option value="3-5jt">Rp 3.000.000 - Rp 5.000.000</option>
                            <option value=">5jt">Lebih dari Rp 5.000.000</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- Form Actions --}}
            <div class="form-actions-kai">
                <button type="reset" class="btn-kai-secondary">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"/></svg>
                    Bersihkan
                </button>
                <button type="submit" class="btn-kai-primary">
                    Selanjutnya
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection