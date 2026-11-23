<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard') · Admin Ruang Belanja</title>

    <link rel="stylesheet" href="{{ asset('css/store.css') }}">
</head>
<body>

<div class="admin-wrap">

    <aside class="admin-side">
        <a class="brand" href="{{ route('admin.dashboard') }}">
            ruangbelanja.
        </a>

        <div class="eyebrow">
            Ruang Pengelola
        </div>

        @foreach([
            ['admin.dashboard', 'Ringkasan'],
            ['admin.categories.index', 'Kategori'],
            ['admin.products.index', 'Produk'],
            ['admin.stock.index', 'Stok & Barang Masuk'],
            ['admin.shipping.index', 'Ekspedisi'],
            ['admin.orders.index', 'Transaksi'],
        ] as [$route, $label])

            @if(Route::has($route))
                <a href="{{ route($route) }}">
                    {{ $label }}
                </a>
            @endif

        @endforeach

        <a href="{{ url('/') }}">
            ↗ Lihat Toko
        </a>

        @if(Route::has('logout'))
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn-light">Keluar</button>
            </form>
        @endif

    </aside>

    <main class="admin-main">

        <div class="admin-context">
            <span>
                Administrasi / @yield('title', 'Dashboard')
            </span>

            <span>
                {{ auth()->user()->name ?? 'Admin' }}
            </span>
        </div>

        @include('layouts.flash')

        @yield('content')

    </main>

</div>

<script src="{{ asset('js/store.js') }}" defer></script>

</body>
</html>