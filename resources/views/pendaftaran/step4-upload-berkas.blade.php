@extends('layouts.app')

@section('title', 'Upload Berkas - Pendaftaran Magang')

@section('content')
<div class="container section">
    <div class="registration-container">

        {{-- Header --}}
        <section class="reg-header" style="margin-bottom: 40px;">
            <p class="hero-eyebrow" style="margin: 0 auto 16px;">LANGKAH 4 DARI 5</p>
            <h1>Upload Berkas</h1>
            <p>Unggah dokumen-dokumen yang diperlukan dalam format PDF (maksimal 2MB per file)</p>
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
                <a href="/pendaftaran/step4" class="progress-step-item active" style="text-decoration: none; color: inherit;">
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
        <form action="/pendaftaran/simpan-dokumen" method="POST" enctype="multipart/form-data" class="form-card-kai">
            @csrf

            <div class="form-card-header">
                <span class="form-card-icon">📎</span>
                <div>
                    <h2>Upload Berkas Persyaratan</h2>
                    <p>Pastikan dokumen yang diupload jelas, lengkap, dan dalam format yang ditentukan</p>
                </div>
            </div>

            {{-- Document Requirements Info --}}
            <div class="upload-info-box">
                <div class="upload-info-icon">📄</div>
                <div class="upload-info-text">
                    <h4>Dokumen yang Dibutuhkan</h4>
                    <ul>
                        <li>Surat pengantar dari kampus/universitas</li>
                        <li>Kartu Tanda Mahasiswa (KTM) aktif</li>
                        <li>Proposal magang (maksimal 5 halaman)</li>
                        <li>Curriculum Vitae (CV) terbaru</li>
                        <li>Transkrip nilai akademik</li>
                    </ul>
                </div>
            </div>

            {{-- Upload Sections --}}
            <div class="upload-list">
                {{-- Surat Pengantar --}}
                <div class="upload-item">
                    <div class="upload-item-header">
                        <span class="upload-item-icon">📩</span>
                        <div>
                            <h4>Surat Pengantar dari Kampus <span class="required-star">*</span></h4>
                            <p class="upload-item-desc">Surat resmi dari kampus yang menyatakan persetujuan magang</p>
                        </div>
                    </div>
                    <div class="upload-box-kai" onclick="document.getElementById('surat_pengantar').click();">
                        <div class="upload-box-icon">📤</div>
                        <p>Klik untuk upload atau <strong>drag & drop</strong> file</p>
                        <span class="upload-format">PDF · Maks 2 MB</span>
                    </div>
                    <input type="file" id="surat_pengantar" name="surat_pengantar" class="file-input-hidden" accept=".pdf" required>
                    <div id="surat_pengantar_display"></div>
                </div>

                {{-- KTM --}}
                <div class="upload-item">
                    <div class="upload-item-header">
                        <span class="upload-item-icon">🪪</span>
                        <div>
                            <h4>Kartu Tanda Mahasiswa (KTM) <span class="required-star">*</span></h4>
                            <p class="upload-item-desc">KTM aktif yang masih berlaku</p>
                        </div>
                    </div>
                    <div class="upload-box-kai" onclick="document.getElementById('ktm').click();">
                        <div class="upload-box-icon">📤</div>
                        <p>Klik untuk upload atau <strong>drag & drop</strong> file</p>
                        <span class="upload-format">PDF/JPG · Maks 2 MB</span>
                    </div>
                    <input type="file" id="ktm" name="ktm" class="file-input-hidden" accept=".pdf,.jpg,.jpeg,.png" required>
                    <div id="ktm_display"></div>
                </div>

                {{-- Proposal --}}
                <div class="upload-item">
                    <div class="upload-item-header">
                        <span class="upload-item-icon">📝</span>
                        <div>
                            <h4>Proposal Magang <span class="required-star">*</span></h4>
                            <p class="upload-item-desc">Proposal magang maksimal 5 halaman sesuai format</p>
                        </div>
                    </div>
                    <div class="upload-box-kai" onclick="document.getElementById('proposal').click();">
                        <div class="upload-box-icon">📤</div>
                        <p>Klik untuk upload atau <strong>drag & drop</strong> file</p>
                        <span class="upload-format">PDF · Maks 2 MB</span>
                    </div>
                    <input type="file" id="proposal" name="proposal" class="file-input-hidden" accept=".pdf" required>
                    <div id="proposal_display"></div>
                </div>

                {{-- CV --}}
                <div class="upload-item">
                    <div class="upload-item-header">
                        <span class="upload-item-icon">👤</span>
                        <div>
                            <h4>Curriculum Vitae (CV) <span class="required-star">*</span></h4>
                            <p class="upload-item-desc">CV terbaru yang mencantumkan riwayat pendidikan dan pengalaman</p>
                        </div>
                    </div>
                    <div class="upload-box-kai" onclick="document.getElementById('cv').click();">
                        <div class="upload-box-icon">📤</div>
                        <p>Klik untuk upload atau <strong>drag & drop</strong> file</p>
                        <span class="upload-format">PDF · Maks 2 MB</span>
                    </div>
                    <input type="file" id="cv" name="cv" class="file-input-hidden" accept=".pdf" required>
                    <div id="cv_display"></div>
                </div>

                {{-- Transkip --}}
                <div class="upload-item">
                    <div class="upload-item-header">
                        <span class="upload-item-icon">📊</span>
                        <div>
                            <h4>Transkrip Nilai <span class="required-star">*</span></h4>
                            <p class="upload-item-desc">Transkrip nilai terbaru yang menunjukkan IPK minimal 3.00</p>
                        </div>
                    </div>
                    <div class="upload-box-kai" onclick="document.getElementById('transkip').click();">
                        <div class="upload-box-icon">📤</div>
                        <p>Klik untuk upload atau <strong>drag & drop</strong> file</p>
                        <span class="upload-format">PDF · Maks 2 MB</span>
                    </div>
                    <input type="file" id="transkip" name="transkip" class="file-input-hidden" accept=".pdf" required>
                    <div id="transkip_display"></div>
                </div>
            </div>

            {{-- Form Actions --}}
            <div class="form-actions-kai">
                <a href="/pendaftaran/step3" class="btn-kai-secondary" style="text-decoration: none; text-align: center; display: flex; align-items: center; justify-content: center; gap: 8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                    Kembali
                </a>
                <button type="submit" class="btn-kai-primary">
                    Verifikasi Berkas
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Handle file inputs
    const uploadFields = ['surat_pengantar', 'ktm', 'proposal', 'cv', 'transkip'];

    uploadFields.forEach(id => {
        const input = document.getElementById(id);
        const display = document.getElementById(`${id}_display`);

        input.addEventListener('change', function(e) {
            const file = this.files[0];
            if (file) {
                const fileSize = (file.size / 1024 / 1024).toFixed(2);
                display.innerHTML = `
                    <div class="uploaded-file-kai">
                        <div class="uploaded-file-info">
                            <span class="uploaded-file-icon">📄</span>
                            <div>
                                <div class="uploaded-file-name">${file.name}</div>
                                <div class="uploaded-file-size">${fileSize} MB</div>
                            </div>
                        </div>
                        <button type="button" class="uploaded-file-remove" onclick="this.closest('.upload-item').querySelector('input').value=''; this.closest('.uploaded-file-kai').remove();">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        </button>
                    </div>
                `;
            }
        });

        // Drag and drop
        const box = input.previousElementSibling;
        if (box) {
            box.addEventListener('dragover', e => { e.preventDefault(); box.classList.add('drag-over'); });
            box.addEventListener('dragleave', () => box.classList.remove('drag-over'));
            box.addEventListener('drop', e => {
                e.preventDefault();
                box.classList.remove('drag-over');
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    input.files = files;
                    input.dispatchEvent(new Event('change', { bubbles: true }));
                }
            });
        }
    });
</script>
@endsection