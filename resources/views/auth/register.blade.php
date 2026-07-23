@extends('layouts.app')

@section('title', 'Daftar Akun - Program Magang PT KAI')

@push('styles')
<style>
.auth-page {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 100px 24px 60px;
    background: linear-gradient(135deg, #f0f4ff 0%, #e8f0fe 100%);
}

.auth-card {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 8px 40px rgba(0,0,0,0.08);
    width: 100%;
    max-width: 520px;
    padding: 48px 40px;
    position: relative;
    overflow: hidden;
}

.auth-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--kai-orange), var(--kai-navy));
}

.auth-header {
    text-align: center;
    margin-bottom: 32px;
}

.auth-logo {
    width: 64px;
    height: 64px;
    object-fit: contain;
    margin-bottom: 16px;
}

.auth-title {
    font-size: 24px;
    font-weight: 800;
    color: var(--kai-navy);
    margin-bottom: 4px;
}

.auth-subtitle {
    font-size: 14px;
    color: var(--kai-muted);
}

.auth-form .form-group {
    margin-bottom: 20px;
}

.auth-form .form-label {
    display: block;
    font-size: 13px;
    font-weight: 600;
    color: var(--kai-text);
    margin-bottom: 6px;
}

.auth-form .form-label .required {
    color: #ef4444;
}

.auth-form .input-wrapper {
    position: relative;
}

.auth-form .input-wrapper .input-icon {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    color: var(--kai-muted);
    pointer-events: none;
}

.auth-form .form-input {
    width: 100%;
    padding: 12px 14px 12px 44px;
    border: 1.5px solid var(--kai-border);
    border-radius: 10px;
    font-size: 14px;
    font-family: 'Inter', sans-serif;
    color: var(--kai-text);
    background: #fafbfc;
    transition: all 0.2s;
    outline: none;
}

.auth-form .form-input:focus {
    border-color: var(--kai-orange);
    background: #fff;
    box-shadow: 0 0 0 3px rgba(255,107,0,0.1);
}

.auth-form .form-input::placeholder {
    color: #adb5bd;
}

.auth-form .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.auth-form .form-select {
    width: 100%;
    padding: 12px 14px 12px 44px;
    border: 1.5px solid var(--kai-border);
    border-radius: 10px;
    font-size: 14px;
    font-family: 'Inter', sans-serif;
    color: var(--kai-text);
    background: #fafbfc;
    transition: all 0.2s;
    outline: none;
    appearance: none;
    cursor: pointer;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%236b7280' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
}

.auth-form .form-select:focus {
    border-color: var(--kai-orange);
    background: #fff;
    box-shadow: 0 0 0 3px rgba(255,107,0,0.1);
}

.auth-form .form-text {
    font-size: 12px;
    color: var(--kai-muted);
    margin-top: 4px;
}

.btn-auth {
    width: 100%;
    padding: 14px;
    background: linear-gradient(135deg, var(--kai-orange), var(--kai-orange-dark));
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 15px;
    font-weight: 700;
    font-family: 'Inter', sans-serif;
    cursor: pointer;
    transition: all 0.2s;
    letter-spacing: 0.5px;
}

.btn-auth:hover {
    transform: translateY(-1px);
    box-shadow: 0 6px 20px rgba(255,107,0,0.3);
}

.btn-auth:active {
    transform: translateY(0);
}

.auth-divider {
    display: flex;
    align-items: center;
    gap: 16px;
    margin: 24px 0;
}

.auth-divider::before,
.auth-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--kai-border);
}

.auth-divider span {
    font-size: 12px;
    color: var(--kai-muted);
    font-weight: 500;
}

.auth-footer {
    text-align: center;
    margin-top: 24px;
}

.auth-footer p {
    font-size: 14px;
    color: var(--kai-muted);
}

.auth-footer a {
    color: var(--kai-orange);
    font-weight: 700;
    transition: color 0.2s;
}

.auth-footer a:hover {
    color: var(--kai-orange-dark);
    text-decoration: underline;
}

.auth-alert {
    padding: 12px 16px;
    border-radius: 10px;
    font-size: 13px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.auth-alert.error {
    background: #fef2f2;
    color: #dc2626;
    border: 1px solid #fecaca;
}

.auth-alert.success {
    background: #f0fdf4;
    color: #16a34a;
    border: 1px solid #bbf7d0;
}

.auth-terms {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 24px;
}

.auth-terms input[type="checkbox"] {
    width: 16px;
    height: 16px;
    accent-color: var(--kai-orange);
    margin-top: 3px;
    cursor: pointer;
    flex-shrink: 0;
}

.auth-terms label {
    font-size: 12px;
    color: var(--kai-muted);
    line-height: 1.6;
    cursor: pointer;
}

.auth-terms label a {
    color: var(--kai-navy);
    font-weight: 600;
}

.auth-terms label a:hover {
    color: var(--kai-orange);
}

@media (max-width: 480px) {
    .auth-card {
        padding: 32px 24px;
    }
    
    .auth-form .form-row {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush

@section('content')
<div class="auth-page">
    <div class="auth-card">
        <div class="auth-header">
            <img src="{{ asset('images/logo-KAI.png') }}" alt="Logo KAI" class="auth-logo">
            <h1 class="auth-title">Daftar Akun</h1>
            <p class="auth-subtitle">Buat akun untuk mendaftar program magang</p>
        </div>

        <form class="auth-form" method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Alert Error --}}
            @if ($errors->any())
            <div class="auth-alert error">
                <span>⚠️</span>
                <span>{{ $errors->first() }}</span>
            </div>
            @endif

            {{-- Nama Lengkap --}}
            <div class="form-group">
                <label class="form-label" for="name">Nama Lengkap <span class="required">*</span></label>
                <div class="input-wrapper">
                    <span class="input-icon">👤</span>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="form-input @error('name') is-invalid @enderror" 
                        value="{{ old('name') }}" 
                        placeholder="Masukkan nama lengkap"
                        required 
                        autofocus
                    >
                </div>
            </div>

            {{-- Email --}}
            <div class="form-group">
                <label class="form-label" for="email">Email <span class="required">*</span></label>
                <div class="input-wrapper">
                    <span class="input-icon">📧</span>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="form-input @error('email') is-invalid @enderror" 
                        value="{{ old('email') }}" 
                        placeholder="Masukkan email aktif"
                        required
                    >
                </div>
                <p class="form-text">Gunakan email aktif untuk verifikasi akun</p>
            </div>

            {{-- No. Telepon --}}
            <div class="form-group">
                <label class="form-label" for="phone">Nomor Telepon <span class="required">*</span></label>
                <div class="input-wrapper">
                    <span class="input-icon">📱</span>
                    <input 
                        type="tel" 
                        id="phone" 
                        name="phone" 
                        class="form-input @error('phone') is-invalid @enderror" 
                        value="{{ old('phone') }}" 
                        placeholder="Contoh: 081234567890"
                        required
                    >
                </div>
            </div>

            {{-- Row: Jenis Kelamin & Tanggal Lahir --}}
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label" for="gender">Jenis Kelamin <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <span class="input-icon">⚤</span>
                        <select id="gender" name="gender" class="form-select" required>
                            <option value="" disabled {{ old('gender') ? '' : 'selected' }}>Pilih</option>
                            <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="birth_date">Tanggal Lahir <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <span class="input-icon">🎂</span>
                        <input 
                            type="date" 
                            id="birth_date" 
                            name="birth_date" 
                            class="form-input @error('birth_date') is-invalid @enderror" 
                            value="{{ old('birth_date') }}"
                            required
                        >
                    </div>
                </div>
            </div>

            {{-- Password --}}
            <div class="form-group">
                <label class="form-label" for="password">Kata Sandi <span class="required">*</span></label>
                <div class="input-wrapper">
                    <span class="input-icon">🔒</span>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-input @error('password') is-invalid @enderror" 
                        placeholder="Minimal 8 karakter"
                        required
                    >
                </div>
                <p class="form-text">Minimal 8 karakter, kombinasi huruf dan angka</p>
            </div>

            {{-- Konfirmasi Password --}}
            <div class="form-group">
                <label class="form-label" for="password_confirmation">Konfirmasi Kata Sandi <span class="required">*</span></label>
                <div class="input-wrapper">
                    <span class="input-icon">🔐</span>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        class="form-input" 
                        placeholder="Ulangi kata sandi"
                        required
                    >
                </div>
            </div>

            {{-- Terms --}}
            <div class="auth-terms">
                <input type="checkbox" id="terms" name="terms" required {{ old('terms') ? 'checked' : '' }}>
                <label for="terms">
                    Saya menyetujui <a href="#" target="_blank">Syarat & Ketentuan</a> dan 
                    <a href="#" target="_blank">Kebijakan Privasi</a> yang berlaku
                </label>
            </div>

            {{-- Submit --}}
            <button type="submit" class="btn-auth">DAFTAR AKUN</button>

            {{-- Divider --}}
            <div class="auth-divider">
                <span>ATAU</span>
            </div>

            {{-- Login Link --}}
            <div class="auth-footer">
                <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
            </div>
        </form>
    </div>
</div>
@endsection