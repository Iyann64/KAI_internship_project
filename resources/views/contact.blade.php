@extends('layouts.app')

@section('title', 'Hubungi Kami - PT Kereta Api Indonesia')

@section('content')
<div class="container section">

    {{-- Hero Section --}}
    <section class="contact-hero">
        <p class="hero-eyebrow" style="margin: 0 auto 16px;">KONTAK</p>
        <h1>Hubungi Kami</h1>
        <p>Tim kami siap membantu menjawab semua pertanyaan Anda tentang program magang di PT Kereta Api Indonesia</p>
    </section>

    {{-- Contact Grid --}}
    <div class="contact-grid">
        {{-- Contact Form --}}
        <div class="contact-form">
            <div class="form-header">
                <span class="form-icon">✉️</span>
                <h2>Kirim Pesan</h2>
            </div>
            <form method="POST" action="/contact/send">
                @csrf

                <div class="form-group">
                    <label>Nama Lengkap <span class="required">*</span></label>
                    <input type="text" name="nama" required placeholder="Masukkan nama lengkap Anda">
                </div>

                <div class="form-group">
                    <label>Email <span class="required">*</span></label>
                    <input type="email" name="email" required placeholder="contoh@email.com">
                </div>

                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="tel" name="telepon" placeholder="08xx-xxxx-xxxx">
                </div>

                <div class="form-group">
                    <label>Subjek <span class="required">*</span></label>
                    <select name="subjek" required>
                        <option value="">-- Pilih Subjek --</option>
                        <option value="informasi_magang">Informasi Program Magang</option>
                        <option value="persyaratan">Persyaratan Pendaftaran</option>
                        <option value="dokumen">Pertanyaan Dokumen</option>
                        <option value="jadwal">Jadwal dan Timeline</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pesan <span class="required">*</span></label>
                    <textarea name="pesan" required placeholder="Tuliskan pesan atau pertanyaan Anda dengan detail..."></textarea>
                </div>

                <button type="submit" class="submit-btn">
                    <span>Kirim Pesan</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                </button>
            </form>
        </div>

        {{-- Contact Info --}}
        <div class="contact-info-section">
            <div class="form-header">
                <span class="form-icon">📞</span>
                <h2>Informasi Kontak</h2>
            </div>

            <div class="contact-list">
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#FF6B00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </div>
                    <div class="contact-item-content">
                        <h3>Email</h3>
                        <p><a href="mailto:magang@kai.co.id">magang@kai.co.id</a></p>
                        <p><a href="mailto:hr@kai.co.id">hr@kai.co.id</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#FF6B00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div class="contact-item-content">
                        <h3>Lokasi</h3>
                        <p>Drive III Palembang<br>PT Kereta Api Indonesia (Persero)</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#FF6B00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </div>
                    <div class="contact-item-content">
                        <h3>Telepon</h3>
                        <p><a href="tel:+62711234567">(0711) 4123456</a></p>
                        <p class="contact-note">Senin-Jumat, 09:00-17:00 WIB</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#FF6B00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div class="contact-item-content">
                        <h3>Jam Operasional</h3>
                        <p>Senin - Jumat: 09:00 - 17:00</p>
                        <p class="contact-note">Sabtu & Minggu: Libur</p>
                    </div>
                </div>
            </div>

            {{-- Social Media --}}
            <div class="contact-social">
                <h3>Ikuti Kami</h3>
                <div class="social-links">
                    <a href="#" class="social-link" title="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="#" class="social-link" title="Facebook">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="#" class="social-link" title="Twitter/X">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4l11.733 16h4.267l-11.733 -16zM4 20l6.768 -6.768M17.232 3.232l-6.768 6.768"/></svg>
                    </a>
                    <a href="#" class="social-link" title="YouTube">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.94 2C5.12 20 12 20 12 20s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Office Locations --}}
    <section class="office-section">
        <div class="office-header">
            <span class="section-eyebrow">LOKASI</span>
            <h2 class="section-title" style="text-align:center;">Kantor PT KAI</h2>
        </div>
        <div class="office-locations">
            <div class="office-card">
                <div class="office-card-icon">🏢</div>
                <h3>Kantor Pusat Jakarta</h3>
                <p>Jl. Stasiun Besar No. 1<br>Jakarta Pusat 12150<br>Indonesia</p>
                <div class="office-card-footer">
                    <a href="tel:+622141234567">(021) 41234567</a>
                </div>
            </div>

            <div class="office-card">
                <div class="office-card-icon">🚆</div>
                <h3>Divre III Palembang</h3>
                <p>Jl. Stasiun No. 1<br>Palembang 30127<br>Sumatera Selatan</p>
                <div class="office-card-footer">
                    <a href="tel:+62711234567">(0711) 4123456</a>
                </div>
            </div>

            <div class="office-card">
                <div class="office-card-icon">🏛️</div>
                <h3>Kantor Regional</h3>
                <p>Jl. Stasiun No. 123<br>Bandung 40123<br>Jawa Barat</p>
                <div class="office-card-footer">
                    <a href="tel:+622241234567">(022) 41234567</a>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="faq-section">
        <div class="faq-header">
            <span class="section-eyebrow" style="margin: 0 auto 12px; display: block; width: fit-content;">FAQ</span>
            <h2>Pertanyaan Umum</h2>
            <p class="faq-subtitle">Temukan jawaban untuk pertanyaan yang sering diajukan</p>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-item-header">
                    <span class="faq-q">Q</span>
                    <h4>Kapan pembukaan pendaftaran magang?</h4>
                </div>
                <p>Pendaftaran dibuka bulan Juni setiap tahunnya. Silakan pantau website resmi kami untuk informasi terbaru mengenai jadwal pendaftaran.</p>
            </div>

            <div class="faq-item">
                <div class="faq-item-header">
                    <span class="faq-q">Q</span>
                    <h4>Bagaimana cara mendaftar magang?</h4>
                </div>
                <p>Klik tombol "Daftar Magang" di halaman utama, lalu ikuti 5 langkah pendaftaran yang telah disediakan. Pastikan semua dokumen persyaratan sudah siap sebelum mendaftar.</p>
            </div>

            <div class="faq-item">
                <div class="faq-item-header">
                    <span class="faq-q">Q</span>
                    <h4>Berapa IPK minimal untuk mendaftar?</h4>
                </div>
                <p>IPK minimal yang diperlukan adalah 3.00 dari skala 4.00. Pastikan IPK Anda memenuhi syarat ini sebelum melanjutkan pendaftaran.</p>
            </div>

            <div class="faq-item">
                <div class="faq-item-header">
                    <span class="faq-q">Q</span>
                    <h4>Berapa lama proses seleksi magang?</h4>
                </div>
                <p>Proses seleksi memakan waktu 2-3 minggu kerja sejak data Anda diverifikasi lengkap. Hasil seleksi akan diinformasikan melalui email yang didaftarkan.</p>
            </div>

            <div class="faq-item">
                <div class="faq-item-header">
                    <span class="faq-q">Q</span>
                    <h4>Apakah magang di KAI mendapatkan sertifikat?</h4>
                </div>
                <p>Ya, peserta yang telah menyelesaikan program magang akan mendapatkan sertifikat resmi dari PT Kereta Api Indonesia (Persero).</p>
            </div>
        </div>
    </section>

</div>
@endsection