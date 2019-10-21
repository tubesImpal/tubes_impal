<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class RegistrasiController extends Controller
{
	
	function register(Request $request)
	{
		$this->validate($request, [
			'mail' => 'required',
			'pass' => 'required',
			'nama' => 'required',
			'tgl' => 'required',
		]);

		$Candidate = new Candidate;
		$Candidate->mail = $request->input('mail');
		$Candidate->pass = $request->input('pass');
		$Candidate->nama = $request->input('nama');
		$Candidate->tgl = $request->input('tgl');
		$Candidate->save();
		return redirect('/')->with('response' , 'Register Berhasil');
	}
}