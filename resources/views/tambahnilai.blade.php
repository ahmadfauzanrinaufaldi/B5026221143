@extends('master')

@section('title', 'Nilai Kuliah')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Nilai Kuliah</h3>

    <a href="/nilaikuliah"> Kembali</a>

    <br />
    <br />

    <form action="/nilaikuliah/storenilai" method="post" class="form-horizontal">
        {{ csrf_field() }}
        {{-- <div class="form-group row">
            <label for="id" class="col-xl-1 col-form-label mr-2">ID</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" id="id" name="id">
            </div>
        </div> --}}
        <div class="form-group row">
            <label for="nrp" class="col-xl-1 col-form-label mr-2">NRP</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="nrp" name="nrp">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilaiangka" class="col-xl-1 col-form-label mr-2">NilaiAngka</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" id="nilaiangka" name="nilaiangka">
            </div>
        </div>
        <div class="form-group row">
            <label for="sks" class="col-xl-1 col-form-label mr-2">SKS</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" id="sks" name="sks"> <br />
            </div>
        </div>
        <input type="submit" value="Simpan Data">
    </form>

@endsection
