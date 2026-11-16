<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="ATMI Recycle Studio - mengubah limbah menjadi peluang.">
        <title>@yield('title', 'Company Profile')</title>
        <script>document.documentElement.classList.add('js');</script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="icon" type="image/png" href="{{ asset('images/logo-ars.png') }}">

        <!-- Link CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Link Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    </head>
    <body>

        <header class="nav" id="nav">
            <div class="nav__inner container">
                <a href="{{ url('/') }}" class="brand" aria-label="ATMI Recycle Studio — Beranda">
                    <img src="{{ asset('images/logo-ars.png') }}" alt="Logo ATMI Recycle Studio" class="brand__logo">
                        <span class="brand__text">ATMI <b>Recycle</b> Studio</span>
                </a>

                <nav class="nav__links" id="nav-menu" aria-label="Navigasi utama">
                    <a href="{{ url('/') }}" @if(request()->is('/')) class="is-current" aria-current="page" @endif>Beranda</a>
                    <a href="{{ url('/') }}#layanan" data-spy>Layanan</a>
                    <a href="{{ url('/') }}#proses" data-spy>Proses</a>
                    <a href="{{ url('/') }}#produk" data-spy>Produk</a>
                    <a href="{{ url('/about') }}" @if(request()->is('about')) class="is-current" aria-current="page" @endif>Tentang</a>
                    <a href="{{ url('/contact') }}" @if(request()->is('contact')) class="is-current" aria-current="page" @endif>Kontak</a>
                    <a href="{{ url('/contact') }}" class="btn btn--lime btn--sm nav__cta">Mulai Kolaborasi</a>
                </nav>

                <button class="nav__burger" id="nav-burger" aria-expanded="false" aria-controls="nav-menu" aria-label="Buka menu">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </header>

@yield('content')

<footer class="footer grain">
    <div class="container">
        <div class="footer__grid">
            <div class="footer__brand">
                <a href="{{ url('/') }}" class="brand brand--footer">
                    <img src="{{ asset('images/logo-ars.png') }}" alt="Logo ATMI Recycle Studio" class="brand__logo">
                        <span class="brand__text">ATMI <b>Recycle</b> Studio</span>
                </a>
                <p>Mengubah limbah menjadi peluang — dari kawasan industri, untuk masa depan yang sirkular.</p>
                <p class="footer__addr">Kawasan Industri MM2100, Cikarang,<br>Bekasi, Jawa Barat</p>
            </div>
            <div>
                <h4>Navigasi</h4>
                <ul>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                    <li><a href="{{ url('/') }}#layanan">Layanan</a></li>
                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h4>Program</h4>
                <ul>
                    <li><a href="{{ url('/') }}#layanan">Bank Sampah</a></li>
                    <li><a href="{{ url('/') }}#layanan">Workshop &amp; Edukasi</a></li>
                    <li><a href="{{ url('/') }}#produk">Produk Daur Ulang</a></li>
                    <li><a href="{{ url('/') }}#proses">Alur Pengolahan</a></li>
                </ul>
            </div>
            <div>
                <h4>Kontak</h4>
                <ul class="footer__contact">
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                        <a href="mailto:halo@recyclestudio.id">halo@recyclestudio.id</a>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
                        <span>Senin–Jumat, 08.00–16.00 WIB</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11z"/><circle cx="12" cy="10" r="2.6"/></svg>
                        <span>Kunjungan dengan janji temu</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bar">
            <p>© 2026 ATMI Recycle Studio. Semua hak dilindungi.</p>
            <p class="footer__made">Dibangun dengan Laravel ♻ Desain sirkular</p>
        </div>
    </div>
</footer>

<button class="to-top" id="to-top" aria-label="Kembali ke atas">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 19V5"/><path d="m6 11 6-6 6 6"/></svg>
</button>

<script src="{{ asset('js/main.js') }}" defer></script>
</body>
</html>