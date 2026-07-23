@extends('layouts.app')

@section('title', 'Masuk - Program Magang PT KAI')

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
    max-width: 460px;
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

.auth-form .form-options {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 24px;
}

.auth-form .remember-me {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
}

.auth-form .remember-me input[type="checkbox"] {
    width: 16px;
    height: 16px;
    accent-color: var(--kai-orange);
    cursor: pointer;
}

.auth-form .remember-me span {
    font-size: 13px;
    color: var(--kai-muted);
}

.auth-form .forgot-password {
    font-size: 13px;
    color: var(--kai-navy);
    font-weight: 600;
    transition: color 0.2s;
}

.auth-form .forgot-password:hover {
    color: var(--kai-orange);
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

@media (max-width: 480px) {
    .auth-card {
        padding: 32px 24px;
    }
    
    .auth-form .form-options {
        flex-direction: column;
        gap: 12px;
        align-items: flex-start;
    }
}
</style>
@endpush

@section('content')
<div class="auth-page">
    <div class="auth-card">
        <div class="auth-header">
            <img src="{{ asset('images/logo-KAI.png') }}" alt="Logo KAI" class="auth-logo">
            <h1 class="auth-title">Masuk</h1>
            <p class="auth-subtitle">Masuk ke akun Anda untuk melanjutkan</p>
        </div>

        <form class="auth-form" method="POST" action="{{ route('login') }}">
            @csrf

            {{-- Alert Error --}}
            @if ($errors->any())
            <div class="auth-alert error">
                <span>⚠️</span>
                <span>{{ $errors->first() }}</span>
            </div>
            @endif

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
                        placeholder="Masukkan email Anda"
                        required 
                        autofocus
                    >
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
                        placeholder="Masukkan kata sandi"
                        required
                    >
                </div>
            </div>

            {{-- Options --}}
            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember" id="remember">
                    <span>Ingat saya</span>
                </label>
                <a href="#" class="forgot-password">Lupa kata sandi?</a>
            </div>

            {{-- Submit --}}
            <button type="submit" class="btn-auth">MASUK</button>

            {{-- Divider --}}
            <div class="auth-divider">
                <span>ATAU</span>
            </div>

            {{-- Register Link --}}
            <div class="auth-footer">
                <p>Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
            </div>
        </form>
    </div>
</div>
@endsection