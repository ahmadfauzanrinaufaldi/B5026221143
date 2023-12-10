@extends('master')
@section('title', 'Tambah Data Bus')
@section('konten')

    <body>

        <h3>Tambah Bus Baru</h3>

        <a href="/bus" class="btn btn-outline-primary"> Kembali</a>

        <br>
        <br>

        <form action="/bus/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="merkbus" class="col-sm-2 col-form-label mr-2">Merk bus</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="merkbus" name="merkbus">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlahbus" class="col-sm-2 col-form-label mr-2">Jumlah Bus</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="jumlahbus" name="jumlahbus">
                </div>
            </div>
            <div>
                <input type="hidden" id="tersedia">
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success my-2">
        </form>bus
    @endsection
