<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\dokter;

class DokterC extends Controller
{

    public function i()
    {
        $dokter = dokter::all();
    	return view('/dokter/v_dokter', ['dokter' => $dokter]);
    }

    public function tambah()
    {
    	return view('/dokter/tambah_dokter');
    }

    function simpan(Request $request)
	{
		$this->validate($request, [
			'spesialis' => 'required',
			'nama_dokter' => 'required'
		]);

		$dokter = new dokter;
		$dokter->nama_dokter = $request->input('nama_dokter');
		$dokter->spesialis = $request->input('spesialis');
		$dokter->save();
		return redirect('/dokter')->with('response' , 'Tambah Dokter Berhasil');
    }
    
    public function edit($id)
    {
        $dokter = dokter::where('id_dokter', $id)->first();
        return view('/dokter/edit_dokter', ['dokter' => $dokter]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'nama_dokter' => 'required',
        'spesialis' => 'required'
        ]);

        $dokter = dokter::find($id);
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->spesialis = $request->spesialis;
        $dokter->save();
        return redirect('/dokter');
    }

    public function delete($id)
    {
        $dokter = dokter::find($id);
        $dokter->delete();
        return redirect('/dokter');
    }

    public function c()
    {
        $dokter = dokter::All();
        if(!empty($_GET['btn'])) {
            $kata_kunci = $_GET['kata_kunci'];
            $dokter = dokter::where('nama_dokter','like',"%$kata_kunci%")->get();
        }
        return view('/dokter/cari_dokter', ['dokter' => $dokter]);
    }
}