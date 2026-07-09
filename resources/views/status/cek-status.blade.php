@extends('layouts.app')

@section('title', 'Monitoring Status Pengajuan - PT KAI')

@section('content')
<div class="container section">
    <div class="registration-container" style="max-width:1100px;">
        <section class="reg-header" style="margin-bottom:32px;">
            <p class="hero-eyebrow" style="margin:0 auto 16px;">MONITORING STATUS</p>
            <h1>Monitoring Status Pengajuan</h1>
            <p>Lihat status terbaru, riwayat review, dan sinkronisasi notifikasi pengajuan Anda dalam satu halaman.</p>
        </section>

        <div class="form-card-kai" style="margin-bottom:24px;">
            <div class="form-card-header">
                <span class="form-card-icon">📌</span>
                <div>
                    <h2>Cari Pengajuan</h2>
                    <p>Gunakan ID pengajuan yang Anda simpan setelah submit.</p>
                </div>
            </div>
            <div class="form-row-kai" style="align-items:flex-end;">
                <div class="form-group-kai" style="flex:1;">
                    <label>ID Pengajuan</label>
                    <input type="text" id="pengajuanInput" placeholder="Contoh: 12345">
                </div>
                <div class="form-group-kai" style="flex:1;">
                    <label>Email Terdaftar <small style="font-weight:normal;color:#888;">(Opsional)</small></label>
                    <input type="email" id="emailInput" placeholder="email@kampus.ac.id">
                </div>
                <button type="button" class="btn-kai-primary" id="btnLoadStatus" onclick="loadStatusFromInput()" style="height:48px;">
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
                        <span class="status-badge neutral" id="statusSyncBadge">Sinkronisasi</span>
                    </div>
                </div>
                <div class="status-hero-meta">
                    <div class="meta-card">
                        <span class="meta-label">Unit</span>
                        <strong id="metaUnit">-</strong>
                    </div>
                    <div class="meta-card">
                        <span class="meta-label">Email</span>
                        <strong id="metaEmail">-</strong>
                    </div>
                    <div class="meta-card">
                        <span class="meta-label">Update Terakhir</span>
                        <strong id="metaUpdated">-</strong>
                    </div>
                </div>
            </div>

            <div id="syncNotice" class="sync-notice hidden"></div>

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
                            <span>SDM</span>
                            <strong id="sdmStatus">-</strong>
                        </div>
                        <div class="summary-row">
                            <span>Unit</span>
                            <strong id="unitStatus">-</strong>
                        </div>
                        <div class="summary-row">
                            <span>Dokumen</span>
                            <strong id="docStatus">-</strong>
                        </div>
                    </div>
                </section>

                <section class="status-card">
                    <div class="status-card-head">
                        <h3>Notifikasi Terbaru</h3>
                    </div>
                    <div id="notificationList" class="notification-list">
                        <div class="empty-state">Belum ada notifikasi yang dapat ditampilkan.</div>
                    </div>
                </section>
            </div>

            <div class="status-grid" style="margin-top:22px;">
                <section class="status-card">
                    <div class="status-card-head">
                        <h3>Riwayat Review</h3>
                    </div>
                    <div id="reviewTimeline" class="timeline"></div>
                </section>

                <section class="status-card">
                    <div class="status-card-head">
                        <h3>Lihat Dokumen Pengajuan</h3>
                    </div>
                    <div class="item-subtitle" style="margin-bottom:12px;">
                        Dokumen yang sudah diajukan dan terhubung dengan persetujuan SDM.
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
        background: rgba(255,255,255,0.16);
        border: 1px solid rgba(255,255,255,0.22);
        font-weight: 700;
        font-size: 0.84rem;
    }

    .status-badge.neutral {
        background: rgba(255,255,255,0.08);
    }

    .status-hero-meta {
        display: grid;
        gap: 12px;
        align-content: start;
    }

    .meta-card {
        padding: 16px;
        border-radius: 16px;
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255,255,255,0.14);
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
        border: 1px solid #bfdbfe;
        background: #eff6ff;
        color: #1d4ed8;
        font-weight: 600;
    }

    .notification-list,
    .document-list,
    .timeline {
        display: grid;
        gap: 12px;
    }

    .notification-item,
    .timeline-item,
    .document-item {
        padding: 14px 16px;
        border-radius: 14px;
        border: 1px solid #e5e7eb;
        background: #fafafa;
    }

    .timeline-item {
        position: relative;
        padding-left: 18px;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: 8px;
        top: 18px;
        width: 8px;
        height: 8px;
        border-radius: 999px;
        background: #003087;
        box-shadow: 0 0 0 4px rgba(0, 48, 135, 0.12);
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

    .mini-badge.green { background: #dcfce7; color: #166534; }
    .mini-badge.red { background: #fee2e2; color: #991b1b; }
    .mini-badge.yellow { background: #fef3c7; color: #92400e; }
    .mini-badge.blue { background: #dbeafe; color: #1d4ed8; }
    .mini-badge.gray { background: #e5e7eb; color: #374151; }

    .empty-state {
        padding: 18px;
        border-radius: 14px;
        background: #f8fafc;
        color: #64748b;
        text-align: center;
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

const STATUS_META = {
    approved: { label: 'Diterima', className: 'green' },
    disetujui: { label: 'Diterima', className: 'green' },
    accepted: { label: 'Diterima', className: 'green' },
    rejected: { label: 'Ditolak', className: 'red' },
    ditolak: { label: 'Ditolak', className: 'red' },
    pending: { label: 'Menunggu', className: 'yellow' },
    menunggu: { label: 'Menunggu', className: 'yellow' },
    review: { label: 'Review', className: 'blue' },
    in_review: { label: 'Review', className: 'blue' },
    processed: { label: 'Diproses', className: 'blue' },
    completed: { label: 'Selesai', className: 'green' },
    selesai: { label: 'Selesai', className: 'green' },
    uploaded: { label: 'Sudah terunggah', className: 'green' },
    terunggah: { label: 'Sudah terunggah', className: 'green' },
    unknown: { label: 'Tidak diketahui', className: 'gray' },
};

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
    return localStorage.getItem('kai_status_ref')
        || localStorage.getItem('kai_pengajuan_id')
        || localStorage.getItem('kai_final_id')
        || '';
}

function getSavedEmail() {
    return localStorage.getItem('kai_status_email')
        || localStorage.getItem('kai_final_email')
        || JSON.parse(localStorage.getItem('kai_step1') || '{}').email
        || '';
}

function normalizeStatus(raw) {
    const value = String(raw || '').trim().toLowerCase();
    if (!value) return { key: 'unknown', label: STATUS_META.unknown.label, className: STATUS_META.unknown.className };

    for (const key of Object.keys(STATUS_META)) {
        if (value.includes(key)) {
            return { key, label: STATUS_META[key].label, className: STATUS_META[key].className };
        }
    }

    return { key: 'unknown', label: raw, className: STATUS_META.unknown.className };
}

function toTimestamp(value) {
    if (!value) return 0;
    const parsed = new Date(value);
    return Number.isNaN(parsed.getTime()) ? 0 : parsed.getTime();
}

function flattenPayload(payload) {
    if (!payload) return {};
    if (Array.isArray(payload)) return { data: payload };
    return payload.data && typeof payload.data === 'object' && !Array.isArray(payload.data)
        ? { ...payload, ...payload.data }
        : payload;
}

function extractHistory(payload) {
    const flat = flattenPayload(payload);
    const candidates = [
        flat.riwayat_review,
        flat.review_history,
        flat.history_review,
        flat.history,
        flat.reviews,
        flat.logs,
        flat.data?.riwayat_review,
        flat.data?.history,
        flat.data?.reviews,
    ];
    for (const candidate of candidates) {
        if (Array.isArray(candidate)) return candidate;
    }
    if (Array.isArray(payload)) return payload;
    return [];
}

function extractDocuments(payload) {
    const flat = flattenPayload(payload);
    const candidates = [
        flat.berkas,
        flat.documents,
        flat.dokumen,
        flat.files,
        flat.data?.berkas,
        flat.data?.documents,
        flat.data?.dokumen,
    ];
    for (const candidate of candidates) {
        if (Array.isArray(candidate)) return candidate;
    }
    return [];
}

function extractSummary(payload) {
    const flat = flattenPayload(payload);
    const statusCandidates = [
        flat.status_dashboard,
        flat.dashboard_status,
        flat.status_akhir,
        flat.status_pengajuan,
        flat.final_status,
        flat.status,
        flat.state,
        flat.keputusan_sdm,
        flat.sdm_final_status,
        flat.review_sdm?.status,
        flat.review_unit?.status,
    ].filter(Boolean);

    return {
        id: flat.id || flat.pengajuan_id || flat.no_pengajuan || flat.reference_id || '',
        nama: flat.nama || flat.nama_lengkap || flat.full_name || flat.mahasiswa?.nama || '',
        email: flat.email || flat.mahasiswa?.email || '',
        unit: flat.unit_nama || flat.nama_unit || flat.unit?.nama_unit || flat.unit?.nama || '',
        status: statusCandidates[0] || '',
        sdm: flat.status_sdm || flat.review_sdm?.status || '',
        unitStatus: flat.status_unit || flat.review_unit?.status || '',
        updatedAt: flat.updated_at || flat.tanggal_update || flat.last_update || flat.modified_at || '',
        note: flat.catatan || flat.notes || flat.keterangan || '',
    };
}

function pickLatestHistory(history) {
    const normalized = history
        .map(item => {
            const timestamp = toTimestamp(item.created_at || item.updated_at || item.tanggal || item.waktu || item.date || item.timestamp);
            return { ...item, __timestamp: timestamp };
        })
        .sort((a, b) => a.__timestamp - b.__timestamp);

    return normalized[normalized.length - 1] || null;
}

function deriveFinalStatus(summary, history) {
    const summaryStatus = normalizeStatus(summary.status);
    if (summaryStatus.key !== 'unknown') {
        return summaryStatus;
    }

    const latest = pickLatestHistory(history);
    if (!latest) return summaryStatus;

    const latestStatus = normalizeStatus(
        latest.status || latest.hasil || latest.keputusan || latest.result || latest.state || latest.status_review
    );

    return latestStatus.key === 'unknown' ? summaryStatus : latestStatus;
}

function formatTimestamp(value) {
    const ts = toTimestamp(value);
    if (!ts) return '-';
    return new Intl.DateTimeFormat('id-ID', {
        dateStyle: 'medium',
        timeStyle: 'short',
    }).format(new Date(ts));
}

function renderBadge(targetId, status) {
    const meta = STATUS_META[status.key] || STATUS_META.unknown;
    document.getElementById(targetId).innerHTML = `<span class="mini-badge ${meta.className}">${status.label || meta.label}</span>`;
}

function setText(id, value) {
    document.getElementById(id).textContent = value || '-';
}

function renderSyncNotice(summaryStatus, finalStatus, history) {
    const syncNotice = document.getElementById('syncNotice');
    const lastReview = pickLatestHistory(history);
    if (!lastReview) {
        syncNotice.classList.add('hidden');
        return;
    }

    if (summaryStatus.key !== 'unknown' && summaryStatus.key !== finalStatus.key) {
        syncNotice.classList.remove('hidden');
        syncNotice.textContent = 'Status pada sistem disesuaikan dengan riwayat review terbaru supaya tidak menampilkan hasil yang sudah usang.';
        return;
    }

    syncNotice.classList.add('hidden');
}

function renderSyncBadge(summaryStatus, finalStatus) {
    const badge = document.getElementById('statusSyncBadge');
    const synced = summaryStatus.key === 'unknown' || summaryStatus.key === finalStatus.key;
    badge.className = `status-badge ${synced ? 'neutral' : ''}`;
    badge.textContent = synced ? 'Status sinkron' : 'Perlu sinkronisasi';
}

function renderNotifications(history, summary, finalStatus) {
    const container = document.getElementById('notificationList');
    const items = [];
    const latest = pickLatestHistory(history);

    if (latest) {
        items.push({
            title: `Update ${latest.stage || latest.tahap || 'review'}`,
            body: latest.note || latest.catatan || `Status terbaru: ${finalStatus.label}`,
            time: latest.created_at || latest.updated_at || latest.tanggal || latest.timestamp || '',
            status: normalizeStatus(latest.status || latest.hasil || latest.keputusan || latest.state),
        });
    }

    if (summary.note) {
        items.push({
            title: 'Catatan Pengajuan',
            body: summary.note,
            time: summary.updatedAt,
            status: normalizeStatus(summary.status),
        });
    }

    if (!items.length) {
        container.innerHTML = '<div class="empty-state">Belum ada notifikasi yang dapat ditampilkan.</div>';
        return;
    }

    container.innerHTML = items.map(item => {
        const meta = STATUS_META[item.status.key] || STATUS_META.unknown;
        return `
            <div class="notification-item">
                <div class="item-top">
                    <div class="item-title">${item.title}</div>
                    <span class="mini-badge ${meta.className}">${item.status.label}</span>
                </div>
                <div class="item-subtitle">${item.body || '-'}</div>
                <div class="item-subtitle" style="margin-top:8px;font-size:0.82rem;">${formatTimestamp(item.time)}</div>
            </div>`;
    }).join('');
}

function renderTimeline(history) {
    const container = document.getElementById('reviewTimeline');
    if (!history.length) {
        container.innerHTML = '<div class="empty-state">Riwayat review belum tersedia.</div>';
        return;
    }

    const sorted = [...history].sort((a, b) => toTimestamp(a.created_at || a.updated_at || a.tanggal || a.timestamp) - toTimestamp(b.created_at || b.updated_at || b.tanggal || b.timestamp));

    container.innerHTML = sorted.map(item => {
        const status = normalizeStatus(item.status || item.hasil || item.keputusan || item.result || item.state || item.status_review);
        const meta = STATUS_META[status.key] || STATUS_META.unknown;
        const stage = item.stage || item.tahap || item.peran || 'Review';
        const note = item.note || item.catatan || item.keterangan || item.description || '-';
        const actor = item.reviewer_name || item.user_name || item.nama_reviewer || item.reviewer || '';
        const time = formatTimestamp(item.created_at || item.updated_at || item.tanggal || item.timestamp);

        return `
            <div class="timeline-item">
                <div class="item-top">
                    <div class="item-title">${stage}${actor ? ` - ${actor}` : ''}</div>
                    <span class="mini-badge ${meta.className}">${status.label}</span>
                </div>
                <div class="item-subtitle">${note}</div>
                <div class="item-subtitle" style="margin-top:8px;font-size:0.82rem;">${time}</div>
            </div>`;
    }).join('');
}

function renderDocuments(documents, summary, finalStatus) {
    const container = document.getElementById('documentList');
    if (!documents.length) {
        container.innerHTML = '<div class="empty-state">Dokumen belum tersedia dari server.</div>';
        return;
    }

    const sdmApproved = normalizeStatus(summary.sdm).key === 'approved'
        || normalizeStatus(summary.sdm).key === 'disetujui'
        || normalizeStatus(summary.sdm).key === 'accepted'
        || finalStatus.key === 'approved'
        || finalStatus.key === 'disetujui'
        || finalStatus.key === 'accepted';

    container.innerHTML = documents.map(doc => {
        const status = normalizeStatus(doc.status || doc.state || (doc.file_path ? 'uploaded' : 'pending'));
        const meta = STATUS_META[status.key] || (doc.file_path ? STATUS_META.approved : STATUS_META.pending);
        const label = doc.nama_berkas || doc.name || doc.document_name || 'Dokumen';
        const fileName = doc.file_name || doc.original_name || doc.filename || '';
        const filePath = doc.file_path || doc.path || doc.url || '';
        const displayStatus = status.key === 'unknown' && filePath ? { label: 'Sudah terunggah', className: 'green' } : status;
        const approvedText = sdmApproved ? 'Sudah disetujui SDM' : 'Menunggu persetujuan SDM';

        return `
            <div class="document-item">
                <div class="item-top">
                    <div class="item-title">${label}</div>
                    <span class="mini-badge ${(STATUS_META[displayStatus.key] || meta).className}">${sdmApproved ? approvedText : displayStatus.label}</span>
                </div>
                <div class="item-subtitle">${fileName || 'Belum ada file terhubung'}</div>
                <div class="item-subtitle" style="margin-top:8px;">
                    ${filePath ? `<a href="${filePath}" target="_blank" rel="noopener">Lihat dokumen</a>` : 'Dokumen belum dirujuk ke file yang tersimpan'}
                </div>
            </div>`;
    }).join('');
}

async function fetchJson(url) {
    const res = await fetch(url, { headers: { 'ngrok-skip-browser-warning': 'true' } });
    if (!res.ok) {
        throw new Error(`HTTP ${res.status}`);
    }
    return res.json();
}

async function loadStatusData(pengajuanId) {
    const endpoints = [
        `${API_BASE}/pengajuan/${pengajuanId}`,
        `${API_BASE}/pengajuan/${pengajuanId}/status`,
        `${API_BASE}/pengajuan/${pengajuanId}/riwayat-review`,
        `${API_BASE}/pengajuan/${pengajuanId}/review-history`,
    ];

    let payload = null;
    let lastError = null;

    for (const endpoint of endpoints) {
        try {
            payload = await fetchJson(endpoint);
            if (payload) break;
        } catch (err) {
            lastError = err;
        }
    }

    if (!payload) {
        throw lastError || new Error('Data pengajuan tidak ditemukan.');
    }

    return payload;
}

async function loadStatusFromInput() {
    const pengajuanId = document.getElementById('pengajuanInput').value.trim() || getSavedPengajuanId();
    const email = document.getElementById('emailInput').value.trim() || getSavedEmail();

    if (!pengajuanId) {
        showAlert('warning', 'Masukkan ID pengajuan terlebih dahulu. Jika baru selesai submit, gunakan ID yang tersimpan di halaman sukses.');
        return;
    }

    const btn = document.getElementById('btnLoadStatus');
    btn.disabled = true;
    btn.textContent = 'Memuat...';

    try {
        const payload = await loadStatusData(pengajuanId);
        const summary = extractSummary(payload);
        const history = extractHistory(payload);
        const documents = extractDocuments(payload);
        const finalStatus = deriveFinalStatus(summary, history);
        const sdmStatus = normalizeStatus(summary.sdm || (history.find(item => String(item.stage || item.tahap || '').toLowerCase().includes('sdm')) || {}).status);
        const unitStatus = normalizeStatus(summary.unitStatus || (history.find(item => String(item.stage || item.tahap || '').toLowerCase().includes('unit')) || {}).status);
        const docStatus = documents.some(doc => doc.file_path || doc.path || doc.url)
            ? normalizeStatus('approved')
            : normalizeStatus('pending');

        document.getElementById('statusShell').classList.remove('hidden');
        setText('statusTitle', `Pengajuan #${summary.id || pengajuanId}`);
        setText('statusSubtitle', summary.nama
            ? `${summary.nama}${summary.unit ? ` - ${summary.unit}` : ''}`
            : `Data pengajuan berhasil dimuat untuk ID ${pengajuanId}`);
        setText('metaUnit', summary.unit || '-');
        setText('metaEmail', summary.email || email || '-');
        setText('metaUpdated', formatTimestamp(summary.updatedAt));

        renderBadge('statusBadge', finalStatus);
        renderSyncBadge(normalizeStatus(summary.status), finalStatus);

        const finalMeta = STATUS_META[finalStatus.key] || STATUS_META.unknown;
        setText('finalStatus', finalMeta.label);
        setText('sdmStatus', sdmStatus.label);
        setText('unitStatus', unitStatus.label);
        setText('docStatus', docStatus.label);

        renderSyncNotice(normalizeStatus(summary.status), finalStatus, history);
        renderNotifications(history, summary, finalStatus);
        renderTimeline(history);
        renderDocuments(documents, summary, finalStatus);

        if (normalizeStatus(summary.status).key !== 'unknown' && normalizeStatus(summary.status).key !== finalStatus.key) {
            showAlert('warning', 'Riwayat terbaru berbeda dari status final yang lama. Tampilan mengikuti update terakhir supaya status tidak tertukar.');
        } else {
            showAlert('success', 'Status berhasil dimuat dan sudah disinkronkan dengan riwayat terbaru.');
        }
    } catch (error) {
        document.getElementById('statusShell').classList.add('hidden');
        showAlert('danger', 'Gagal memuat status pengajuan. Periksa ID pengajuan atau koneksi ke server.');
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
    if (savedId) loadStatusFromInput();
});
</script>
@endsection
