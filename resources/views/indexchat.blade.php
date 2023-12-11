@extends('master')

@section('title', 'Chat')

@section('konten')

    <h3>Chat</h3>
    <br>

    <div>
        @foreach ($chat as $message)
            <div>
                {{-- Penggantian emotikon langsung di dalam loop --}}
                @php
                    $emoticonMap = [
                        ':))' => 'emot1.png',
                        ':3'  => 'emot2.png',
                        ':P'  => 'emot3.png',
                        ':C'  => 'emot4.png',
                        ';)'  => 'emot5.png',
                    ];
                    // memecah pesan menjadi array kata-kata
                    $words = explode(' ', $message->pesan);
                    // menggantikan kata-kata tertentu dengan gambar
                    $words = array_map(function($word) use ($emoticonMap) {
                        return isset($emoticonMap[$word]) ? '<img src="' . asset('img/' . $emoticonMap[$word]) . '" alt="' . $word . '" style="max-width: 20px; max-height: 20px;" />' : $word;
                    }, $words);
                    // menggabungkan array kata-kata menjadi string kembali
                    $message->pesan = implode(' ', $words);
                @endphp

                {!! $message->pesan !!}
            </div>
        @endforeach
    </div>
    <br>
    <br>
    <br>
@endsection
