@extends('layout')

@section('judul', 'Destinasi')

@section('konten')
<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Destinasi</p>
        <p class="subtitle">Destinasi Wisata Lokal</p>
    </div>
</section>

<section class="section has-background-primary-soft has-text-primary-soft-invert">
    @foreach ($data as $item)
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama_destinasi }}">
                </figure>
            </div>
            <div class="card-content">
                <div class="content">
                    <h2>{{ $item->nama_destinasi }}</h2>
                    <p><i>Lokasi: {{ $item->lokasi->nama_lokasi }}</i></p>
                    
                </div>
            </div>
            <footer class="card-footer">
                <a href="/destinasi/{{ $item->id }}" class="card-footer-item">
                    Selengkapnya
                </a>
            </footer>
        </div>
    @endforeach

</section>
@endsection
