@extends('master')
@section('title', 'View Data Bus')
@section('konten')

    <body>

        <div class="text-center my-3">
            <h1>Data Bus</h1>
        </div>
        @foreach ($bus as $b)
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="border border-primary rounded mx-3 mb-3"
                            style="height: 25vh; border-width: 3px !important ">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row my-2">
                            <div class="col-4">
                                <b>Merk Bus</b>
                            </div>
                            <div class="col-8">
                                <b>: </b>{{ $b->merkbus }}
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4">
                                <b>Jumlah Bus</b>
                            </div>
                            <div class="col-8">
                                <b>: </b>{{ $b->jumlahbus }}
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4">
                                <b>Ketersediaan</b>
                            </div>
                            <div class="col-8">
                                <b>: </b>{{ $b->tersedia }}
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="/bus" class='btn btn-outline-primary my-2'> OK </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endsection
