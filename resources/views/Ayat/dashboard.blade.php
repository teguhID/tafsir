@extends('layoutAyat')
@section('title')
    Dashboard Ayat
@endsection
@section('content')
List Ayat </br></br>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Juz</th>
            <th>Surat</th>
            <th>Ayat</th>
            <th>Latin</th>
            <th>terjemahan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->juz}}</td>
            <td>{{$item->surat}}</td>
            <td>{{$item->ayat}}</td>
            <td>{{$item->latin}}</td>
            <th>{{$item->terjemahan}}</th>
            <td>
                <a href="{{ url('/ayat/' . $item->id) . '/edit' }}" class="btn btn-info btn-xs"> Edit </a>
                
                <form action="{{ url('ayat/' . $item->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-warning btn-xs" onclick="return confirm('Yalin Ingin Hapus {{ $item->nama }} ?')" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection