@extends('layouts.app')

@section('title', 'Tentang Kami — ATMI Recycle Studio')

@section('content')
<section class="page-hero grain">
    <div class="container">
        <span class="eyebrow eyebrow--lime reveal">Tentang Kami</span>
        <h1 class="reveal" style="--d:.06s">Studio daur ulang di jantung<br>kampus industri.</h1>
        <p class="reveal" style="--d:.12s">Berdiri sejak 2019, ATMI Recycle Studio lahir dari pertanyaan sederhana: ke mana perginya sisa material workshop kami?</p>
    </div>
</section>

<section class="section">
    <div class="container about__grid">
        <div class="about__text reveal">
            <p>Berawal dari satu mesin pencacah dan meja kerja pinjaman, studio ini kini mengolah plastik, logam, dan kayu dari kawasan industri menjadi material dan produk baru. Mahasiswa mengerjakannya sebagai bagian dari pembelajaran nyata — mitra pabrik mengirim limbahnya, komunitas menyetor pilahannya.</p>
            <p>Kami percaya daur ulang bukan akhir dari sebuah barang, melainkan awal dari siklus berikutnya. Karena itu setiap produk yang keluar dari studio dirancang untuk bisa kembali lagi someday: mudah dibongkar, mudah dipisahkan materialnya, mudah diolah ulang.</p>
            <a href="{{ url('/contact') }}" class="btn btn--dark">
                Ajak Kami Berkolaborasi
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 12h15"/><path d="m13 6 6 6-6 6"/></svg>
            </a>
        </div>
        <div class="about__values">
            <div class="value reveal" style="--d:.08s"><span>♻</span><h3>Sirkular</h3><p>Tidak ada yang benar-benar selesai — semua material punya babak berikutnya.</p></div>
            <div class="value reveal" style="--d:.16s"><span>◎</span><h3>Terlacak</h3><p>Asal limbah dan komposisi produk tercatat, bukan sekadar klaim hijau.</p></div>
            <div class="value reveal" style="--d:.24s"><span>✦</span><h3>Kolaboratif</h3><p>Kampus, industri, dan komunitas bekerja di satu meja yang sama.</p></div>
        </div>
    </div>
</section>
@endsection