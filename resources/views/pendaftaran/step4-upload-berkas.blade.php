@extends('layouts.app')

@section('title', 'Upload Berkas - Pendaftaran Magang')

@section('content')
<div class="container section">
    <div class="registration-container">

        <section class="reg-header" style="margin-bottom: 40px;">
            <p class="hero-eyebrow" style="margin: 0 auto 16px;">LANGKAH 4 DARI 5</p>
            <h1>Upload Berkas</h1>
            <p>Unggah dokumen-dokumen yang diperlukan. Format PDF/JPG/PNG, maksimal 5MB per file.</p>
        </section>

        <div class="progress-bar-wrap">
            <div class="progress-step-list">
                <a href="/pendaftaran/step1-data-diri" class="progress-step-item completed" style="text-decoration:none;color:inherit;">
                    <div class="progress-step-circle"><span>✓</span></div>
                    <span class="progress-step-label">Data Diri</span>
                </a>
                <a href="/pendaftaran/step2" class="progress-step-item completed" style="text-decoration:none;color:inherit;">
                    <div class="progress-step-circle"><span>✓</span></div>
                    <span class="progress-step-label">Akademik</span>
                </a>
                <a href="/pendaftaran/step3" class="progress-step-item completed" style="text-decoration:none;color:inherit;">
                    <div class="progress-step-circle"><span>✓</span></div>
                    <span class="progress-step-label">Pilih Unit</span>
                </a>
                <a class="progress-step-item active" style="text-decoration:none;color:inherit;">
                    <div class="progress-step-circle"><span>4</span></div>
                    <span class="progress-step-label">Berkas</span>
                </a>
                <a class="progress-step-item" style="text-decoration:none;color:inherit;">
                    <div class="progress-step-circle"><span>5</span></div>
                    <span class="progress-step-label">Verifikasi</span>
                </a>
            </div>
        </div>

        <div id="alertBox"></div>

        <div class="form-card-kai">
            <div class="form-card-header">
                <span class="form-card-icon">📎</span>
                <div>
                    <h2>Upload Berkas Persyaratan</h2>
                    <p>Pastikan dokumen yang diupload jelas, lengkap, dan dalam format yang ditentukan</p>
                </div>
            </div>

            <div class="upload-info-box">
                <div class="upload-info-icon">📄</div>
                <div class="upload-info-text">
                    <h4>Dokumen yang Dibutuhkan</h4>
                    <ul>
                        <li>Surat pengantar dari kampus/universitas (PDF)</li>
                        <li>Proposal magang (PDF)</li>
                        <li>Foto 3x4 latar merah (JPG/PNG)</li>
                        <li>Kartu Tanda Mahasiswa / KTM (PDF/JPG/PNG)</li>
                        <li>Transkrip nilai akademik (PDF)</li>
                        <li>Dokumen pendukung pengajuan (PDF)</li>
                    </ul>
                </div>
            </div>

            <div class="upload-list" id="berkasContainer">
                <div style="text-align:center;padding:2rem;color:#888;">
                    ⏳ Memuat daftar berkas...
                </div>
            </div>

            <div class="form-actions-kai">
                <a href="/pendaftaran/step3" class="btn-kai-secondary" style="text-decoration:none;display:flex;align-items:center;gap:8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                    Kembali
                </a>
                <button type="button" id="btnNext" onclick="lanjutStep5()" class="btn-kai-primary">
                    Verifikasi Berkas
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
const API_BASE = 'https://unpresiding-encephalic-dawn.ngrok-free.dev/api/v1';
let jenisBerkasList = [];
let uploadedMap = {}; // { jenis_berkas_id: true/false }

function showAlert(type, msg) {
    document.getElementById('alertBox').innerHTML = `
        <div style="padding:12px 16px;border-radius:8px;margin-bottom:16px;
            background:${type==='danger'?'#fee2e2':'#dcfce7'};
            border:1px solid ${type==='danger'?'#fca5a5':'#86efac'};
            color:${type==='danger'?'#991b1b':'#166534'};">
            ${msg}
        </div>`;
    window.scrollTo({top:0,behavior:'smooth'});
}

const ICON_MAP = {
    'Surat Pengantar dari Kampus': '📩',
    'Proposal Magang': '📝',
    'Foto 3x4': '📷',
    'KTM (Kartu Tanda Mahasiswa)': '🪪',
    'Transkrip Nilai': '📊',
    'Dokumen Pendukung Pengajuan': '📁',
};

async function loadBerkas() {
    const pengajuanId = localStorage.getItem('kai_pengajuan_id');
    if (!pengajuanId) {
        showAlert('danger', 'Sesi tidak ditemukan. Silakan mulai dari <a href="/pendaftaran/step1-data-diri">Step 1</a>.');
        return;
    }

    try {
        // Load jenis berkas dan berkas pengajuan sekaligus
        const [jenisRes, berkasRes] = await Promise.all([
            fetch(`${API_BASE}/jenis-berkas`, { headers: { 'ngrok-skip-browser-warning': 'true' } }),
            fetch(`${API_BASE}/pengajuan/${pengajuanId}/berkas`, { headers: { 'ngrok-skip-browser-warning': 'true' } }),
        ]);

        jenisBerkasList = await jenisRes.json();
        const berkasData = await berkasRes.json();

        // Map berkas_id → { id, uploaded }
        const berkasMap = {};
        berkasData.forEach(b => {
            berkasMap[b.jenis_berkas_id] = { id: b.id, uploaded: !!b.file_path };
            uploadedMap[b.jenis_berkas_id] = !!b.file_path;
        });

        renderBerkas(berkasMap);
    } catch (e) {
        document.getElementById('berkasContainer').innerHTML =
            '<p style="color:#dc2626;padding:1rem;">Gagal memuat daftar berkas. Periksa koneksi ke server.</p>';
    }
}

function renderBerkas(berkasMap) {
    const container = document.getElementById('berkasContainer');
    container.innerHTML = jenisBerkasList.map(j => {
        const berkas = berkasMap[j.id] || {};
        const isUploaded = berkas.uploaded || false;
        const icon = ICON_MAP[j.nama_berkas] || '📄';
        const accept = j.nama_berkas.includes('Foto') ? '.jpg,.jpeg,.png' : '.pdf,.jpg,.jpeg,.png';
        const formatLabel = j.nama_berkas.includes('Foto') ? 'JPG/PNG · Maks 5MB' : 'PDF/JPG/PNG · Maks 5MB';

        return `
        <div class="upload-item" id="item-${j.id}">
            <div class="upload-item-header">
                <span class="upload-item-icon">${icon}</span>
                <div>
                    <h4>${j.nama_berkas} ${j.is_required ? '<span class="required-star">*</span>' : ''}</h4>
                    <p class="upload-item-desc">${j.keterangan || ''}</p>
                </div>
            </div>
            <div class="upload-box-kai" id="box-${j.id}" onclick="document.getElementById('file-${j.id}').click();">
                <div class="upload-box-icon">${isUploaded ? '✅' : '📤'}</div>
                <p>${isUploaded ? 'File sudah diupload. Klik untuk mengganti.' : 'Klik untuk upload atau <strong>drag & drop</strong> file'}</p>
                <span class="upload-format">${formatLabel}</span>
            </div>
            <input type="file" id="file-${j.id}" class="file-input-hidden" accept="${accept}"
                onchange="uploadFile(${j.id}, ${berkas.id || 'null'}, this)">
            <div id="display-${j.id}" class="${isUploaded ? '' : 'hidden'}">
                ${isUploaded ? `
                <div class="uploaded-file-kai">
                    <div class="uploaded-file-info">
                        <span class="uploaded-file-icon">📄</span>
                        <div>
                            <div class="uploaded-file-name">File sudah terupload</div>
                            <div class="uploaded-file-size" id="size-${j.id}"></div>
                        </div>
                    </div>
                    <span style="color:#166534;font-size:0.85rem;">✓ Berhasil</span>
                </div>` : ''}
            </div>
            <div id="progress-${j.id}" style="display:none;padding:8px 0;color:#888;font-size:0.85rem;">⏳ Mengupload...</div>
        </div>`;
    }).join('');

    // Setup drag and drop
    jenisBerkasList.forEach(j => {
        const box = document.getElementById(`box-${j.id}`);
        if (box) {
            box.addEventListener('dragover', e => { e.preventDefault(); box.style.borderColor = '#003f7f'; });
            box.addEventListener('dragleave', () => { box.style.borderColor = ''; });
            box.addEventListener('drop', e => {
                e.preventDefault();
                box.style.borderColor = '';
                const input = document.getElementById(`file-${j.id}`);
                if (e.dataTransfer.files.length > 0) {
                    // Ambil berkas_id dari berkasMap
                    input.files = e.dataTransfer.files;
                    input.dispatchEvent(new Event('change', { bubbles: true }));
                }
            });
        }
    });
}

async function uploadFile(jenisId, berkasId, input) {
    const pengajuanId = localStorage.getItem('kai_pengajuan_id');
    const file = input.files[0];
    if (!file) return;

    // Validasi ukuran
    if (file.size > 5 * 1024 * 1024) {
        showAlert('danger', `File "${file.name}" terlalu besar. Maksimal 5MB.`);
        input.value = '';
        return;
    }

    document.getElementById(`progress-${jenisId}`).style.display = 'block';
    document.getElementById(`display-${jenisId}`).innerHTML = '';

    // Kalau berkasId belum ada, fetch dulu dari API
    if (!berkasId) {
        try {
            const res = await fetch(`${API_BASE}/pengajuan/${pengajuanId}/berkas`, {
                headers: { 'ngrok-skip-browser-warning': 'true' }
            });
            const data = await res.json();
            const target = data.find(b => b.jenis_berkas_id === jenisId);
            if (target) berkasId = target.id;
        } catch (e) {
            showAlert('danger', 'Gagal mengambil data berkas.');
            document.getElementById(`progress-${jenisId}`).style.display = 'none';
            return;
        }
    }

    try {
        const formData = new FormData();
        formData.append('file', file);

        const res = await fetch(`${API_BASE}/pengajuan/${pengajuanId}/berkas/${berkasId}/upload`, {
            method: 'POST',
            headers: { 'ngrok-skip-browser-warning': 'true' },
            body: formData,
        });

        document.getElementById(`progress-${jenisId}`).style.display = 'none';

        if (res.ok) {
            uploadedMap[jenisId] = true;
            const fileSize = (file.size / 1024 / 1024).toFixed(2);
            document.getElementById(`display-${jenisId}`).innerHTML = `
                <div class="uploaded-file-kai">
                    <div class="uploaded-file-info">
                        <span class="uploaded-file-icon">📄</span>
                        <div>
                            <div class="uploaded-file-name">${file.name}</div>
                            <div class="uploaded-file-size">${fileSize} MB</div>
                        </div>
                    </div>
                    <span style="color:#166534;font-size:0.85rem;">✓ Berhasil</span>
                </div>`;
            document.getElementById(`box-${jenisId}`).querySelector('.upload-box-icon').textContent = '✅';
        } else {
            const err = await res.json();
            showAlert('danger', err.detail || 'Gagal mengupload file.');
        }
    } catch (e) {
        document.getElementById(`progress-${jenisId}`).style.display = 'none';
        showAlert('danger', 'Koneksi ke server gagal saat upload.');
    }
}

function lanjutStep5() {
    // Cek semua berkas wajib sudah diupload
    const belumUpload = jenisBerkasList
        .filter(j => j.is_required && !uploadedMap[j.id])
        .map(j => j.nama_berkas);

    if (belumUpload.length > 0) {
        showAlert('danger', `Berkas berikut belum diupload: <strong>${belumUpload.join(', ')}</strong>`);
        return;
    }

    window.location.href = '/pendaftaran/step5';
}

window.onload = loadBerkas;
</script>
@endsection
