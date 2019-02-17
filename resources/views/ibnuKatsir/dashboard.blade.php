@extends('layoutIbnuKatsir')
@section('title')
    Dashboard Ibnu Katsir
@endsection
@section('content')
    List Ibnu Katsir </br></br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Surat</th>
                <th>Ayat</th>
                <th>Tafsir</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($data as $item)
                <td>{{$item->id}}</td>
                <td>{{$item->surat}}</td>
                <td>{{$item->ayat}}</td>
                <td>{{$item->tafsir}}</td>
                <td>
                    <a href="{{ url('/ibnuKatsir/' . $item->id) . '/edit' }}" class="btn btn-info btn-xs"> Edit </a>
                    
                    <form action="{{ url('ibnuKatsir/' . $item->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-warning btn-xs" onclick="return confirm('Yalin Ingin Hapus tafsir {{ $item->surat . ' ' . $item->ayat }} ?')" value="Delete">
                    </form>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
@endsection
