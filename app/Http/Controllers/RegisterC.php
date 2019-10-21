<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasien;
class RegisterC extends Controller
{
	function v() {
		return view('regis');
	}

	function register(Request $request)
	{
		$this->validate($request, [
			'nama_pasien' => 'required',
			'email_pasien' => 'required',
			'pw_pasien' => 'required',
			'tgl_lahir_pasien' => 'required',

		]);

		$pasien = new pasien;
		$pasien->nama_pasien = $request->input('nama_pasien');
		$pasien->email_pasien = $request->input('email_pasien');
		$pasien->pw_pasien = $request->input('pw_pasien');
		$pasien->tgl_lahir_pasien = $request->input('tgl_lahir_pasien');
		$pasien->save();
		return redirect('/dash')->with('response' , 'Register Berhasil');
	}
}