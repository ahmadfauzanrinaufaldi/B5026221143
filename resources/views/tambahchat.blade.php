@extends('master')

@section('title', 'Chat Emoticon')

@section('konten')


    <h3>Chat Emoticon</h3>

    <a href="/chat"> Kembali</a>

    <br />
    <br />

    <form action="/chat/storechat" method="post" class="form-horizontal">
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

        <input type="submit" value="Simpan Data">
    </form>

@endsection
