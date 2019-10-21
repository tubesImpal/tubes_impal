@extends('master')

@section('judul_halaman', 'Cari Dokter')

@section('konten')


<div class="md-form mt-0">
    <form action={{ url('/dokter/cari') }}>
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="kata_kunci">
            <button style="margin-top : 10px;" class="btn btn-primary custom-btn" name="btn" value="cari">Cari</button>
    </form>
</div>
    <br>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Spesialis</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dokter as $d)
            <tr>
                <td>{{ $d->nama_dokter }}</td>
                <td>{{ $d->spesialis }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

