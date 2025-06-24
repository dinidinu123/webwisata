@extends('layout')

@section('judul', 'Lokasi Wisata')

@section('konten')
<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Lokasi</p>
        <p class="subtitle">Destinasi Wisata Lokal</p>
    </div>
</section>

<section class="section has-background-primary-soft has-text-primary-soft-invert">
    @foreach ($data as $item)
    <div class="card">
        <div class="card-content">
            <div class="content">
                {{ $item->nama_lokasi }}
            </div>
        </div>
        <footer class="card-footer">
            <a href="/lokasi/{{ $item->id }}" class="card-footer-item">
                Selengkapnya
            </a>
        </footer>
    </div>
    @endforeach
</section>
@endsection
