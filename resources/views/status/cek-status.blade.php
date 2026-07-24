@extends('layouts.app')

@section('title', 'Cek Status Pengajuan - PT KAI')

@section('content')
    <div class="container section">
        <div class="registration-container" style="max-width:1100px;">
            <section class="reg-header" style="margin-bottom:32px;">
                <p class="hero-eyebrow" style="margin:0 auto 16px;">MONITORING STATUS</p>
                <h1>Cek Status Pengajuan</h1>
                <p>Masukkan ID pengajuan dan email yang Anda gunakan saat mendaftar untuk melihat status terbaru.</p>
            </section>

            <div class="form-card-kai" style="margin-bottom:24px;">
                <div class="form-card-header">
                    <span class="form-card-icon">📌</span>
                    <div>
                        <h2>Cari Pengajuan</h2>
                        <p>ID pengajuan dan email dikirimkan ke email Anda setelah mendaftar.</p>
                    </div>
                </div>
                <div class="form-row-kai" style="align-items:flex-end;">
                    <div class="form-group-kai" style="flex:1;">
                        <label>ID Pengajuan <span class="required-star">*</span></label>
                        <input type="text" id="pengajuanInput" placeholder="Contoh: 12">
                    </div>
                    <div class="form-group-kai" style="flex:1;">
                        <label>Email Terdaftar <span class="required-star">*</span></label>
                        <input type="email" id="emailInput" placeholder="email@kampus.ac.id">
                    </div>
                    <button type="button" class="btn-kai-primary" id="btnLoadStatus" onclick="loadStatusFromInput()"
                        style="height:48px;">
                        Cek Status
                    </button>
                </div>
                <div id="alertBox" style="margin-top:12px;"></div>
            </div>

            <div id="statusShell" class="status-shell hidden">
                <div class="status-hero">
                    <div class="status-hero-main">
                        <p class="status-kicker">RINGKASAN PENGAJUAN</p>
                        <h2 id="statusTitle">Pengajuan #-</h2>
                        <p id="statusSubtitle">Memuat data pengajuan...</p>
                        <div class="status-badges">
                            <span class="status-badge" id="statusBadge">Menunggu data</span>
                        </div>
                    </div>
                    <div class="status-hero-meta">
                        <div class="meta-card">
                            <span class="meta-label">Unit Tujuan</span>
                            <strong id="metaUnit">-</strong>
                        </div>
                        <div class="meta-card">
                            <span class="meta-label">Periode Magang</span>
                            <strong id="metaPeriode">-</strong>
                        </div>
                        <div class="meta-card">
                            <span class="meta-label">Tahap Formulir</span>
                            <strong id="metaStep">-</strong>
                        </div>
                    </div>
                </div>

                <div id="perbaikanNotice" class="sync-notice hidden"></div>

                <div class="status-grid">
                    <section class="status-card">
                        <div class="status-card-head">
                            <h3>Ringkasan Status</h3>
                        </div>
                        <div class="status-summary">
                            <div class="summary-row">
                                <span>Status Akhir</span>
                                <strong id="finalStatus">-</strong>
                            </div>
                            <div class="summary-row">
                                <span>Catatan SDM</span>
                                <strong id="catatanSdm">-</strong>
                            </div>
                            <div class="summary-row">
                                <span>Catatan Unit</span>
                                <strong id="catatanUnit">-</strong>
                            </div>
                        </div>
                    </section>

                    <section class="status-card">
                        <div class="status-card-head">
                            <h3>Tahapan Pengajuan</h3>
                        </div>
                        <div class="progress-bar-wrap" style="margin:0;">
                            <div class="progress-step-list" id="stageStepper"></div>
                        </div>
                    </section>
                </div>

                <div class="status-grid" style="margin-top:22px;grid-template-columns:1fr;">
                    <section class="status-card">
                        <div class="status-card-head">
                            <h3>Dokumen Pengajuan</h3>
                        </div>
                        <div class="item-subtitle" style="margin-bottom:12px;">
                            Status berkas yang sudah Anda unggah pada saat pendaftaran.
                        </div>
                        <div id="documentList" class="document-list"></div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            .status-shell.hidden,
            .sync-notice.hidden {
                display: none;
            }

            .status-shell {
                display: grid;
                gap: 22px;
            }

            .status-hero {
                display: grid;
                grid-template-columns: minmax(0, 1.5fr) minmax(320px, 0.9fr);
                gap: 18px;
                padding: 28px;
                border-radius: 24px;
                background: linear-gradient(135deg, #003087 0%, #00539f 45%, #ff6b00 120%);
                color: #fff;
                box-shadow: 0 18px 48px rgba(0, 48, 135, 0.22);
            }

            .status-kicker {
                letter-spacing: 0.14em;
                font-size: 0.72rem;
                font-weight: 800;
                opacity: 0.85;
                margin-bottom: 10px;
            }

            .status-hero h2 {
                font-size: clamp(1.6rem, 3vw, 2.4rem);
                margin-bottom: 8px;
            }

            .status-badges {
                display: flex;
                gap: 10px;
                flex-wrap: wrap;
                margin-top: 16px;
            }

            .status-badge {
                display: inline-flex;
                align-items: center;
                gap: 6px;
                padding: 8px 12px;
                border-radius: 999px;
                background: rgba(255, 255, 255, 0.16);
                border: 1px solid rgba(255, 255, 255, 0.22);
                font-weight: 700;
                font-size: 0.84rem;
            }

            .status-hero-meta {
                display: grid;
                gap: 12px;
                align-content: start;
            }

            .meta-card {
                padding: 16px;
                border-radius: 16px;
                background: rgba(255, 255, 255, 0.12);
                border: 1px solid rgba(255, 255, 255, 0.14);
                backdrop-filter: blur(10px);
            }

            .meta-label {
                display: block;
                font-size: 0.78rem;
                text-transform: uppercase;
                letter-spacing: 0.08em;
                opacity: 0.8;
                margin-bottom: 6px;
            }

            .status-grid {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 22px;
            }

            .status-card {
                background: #fff;
                border-radius: 22px;
                padding: 22px;
                box-shadow: 0 10px 35px rgba(0, 30, 80, 0.08);
                border: 1px solid rgba(0, 48, 135, 0.08);
            }

            .status-card-head {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 18px;
            }

            .status-card-head h3 {
                font-size: 1.05rem;
                color: #0f172a;
            }

            .status-summary {
                display: grid;
                gap: 12px;
            }

            .summary-row {
                display: flex;
                justify-content: space-between;
                gap: 14px;
                padding: 14px 16px;
                border-radius: 14px;
                background: #f8fbff;
                border: 1px solid #e6eef8;
            }

            .sync-notice {
                padding: 14px 16px;
                border-radius: 14px;
                border: 1px solid #fde68a;
                background: #fffbeb;
                color: #92400e;
                font-weight: 600;
            }

            .document-list {
                display: grid;
                gap: 12px;
            }

            .document-item {
                padding: 14px 16px;
                border-radius: 14px;
                border: 1px solid #e5e7eb;
                background: #fafafa;
            }

            .item-top {
                display: flex;
                justify-content: space-between;
                gap: 10px;
                align-items: center;
                margin-bottom: 8px;
            }

            .item-title {
                font-weight: 800;
                color: #0f172a;
            }

            .item-subtitle {
                color: #64748b;
                font-size: 0.92rem;
                line-height: 1.6;
            }

            .mini-badge {
                display: inline-flex;
                align-items: center;
                padding: 4px 9px;
                border-radius: 999px;
                font-size: 0.74rem;
                font-weight: 800;
            }

            .mini-badge.green {
                background: #dcfce7;
                color: #166534;
            }

            .mini-badge.red {
                background: #fee2e2;
                color: #991b1b;
            }

            .mini-badge.yellow {
                background: #fef3c7;
                color: #92400e;
            }

            .mini-badge.blue {
                background: #dbeafe;
                color: #1d4ed8;
            }

            .mini-badge.gray {
                background: #e5e7eb;
                color: #374151;
            }

            .empty-state {
                padding: 18px;
                border-radius: 14px;
                background: #f8fafc;
                color: #64748b;
                text-align: center;
            }

            #stageStepper.progress-step-list::before {
                left: 10%;
                right: 10%;
            }

            @media (max-width: 900px) {

                .status-hero,
                .status-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    @endpush

    <script>
        const API_BASE = 'https://unpresiding-encephalic-dawn.ngrok-free.dev/api/v1';
        const API_HOST = API_BASE.replace(/\/api\/v1\/?$/, '');
        const FETCH_HEADERS = { headers: { 'ngrok-skip-browser-warning': 'true' } };

        // Status pengajuan sesuai enum backend: draft, menunggu_verifikasi, perlu_perbaikan, disposisi, diterima, ditolak
        const STATUS_META = {
            draft: { label: 'Draft', className: 'gray' },
            menunggu_verifikasi: { label: 'Menunggu Verifikasi SDM', className: 'yellow' },
            perlu_perbaikan: { label: 'Perlu Perbaikan', className: 'yellow' },
            disposisi: { label: 'Diteruskan ke Unit', className: 'blue' },
            diterima: { label: 'Diterima', className: 'green' },
            ditolak: { label: 'Ditolak', className: 'red' },
        };

        // Urutan tahapan untuk stepper visual (berdasarkan status saat ini, backend belum menyediakan riwayat/log per tahap)
        const STAGES = [
            { key: 'pendaftaran', label: 'Pendaftaran' },
            { key: 'verifikasi', label: 'Verifikasi SDM' },
            { key: 'disposisi', label: 'Disposisi Unit' },
            { key: 'keputusan', label: 'Keputusan Akhir' },
        ];

        const ICON_MAP = {
            'Surat Pengantar dari Kampus': '📩',
            'Proposal Magang': '📝',
            'Foto 3x4': '📷',
            'KTM (Kartu Tanda Mahasiswa)': '🪪',
            'Transkrip Nilai': '📊',
            'Dokumen Pendukung Pengajuan': '📁',
        };

        let unitsCache = null;
        let jenisBerkasCache = null;

        function showAlert(type, msg) {
            const colorMap = type === 'danger'
                ? ['#fee2e2', '#fca5a5', '#991b1b']
                : type === 'warning'
                    ? ['#fef3c7', '#fbbf24', '#92400e']
                    : ['#dcfce7', '#86efac', '#166534'];

            document.getElementById('alertBox').innerHTML = `
            <div style="padding:12px 16px;border-radius:12px;background:${colorMap[0]};border:1px solid ${colorMap[1]};color:${colorMap[2]};">
                ${msg}
            </div>`;
        }

        function getSavedPengajuanId() {
            return localStorage.getItem('kai_pengajuan_id') || '';
        }

        function getSavedEmail() {
            return JSON.parse(localStorage.getItem('kai_step1') || '{}').email || '';
        }

        function setText(id, value) {
            document.getElementById(id).textContent = (value === null || value === undefined || value === '') ? '-' : value;
        }

        function statusMeta(status) {
            return STATUS_META[status] || { label: status || 'Tidak diketahui', className: 'gray' };
        }

        function formatDate(value) {
            if (!value) return '-';
            const parsed = new Date(value);
            if (Number.isNaN(parsed.getTime())) return value;
            return new Intl.DateTimeFormat('id-ID', { dateStyle: 'medium' }).format(parsed);
        }

        function stageIndexFromStatus(status) {
            switch (status) {
                case 'draft': return 0;
                case 'menunggu_verifikasi':
                case 'perlu_perbaikan': return 1;
                case 'disposisi': return 2;
                case 'diterima':
                case 'ditolak': return 3;
                default: return 0;
            }
        }

        function renderStageStepper(status) {
            const currentIndex = stageIndexFromStatus(status);
            const isRejected = status === 'ditolak';
            const isRevision = status === 'perlu_perbaikan';

            const container = document.getElementById('stageStepper');
            container.innerHTML = STAGES.map((stage, index) => {
                let stateClass = '';
                let icon = String(index + 1);

                if (index < currentIndex) {
                    stateClass = 'completed';
                    icon = '✓';
                } else if (index === currentIndex) {
                    stateClass = isRejected ? 'active' : 'active';
                    if (isRejected && index === 3) icon = '✕';
                    else if (index === 3 && status === 'diterima') icon = '✓';
                    else if (isRevision) icon = '!';
                }

                return `
                <div class="progress-step-item ${stateClass}" style="text-decoration:none;">
                    <div class="progress-step-circle"><span>${icon}</span></div>
                    <span class="progress-step-label">${stage.label}</span>
                </div>`;
            }).join('');
        }

        async function fetchJson(url) {
            const res = await fetch(url, FETCH_HEADERS);
            if (!res.ok) {
                const err = new Error(`HTTP ${res.status}`);
                err.status = res.status;
                throw err;
            }
            return res.json();
        }

        async function getUnits() {
            if (!unitsCache) {
                unitsCache = await fetchJson(`${API_BASE}/units/`);
            }
            return unitsCache;
        }

        async function getJenisBerkas() {
            if (!jenisBerkasCache) {
                jenisBerkasCache = await fetchJson(`${API_BASE}/jenis-berkas`);
            }
            return jenisBerkasCache;
        }

        function buildFileUrl(filePath) {
            if (!filePath) return null;
            if (/^https?:\/\//i.test(filePath)) return filePath;
            return `${API_HOST}${filePath.startsWith('/') ? '' : '/'}${filePath}`;
        }

        function renderDocuments(jenisList, berkasList) {
            const container = document.getElementById('documentList');
            const berkasMap = {};
            berkasList.forEach(b => { berkasMap[b.jenis_berkas_id] = b; });

            if (!jenisList.length) {
                container.innerHTML = '<div class="empty-state">Belum ada jenis dokumen yang terdaftar.</div>';
                return;
            }

            container.innerHTML = jenisList.map(j => {
                const berkas = berkasMap[j.id];
                const uploaded = !!(berkas && berkas.file_path);
                const icon = ICON_MAP[j.nama_berkas] || '📄';
                const meta = uploaded ? { label: 'Sudah diunggah', className: 'green' } : { label: 'Belum diunggah', className: 'gray' };
                const fileUrl = uploaded ? buildFileUrl(berkas.file_path) : null;

                return `
                <div class="document-item">
                    <div class="item-top">
                        <div class="item-title">${icon} ${j.nama_berkas}${j.is_required ? ' *' : ''}</div>
                        <span class="mini-badge ${meta.className}">${meta.label}</span>
                    </div>
                    <div class="item-subtitle">${j.keterangan || ''}</div>
                    <div class="item-subtitle" style="margin-top:8px;">
                        ${fileUrl ? `<a href="${fileUrl}" target="_blank" rel="noopener">Lihat dokumen</a>` : 'Dokumen belum diunggah oleh pendaftar.'}
                    </div>
                </div>`;
            }).join('');
        }

        async function loadStatusFromInput() {
            const pengajuanId = document.getElementById('pengajuanInput').value.trim() || getSavedPengajuanId();
            const email = document.getElementById('emailInput').value.trim() || getSavedEmail();

            if (!pengajuanId || !email) {
                showAlert('warning', 'ID pengajuan dan email wajib diisi. Keduanya dikirimkan ke email Anda saat mendaftar.');
                return;
            }

            const btn = document.getElementById('btnLoadStatus');
            btn.disabled = true;
            btn.textContent = 'Memuat...';

            try {
                const status = await fetchJson(`${API_BASE}/pendaftaran/status/${encodeURIComponent(pengajuanId)}?email=${encodeURIComponent(email)}`);

                const [units, jenisBerkas, berkas] = await Promise.all([
                    getUnits().catch(() => []),
                    getJenisBerkas().catch(() => []),
                    fetchJson(`${API_BASE}/pengajuan/${encodeURIComponent(pengajuanId)}/berkas`).catch(() => []),
                ]);

                const unit = units.find(u => u.id === status.unit_id);
                const meta = statusMeta(status.status);

                document.getElementById('statusShell').classList.remove('hidden');
                setText('statusTitle', `Pengajuan #${status.pengajuan_id}`);
                setText('statusSubtitle', unit ? `Unit tujuan: ${unit.nama_unit}` : 'Data pengajuan berhasil dimuat.');
                setText('metaUnit', unit ? unit.nama_unit : `Unit #${status.unit_id ?? '-'}`);
                setText('metaPeriode', (status.tanggal_mulai || status.tanggal_selesai)
                    ? `${formatDate(status.tanggal_mulai)} - ${formatDate(status.tanggal_selesai)}`
                    : '-');
                setText('metaStep', status.step_terakhir ? `${status.step_terakhir} dari 5` : '-');

                document.getElementById('statusBadge').innerHTML = `<span class="mini-badge ${meta.className}">${meta.label}</span>`;
                setText('finalStatus', meta.label);
                setText('catatanSdm', status.catatan_sdm);
                setText('catatanUnit', status.catatan_unit);

                renderStageStepper(status.status);
                renderDocuments(jenisBerkas, berkas);

                const perbaikanNotice = document.getElementById('perbaikanNotice');
                if (status.status === 'perlu_perbaikan') {
                    perbaikanNotice.classList.remove('hidden');
                    perbaikanNotice.textContent = 'Pengajuan Anda perlu perbaikan. Silakan periksa catatan SDM di atas dan lengkapi/perbaiki data atau dokumen yang diminta.';
                } else {
                    perbaikanNotice.classList.add('hidden');
                }

                showAlert('success', 'Status berhasil dimuat.');
            } catch (error) {
                document.getElementById('statusShell').classList.add('hidden');
                if (error.status === 404 || error.status === 422) {
                    showAlert('danger', 'Pengajuan tidak ditemukan. Periksa kembali ID pengajuan dan email yang Anda masukkan.');
                } else {
                    showAlert('danger', 'Gagal memuat status pengajuan. Periksa koneksi ke server.');
                }
            } finally {
                btn.disabled = false;
                btn.textContent = 'Cek Status';
            }
        }

        window.addEventListener('load', () => {
            const savedId = getSavedPengajuanId();
            const savedEmail = getSavedEmail();
            if (savedId) document.getElementById('pengajuanInput').value = savedId;
            if (savedEmail) document.getElementById('emailInput').value = savedEmail;
            if (savedId && savedEmail) loadStatusFromInput();
        });
    </script>
@endsection