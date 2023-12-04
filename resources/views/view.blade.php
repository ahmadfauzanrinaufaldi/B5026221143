@extends('master')
@section('title', 'View Data Pegawai')
@section('konten')

    <body>
        <div class="text-center my-3">
            <h1>Data Pegawai</h1>
        </div>

        @foreach ($pegawai as $p)
            <div class="container">
                <div class="row">
                    <div class="col-6 py-5 px-0">
                        <div class="border border-primary rounded my-auto ml-auto mr-5"
                            style="display:block; width:300px; height: 400px; border-width: 2px !important">
                        </div>
                    </div>
                    <div class="col-6 py-5 px-0 m-auto">
                        <div class="row my-2">
                            <div class="col-4">
                                <b>Nama</b>
                            </div>
                            <div class="col-8">
                                <b>: </b>{{ $p->pegawai_nama }}
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4">
                                <b>Jabatan</b>
                            </div>
                            <div class="col-8">
                                <b>: </b>{{ $p->pegawai_jabatan }}
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4">
                                <b>Umur</b>
                            </div>
                            <div class="col-8">
                                <b>: </b>{{ $p->pegawai_umur }}
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4">
                                <b>Alamat</b>
                            </div>
                            <div class="col-8">
                                <b>: </b>{{ $p->pegawai_alamat }}
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="/pegawai" class='btn btn-outline-primary my-2'> OK </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endsection
