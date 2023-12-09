@extends('master')

@section('title', 'Nilai Kuliah')

@section('konten')
    <h2>www.malasngoding.com</h2>
    <h3>Nilai Kuliah</h3>

    <a href="/nilaikuliah/tambahnilai" class="btn btn-primary"> + Tambah Nilai</a>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>NilaiAngka</th>
            <th>SKS</th>
            <th>NilaiHuruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NIlaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if ($n->NIlaiAngka <= 40)
                    D
                @elseif ($n->NIlaiAngka <= 60)
                    C
                @elseif ($n->NIlaiAngka <= 80)
                    B
                @else
                    A
                @endif
                </td>
                <td>
                    {{ $n->NIlaiAngka * $n->SKS }}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
