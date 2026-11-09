@extends('layouts.app')

@section('title', 'Home - Company Profile')

@section('content')
    {{-- Hero Section --}}
    <section class="hero">
        <div class="hero-content">
            <h1>ATMI Recycle Studio</h1>
            <p>Mengubah limbah menjadi peluang</p>
            <a href="/about" class="btn btn-primary">Pelajari Lebih Lanjut</a>
        </div>
    </section>


    <section class="content-section">
        <h2>Tentang Kami</h2>
        <p>ATMI Recycle Studio adalah perusahaan yang berkomitmen untuk mengubah limbah menjadi peluang. Kami berfokus pada inovasi dan keberlanjutan dalam pengelolaan limbah.</p>
    </section>

@endsection