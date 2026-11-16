@extends('layouts.app')

@section('title', 'ATMI Recycle Studio — Mengubah Limbah Menjadi Peluang')

@section('content')

{{-- ================= HERO ================= --}}
<section class="hero grain" id="hero">
    <div class="hero__media" id="hero-media" aria-hidden="true">
        <div class="hero__bg"></div>
    </div>
    <div class="hero__scrim" aria-hidden="true"></div>

    <div class="hero__content container">
        <span class="hero__badge reveal">
            <span class="pulse-dot" aria-hidden="true"></span>
            Studio Daur Ulang · Cikarang, Indonesia
        </span>
        <h1 class="reveal" style="--d:.08s">ATMI <span class="accent">Recycle</span> Studio</h1>
        <p class="hero__lead reveal" style="--d:.16s">Mengubah limbah menjadi peluang.</p>
        <p class="hero__sub reveal" style="--d:.22s">Kami mengolah sisa plastik, logam, dan kayu dari kawasan industri menjadi material dan produk baru — bersama mahasiswa, mitra, dan komunitas.</p>
        <div class="hero__actions reveal" style="--d:.3s">
            <a href="{{ url('/about') }}" class="btn btn--lime">
                Pelajari Lebih Lanjut
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 12h15"/><path d="m13 6 6 6-6 6"/></svg>
            </a>
            <a href="#layanan" class="btn btn--ghost">Lihat Layanan</a>
        </div>
    </div>

    <div class="hero__meta" aria-hidden="true">
        <span class="hero__meta-side">Berbasis Kampus Industri</span>
        <span class="scroll-cue">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><rect x="8" y="3" width="8" height="15" rx="4"/><path class="scroll-cue__dot" d="M12 6.5v2.5"/></svg>
            gulir
        </span>
        <span class="hero__meta-side">Sirkular Sejak 2019</span>
    </div>
</section>

{{-- ================= TICKER ================= --}}
<div class="ticker-wrap" aria-hidden="true">
    <div class="ticker">
        <div class="ticker__track">
            @foreach ([1, 2] as $copy)
            <div class="ticker__group">
                <span>Plastik</span><i>✦</i><span>Logam</span><i>✦</i><span>Kertas</span><i>✦</i>
                <span>Kayu</span><i>✦</i><span>Organik</span><i>✦</i><span>Elektronik</span><i>✦</i>
                <span>Kain</span><i>✦</i><span>Kaca</span><i>✦</i>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ================= DAMPAK ================= --}}
<section class="section impact" id="dampak">
    <div class="blob blob--lime" aria-hidden="true"></div>
    <div class="blob blob--amber" aria-hidden="true"></div>
    <div class="container impact__grid">
        <div class="impact__intro">
            <span class="eyebrow reveal">Dampak Kami</span>
            <h2 class="reveal" style="--d:.06s">Limbah masuk.<br><span class="mark">Nilai</span> keluar.</h2>
            <p class="reveal" style="--d:.12s">Setiap kilogram yang masuk ke studio kami dicatat, dipilah, dan diolah menjadi sesuatu yang berguna kembali. Ini angka yang tumbuh bersama mitra dan warga kampus — bukan sekadar statistik.</p>
            <a href="#proses" class="text-link reveal" style="--d:.18s">
                Lihat cara kami bekerja
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 12h15"/><path d="m13 6 6 6-6 6"/></svg>
            </a>
        </div>
        <div class="impact__stats">
            <div class="stat reveal" style="--d:.05s">
                <span class="stat__num"><span data-count="12.4" data-decimals="1">0</span><small>ton</small></span>
                <span class="stat__label">Limbah terolah</span>
            </div>
            <div class="stat reveal" style="--d:.12s">
                <span class="stat__num"><span data-count="38">0</span></span>
                <span class="stat__label">Produk dirancang ulang</span>
            </div>
            <div class="stat reveal" style="--d:.19s">
                <span class="stat__num"><span data-count="1250">0</span><small>+</small></span>
                <span class="stat__label">Peserta workshop</span>
            </div>
            <div class="stat reveal" style="--d:.26s">
                <span class="stat__num"><span data-count="27">0</span></span>
                <span class="stat__label">Mitra &amp; komunitas</span>
            </div>
        </div>
    </div>
</section>

{{-- ================= LAYANAN ================= --}}
<section class="section section--dark services grain" id="layanan">
    <div class="container">
        <div class="section__head">
            <div>
                <span class="eyebrow reveal">Layanan Kami</span>
                <h2 class="reveal" style="--d:.06s">Enam cara limbah<br>berubah arah.</h2>
            </div>
            <p class="section__lead reveal" style="--d:.12s">Dari penimbangan pertama sampai produk jadi — semua dikerjakan di satu studio, dengan mesin dan tenaga kampus industri.</p>
        </div>

        <div class="services__grid">
            <article class="svc reveal" data-spot style="--d:.05s">
                <span class="svc__no" aria-hidden="true">01</span>
                <span class="svc__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3v18"/><path d="M5 7h14"/><path d="M5 7 2 13a4 4 0 0 0 6 0L5 7z"/><path d="m19 7-3 6a4 4 0 0 0 6 0l-3-6z"/><path d="M8 21h8"/></svg>
                </span>
                <h3>Bank Sampah Kampus</h3>
                <p>Penimbangan, pencatatan, dan penukaran sampah anorganik warga kampus menjadi saldo edukasi dan produk studio.</p>
                <div class="svc__tags"><span>Anorganik</span><span>Saldo</span></div>
            </article>

            <article class="svc reveal" data-spot style="--d:.1s">
                <span class="svc__no" aria-hidden="true">02</span>
                <span class="svc__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3 3 8l9 5 9-5-9-5z"/><path d="m3 12 9 5 9-5"/><path d="m3 16 9 5 9-5"/></svg>
                </span>
                <h3>Daur Ulang Plastik</h3>
                <p>Pencacahan hingga pelelehan HDPE dan PP menjadi lembaran terrazzo dan biji plastik siap produksi.</p>
                <div class="svc__tags"><span>HDPE</span><span>PP</span></div>
            </article>

            <article class="svc reveal" data-spot style="--d:.15s">
                <span class="svc__no" aria-hidden="true">03</span>
                <span class="svc__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="3.2"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3M4.9 4.9 7 7M17 17l2.1 2.1M19.1 4.9 17 7M7 17l-2.1 2.1"/></svg>
                </span>
                <h3>Upcycling Logam</h3>
                <p>Sisa potongan plat dan besi dari workshop permesinan diolah menjadi furnitur dan komponen fungsional.</p>
                <div class="svc__tags"><span>Plat</span><span>Besi</span></div>
            </article>

            <article class="svc reveal" data-spot style="--d:.2s">
                <span class="svc__no" aria-hidden="true">04</span>
                <span class="svc__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m12 4 10 5-10 5L2 9l10-5z"/><path d="M6 11.5V16c0 1.5 2.7 3 6 3s6-1.5 6-3v-4.5"/><path d="M22 9v5"/></svg>
                </span>
                <h3>Workshop &amp; Edukasi</h3>
                <p>Kelas praktik untuk siswa, mahasiswa, dan komunitas — dari memilah sampah sampai membuat produk sendiri.</p>
                <div class="svc__tags"><span>Praktik</span><span>Sertifikat</span></div>
            </article>

            <article class="svc reveal" data-spot style="--d:.25s">
                <span class="svc__no" aria-hidden="true">05</span>
                <span class="svc__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 8 12 3 3 8v8l9 5 9-5V8z"/><path d="m3 8 9 5 9-5"/><path d="M12 13v8"/></svg>
                </span>
                <h3>Produk Kustom B2B</h3>
                <p>Merchandise dan panel material daur ulang untuk kebutuhan perusahaan — dari desain sampai produksi batch.</p>
                <div class="svc__tags"><span>Merchandise</span><span>Panel</span></div>
            </article>

            <article class="svc reveal" data-spot style="--d:.3s">
                <span class="svc__no" aria-hidden="true">06</span>
                <span class="svc__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 3v18h18"/><path d="m7 15 4-5 3 3 5-7"/><circle cx="19" cy="6" r="1.3"/></svg>
                </span>
                <h3>Pendampingan Zero Waste</h3>
                <p>Audit timbulan sampah dan rancangan alur pemilahan untuk pabrik, kantin, dan area industri.</p>
                <div class="svc__tags"><span>Audit</span><span>Alur</span></div>
            </article>
        </div>
    </div>
</section>

{{-- ================= PROSES ================= --}}
<section class="section process" id="proses">
    <div class="container process__grid">
        <div class="process__left">
            <span class="eyebrow reveal">Alur Pengolahan</span>
            <h2 class="reveal" style="--d:.06s">Dari tempat sampah<br>ke rak produk.</h2>
            <p class="reveal" style="--d:.12s">Empat tahap, satu siklus. Material yang kami olah tidak berhenti di produk — ia dirancang untuk bisa didaur ulang lagi.</p>

            <div class="emblem reveal" style="--d:.18s" aria-hidden="true">
                <svg viewBox="0 0 240 240">
                    <circle class="emblem__ring" cx="120" cy="120" r="104" fill="none" stroke="currentColor" stroke-width="2" stroke-dasharray="6 10"/>
                    <circle cx="120" cy="120" r="72" fill="none" stroke="currentColor" stroke-width="1" opacity=".25"/>
                    <g class="emblem__core" fill="none" stroke="currentColor" stroke-width="7" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M88 108a36 36 0 0 1 62-13l9 9"/><path d="M159 92v18h-18"/>
                        <path d="M152 132a36 36 0 0 1-62 13l-9-9"/><path d="M81 148v-18h18"/>
                    </g>
                    <g class="emblem__nodes">
                        <circle cx="120" cy="16" r="17"/><text x="120" y="22">1</text>
                        <circle cx="224" cy="120" r="17"/><text x="224" y="126">2</text>
                        <circle cx="120" cy="224" r="17"/><text x="120" y="230">3</text>
                        <circle cx="16" cy="120" r="17"/><text x="16" y="126">4</text>
                    </g>
                </svg>
                <span>Siklus yang tidak pernah berhenti.</span>
            </div>
        </div>

        <ol class="process__steps">
            <li class="step reveal" style="--d:.05s">
                <span class="step__num">1</span>
                <div>
                    <h3>Pilah &amp; Kumpulkan</h3>
                    <p>Limbah ditimbang dan dicatat berdasarkan jenis material di titik pengumpulan mitra dan bank sampah.</p>
                    <span class="step__out">Output: material terpilah &amp; tercatat</span>
                </div>
            </li>
            <li class="step reveal" style="--d:.1s">
                <span class="step__num">2</span>
                <div>
                    <h3>Cacah &amp; Bersihkan</h3>
                    <p>Material dicacah menjadi serpihan seragam, dicuci, dan dikeringkan agar siap diolah tanpa kontaminasi.</p>
                    <span class="step__out">Output: cacahan bersih</span>
                </div>
            </li>
            <li class="step reveal" style="--d:.15s">
                <span class="step__num">3</span>
                <div>
                    <h3>Olah &amp; Bentuk</h3>
                    <p>Serpihan dilelehkan, dipres, atau dikerjakan ulang menjadi lembaran, biji plastik, dan komponen baru.</p>
                    <span class="step__out">Output: lembaran &amp; biji material</span>
                </div>
            </li>
            <li class="step reveal" style="--d:.2s">
                <span class="step__num">4</span>
                <div>
                    <h3>Jadi Produk &amp; Peluang</h3>
                    <p>Material lahir sebagai furnitur, panel, dan merchandise — sebagian kembali menjadi bahan ajar workshop.</p>
                    <span class="step__out">Output: produk siap pakai</span>
                </div>
            </li>
        </ol>
    </div>
</section>

{{-- ================= PRODUK ================= --}}
<section class="section products" id="produk">
    <div class="container">
        <div class="section__head">
            <div>
                <span class="eyebrow reveal">Produk Unggulan</span>
                <h2 class="reveal" style="--d:.06s">Lahir dari yang<br>pernah dibuang.</h2>
            </div>
            <p class="section__lead reveal" style="--d:.12s">Setiap produk membawa cerita materialnya sendiri — lengkap dengan catatan asal limbah dan komposisi bahannya.</p>
        </div>

        <div class="products__grid">
            <article class="product reveal" style="--d:.05s">
                <div class="product__art product__art--green">
                    <svg viewBox="0 0 240 180" role="img" aria-label="Ilustrasi panel terrazzo HDPE">
                        <g transform="rotate(-6 120 95)">
                            <rect x="42" y="88" width="156" height="64" rx="8" fill="#0c2b1c"/>
                            <rect x="36" y="76" width="156" height="64" rx="8" fill="#1f6f43"/>
                            <rect x="30" y="62" width="156" height="64" rx="8" fill="#2e8b57"/>
                            <circle cx="52" cy="80" r="5" fill="#c6f24e"/><circle cx="84" cy="102" r="4" fill="#f5a524"/>
                            <circle cx="118" cy="76" r="6" fill="#f4f1e8"/><circle cx="150" cy="98" r="4" fill="#2dd4bf"/>
                            <circle cx="170" cy="74" r="5" fill="#c6f24e"/><circle cx="66" cy="112" r="3.5" fill="#2dd4bf"/>
                            <circle cx="132" cy="114" r="4.5" fill="#f5a524"/><circle cx="98" cy="88" r="3" fill="#0c2b1c"/>
                            <circle cx="160" cy="112" r="3" fill="#f4f1e8"/><circle cx="44" cy="98" r="3" fill="#f5a524"/>
                            <path d="M34 68h148" stroke="#f4f1e8" stroke-width="2" opacity=".35" stroke-linecap="round"/>
                        </g>
                    </svg>
                </div>
                <div class="product__body">
                    <div class="product__chips">
                        <span class="chip chip--info">HDPE · Tutup Botol</span>
                        <span class="chip chip--success">Tersedia</span>
                    </div>
                    <h3>Panel Terrazzo HDPE</h3>
                    <p>Lembaran bermotif terrazzo untuk meja, dinding, dan partisi. Setiap panel unik — motifnya lahir dari campuran limbah batch tersebut.</p>
                    <a class="text-link" href="mailto:halo@recyclestudio.id?subject={{ rawurlencode('Tanya Produk: Panel Terrazzo HDPE') }}">
                        Tanya produk
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 12h15"/><path d="m13 6 6 6-6 6"/></svg>
                    </a>
                </div>
            </article>

            <article class="product reveal" style="--d:.12s">
                <div class="product__art product__art--amber">
                    <svg viewBox="0 0 240 180" role="img" aria-label="Ilustrasi planter daur ulang">
                        <ellipse cx="120" cy="156" rx="52" ry="8" fill="#0c2b1c" opacity=".15"/>
                        <path d="M120 96V64" stroke="#1f6f43" stroke-width="5" stroke-linecap="round"/>
                        <path d="M120 74c-2-16-14-24-30-24 2 16 14 24 30 24z" fill="#a3e635"/>
                        <path d="M120 64c2-16 14-24 30-24-2 16-14 24-30 24z" fill="#2e8b57"/>
                        <path d="M120 90c-1-10-9-16-20-16 1 10 9 16 20 16z" fill="#2dd4bf"/>
                        <rect x="82" y="94" width="76" height="12" rx="5" fill="#123524"/>
                        <path d="M88 106h64l-8 46a6 6 0 0 1-6 5h-36a6 6 0 0 1-6-5l-8-46z" fill="#1f6f43"/>
                        <circle cx="104" cy="122" r="3.5" fill="#c6f24e"/><circle cx="132" cy="134" r="3" fill="#f5a524"/>
                        <circle cx="118" cy="146" r="2.5" fill="#f4f1e8"/><circle cx="140" cy="118" r="2.5" fill="#2dd4bf"/>
                        <circle cx="98" cy="140" r="2.5" fill="#f5a524"/>
                    </svg>
                </div>
                <div class="product__body">
                    <div class="product__chips">
                        <span class="chip chip--info">PP · Gelas Plastik</span>
                        <span class="chip chip--warning">Pre-order</span>
                    </div>
                    <h3>Planter Loop</h3>
                    <p>Pot tanaman dari gelas plastik kantin yang dicacah dan dipres. Tahan cuaca, ringan, dan tersedia dalam tiga ukuran.</p>
                    <a class="text-link" href="mailto:halo@recyclestudio.id?subject={{ rawurlencode('Tanya Produk: Planter Loop') }}">
                        Tanya produk
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 12h15"/><path d="m13 6 6 6-6 6"/></svg>
                    </a>
                </div>
            </article>

            <article class="product reveal" style="--d:.19s">
                <div class="product__art product__art--teal">
                    <svg viewBox="0 0 240 180" role="img" aria-label="Ilustrasi krat palet modular">
                        <ellipse cx="120" cy="158" rx="58" ry="8" fill="#0c2b1c" opacity=".15"/>
                        <path d="M62 78 82 60h116l-20 18z" fill="#e5b877"/>
                        <rect x="62" y="78" width="116" height="72" rx="4" fill="#d9a05b"/>
                        <path d="M62 96h116M62 114h116M62 132h116" stroke="#a9743a" stroke-width="4"/>
                        <rect x="62" y="78" width="10" height="72" fill="#123524"/>
                        <rect x="168" y="78" width="10" height="72" fill="#123524"/>
                        <path d="M178 78l20-18v72l-20 18z" fill="#b9834a"/>
                        <g fill="none" stroke="#0c2b1c" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M108 108a14 14 0 0 1 24-5l4 4"/><path d="M136 101v7h-7"/>
                            <path d="M132 122a14 14 0 0 1-24 5l-4-4"/><path d="M104 129v-7h7"/>
                        </g>
                    </svg>
                </div>
                <div class="product__body">
                    <div class="product__chips">
                        <span class="chip chip--info">Kayu Palet + Besi</span>
                        <span class="chip chip--danger">Slot batch terbatas</span>
                    </div>
                    <h3>Krat Palet Modular</h3>
                    <p>Krat susun dari kayu palet bekas dan rangka besi sisa workshop. Bisa ditumpuk, dibongkar, dan diperbaiki per bagian.</p>
                    <a class="text-link" href="mailto:halo@recyclestudio.id?subject={{ rawurlencode('Tanya Produk: Krat Palet Modular') }}">
                        Tanya produk
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 12h15"/><path d="m13 6 6 6-6 6"/></svg>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

{{-- ================= KENAPA KAMI ================= --}}
<section class="section why" id="kenapa">
    <div class="container why__grid">
        <div>
            <span class="eyebrow reveal">Kenapa Recycle Studio</span>
            <h2 class="reveal" style="--d:.06s">Bukan sekadar<br>tempat pembuangan akhir.</h2>
            <ul class="why__list">
                <li class="reveal" style="--d:.1s">
                    <span class="why__check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m5 12 5 5 9-10"/></svg></span>
                    <div><h3>Berbasis kampus industri</h3><p>Mesin permesinan, lab material, dan tenaga pengajar — semua dalam satu kawasan.</p></div>
                </li>
                <li class="reveal" style="--d:.16s">
                    <span class="why__check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m5 12 5 5 9-10"/></svg></span>
                    <div><h3>Material terlacak</h3><p>Setiap batch punya catatan asal limbah, komposisi, dan tanggal pengolahan.</p></div>
                </li>
                <li class="reveal" style="--d:.22s">
                    <span class="why__check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m5 12 5 5 9-10"/></svg></span>
                    <div><h3>Dikerjakan bersama</h3><p>Mahasiswa, mitra pabrik, dan komunitas bank sampah terlibat di setiap tahap.</p></div>
                </li>
                <li class="reveal" style="--d:.28s">
                    <span class="why__check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m5 12 5 5 9-10"/></svg></span>
                    <div><h3>Sirkular sejak desain</h3><p>Produk dirancang agar mudah dibongkar dan didaur ulang kembali di akhir pakai.</p></div>
                </li>
            </ul>
        </div>
        <div class="why__aside">
            <figure class="quote grain reveal" style="--d:.14s">
                <span class="quote__mark" aria-hidden="true">“</span>
                <blockquote>Limbah workshop kami tidak lagi jadi biaya angkut. Sekarang ia kembali sebagai meja kerja baru di ruang produksi.</blockquote>
                <figcaption>
                    <strong>Mitra Manufaktur</strong>
                    <span>Kawasan Industri MM2100, Cikarang</span>
                </figcaption>
            </figure>
            <div class="why__badges reveal" style="--d:.22s">
                <span class="badge">♻ Berbasis Kampus</span>
                <span class="badge">◎ Material Terlacak</span>
                <span class="badge">▦ Produksi Batch Kecil</span>
            </div>
        </div>
    </div>
</section>

{{-- ================= CTA ================= --}}
<section class="cta grain">
    <div class="container cta__inner">
        <span class="eyebrow eyebrow--ink reveal">Mulai Hari Ini</span>
        <h2 class="reveal" style="--d:.06s">Punya limbah yang menumpuk?<br>Mari ubah menjadi peluang.</h2>
        <p class="reveal" style="--d:.12s">Ceritakan jenis dan volume limbah Anda — kami bantu petakan jalur pengolahannya, tanpa biaya untuk konsultasi pertama.</p>
        <div class="cta__actions reveal" style="--d:.18s">
            <a href="{{ url('/contact') }}" class="btn btn--ink">
                Hubungi Kami
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 12h15"/><path d="m13 6 6 6-6 6"/></svg>
            </a>
            <a href="#layanan" class="btn btn--outline-ink">Lihat Layanan Lagi</a>
        </div>
    </div>
</section>

@endsection