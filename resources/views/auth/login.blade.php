@extends('layouts.app')

<style>
    body {
        background-image: url(../images/hero-bg.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        overflow: hidden;
    }

    body::after {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        width: 100%;
        height: 100%;
        content: "";
        background-color: #07212e;
        z-index: -1;
        opacity: 0.6;
    }

    .form-login {
        padding: 112px 0;
    }

    .heading-section {
        font-size: 40px;
        font-weight: 600;
        color: #f28123;
    }

    .login-wrap {
        position: relative;
        color: rgba(255, 255, 255, 0.9);
    }

    .login-wrap h3 {
        font-weight: 300;
        color: #fff;
    }

    .form-group {
        position: relative;
    }

    .form-group {
        margin-bottom: 16px;
    }

    .form-control {
        height: 50px !important;
        color: white !important;
        border: 1px solid transparent !important;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 40px !important;
        padding-left: 20px !important;
        padding-right: 20px !important;
        transition: 0.3s;
    }

    input.form-control {
        height: 50px;
        border: 1px solid transparent;
        background: rgba(255, 255, 255, 0.08) !important;
        transition: 0.3s;
    }

    .form-control:hover,
    .form-control:focus {
        background: transparent;
        outline: none;
        box-shadow: none !important;
        border-color: rgba(255, 255, 255, 0.9) !important;
    }

    .btn {
        border: none !important;
        background: #f28123 !important;
        transition: .3s;
    }

    .btn:hover {
        opacity: 0.9;
    }

    .btn.btn-primary {
        background-color: #f28123;
        color: #fff;
        padding: 10px 20px;
        border-radius: 999px;
    }

    .form-check-label {
        display: block;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 16px;
        font-weight: 500;
        user-select: none;
        color: #f28123;
    }

    .form-check {
        padding-right: 1.5em;
    }

    .form-check-input {
        background-color: rgba(255, 255, 255, 0.1) !important;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        border: none !important;
    }

    .form-check-input:focus {
        border-color: #f28123 !important;
        outline: 0 !important;
        box-shadow: none !important;
    }

    .form-check-input:checked {
        background-color: #f28123 !important;
        border-color: #f28123 !important;
        transition: .3s;
    }

    .form-check-input[type=checkbox]:after {
        color: rgba(255, 255, 255, 0.1);
        font-size: 20px;
        margin-top: -4px;
        transition: 0.3s;
    }

    .register {
        width: 200px !important;
        text-align: center;
        text-decoration: none;
        color: #f28123;
        background-color: transparent;
        border: 2px solid #f28123;
        padding: 8px 16px;
        border-radius: 999px;
    }

    .register:hover {
        border: 2px solid #eb9752;
        color: #fff;
        background-color: #f28123;
    }

    input::placeholder {
        color: #99a7ac !important;
    }
</style>

@section('content')
    <section class="form-login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">MEME</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Have an account?</h3>
                        <form method="POST" action="{{ route('login') }}" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Email Address" required=""
                                    autocomplete="email" autofocus />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Password" required="" autocomplete="current-password" />
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn submit px-3">
                                    Sign In
                                </button>
                            </div>
                            <div class="form-group d-md-flex justify-content-around">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                                <div class="w-40 text-center">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"
                                            style="color: #fff; text-decoration: none;">
                                            Forgot Password
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                        <div class="row justify-content-center">
                            <a href="{{ route('register') }}" class="register">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
