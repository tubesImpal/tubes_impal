@extends('master')

@section('judul_halaman', 'Tambah Dokter')

@section('konten')
      
      <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH DOKTER</strong>
                </div>
                <div class="card-body">
                    <a href="/dokter" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/dokter/simpan">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama Dokter</label>
                            <input name="nama_dokter" class="form-control" placeholder="Masukkan Nama Anda">
 
                             @if($errors->has('nama_dokter'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_dokter')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="dropwdown">
                        	<label>Specialis</label>
                        	<select class="form-control" name="spesialis">
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
                            <input type="submit" class="btn btn-success" value="Simpan" style="margin-top: 50px;">
                        </div>
 
                    </form>
 
                </div>
            </div>
@endsection