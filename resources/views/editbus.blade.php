@extends('master')
@section('title', 'Edit Data Bus')
@section('konten')

    <body>

        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Edit Data Bus</h3>

        <a href="/bus" class="btn btn-primary my-3"> Kembali</a>

        <br>
        <br>

        @foreach ($bus as $b)
            <form action="/bus/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="kodebus" value="{{ $b->kodebus }}">

                <div class="form-group row">
                    <label for="merkbus" class="col-sm-2 col-form-label mr-2">Merk Bus</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" required="required" name="merkbus"
                            value="{{ $b->merkbus }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jumlahbus" class="col-sm-2 col-form-label mr-2">Stock Bus</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" required="required" name="jumlahbus"
                            value="{{ $b->jumlahbus }}">
                    </div>
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>
        @endforeach
    </body>
@endsection
