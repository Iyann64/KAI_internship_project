@extends('layouts.app')

@section('title', 'Pilih Unit - Pendaftaran Magang')

@section('content')
<div class="container section">
    <div class="registration-container">

        {{-- Header --}}
        <section class="reg-header" style="margin-bottom: 40px;">
            <p class="hero-eyebrow" style="margin: 0 auto 16px;">LANGKAH 3 DARI 5</p>
            <h1>Pilih Unit Magang</h1>
            <p>Silakan pilih unit magang yang sesuai dengan minat dan keahlian Anda</p>
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
                <a href="/pendaftaran/step3" class="progress-step-item active" style="text-decoration: none; color: inherit;">
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
        <form action="/pendaftaran/simpan-pilihan-unit" method="POST" class="form-card-kai">
            @csrf

            <div class="form-card-header">
                <span class="form-card-icon">🏢</span>
                <div>
                    <h2>Pilih Unit Magang</h2>
                    <p>Silakan pilih unit magang yang sesuai dengan minat dan keahlian Anda</p>
                </div>
            </div>

            {{-- Info Box --}}
            <div class="upload-info-box">
                <div class="upload-info-icon">ℹ️</div>
                <div class="upload-info-text">
                    <h4>Petunjuk Pemilihan Unit</h4>
                    <ul>
                        <li>Pilih satu unit yang paling sesuai dengan minat Anda</li>
                        <li>Tim HR akan melakukan pertimbangan berdasarkan kualifikasi dan ketersediaan kuota</li>
                    </ul>
                </div>
            </div>

            {{-- Unit Selection --}}
            <div class="form-section-kai">
                <h3 class="form-section-title">Daftar Unit Tersedia</h3>

                <div class="units-selection">
                    <label class="unit-option" onclick="this.querySelector('input').checked=true; updateSelection();">
                        <input type="radio" name="unit_id" value="1" required>
                        <div class="unit-option-content">
                            <div class="unit-option-title">Sistem Informasi</div>
                            <div class="unit-option-desc">Pengembangan Aplikasi, Databases Dan IT Support</div>
                            <div class="unit-option-quota">Kuota: <strong>10 Orang</strong> | Lokasi: Jakarta Pusat</div>
                        </div>
                    </label>

                    <label class="unit-option" onclick="this.querySelector('input').checked=true; updateSelection();">
                        <input type="radio" name="unit_id" value="2" required>
                        <div class="unit-option-content">
                            <div class="unit-option-title">SDM (Human Capital)</div>
                            <div class="unit-option-desc">Administrasi SDM, rekrutmen, pelatihan, dan pengembangan</div>
                            <div class="unit-option-quota">Kuota: <strong>6 Orang</strong> | Lokasi: Jakarta Pusat</div>
                        </div>
                    </label>

                    <label class="unit-option" onclick="this.querySelector('input').checked=true; updateSelection();">
                        <input type="radio" name="unit_id" value="3" required>
                        <div class="unit-option-content">
                            <div class="unit-option-title">Operasional</div>
                            <div class="unit-option-desc">Mendukung kegiatan Operasional kereta API</div>
                            <div class="unit-option-quota">Kuota: <strong>12 Orang</strong> | Lokasi: Jakarta Pusat</div>
                        </div>
                    </label>

                    <label class="unit-option" onclick="this.querySelector('input').checked=true; updateSelection();">
                        <input type="radio" name="unit_id" value="4" required>
                        <div class="unit-option-content">
                            <div class="unit-option-title">Keuangan</div>
                            <div class="unit-option-desc">Administrasi Keuangan, anggaran dan pelaporan</div>
                            <div class="unit-option-quota">Kuota: <strong>8 Orang</strong> | Lokasi: Jakarta Pusat</div>
                        </div>
                    </label>

                    <label class="unit-option" onclick="this.querySelector('input').checked=true; updateSelection();">
                        <input type="radio" name="unit_id" value="5" required>
                        <div class="unit-option-content">
                            <div class="unit-option-title">Hukum</div>
                            <div class="unit-option-desc">Administrasi Hukum dan peraturan perusahaan</div>
                            <div class="unit-option-quota">Kuota: <strong>6 Orang</strong> | Lokasi: Jakarta Pusat</div>
                        </div>
                    </label>

                    <label class="unit-option" onclick="this.querySelector('input').checked=true; updateSelection();">
                        <input type="radio" name="unit_id" value="6" required>
                        <div class="unit-option-content">
                            <div class="unit-option-title">Komunikasi & TJSL</div>
                            <div class="unit-option-desc">Komunikasi perusahaan & tanggung jawab sosial</div>
                            <div class="unit-option-quota">Kuota: <strong>15 Orang</strong> | Lokasi: Jakarta Pusat</div>
                        </div>
                    </label>
                </div>
            </div>

            {{-- Additional Info --}}
            <div class="form-section-kai">
                <h3 class="form-section-title">Motivasi & Ekspektasi</h3>
                <p style="color: var(--kai-muted); margin-bottom: 1rem;">Silakan jelaskan mengapa Anda memilih unit ini dan apa yang ingin Anda pelajari.</p>

                <div class="form-group-kai">
                    <label>Motivasi Pemilihan Unit <span class="required-star">*</span></label>
                    <textarea name="motivasi" required placeholder="Jelaskan mengapa Anda memilih unit ini dan apa yang ingin Anda pelajari dari unit tersebut..."></textarea>
                </div>

                <div class="form-group-kai">
                    <label>Harapan Selama Magang (Opsional)</label>
                    <textarea name="harapan" placeholder="Sebutkan harapan dan target pembelajaran Anda selama melakukan magang di unit ini (Opsional)..."></textarea>
                </div>
            </div>

            {{-- Form Actions --}}
            <div class="form-actions-kai">
                <a href="/pendaftaran/step2" class="btn-kai-secondary" style="text-decoration: none; text-align: center; display: flex; align-items: center; justify-content: center; gap: 8px;">
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

<script>
    function updateSelection() {
        document.querySelectorAll('.unit-option').forEach(option => {
            if (option.querySelector('input').checked) {
                option.classList.add('selected');
            } else {
                option.classList.remove('selected');
            }
        });
    }

    // Initialize
    document.querySelectorAll('.unit-option input').forEach(radio => {
        radio.addEventListener('change', updateSelection);
    });
</script>
@endsection