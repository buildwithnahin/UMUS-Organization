@extends('layouts.app')

@section('content')
<style>
    .login-wrapper {
        min-height: 100vh;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        position: relative;
        overflow: hidden;
    }
    
    .login-wrapper::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background-image: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
        opacity: 0.3;
    }
    
    .login-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        max-width: 450px;
        width: 100%;
        position: relative;
        z-index: 1;
    }
    
    .login-header {
        background: linear-gradient(135deg, #9B59B6 0%, #764ba2 100%);
        padding: 40px 30px;
        text-align: center;
        position: relative;
    }
    
    .login-header::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        right: 0;
        height: 20px;
        background: white;
        border-radius: 20px 20px 0 0;
    }
    
    .logo-circle {
        width: 80px;
        height: 80px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    }
    
    .logo-circle img {
        width: 60px;
        height: 60px;
        object-fit: contain;
    }
    
    .logo-circle i {
        font-size: 2.5rem;
        color: #9B59B6;
    }
    
    .login-header h3 {
        color: white;
        font-weight: 700;
        margin-bottom: 5px;
        font-size: 1.8rem;
    }
    
    .login-header p {
        color: rgba(255, 255, 255, 0.9);
        margin: 0;
        font-size: 0.95rem;
    }
    
    .login-body {
        padding: 40px 35px 35px;
    }
    
    .form-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
        font-size: 0.9rem;
    }
    
    .form-control {
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        padding: 12px 15px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: #9B59B6;
        box-shadow: 0 0 0 0.2rem rgba(155, 89, 182, 0.15);
    }
    
    .form-control.is-invalid {
        border-color: #dc3545;
    }
    
    .btn-login {
        background: linear-gradient(135deg, #9B59B6 0%, #764ba2 100%);
        border: none;
        border-radius: 10px;
        padding: 14px;
        font-size: 1.05rem;
        font-weight: 600;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(155, 89, 182, 0.3);
    }
    
    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(155, 89, 182, 0.4);
        background: linear-gradient(135deg, #8e44ad 0%, #6c3483 100%);
        color: white;
    }
    
    .form-check-input:checked {
        background-color: #9B59B6;
        border-color: #9B59B6;
    }
    
    .form-check-input:focus {
        border-color: #9B59B6;
        box-shadow: 0 0 0 0.2rem rgba(155, 89, 182, 0.15);
    }
    
    .forgot-link {
        color: #9B59B6;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .forgot-link:hover {
        color: #764ba2;
        text-decoration: underline;
    }
    
    .divider {
        height: 1px;
        background: linear-gradient(to right, transparent, #e0e0e0, transparent);
        margin: 25px 0;
    }
    
    @media (max-width: 576px) {
        .login-body {
            padding: 30px 25px 25px;
        }
        
        .login-header {
            padding: 30px 20px;
        }
        
        .login-header h3 {
            font-size: 1.5rem;
        }
    }
</style>

<div class="login-wrapper">
    <div class="login-card">
        <div class="login-header">
            <div class="logo-circle">
                <img src="{{ asset('images/application/'.application()->main_logo) }}" alt="UMUS Logo">
            </div>
            <h3>Admin Login</h3>
            <p>UMUS Organization</p>
        </div>
        
        <div class="login-body">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="email" class="form-label">
                        <i class="fa-solid fa-envelope me-2"></i>Email Address
                    </label>
                    <input 
                        type="email" 
                        class="form-control @error('email') is-invalid @enderror" 
                        name="email" 
                        id="email" 
                        placeholder="Enter your email" 
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        autofocus
                    />
                    @error('email')
                        <div class="invalid-feedback">
                            <i class="fa-solid fa-circle-exclamation me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">
                        <i class="fa-solid fa-lock me-2"></i>Password
                    </label>
                    <input 
                        type="password" 
                        class="form-control @error('password') is-invalid @enderror" 
                        name="password" 
                        id="password" 
                        placeholder="Enter your password"
                        required
                        autocomplete="current-password"
                    />
                    @error('password')
                        <div class="invalid-feedback">
                            <i class="fa-solid fa-circle-exclamation me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input 
                            class="form-check-input" 
                            type="checkbox" 
                            name="remember" 
                            id="remember" 
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>
                    <a href="{{ route('password.request') }}" class="forgot-link">
                        Forgot Password?
                    </a>
                </div>
                
                <div class="d-grid">
                    <button type="submit" class="btn btn-login">
                        <i class="fa-solid fa-right-to-bracket me-2"></i>Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
