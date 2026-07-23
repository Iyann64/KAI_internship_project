<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran Magang</title>
    <style>
        body { margin: 0; padding: 0; background: #f4f6f9; font-family: Arial, sans-serif; color: #0f172a; }
        .wrap { max-width: 640px; margin: 0 auto; padding: 32px 16px; }
        .card { background: #ffffff; border-radius: 18px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08); }
        .header { background: linear-gradient(135deg, #00529b, #0b67ba); color: #fff; padding: 28px 32px; }
        .header h1 { margin: 0; font-size: 22px; line-height: 1.2; }
        .header p { margin: 8px 0 0; opacity: 0.9; font-size: 14px; }
        .body { padding: 28px 32px 16px; }
        .badge { display: inline-block; padding: 8px 14px; border-radius: 999px; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; background: #dcfce7; color: #15803d; }
        .info { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 18px; margin-top: 18px; }
        .info p { margin: 0 0 8px; font-size: 14px; line-height: 1.5; }
        .info p:last-child { margin-bottom: 0; }
        .footer { padding: 0 32px 28px; color: #64748b; font-size: 12px; line-height: 1.5; }
        .btn { display: inline-block; margin-top: 18px; background: linear-gradient(135deg, #f47920, #e0650d); color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 12px; font-weight: 700; font-size: 14px; }
        .muted { color: #64748b; }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="card">
            <div class="header">
                <h1>Konfirmasi pendaftaran Anda sudah diterima</h1>
                <p>Data pendaftaran magang PT KAI berhasil masuk ke sistem.</p>
            </div>
            <div class="body">
                <p>Halo <strong>{{ $nama }}</strong>,</p>
                <p>Terima kasih telah mengirimkan pendaftaran magang. Kami sudah menerima data Anda dan akan memprosesnya sesuai tahapan seleksi.</p>

                <span class="badge">Terkirim</span>

                <div class="info">
                    @if(!empty($pengajuanId))
                        <p><strong>ID Pengajuan:</strong> {{ $pengajuanId }}</p>
                    @endif
                    <p><strong>Email:</strong> {{ $email }}</p>
                    @if(!empty($unit))
                        <p><strong>Unit Pilihan:</strong> {{ $unit }}</p>
                    @endif
                    <p class="muted">Jika ada perubahan status, Anda akan menerima email lanjutan dari sistem.</p>
                </div>

                <a href="{{ url('/cek-status') }}" class="btn">Cek Status Pendaftaran</a>
            </div>
            <div class="footer">
                Email ini dikirim otomatis oleh sistem. Mohon jangan membalas email ini.
            </div>
        </div>
    </div>
</body>
</html>
