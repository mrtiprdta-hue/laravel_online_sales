@extends('layouts.app')

@section('title', 'Daftar')

@section('content')

<div class="card auth-card">

    <span class="eyebrow">
        MULAI DARI SINI
    </span>

    <h1>
        Buat akun belanja
    </h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label>
            Nama
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
            >
        </label>

        <label>
            Email
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
            >
        </label>

        <label>
            Password
            <input
                type="password"
                name="password"
                required
            >
        </label>

        <label>
            Konfirmasi Password
            <input
                type="password"
                name="password_confirmation"
                required
            >
        </label>

        <button class="btn">
            Daftar
        </button>

    </form>

    <p class="muted" style="margin-top:20px">
        Sudah punya akun?
        <a href="{{ route('login') }}">
            <strong>Masuk di sini</strong>
        </a>
    </p>

</div>

@endsection