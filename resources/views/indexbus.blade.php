@extends('master')
@section('title', 'Tabel bus')
@section('konten')

    <h1 class="text-center">Data bus</h1>
    <a href="/bus/tambah" class='btn btn-primary mb-3'> + Bus Baru</a>
    <br>

    <p>Cari Nama Bus Berdasarkan Nama:</p>
    <form action="/bus/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Bus .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input class="btn btn-primary my-3" type="submit" value="CARI">
    </form>
    <br>

    <table class="table table-striped table-hover text-center">
        <tr>
            <th>Kode Bus</th>
            <th>Merk Bus</th>
            <th>Jumlah Bus</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($bus as $b)
            <tr>
                <td>{{ $b->kodebus }}</td>
                <td>{{ $b->merkbus }}</td>
                <td>{{ $b->jumlahbus }}</td>
                <td>
                    @if ($b->tersedia == 'Y')
                        Y
                    @else
                        N
                    @endif
                </td>
                <td>
                    <a href="/bus/view/{{ $b->kodebus }}" class='btn btn-success'>View</a>
                    |
                    <a href="/bus/edit/{{ $b->kodebus }}" class='btn btn-warning'>Edit</a>
                    |
                    <a href="/bus/hapus/{{ $b->kodebus }}" class='btn btn-danger'>Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $bus->links() }}
@endsection
