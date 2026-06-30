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
            <div class="form-card-header">
                <span class="form-card-icon">✅</span>
                <div>
                    <h2>Verifikasi & Konfirmasi Data</h2>
                    <p>Silakan verifikasi semua data yang Anda masukkan</p>
                </div>
            </div>

            {{-- Data Diri --}}
            <div class="form-section-kai">
                <h3 class="form-section-title">Data Diri</h3>
                <div class="verification-item">
                    <div class="verification-label">Nama Lengkap:</div>
                    <div class="verification-value" id="v-nama">—
                        <a href="/pendaftaran/step1-data-diri" class="edit-btn">Edit</a>
                    </div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">NIM:</div>
                    <div class="verification-value" id="v-nim">—</div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Email:</div>
                    <div class="verification-value" id="v-email">—</div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">No. HP:</div>
                    <div class="verification-value" id="v-nohp">—</div>
                </div>
            </div>

            {{-- Data Akademik --}}
            <div class="form-section-kai">
                <h3 class="form-section-title">Data Akademik</h3>
                <div class="verification-item">
                    <div class="verification-label">Nama Kampus:</div>
                    <div class="verification-value" id="v-universitas">—
                        <a href="/pendaftaran/step2" class="edit-btn">Edit</a>
                    </div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Program Studi:</div>
                    <div class="verification-value" id="v-prodi">—</div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Jenjang:</div>
                    <div class="verification-value" id="v-jenjang">—</div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">IPK Kumulatif:</div>
                    <div class="verification-value" id="v-ipk">—</div>
                </div>
            </div>

            {{-- Unit & Periode --}}
            <div class="form-section-kai">
                <h3 class="form-section-title">Pilihan Unit Magang</h3>
                <div class="verification-item">
                    <div class="verification-label">Unit yang Dipilih:</div>
                    <div class="verification-value" id="v-unit">—
                        <a href="/pendaftaran/step3" class="edit-btn">Edit</a>
                    </div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Periode Magang:</div>
                    <div class="verification-value" id="v-periode">—</div>
                </div>
                <div class="verification-item">
                    <div class="verification-label">Motivasi:</div>
                    <div class="verification-value" id="v-motivasi" style="white-space:pre-line;">—</div>
                </div>
            </div>

            {{-- Berkas --}}
            <div class="form-section-kai">
                <h3 class="form-section-title">Dokumen yang Diupload</h3>
                <div id="v-berkas">
                    <div style="color:#888;font-size:0.9rem;">⏳ Memuat status berkas...</div>
                </div>
            </div>

            {{-- Pernyataan --}}
            <div class="acknowledgement">
                <h4>Pernyataan & Konfirmasi</h4>
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

            <div style="background:#e3f2fd;border-left:4px solid #003f7f;padding:1.5rem;border-radius:5px;margin-top:2rem;">
                <h4 style="color:#003f7f;margin-bottom:0.5rem;">Informasi Penting</h4>
                <ul style="margin-left:1.5rem;color:#555;font-size:0.9rem;">
                    <li>Tim SDM akan memverifikasi berkas Anda dalam 2-3 hari kerja</li>
                    <li>Anda akan menerima notifikasi melalui email setelah verifikasi selesai</li>
                    <li>Simpan <strong>ID Pengajuan</strong> Anda untuk memantau status pendaftaran</li>
                    <li>Jika ada pertanyaan, hubungi bagian SDM KAI Divre III Palembang</li>
                </ul>
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
    document.getElementById('v-nama').innerHTML = (s1.nama || '—') + ' <a href="/pendaftaran/step1-data-diri" class="edit-btn">Edit</a>';
    document.getElementById('v-nim').textContent = s1.nim || '—';
    document.getElementById('v-email').textContent = s1.email || '—';
    document.getElementById('v-nohp').textContent = s1.no_hp || '—';

    // Data Akademik
    const s2 = JSON.parse(localStorage.getItem('kai_step2') || '{}');
    document.getElementById('v-universitas').innerHTML = (s2.universitas || '—') + ' <a href="/pendaftaran/step2" class="edit-btn">Edit</a>';
    document.getElementById('v-prodi').textContent = s2.prodi || '—';
    document.getElementById('v-jenjang').textContent = s2.jenjang || '—';
    document.getElementById('v-ipk').textContent = s2.ipk ? s2.ipk.toFixed(2) : '—';

    // Unit & Periode
    const s3 = JSON.parse(localStorage.getItem('kai_step3') || '{}');
    document.getElementById('v-unit').innerHTML = (s3.unit_nama || '—') + ' <a href="/pendaftaran/step3" class="edit-btn">Edit</a>';
    document.getElementById('v-periode').textContent = s3.tanggal_mulai && s3.tanggal_selesai
        ? `${s3.tanggal_mulai} s/d ${s3.tanggal_selesai}` : '—';
    document.getElementById('v-motivasi').textContent = s3.motivasi || '—';
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

        // Simpan ID untuk halaman sukses
        localStorage.setItem('kai_final_id', pengajuanId);
        localStorage.setItem('kai_final_email', JSON.parse(localStorage.getItem('kai_step1') || '{}').email || '');

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
