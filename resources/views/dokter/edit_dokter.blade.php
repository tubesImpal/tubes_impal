@extends('master')

@section('judul_halaman', 'Update Dokter')

@section('konten')
    <div class="card mt-5">
                <div class="card-header text-center">
                    Edit Data Dokter
                </div>
                <div class="card-body">
                    <a href="/dokter" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/dokter/update/{{ $dokter->id_dokter }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_dokter" class="form-control" placeholder="Nama dokter .." value=" {{ $dokter->nama_dokter }}">

                            @if($errors->has('nama_dokter'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_dokter')}}
                                </div>
                            @endif

                        </div>

                        <div class="dropwdown">
                        	<label>Specialis</label>
                        	<select class="form-control" name="spesialis" value="{{ $dokter->spesialis }}">
  								<option>Dokter gigi</option>
  								<option>Dokter Anak</option>
  								<option>Dokter Kandungan</option>
  								

                             @if($errors->has('spesialis'))
                                <div class="text-danger">
                                    {{ $errors->first('spesialis')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
@endsection