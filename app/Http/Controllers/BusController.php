<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusController extends Controller{

    public function index()
	{
    	// mengambil data dari table bus
        $bus = DB::table('bus')
            ->orderBy('merkbus','asc')
            ->paginate(5);

    	// mengirim data bus ke view index
		return view('indexbus',['bus' => $bus]);
	}

    // method untuk menampilkan view form tambah bus
	public function tambah()
	{
		// memanggil view tambah
		return view('tambahbus');
	}

	// method untuk insert data ke table bus
	public function store(Request $request)
	{
		// gunakan ternary operator untuk menentukan kondisi stok
		DB::table('bus')->insert([
			'merkbus' => $request->merkbus,
			'jumlahbus' => $request->jumlahbus,
            'tersedia'=> ($request->jumlahbus > 0) ? 'Y' : 'N'
		]);
		// alihkan halaman ke halaman bus
		return redirect('/bus');
	}

    // method untuk edit bus
	public function edit($kodebus)
	{
		// mengambil data bus berdasarkan id yang dipilih
		$bus = DB::table('bus')->where('kodebus',$kodebus)->get();
		// passing data bus yang didapat ke view editbus.blade.php
		return view('editbus',['bus' => $bus]);

	}

    // update data bus
	public function update(Request $request)
	{
		// update data bus
		DB::table('bus')->where('kodebus', $request->kodebus)->update([
			'merkbus' => $request->merkbus,
			'jumlahbus' => $request->jumlahbus,
            'tersedia'=> ($request->jumlahbus > 0) ? 'Y' : 'N'
		]);
		// alihkan halaman ke halaman bus
		return redirect('/bus');
	}

    public function view($kodebus)
	{
		// mengambil data bus berdasarkan kodebus yang dipilih
		$bus = DB::table('bus')->where('kodebus',$kodebus)->get();
		// passing data bus yang didapat ke view viewbus.blade.php
		return view('viewbus',['bus' => $bus]);

	}

	// method untuk hapus data bus
	public function hapus($kodebus)
	{
		// menghapus  data bus berdasarkan kodebus yang dipilih
		DB::table('bus')->where('kodebus',$kodebus)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/bus');
	}

    public function cari(Request $request)
    {
	// menangkap data pencarian
	$cari = $request->cari;

 	// mengambil data dari table bus sesuai pencarian data
	$bus = DB::table('bus')
	    ->where('merkbus','like',"%".$cari."%")
	    ->paginate();

    	// mengirim data bus ke view index
	return view('indexbus',['bus' => $bus,'cari' => $cari]);
    }
}
