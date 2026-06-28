@extends('layouts.app')

@section('title', 'Pendaftaran Berhasil')

@section('styles')
<style>
    .success-container {
        max-width: 700px;
        margin: 0 auto;
        text-align: center;
    }

    .success-card {
        background: white;
        border-radius: 10px;
        padding: 3rem;
        box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
    }

    .success-icon {
        font-size: 5rem;
        margin-bottom: 1rem;
        animation: bounce 0.6s ease-in-out;
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    .success-card h1 {
        color: #4caf50;
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }

    .success-card .subtitle {
        color: #666;
        font-size: 1.1rem;
        margin-bottom: 2rem;
    }

    .reference-number {
        background: #f0f0f0;
        padding: 1.5rem;
        border-radius: 8px;
        margin-bottom: 2rem;
    }

    .reference-number label {
        display: block;
        color: #666;
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
    }

    .reference-number .number {
        font-size: 1.5rem;
        font-weight: bold;
        color: #003f7f;
        font-family: monospace;
    }

    .next-steps {
        background: #e8f5e9;
        border: 2px solid #4caf50;
        border-radius: 8px;
        padding: 2rem;
        margin-bottom: 2rem;
    }

    .next-steps h2 {
        color: #2e7d32;
        margin-bottom: 1rem;
    }

    .steps-list {
        list-style: none;
        text-align: left;
    }

    .steps-list li {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1rem;
        color: #555;
        line-height: 1.5;
    }

    .steps-list li:before {
        content: "";
        color: #4caf50;
        font-weight: bold;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .steps-list li:last-child {
        margin-bottom: 0;
    }

    .email-notification {
        background: #fff3e0;
        border-left: 4px solid #ff9800;
        padding: 1.5rem;
        border-radius: 8px;
        margin-bottom: 2rem;
        text-align: left;
    }

    .email-notification h3 {
        color: #ff9800;
        margin-bottom: 0.5rem;
    }

    .email-notification p {
        color: #555;
        margin: 0;
        font-size: 0.95rem;
    }

    .contact-info {
        background: #e3f2fd;
        border-left: 4px solid #003f7f;
        padding: 1.5rem;
        border-radius: 8px;
        margin-bottom: 2rem;
        text-align: left;
    }

    .contact-info h3 {
        color: #003f7f;
        margin-bottom: 0.5rem;
    }

    .contact-info p {
        color: #555;
        margin: 0.5rem 0;
        font-size: 0.9rem;
    }

    .action-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }

    .btn-action {
        flex: 1;
        padding: 1rem;
        border-radius: 25px;
        border: none;
        cursor: pointer;
        font-size: 1rem;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s;
    }

    .btn-primary-action {
        background: #003f7f;
        color: white;
    }

    .btn-primary-action:hover {
        background: #0052a3;
    }

    .btn-secondary-action {
        background: white;
        color: #003f7f;
        border: 2px solid #003f7f;
    }

    .btn-secondary-action:hover {
        background: #f5f5f5;
    }

    @media (max-width: 768px) {
        .success-card {
            padding: 2rem;
        }

        .success-card h1 {
            font-size: 2rem;
        }

        .action-buttons {
            flex-direction: column;
        }
    }
</style>
@endsection

@section('content')
<div class="container section">
    <div class="success-container">
        <!-- Success Card -->
        <div class="success-card">
            <div class="success-icon"></div>
            <h1>Pendaftaran Berhasil!</h1>
            <p class="subtitle">Terima kasih telah mendaftar di program magang PT Kereta Api Indonesia</p>

            <!-- Reference Number -->
            <div class="reference-number">
                <label>Nomor Referensi Pendaftaran Anda:</label>
                <div class="number">KAI-2026-061234567</div>
                <small style="color: #999; display: block; margin-top: 0.5rem;">Simpan nomor ini untuk keperluan follow-up</small>
            </div>
        </div>

        <!-- Next Steps -->
        <div class="next-steps">
            <h2> Langkah Selanjutnya</h2>
            <ul class="steps-list">
                <li>Kami akan memverifikasi data pendaftaran Anda dalam 1-2 hari kerja</li>
                <li>Tim HR akan menghubungi Anda untuk jadwal interview (jika lolos tahap awal)</li>
                <li>Proses seleksi akan berlangsung 2-3 minggu kerja</li>
                <li>Anda akan menerima hasil keputusan melalui email</li>
                <li>Jika diterima, Anda akan mengikuti orientasi sebelum mulai magang</li>
            </ul>
        </div>

        <!-- Email Notification -->
        <div class="email-notification">
            <h3> Email Konfirmasi</h3>
            <p>Email konfirmasi telah dikirimkan ke alamat email Anda. Silakan periksa inbox atau folder spam Anda. Jangan lupa untuk menambahkan email kami ke daftar kontak Anda agar tidak terlewatkan.</p>
        </div>

        <!-- Contact Information -->
        <div class="contact-info">
            <h3> Hubungi Kami</h3>
            <p><strong>Email:</strong> magang@kai.co.id</p>
            <p><strong>WhatsApp:</strong> +62-21-XXXX-XXXX</p>
            <p><strong>Telepon:</strong> (021) XXXX-XXXX</p>
            <p><strong>Jam Layanan:</strong> Senin-Jumat, 09:00-17:00 WIB</p>
        </div>

        <!-- Additional Info -->
        <div style="background: #f9f9f9; padding: 1.5rem; border-radius: 8px; margin-bottom: 2rem; text-align: left;">
            <h3 style="color: #003f7f; margin-bottom: 1rem;"> Informasi Tambahan</h3>
            <ul style="margin-left: 1.5rem; color: #555; font-size: 0.9rem;">
                <li>Pastikan data pribadi Anda selalu terdaftar dengan benar di sistem kami</li>
                <li>Jika ada perubahan nomor HP atau email, segera hubungi tim HR</li>
                <li>Persiapkan diri Anda dengan belajar tentang PT KAI dan unit yang Anda pilih</li>
                <li>Jika ada pertanyaan, jangan ragu untuk menghubungi kami melalui kontak di atas</li>
            </ul>
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <a href="/units" class="btn-action btn-secondary-action">Lihat Unit Magang</a>
            <a href="/" class="btn-action btn-primary-action">Kembali ke Beranda</a>
        </div>
    </div>
</div>
@endsection
