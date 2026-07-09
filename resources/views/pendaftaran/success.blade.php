@extends('layouts.app')

@section('title', 'Pendaftaran Berhasil - E-Magang KAI')

@section('content')
<div class="container section">
    <div class="registration-container" style="max-width:600px;margin:0 auto;text-align:center;">
        <div class="form-card-kai" style="padding:3rem 2rem;">
            <div style="font-size:5rem;margin-bottom:1rem;">🎉</div>
            <h1 style="color:#003f7f;margin-bottom:0.5rem;">Pengajuan Berhasil Dikirim!</h1>
            <p style="color:#666;margin-bottom:2rem;">Terima kasih telah mendaftar program magang di PT Kereta Api Indonesia Divre III Palembang.</p>

            <div style="background:#f0f9ff;border:2px solid #003f7f;border-radius:12px;padding:1.5rem;margin-bottom:2rem;text-align:left;">
                <h4 style="color:#003f7f;margin-bottom:1rem;">📋 Simpan Informasi Ini</h4>
                <table style="width:100%;border-collapse:collapse;">
                    <tr>
                        <td style="padding:6px 0;color:#555;font-size:0.9rem;">ID Pengajuan</td>
                        <td style="padding:6px 0;font-weight:bold;color:#003f7f;font-size:1.1rem;" id="successId">—</td>
                    </tr>
                    <tr>
                        <td style="padding:6px 0;color:#555;font-size:0.9rem;">Email Terdaftar</td>
                        <td style="padding:6px 0;font-weight:bold;" id="successEmail">—</td>
                    </tr>
                </table>
                <p style="color:#888;font-size:0.8rem;margin-top:1rem;">
                    ⚠️ Catat ID Pengajuan dan email Anda untuk memantau status pendaftaran.
                </p>
            </div>

            <div style="background:#f8f9fa;border-radius:8px;padding:1rem;text-align:left;margin-bottom:2rem;">
                <h4 style="margin-bottom:0.75rem;font-size:0.95rem;">Langkah Selanjutnya:</h4>
                <ol style="margin-left:1.25rem;color:#555;font-size:0.85rem;line-height:1.8;">
                    <li>Tim SDM akan memverifikasi kelengkapan berkas Anda</li>
                    <li>Jika berkas lengkap, pengajuan akan diteruskan ke unit tujuan</li>
                    <li>Unit akan melakukan review profil dan kesesuaian jurusan</li>
                    <li>Anda akan mendapat notifikasi via email mengenai hasilnya</li>
                </ol>
            </div>

            <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
                <a href="/" class="btn-kai-secondary" style="text-decoration:none;display:inline-flex;align-items:center;gap:8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                    Kembali ke Beranda
                </a>
                <a href="/cek-status" class="btn-kai-primary" style="text-decoration:none;display:inline-flex;align-items:center;gap:8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    Cek Status Pendaftaran
                </a>
            </div>
        </div>
    </div>
</div>

<script>
window.onload = () => {
    const id = localStorage.getItem('kai_status_ref') || localStorage.getItem('kai_final_id');
    const email = localStorage.getItem('kai_status_email') || localStorage.getItem('kai_final_email');
    if (id) document.getElementById('successId').textContent = '#' + id;
    if (email) document.getElementById('successEmail').textContent = email;
};
</script>
@endsection
