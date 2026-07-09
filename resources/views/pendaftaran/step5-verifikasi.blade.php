@extends('layouts.app')

@section('title', 'Verifikasi & Konfirmasi - Pendaftaran Magang')

@section('content')
<div class="container section">
    <div class="registration-container">

        <section class="reg-header" style="margin-bottom: 40px;">
            <p class="hero-eyebrow" style="margin: 0 auto 16px;">LANGKAH 5 DARI 5</p>
            <h1>Verifikasi & Konfirmasi</h1>
            <p>Silakan verifikasi semua data yang Anda masukkan. Pastikan data sudah benar sebelum mengirim pengajuan.</p>
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
                <a href="/pendaftaran/step4" class="progress-step-item completed" style="text-decoration:none;color:inherit;">
                    <div class="progress-step-circle"><span>✓</span></div>
                    <span class="progress-step-label">Berkas</span>
                </a>
                <a class="progress-step-item active" style="text-decoration:none;color:inherit;">
                    <div class="progress-step-circle"><span>5</span></div>
                    <span class="progress-step-label">Verifikasi</span>
                </a>
            </div>
        </div>

        <div id="alertBox"></div>

        <div class="form-card-kai">
            <div class="form-card-header" style="justify-content:space-between;">
                <div style="display:flex;align-items:flex-start;gap:14px;">
                    <span class="form-card-icon">✅</span>
                    <div>
                        <h2>Verifikasi & Konfirmasi</h2>
                        <p>Pastikan semua data dan dokumen Anda sudah benar sebelum submitting</p>
                    </div>
                </div>
                <span class="current-badge">Curren...</span>
            </div>

            {{-- Leader Section --}}
            <div class="verification-leader">
                <div class="leader-badge">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h4>Lengkap! pendaftaran Anda</h4>
                <p>Periksa kembali seluruh informasi, pilih unit magang tujuan, dan setiap pernyataan di bawah ini untuk melanjutkan.</p>
            </div>

            {{-- Data Akademik --}}
            <div class="form-section-kai">
                <div class="verification-section-header">
                    <div style="display:flex;align-items:center;gap:10px;">
                        <span class="section-icon">🎓</span>
                        <h3 class="form-section-title" style="margin:0;">Ringkasan Data Akademik</h3>
                    </div>
                    <a href="/pendaftaran/step2" class="edit-btn-header">Edit</a>
                </div>
                <div class="verification-grid">
                    <div class="verification-item">
                        <div class="verification-label">Nama Lengkap</div>
                        <div class="verification-value" id="v-nama">—</div>
                    </div>
                    <div class="verification-item">
                        <div class="verification-label">NIM</div>
                        <div class="verification-value" id="v-nim">—</div>
                    </div>
                    <div class="verification-item">
                        <div class="verification-label">Universitas</div>
                        <div class="verification-value" id="v-universitas">—</div>
                    </div>
                    <div class="verification-item">
                        <div class="verification-label">Program Studi</div>
                        <div class="verification-value" id="v-prodi">—</div>
                    </div>
                    <div class="verification-item">
                        <div class="verification-label">Jenjang</div>
                        <div class="verification-value" id="v-jenjang">—</div>
                    </div>
                    <div class="verification-item">
                        <div class="verification-label">IPK Kumulatif</div>
                        <div class="verification-value" id="v-ipk">—</div>
                    </div>
                </div>
            </div>

            {{-- Unit Magang --}}
            <div class="form-section-kai">
                <div class="verification-section-header">
                    <div style="display:flex;align-items:center;gap:10px;">
                        <span class="section-icon">🏢</span>
                        <h3 class="form-section-title" style="margin:0;">Unit Magang yang Dipilih</h3>
                    </div>
                    <a href="/pendaftaran/step3" class="edit-btn-header">Edit</a>
                </div>
                <div class="selected-unit-card" id="v-unit-card">
                    <div class="selected-unit-icon" id="v-unit-emoji">🏢</div>
                    <div class="selected-unit-info">
                        <h4 id="v-unit-name">—</h4>
                        <p id="v-unit-desc">—</p>
                        <span class="selected-unit-code" id="v-unit-code">—</span>
                    </div>
                </div>
                <div class="verification-item" style="margin-top:16px;padding-top:16px;border-top:1px solid rgba(0,48,135,0.06);">
                    <div class="verification-label">Periode Magang:</div>
                    <div class="verification-value" id="v-periode">—</div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Motivasi:</div>
                    <div class="verification-value" id="v-motivasi" style="white-space:pre-line;">—</div>
                </div>
            </div>

            {{-- Periode & Motivasi --}}
            <div class="form-section-kai">
                <div class="verification-section-header">
                    <div style="display:flex;align-items:center;gap:10px;">
                        <span class="section-icon">📅</span>
                        <h3 class="form-section-title" style="margin:0;">Periode & Motivasi</h3>
                    </div>
                    <a href="/pendaftaran/step3" class="edit-btn-header">Edit</a>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Periode Magang</div>
                    <div class="verification-value" id="v-periode-detail">—</div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Motivasi</div>
                    <div class="verification-value" id="v-motivasi-detail" style="white-space:pre-line;">—</div>
                </div>
            </div>

            {{-- Dokumen --}}
            <div class="form-section-kai">
                <div class="verification-section-header">
                    <div style="display:flex;align-items:center;gap:10px;">
                        <span class="section-icon">📄</span>
                        <h3 class="form-section-title" style="margin:0;">Dokumen yang Diunggah</h3>
                    </div>
                    <a href="/pendaftaran/step4" class="edit-btn-header">Edit</a>
                </div>
                <div id="v-berkas">
                    <div style="color:#888;font-size:0.9rem;">⏳ Memuat status berkas...</div>
                </div>
            </div>

            {{-- Pernyataan --}}
            <div class="form-section-kai">
                <div class="verification-section-header">
                    <div style="display:flex;align-items:center;gap:10px;">
                        <span class="section-icon">✓</span>
                        <h3 class="form-section-title" style="margin:0;">Pernyataan & Konfirmasi</h3>
                    </div>
                </div>
                <div class="acknowledgement">
                    <div class="checkbox-group">
                        <input type="checkbox" id="confirm1">
                        <label for="confirm1">Saya menyatakan bahwa semua data yang saya isi adalah benar dan dapat dipertanggungjawabkan.</label>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="confirm2">
                        <label for="confirm2">Saya bersedia mengikuti semua peraturan dan ketentuan program magang PT Kereta Api Indonesia.</label>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="confirm3">
                        <label for="confirm3">Saya memberikan izin kepada PT KAI untuk menggunakan data saya untuk keperluan proses rekrutmen magang.</label>
                    </div>
                </div>
            </div>

            {{-- Data Security --}}
            <div class="data-security-box">
                <div class="security-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                </div>
                <div class="security-content">
                    <h4>Data Anda aman</h4>
                    <p>Informasi yang Anda berikan akan dirahasiakan dan hanya diproses oleh SDM PT KAI untuk keperluan magang.</p>
                </div>
            </div>

            <div class="form-actions-kai">
                <a href="/pendaftaran/step4" class="btn-kai-secondary" style="text-decoration:none;display:flex;align-items:center;gap:8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                    Kembali
                </a>
                <button type="button" id="btnSubmit" onclick="submitFinal()" class="btn-kai-primary">
                    Kirim Pendaftaran
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
const API_BASE = 'https://unpresiding-encephalic-dawn.ngrok-free.dev/api/v1';

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

function loadSummary() {
    // Data Diri
    const s1 = JSON.parse(localStorage.getItem('kai_step1') || '{}');
    const vNama = document.getElementById('v-nama');
    if (vNama) vNama.innerHTML = (s1.nama || '—') + ' <a href="/pendaftaran/step1-data-diri" class="edit-btn">Edit</a>';
    const vNim = document.getElementById('v-nim');
    if (vNim) vNim.textContent = s1.nim || '—';
    const vEmail = document.getElementById('v-email');
    if (vEmail) vEmail.textContent = s1.email || '—';
    const vNohp = document.getElementById('v-nohp');
    if (vNohp) vNohp.textContent = s1.no_hp || '—';

    // Data Akademik
    const s2 = JSON.parse(localStorage.getItem('kai_step2') || '{}');
    const vUniv = document.getElementById('v-universitas');
    if (vUniv) vUniv.innerHTML = (s2.universitas || '—') + ' <a href="/pendaftaran/step2" class="edit-btn">Edit</a>';
    const vProdi = document.getElementById('v-prodi');
    if (vProdi) vProdi.textContent = s2.prodi || '—';
    const vJenjang = document.getElementById('v-jenjang');
    if (vJenjang) vJenjang.textContent = s2.jenjang || '—';
    const vIpk = document.getElementById('v-ipk');
    if (vIpk) vIpk.textContent = s2.ipk ? s2.ipk.toFixed(2) : '—';

    // Unit & Periode
    const s3 = JSON.parse(localStorage.getItem('kai_step3') || '{}');
    const unitName = s3.unit_nama || '—';
    const unitCode = s3.unit_code || '';
    const unitEmoji = s3.unit_emoji || '🏢';
    const unitDesc = s3.unit_desc || '';
    const periode = s3.tanggal_mulai && s3.tanggal_selesai
        ? `${s3.tanggal_mulai} s/d ${s3.tanggal_selesai}` : '—';

    const vUnitName = document.getElementById('v-unit-name');
    if (vUnitName) vUnitName.textContent = unitName;
    const vUnitDesc = document.getElementById('v-unit-desc');
    if (vUnitDesc) vUnitDesc.textContent = unitDesc;
    const vUnitCode = document.getElementById('v-unit-code');
    if (vUnitCode) vUnitCode.textContent = unitCode ? `Kode Unit: ${unitCode}` : '';
    const vUnitEmoji = document.getElementById('v-unit-emoji');
    if (vUnitEmoji) vUnitEmoji.textContent = unitEmoji;
    const vPeriode = document.getElementById('v-periode');
    if (vPeriode) vPeriode.textContent = periode;
    const vPeriodeDetail = document.getElementById('v-periode-detail');
    if (vPeriodeDetail) vPeriodeDetail.textContent = periode;
    const vMotivasi = document.getElementById('v-motivasi');
    if (vMotivasi) vMotivasi.textContent = s3.motivasi || '—';
    const vMotivasiDetail = document.getElementById('v-motivasi-detail');
    if (vMotivasiDetail) vMotivasiDetail.textContent = s3.motivasi || '—';
}

async function loadBerkasStatus() {
    const pengajuanId = localStorage.getItem('kai_pengajuan_id');
    if (!pengajuanId) return;

    try {
        const [jenisRes, berkasRes] = await Promise.all([
            fetch(`${API_BASE}/jenis-berkas`, { headers: { 'ngrok-skip-browser-warning': 'true' } }),
            fetch(`${API_BASE}/pengajuan/${pengajuanId}/berkas`, { headers: { 'ngrok-skip-browser-warning': 'true' } }),
        ]);
        const jenis = await jenisRes.json();
        const berkas = await berkasRes.json();

        const berkasMap = {};
        berkas.forEach(b => { berkasMap[b.jenis_berkas_id] = !!b.file_path; });

        document.getElementById('v-berkas').innerHTML = jenis.map(j => `
            <div class="verification-item">
                <div class="verification-label">${j.nama_berkas}:</div>
                <div class="verification-value">
                    ${berkasMap[j.id]
                        ? '<span style="color:#166534;">✓ Sudah diupload</span>'
                        : `<span style="color:#dc2626;">✗ Belum diupload</span> <a href="/pendaftaran/step4" class="edit-btn">Upload</a>`
                    }
                </div>
            </div>`).join('');
    } catch (e) {
        document.getElementById('v-berkas').innerHTML = '<p style="color:#888;font-size:0.9rem;">Gagal memuat status berkas.</p>';
    }
}

async function submitFinal() {
    if (!document.getElementById('confirm1').checked ||
        !document.getElementById('confirm2').checked ||
        !document.getElementById('confirm3').checked) {
        showAlert('danger', 'Centang semua pernyataan konfirmasi terlebih dahulu.');
        return;
    }

    const pengajuanId = localStorage.getItem('kai_pengajuan_id');
    if (!pengajuanId) {
        showAlert('danger', 'Sesi tidak ditemukan. Silakan mulai dari <a href="/pendaftaran/step1-data-diri">Step 1</a>.');
        return;
    }

    const btn = document.getElementById('btnSubmit');
    btn.disabled = true;
    btn.textContent = 'Mengirim...';

    try {
        const res = await fetch(`${API_BASE}/pendaftaran/step5/${pengajuanId}/submit`, {
            method: 'POST',
            headers: { 'ngrok-skip-browser-warning': 'true' },
        });
        const data = await res.json();

        if (!res.ok) {
            showAlert('danger', data.detail || 'Gagal mengirim pengajuan.');
            btn.disabled = false;
            btn.textContent = 'Kirim Pendaftaran';
            return;
        }

        // Simpan referensi status yang tetap dipakai setelah sesi pendaftaran dibersihkan
        const step1 = JSON.parse(localStorage.getItem('kai_step1') || '{}');
        localStorage.setItem('kai_status_ref', pengajuanId);
        localStorage.setItem('kai_status_email', step1.email || '');
        localStorage.setItem('kai_final_id', pengajuanId);
        localStorage.setItem('kai_final_email', step1.email || '');

        // Bersihkan data sementara
        ['kai_pengajuan_id','kai_mahasiswa_id','kai_step1','kai_step2','kai_step3','kai_unit_nama'].forEach(k => {
            localStorage.removeItem(k);
        });

        window.location.href = '/pendaftaran/success';
    } catch (e) {
        showAlert('danger', 'Koneksi ke server gagal.');
        btn.disabled = false;
        btn.textContent = 'Kirim Pendaftaran';
    }
}

window.onload = () => { loadSummary(); loadBerkasStatus(); };
</script>
@endsection
