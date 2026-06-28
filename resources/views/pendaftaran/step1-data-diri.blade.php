@extends('layouts.app')

@section('title', 'Pendaftaran Magang - Data Diri')

@section('content')
    <div class="container section">
        <div class="registration-container">

            <section class="reg-header" style="margin-bottom: 40px;">
                <p class="hero-eyebrow" style="margin: 0 auto 16px;">LANGKAH 1 DARI 5</p>
                <h1>Data Diri</h1>
                <p>Isi informasi pribadi Anda dengan lengkap dan benar untuk memulai proses pendaftaran magang</p>
            </section>

            <div class="progress-bar-wrap">
                <div class="progress-step-list">
                    <a href="/pendaftaran/step1-data-diri" class="progress-step-item active"
                        style="text-decoration:none;color:inherit;">
                        <div class="progress-step-circle"><span>1</span></div>
                        <span class="progress-step-label">Data Diri</span>
                    </a>
                    <a class="progress-step-item" style="text-decoration:none;color:inherit;">
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
                    <span class="form-card-icon">📋</span>
                    <div>
                        <h2>Informasi Pribadi</h2>
                        <p>Lengkapi data diri Anda di bawah ini</p>
                    </div>
                </div>

                <div class="form-section-kai">
                    <h3 class="form-section-title">Data Pribadi</h3>
                    <div class="form-row-kai">
                        <div class="form-group-kai">
                            <label>Nama Lengkap <span class="required-star">*</span></label>
                            <input type="text" id="nama" placeholder="Sesuai KTM/KTP">
                        </div>
                        <div class="form-group-kai">
                            <label>NIM <span class="required-star">*</span></label>
                            <input type="text" id="nim" placeholder="Nomor Induk Mahasiswa">
                        </div>
                    </div>
                    <div class="form-row-kai">
                        <div class="form-group-kai">
                            <label>Email <span class="required-star">*</span></label>
                            <input type="email" id="email" placeholder="contoh@gmail.com">
                        </div>
                        <div class="form-group-kai">
                            <label>No. HP / WhatsApp <span class="required-star">*</span></label>
                            <input type="tel" id="no_hp" placeholder="08xxxxxxxxxx">
                        </div>
                    </div>
                    <div class="form-row-kai">
                        <div class="form-group-kai">
                            <label>Tempat Lahir <span class="required-star">*</span></label>
                            <input type="text" id="tempat_lahir" placeholder="Kota kelahiran">
                        </div>
                        <div class="form-group-kai">
                            <label>Tanggal Lahir <span class="required-star">*</span></label>
                            <input type="date" id="tgl_lahir">
                        </div>
                    </div>
                    <div class="form-row-kai">
                        <div class="form-group-kai">
                            <label>Jenis Kelamin <span class="required-star">*</span></label>
                            <select id="jenis_kelamin">
                                <option value="">-- Pilih --</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group-kai">
                            <label>Agama <span class="required-star">*</span></label>
                            <select id="agama">
                                <option value="">-- Pilih --</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-section-kai">
                    <h3 class="form-section-title">Alamat Tinggal</h3>
                    <div class="form-row-kai full">
                        <div class="form-group-kai">
                            <label>Alamat Lengkap <span class="required-star">*</span></label>
                            <textarea id="alamat" placeholder="Nama jalan, nomor rumah, RT/RW"></textarea>
                        </div>
                    </div>
                    <div class="form-row-kai">
                        <div class="form-group-kai">
                            <label>Provinsi <span class="required-star">*</span></label>
                            <select id="provinsi" onchange="loadKota(this.value)">
                                <option value="">Pilih Provinsi...</option>
                            </select>
                        </div>
                        <div class="form-group-kai">
                            <label>Kota / Kabupaten <span class="required-star">*</span></label>
                            <select id="kota" onchange="loadKecamatan(this.value)" disabled>
                                <option value="">Pilih Kota...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row-kai">
                        <div class="form-group-kai">
                            <label>Kecamatan <span class="required-star">*</span></label>
                            <select id="kecamatan" disabled>
                                <option value="">Pilih Kecamatan...</option>
                            </select>
                        </div>
                        <div class="form-group-kai">
                            <label>Kode Pos <span class="required-star">*</span></label>
                            <input type="text" id="kode_pos" placeholder="Contoh: 30111">
                        </div>
                    </div>
                </div>

                <div class="form-actions-kai">
                    <button type="button" onclick="resetForm()" class="btn-kai-secondary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="1 4 1 10 7 10" />
                            <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10" />
                        </svg>
                        Bersihkan
                    </button>
                    <button type="button" id="btnNext" onclick="submitStep1()" class="btn-kai-primary">
                        Selanjutnya
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const API_BASE = 'https://unpresiding-encephalic-dawn.ngrok-free.dev/api/v1';

        async function loadProvinsi() {
            const res = await fetch(`${API_BASE}/wilayah/provinsi`, {
                headers: { 'ngrok-skip-browser-warning': 'true' }
            });
            const data = await res.json();
            const sel = document.getElementById('provinsi');
            data.forEach(p => {
                sel.innerHTML += `<option value="${p.id}" data-nama="${p.name}">${p.name}</option>`;
            });
        }

        async function loadKota(provId) {
            if (!provId) return;
            const res = await fetch(`${API_BASE}/wilayah/kota/${provId}`, {
                headers: { 'ngrok-skip-browser-warning': 'true' }
            });
            const data = await res.json();
            const sel = document.getElementById('kota');
            sel.innerHTML = '<option value="">Pilih Kota...</option>';
            data.forEach(k => sel.innerHTML += `<option value="${k.id}" data-nama="${k.name}">${k.name}</option>`);
            sel.disabled = false;
            document.getElementById('kecamatan').innerHTML = '<option value="">Pilih Kecamatan...</option>';
            document.getElementById('kecamatan').disabled = true;
        }

        async function loadKecamatan(kotaId) {
            if (!kotaId) return;
            const res = await fetch(`${API_BASE}/wilayah/kecamatan/${kotaId}`, {
                headers: { 'ngrok-skip-browser-warning': 'true' }
            });
            const data = await res.json();
            const sel = document.getElementById('kecamatan');
            sel.innerHTML = '<option value="">Pilih Kecamatan...</option>';
            data.forEach(k => sel.innerHTML += `<option value="${k.id}" data-nama="${k.name}">${k.name}</option>`);
            sel.disabled = false;
        }

        function showAlert(type, msg) {
            document.getElementById('alertBox').innerHTML = `
            <div class="alert" style="padding:12px 16px;border-radius:8px;margin-bottom:16px;
                background:${type === 'danger' ? '#fee2e2' : '#dcfce7'};
                border:1px solid ${type === 'danger' ? '#fca5a5' : '#86efac'};
                color:${type === 'danger' ? '#991b1b' : '#166534'};">
                ${msg}
            </div>`;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function resetForm() {
            ['nama', 'nim', 'email', 'no_hp', 'tempat_lahir', 'tgl_lahir', 'alamat', 'kode_pos'].forEach(id => {
                document.getElementById(id).value = '';
            });
            ['jenis_kelamin', 'agama', 'provinsi'].forEach(id => {
                document.getElementById(id).value = '';
            });
            document.getElementById('kota').innerHTML = '<option value="">Pilih Kota...</option>';
            document.getElementById('kota').disabled = true;
            document.getElementById('kecamatan').innerHTML = '<option value="">Pilih Kecamatan...</option>';
            document.getElementById('kecamatan').disabled = true;
        }

        async function submitStep1() {
            const provSel = document.getElementById('provinsi');
            const kotaSel = document.getElementById('kota');
            const kecSel = document.getElementById('kecamatan');

            const fields = {
                nama: document.getElementById('nama').value.trim(),
                nim: document.getElementById('nim').value.trim(),
                email: document.getElementById('email').value.trim(),
                no_hp: document.getElementById('no_hp').value.trim(),
                tempat_lahir: document.getElementById('tempat_lahir').value.trim(),
                tgl_lahir: document.getElementById('tgl_lahir').value,
                jenis_kelamin: document.getElementById('jenis_kelamin').value,
                agama: document.getElementById('agama').value,
                alamat: document.getElementById('alamat').value.trim(),
                kode_pos: document.getElementById('kode_pos').value.trim(),
            };

            for (const [key, val] of Object.entries(fields)) {
                if (!val) { showAlert('danger', 'Semua field wajib diisi.'); return; }
            }
            if (!provSel.value || !kotaSel.value || !kecSel.value) {
                showAlert('danger', 'Lengkapi data wilayah (Provinsi, Kota, Kecamatan).');
                return;
            }

            const body = {
                ...fields,
                provinsi_id: provSel.value,
                provinsi_nama: provSel.options[provSel.selectedIndex]?.dataset.nama || '',
                kota_id: kotaSel.value,
                kota_nama: kotaSel.options[kotaSel.selectedIndex]?.dataset.nama || '',
                kecamatan_id: kecSel.value,
                kecamatan_nama: kecSel.options[kecSel.selectedIndex]?.dataset.nama || '',
            };

            const btn = document.getElementById('btnNext');
            btn.disabled = true;
            btn.textContent = 'Menyimpan...';

            try {
                const res = await fetch(`${API_BASE}/pendaftaran/step1`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'ngrok-skip-browser-warning': 'true',
                    },
                    body: JSON.stringify(body),
                });
                const data = await res.json();

                if (!res.ok) {
                    showAlert('danger', data.detail || 'Gagal menyimpan data diri.');
                    btn.disabled = false;
                    btn.textContent = 'Selanjutnya';
                    return;
                }

                localStorage.setItem('kai_pengajuan_id', data.pengajuan_id);
                localStorage.setItem('kai_mahasiswa_id', data.mahasiswa_id);
                localStorage.setItem('kai_step1', JSON.stringify({
                    nama: fields.nama,
                    nim: fields.nim,
                    email: fields.email,
                    no_hp: fields.no_hp,
                }));

                window.location.href = '/pendaftaran/step2';
            } catch (e) {
                showAlert('danger', 'Koneksi ke server gagal. Pastikan server backend berjalan.');
                btn.disabled = false;
                btn.textContent = 'Selanjutnya';
            }
        }

        window.onload = loadProvinsi;
    </script>
@endsection