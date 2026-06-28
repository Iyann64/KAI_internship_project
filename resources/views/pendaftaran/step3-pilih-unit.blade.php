@extends('layouts.app')

@section('title', 'Pilih Unit - Pendaftaran Magang')

@section('content')
<div class="container section">
    <div class="registration-container">

        <section class="reg-header" style="margin-bottom: 40px;">
            <p class="hero-eyebrow" style="margin: 0 auto 16px;">LANGKAH 3 DARI 5</p>
            <h1>Pilih Unit Magang</h1>
            <p>Silakan pilih unit magang yang sesuai dengan minat dan keahlian Anda</p>
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
                <a class="progress-step-item active" style="text-decoration:none;color:inherit;">
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
                <span class="form-card-icon">🏢</span>
                <div>
                    <h2>Pilih Unit Magang</h2>
                    <p>Silakan pilih unit magang yang sesuai dengan minat dan keahlian Anda</p>
                </div>
            </div>

            <div class="upload-info-box">
                <div class="upload-info-icon">ℹ️</div>
                <div class="upload-info-text">
                    <h4>Petunjuk Pemilihan Unit</h4>
                    <ul>
                        <li>Pilih satu unit yang paling sesuai dengan minat Anda</li>
                        <li>Tim SDM akan melakukan pertimbangan berdasarkan kualifikasi dan ketersediaan</li>
                    </ul>
                </div>
            </div>

            <div class="form-section-kai">
                <h3 class="form-section-title">Daftar Unit Tersedia</h3>
                <div class="units-selection" id="unitContainer">
                    <div style="text-align:center;padding:2rem;color:#888;">
                        <span>⏳ Memuat daftar unit...</span>
                    </div>
                </div>
            </div>

            <div class="form-section-kai">
                <h3 class="form-section-title">Periode Magang</h3>
                <div class="form-row-kai">
                    <div class="form-group-kai">
                        <label>Tanggal Mulai <span class="required-star">*</span></label>
                        <input type="date" id="tanggal_mulai">
                    </div>
                    <div class="form-group-kai">
                        <label>Tanggal Selesai <span class="required-star">*</span></label>
                        <input type="date" id="tanggal_selesai">
                    </div>
                </div>
            </div>

            <div class="form-section-kai">
                <h3 class="form-section-title">Motivasi & Ekspektasi</h3>
                <p style="color:var(--kai-muted);margin-bottom:1rem;">Jelaskan mengapa Anda memilih unit ini dan apa yang ingin Anda pelajari.</p>
                <div class="form-group-kai">
                    <label>Motivasi Pemilihan Unit <span class="required-star">*</span></label>
                    <textarea id="motivasi" rows="4" placeholder="Jelaskan mengapa Anda memilih unit ini dan apa yang ingin Anda pelajari dari unit tersebut..."></textarea>
                </div>
                <div class="form-group-kai" style="margin-top:1rem;">
                    <label>Harapan Selama Magang <small style="font-weight:normal;color:#888;">(Opsional)</small></label>
                    <textarea id="harapan" rows="3" placeholder="Sebutkan harapan dan target pembelajaran Anda selama magang di unit ini..."></textarea>
                </div>
            </div>

            <div class="form-actions-kai">
                <a href="/pendaftaran/step2" class="btn-kai-secondary" style="text-decoration:none;display:flex;align-items:center;gap:8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                    Kembali
                </a>
                <button type="button" id="btnNext" onclick="submitStep3()" class="btn-kai-primary">
                    Selanjutnya
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
const API_BASE = 'https://unpresiding-encephalic-dawn.ngrok-free.dev/api/v1';
let selectedUnitId = null;

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

async function loadUnits() {
    try {
        const res = await fetch(`${API_BASE}/units/`, {
            headers: { 'ngrok-skip-browser-warning': 'true' }
        });
        const units = await res.json();
        const container = document.getElementById('unitContainer');

        if (!units.length) {
            container.innerHTML = '<p style="color:#888;">Tidak ada unit tersedia saat ini.</p>';
            return;
        }

        container.innerHTML = units.map(u => `
            <label class="unit-option" onclick="selectUnit(${u.id}, '${u.nama_unit}', this)">
                <input type="radio" name="unit_id" value="${u.id}">
                <div class="unit-option-content">
                    <div class="unit-option-title">${u.nama_unit}</div>
                    <div class="unit-option-desc">Kode Unit: ${u.kode_unit}</div>
                    <div class="unit-option-quota">KAI Divre III Palembang</div>
                </div>
            </label>
        `).join('');
    } catch (e) {
        document.getElementById('unitContainer').innerHTML =
            '<p style="color:#dc2626;">Gagal memuat daftar unit. Pastikan koneksi ke server aktif.</p>';
    }
}

function selectUnit(id, nama, el) {
    selectedUnitId = id;
    document.querySelectorAll('.unit-option').forEach(o => o.classList.remove('selected'));
    el.classList.add('selected');
    el.querySelector('input').checked = true;
    localStorage.setItem('kai_unit_nama', nama);
}

async function submitStep3() {
    const pengajuanId = localStorage.getItem('kai_pengajuan_id');
    if (!pengajuanId) {
        showAlert('danger', 'Sesi tidak ditemukan. Silakan mulai dari <a href="/pendaftaran/step1-data-diri">Step 1</a>.');
        return;
    }
    if (!selectedUnitId) { showAlert('danger', 'Pilih unit magang terlebih dahulu.'); return; }

    const tanggal_mulai = document.getElementById('tanggal_mulai').value;
    const tanggal_selesai = document.getElementById('tanggal_selesai').value;
    const motivasi = document.getElementById('motivasi').value.trim();
    const harapan = document.getElementById('harapan').value.trim();

    if (!tanggal_mulai || !tanggal_selesai) { showAlert('danger', 'Lengkapi periode magang.'); return; }
    if (tanggal_selesai <= tanggal_mulai) { showAlert('danger', 'Tanggal selesai harus setelah tanggal mulai.'); return; }
    if (!motivasi) { showAlert('danger', 'Motivasi pemilihan unit wajib diisi.'); return; }

    const btn = document.getElementById('btnNext');
    btn.disabled = true;
    btn.textContent = 'Menyimpan...';

    try {
        const res = await fetch(`${API_BASE}/pendaftaran/step3/${pengajuanId}`, {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'ngrok-skip-browser-warning': 'true',
            },
            body: JSON.stringify({
                unit_id: selectedUnitId,
                tanggal_mulai,
                tanggal_selesai,
                motivasi,
                harapan: harapan || null,
            }),
        });
        const data = await res.json();

        if (!res.ok) {
            showAlert('danger', data.detail || 'Gagal menyimpan pilihan unit.');
            btn.disabled = false;
            btn.textContent = 'Selanjutnya';
            return;
        }

        // Simpan untuk step 5
        localStorage.setItem('kai_step3', JSON.stringify({
            unit_nama: localStorage.getItem('kai_unit_nama'),
            tanggal_mulai,
            tanggal_selesai,
            motivasi,
        }));

        window.location.href = '/pendaftaran/step4';
    } catch (e) {
        showAlert('danger', 'Koneksi ke server gagal.');
        btn.disabled = false;
        btn.textContent = 'Selanjutnya';
    }
}

window.onload = loadUnits;
</script>
@endsection
