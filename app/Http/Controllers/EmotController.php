<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmotController extends Controller
{
    public function indexchat()
	{
        // mengambil data dari tabel di database bernama "chat"
        $chat = DB::table('chat')
        ->get();

    	// mengirim data pesan dari database ke view chat
		return view('indexchat',['chat' => $chat]);

	}
}
