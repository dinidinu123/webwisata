@extends('layout')
@section('judul', 'Profil')

@section('konten')
    <section class="hero is-success">
        <div class="hero-body">
            <p class="title">Profil Mahasiswa</p>
            <p class="subtitle">
                Program Studi Sistem Informasi
            </p>
        </div>
</section>

<section class="section has-background-primary-soft 
    has-text-primary-soft-invert">
        <div class="columns">
            <div class="column is-one-third box">
                <img class="image" src="/images/foto.png">
            </div>
            <div class="column">
                <table class="table is-striped">
                <tr>
                    <td>Nama</td> 
                    <td>:</td> 
                    <td> Asmara Andhini</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td> 
                    <td> Surakarta</td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td> 
                    <td>:</td> 
                    <td> Indonesia</td>
                </tr>
                </table>
            </div>
        </div>
 </section>
@endsection