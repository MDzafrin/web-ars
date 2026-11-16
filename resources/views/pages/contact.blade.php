@extends('layouts.app')

@section('title', 'Hubungi Kami — ATMI Recycle Studio')

@section('content')
<section class="page-hero grain">
    <div class="container">
        <span class="eyebrow eyebrow--lime reveal">Kontak</span>
        <h1 class="reveal" style="--d:.06s">Mari bicara soal limbah<br>dan peluangnya.</h1>
        <p class="reveal" style="--d:.12s">Konsultasi pertama gratis. Ceritakan jenis material dan volumenya — kami balas dengan opsi pengolahan yang paling masuk akal.</p>
    </div>
</section>

<section class="section">
    <div class="container contact__grid">
        <div class="contact__info">
            <div class="info-card reveal" style="--d:.05s">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11z"/><circle cx="12" cy="10" r="2.6"/></svg>
                <div><h3>Alamat Studio</h3><p>Kawasan Industri MM2100, Cikarang,<br>Bekasi, Jawa Barat</p></div>
            </div>
            <div class="info-card reveal" style="--d:.12s">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                <div><h3>Email</h3><p><a href="mailto:halo@recyclestudio.id">halo@recyclestudio.id</a></p></div>
            </div>
            <div class="info-card reveal" style="--d:.19s">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
                <div><h3>Jam Operasional</h3><p>Senin–Jumat, 08.00–16.00 WIB<br>Kunjungan dengan janji temu</p></div>
            </div>
        </div>

        <form class="contact__form reveal" id="contact-form" style="--d:.1s">
            <h2>Tulis Pesan</h2>
            <p class="contact__hint">Form ini akan membuka aplikasi email Anda dengan pesan yang sudah terisi.</p>
            <label class="field">
                <span>Nama</span>
                <input type="text" name="nama" required autocomplete="name" placeholder="Nama Anda">
            </label>
            <label class="field">
                <span>Email</span>
                <input type="email" name="email" required autocomplete="email" placeholder="nama@perusahaan.com">
            </label>
            <label class="field">
                <span>Pesan</span>
                <textarea name="pesan" rows="5" required placeholder="Jenis limbah, perkiraan volume, dan kebutuhan Anda…"></textarea>
            </label>
            <button type="submit" class="btn btn--dark">
                Buka Aplikasi Email
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 12h15"/><path d="m13 6 6 6-6 6"/></svg>
            </button>
            <p class="form-status" id="form-status" role="status" aria-live="polite"></p>
        </form>
    </div>
</section>
@endsection