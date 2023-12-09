<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaikuliahController extends Controller{
    public function indexnilai()
	{
    	// mengambil data dari table nilai kuliah
		// $pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')
                ->get();

    	// mengirim data pegawai ke view index
		return view('indexnilai',['nilaikuliah' => $nilaikuliah]);
	}

    	// method untuk menampilkan view form tambah pegawai
	public function tambahnilai()
	{
		// memanggil view tambah
		return view('tambahnilai');
	}

    public function storenilai(Request $request)
	{
		// insert data ke table nilai kuliah
		DB::table('nilaikuliah')->insert([
			'ID' => $request->id,
			'NRP' => $request->nrp,
			'NilaiAngka' => $request->nilaiangka,
			'SKS' => $request->sks
		]);
		// alihkan halaman ke halaman nilai kuliah
		return redirect('/nilaikuliah');

	}
}
