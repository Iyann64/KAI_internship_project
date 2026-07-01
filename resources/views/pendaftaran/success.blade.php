@extends('layouts.app')

@section('title', 'Pendaftaran Berhasil - E-Magang KAI')

@section('content')
<div class="container section">
    <div class="registration-container" style="max-width:800px;margin:0 auto;">
        
        {{-- Success Badge --}}
        <div style="text-align:center;margin-bottom:24px;">
            <div style="display:inline-flex;align-items:center;gap:8px;padding:8px 20px;background:linear-gradient(135deg, #d1fae5, #a7f3d0);border:1.5px solid #10B981;border-radius:100px;color:#065F46;font-size:13px;font-weight:700;letter-spacing:0.5px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                Berhasil
            </div>
        </div>

        {{-- Header Section --}}
        <div class="form-card-kai" style="padding:48px 40px;text-align:center;margin-bottom:24px;">
            <div style="display:flex;justify-content:center;margin-bottom:24px;">
                <div style="position:relative;width:100px;height:100px;">
                    <div style="position:absolute;inset:0;background:linear-gradient(135deg, #10b981, #34d399);border-radius:50%;box-shadow:0 8px 24px rgba(16,185,129,0.3);"></div>
                    <div style="position:absolute;inset:8px;background:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                </div>
            </div>
            <h1 style="color:var(--kai-navy);font-size:clamp(28px,4vw,36px);font-weight:900;margin-bottom:16px;line-height:1.2;">Pengajuan Berhasil Dikirim!</h1>
            <p style="color:var(--kai-muted);font-size:15px;max-width:600px;margin:0 auto;line-height:1.7;">
                Terima kasih telah mendaftar program magang di<br>
                <strong>PT Kereta Api Indonesia (Persero) Divre III Palembang.</strong><br>
                Tim kami akan segera memverifikasi data dan dokumen Anda.
            </p>
        </div>

        {{-- Information Card --}}
        <div class="form-card-kai" style="padding:24px 32px;margin-bottom:24px;">
            <h4 style="color:var(--kai-navy);font-size:14px;font-weight:800;margin-bottom:20px;display:flex;align-items:center;gap:10px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                Simpan Informasi Ini
            </h4>
            <div style="display:grid;grid-template-columns:auto 1fr;gap:16px 24px;align-items:center;">
                <div style="color:var(--kai-muted);font-size:13px;font-weight:600;">ID Pengajuan</div>
                <div style="font-size:18px;font-weight:900;color:var(--kai-navy);" id="successId">#—</div>
                
                <div style="color:var(--kai-muted);font-size:13px;font-weight:600;">Email Terdaftar</div>
                <div style="font-weight:700;color:var(--kai-text);" id="successEmail">—</div>
            </div>
            <p style="color:#9CA3AF;font-size:12px;margin-top:16px;padding-top:16px;border-top:1px solid rgba(0,48,135,0.06);display:flex;align-items:flex-start;gap:8px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px;"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                <span><strong>Catat ID Pengajuan dan email Anda</strong> untuk memantau status pendaftaran.</span>
            </p>
        </div>

        {{-- Next Steps --}}
        <div class="form-card-kai" style="padding:24px 32px;margin-bottom:24px;">
            <h4 style="color:var(--kai-navy);font-size:14px;font-weight:800;margin-bottom:24px;display:flex;align-items:center;gap:10px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
                Langkah Selanjutnya
            </h4>
            <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;">
                <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:12px;">
                    <div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg, #d1fae5, #a7f3d0);display:flex;align-items:center;justify-content:center;font-size:20px;color:#065F46;font-weight:900;border:2px solid #10B981;">1</div>
                    <p style="font-size:12px;color:var(--kai-text);line-height:1.6;margin:0;">Tim SDM akan memverifikasi kelengkapan berkas Anda</p>
                </div>
                <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:12px;">
                    <div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg, #dbeafe, #bfdbfe);display:flex;align-items:center;justify-content:center;font-size:20px;color:#1E40AF;font-weight:900;border:2px solid #3B82F6;">2</div>
                    <p style="font-size:12px;color:var(--kai-text);line-height:1.6;margin:0;">Jika berkas lengkap, pengajuan akan diteruskan ke unit tujuan</p>
                </div>
                <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:12px;">
                    <div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg, #fef3c7, #fde68a);display:flex;align-items:center;justify-content:center;font-size:20px;color:#92400E;font-weight:900;border:2px solid #F59E0B;">3</div>
                    <p style="font-size:12px;color:var(--kai-text);line-height:1.6;margin:0;">Unit akan melakukan review profil dan kesesuaian jurusan</p>
                </div>
                <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:12px;">
                    <div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg, #fce7f3, #fbcfe8);display:flex;align-items:center;justify-content:center;font-size:20px;color:#9D174D;font-weight:900;border:2px solid #EC4899;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    </div>
                    <p style="font-size:12px;color:var(--kai-text);line-height:1.6;margin:0;">Anda akan mendapat notifikasi via email mengenai hasilnya</p>
                </div>
            </div>
        </div>

        {{-- Action Buttons --}}
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
            <a href="/" class="btn-kai-secondary" style="text-decoration:none;display:inline-flex;align-items:center;gap:10px;padding:14px 32px;font-size:15px;font-weight:700;background:transparent;color:var(--kai-navy);border:2px solid rgba(0,48,135,0.12);border-radius:12px;cursor:pointer;transition:all 0.2s;font-family:inherit;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                Kembali ke Beranda
            </a>
            <a href="/cek-status" class="btn-kai-primary" style="text-decoration:none;display:inline-flex;align-items:center;gap:10px;padding:14px 32px;font-size:15px;font-weight:700;background:linear-gradient(135deg, var(--kai-orange), #FF8C38);color:#fff;border:none;border-radius:12px;cursor:pointer;box-shadow:0 4px 16px rgba(255,107,0,0.3);transition:all 0.3s;font-family:inherit;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                Cek Status Pendaftaran
            </a>
        </div>
    </div>
</div>

<script>
window.onload = () => {
    const id = localStorage.getItem('kai_final_id');
    const email = localStorage.getItem('kai_final_email');
    if (id) {
        const idEl = document.getElementById('successId');
        idEl.textContent = '#' + id;
    }
    if (email) {
        const emailEl = document.getElementById('successEmail');
        emailEl.textContent = email;
    }

    // Bersihkan localStorage final
    localStorage.removeItem('kai_final_id');
    localStorage.removeItem('kai_final_email');
};
</script>
@endsection
