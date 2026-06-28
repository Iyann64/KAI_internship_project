@extends('layouts.app')

@section('title', 'Data Akademik - Pendaftaran Magang')

@section('content')
<div class="container section">
    <div class="registration-container">

        <div class="progress-bar-wrap">
            <div class="progress-step-list">
                <a href="/pendaftaran/step1-data-diri" class="progress-step-item completed" style="text-decoration:none;color:inherit;">
                    <div class="progress-step-circle"><span>✓</span></div>
                    <span class="progress-step-label">Data Diri</span>
                </a>
                <a class="progress-step-item active" style="text-decoration:none;color:inherit;">
                    <div class="progress-step-circle"><span>2</span></div>
                    <span class="progress-step-label">Akademik</span>
                </a>
                <a class="progress-step-item" style="text-decoration:none;color:inherit;">
                    <div class="progress-step-circle"><span>3</span></div>
                    <span class="progress-step-label">Pilih Unit</span>
                </a>
                <a class="progress-step-item" style="text-decoration:none;color:inherit;">
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
                <span class="form-card-icon">📚</span>
                <div>
                    <h2>Data Akademik</h2>
                    <p>Silakan isi data akademik Anda dengan lengkap dan benar</p>
                </div>
            </div>

            <div class="form-section">
                <h3>Informasi Kampus</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Kampus <span class="required">*</span></label>
                        <input type="text" id="universitas" placeholder="Nama lengkap perguruan tinggi">
                    </div>
                    <div class="form-group">
                        <label>Fakultas <span class="required">*</span></label>
                        <input type="text" id="fakultas" placeholder="Contoh: Teknik">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Program Studi <span class="required">*</span></label>
                        <input type="text" id="prodi" placeholder="Contoh: Teknik Informatika">
                    </div>
                    <div class="form-group">
                        <label>Jenjang <span class="required">*</span></label>
                        <select id="jenjang">
                            <option value="">-- Pilih --</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Semester <span class="required">*</span></label>
                        <input type="number" id="semester" min="1" max="14" placeholder="Contoh: 6">
                    </div>
                    <div class="form-group">
                        <label>Tahun Masuk <span class="required">*</span></label>
                        <input type="number" id="tahun_masuk" min="2000" max="2030" placeholder="Contoh: 2022">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>IPK Kumulatif <span class="required">*</span></label>
                        <input type="number" id="ipk" step="0.01" min="0" max="4" placeholder="Contoh: 3.75">
                        <small>Nilai 0.00 - 4.00</small>
                    </div>
                    <div class="form-group">
                        <label>Perolehan SKS <span class="required">*</span></label>
                        <input type="number" id="sks" placeholder="Total SKS yang telah ditempuh">
                    </div>
                </div>
                <div class="form-row full">
                    <div class="form-group">
                        <label>Alamat Kampus <span class="required">*</span></label>
                        <textarea id="alamat_kampus" placeholder="Alamat lengkap kampus"></textarea>
                    </div>
                </div>
                <div class="form-row full">
                    <div class="form-group">
                        <label>Email Kampus <small style="font-weight:normal;color:#888;">(Opsional)</small></label>
                        <input type="email" id="email_kampus" placeholder="nim@student.universitas.ac.id">
                    </div>
                </div>
            </div>

            <div class="form-actions-kai">
                <a href="/pendaftaran/step1-data-diri" class="btn-kai-secondary" style="text-decoration:none;display:flex;align-items:center;gap:8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                    Kembali
                </a>
                <button type="button" id="btnNext" onclick="submitStep2()" class="btn-kai-primary">
                    Selanjutnya
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
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

async function submitStep2() {
    const pengajuanId = localStorage.getItem('kai_pengajuan_id');
    if (!pengajuanId) {
        showAlert('danger', 'Sesi tidak ditemukan. Silakan mulai dari <a href="/pendaftaran/step1-data-diri">Step 1</a>.');
        return;
    }

    const body = {
        universitas: document.getElementById('universitas').value.trim(),
        fakultas: document.getElementById('fakultas').value.trim(),
        prodi: document.getElementById('prodi').value.trim(),
        jenjang: document.getElementById('jenjang').value,
        semester: parseInt(document.getElementById('semester').value),
        tahun_masuk: parseInt(document.getElementById('tahun_masuk').value),
        ipk: parseFloat(document.getElementById('ipk').value),
        sks: parseInt(document.getElementById('sks').value),
        alamat_kampus: document.getElementById('alamat_kampus').value.trim(),
        email_kampus: document.getElementById('email_kampus').value.trim() || null,
    };

    // Validasi
    const required = ['universitas','fakultas','prodi','jenjang','alamat_kampus'];
    for (const key of required) {
        if (!body[key]) { showAlert('danger', 'Semua field wajib diisi.'); return; }
    }
    if (!body.semester || !body.tahun_masuk || isNaN(body.ipk) || !body.sks) {
        showAlert('danger', 'Lengkapi semua data numerik.'); return;
    }
    if (body.ipk < 0 || body.ipk > 4) {
        showAlert('danger', 'IPK harus antara 0.00 - 4.00'); return;
    }

    const btn = document.getElementById('btnNext');
    btn.disabled = true;
    btn.textContent = 'Menyimpan...';

    try {
        const res = await fetch(`${API_BASE}/pendaftaran/step2/${pengajuanId}`, {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'ngrok-skip-browser-warning': 'true',
            },
            body: JSON.stringify(body),
        });
        const data = await res.json();

        if (!res.ok) {
            showAlert('danger', data.detail || 'Gagal menyimpan data akademik.');
            btn.disabled = false;
            btn.textContent = 'Selanjutnya';
            return;
        }

        // Simpan untuk step 5
        localStorage.setItem('kai_step2', JSON.stringify({
            universitas: body.universitas,
            prodi: body.prodi,
            jenjang: body.jenjang,
            ipk: body.ipk,
        }));

        window.location.href = '/pendaftaran/step3';
    } catch (e) {
        showAlert('danger', 'Koneksi ke server gagal.');
        btn.disabled = false;
        btn.textContent = 'Selanjutnya';
    }
}
</script>
@endsection
