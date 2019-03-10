@extends('layoutAyat')
@section('title')
    Dashboard Ayat
@endsection
@section('content')
List Ayat </br></br>
<table border="1" id="example">
    <thead>
        <tr>
            <th>No</th>
            <th>Juz</th>
            <th>Surat</th>
            <th>No Ayat</th>
            <th>Ayat</th>
            <th>Latin</th>
            <th>Terjemahan</th>
            <th>Tafsir Ibnu Katsir</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->juz}}</td>
            <td>{{$item->surat}}</td>
            <td>{{$item->noAyat}}</td>
            <td><p dir="rtl" lang="ar">{{$item->ayat}}</p></td>
            <td>{{$item->latin}}</td>
            <th>{{$item->terjemahan}}</th>
            <th>
                <a href="{{ url('/dataTafsir/' . $item->id) }}"> Tafsir </a>
            </th>
            <td>
                <a href="{{ url('/dataTafsir/' . $item->id) . '/edit' }}" class="btn btn-info btn-xs"> Edit </a>
                
                <form action="{{ url('dataTafsir/' . $item->id) }}" method="POST">
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

<style type="text/css">
    @import url(https://fontlibrary.org/face/droid-arabic-naskh);
    p { 
        font-family: 'DroidArabicNaskhRegular'; 
        font-weight: normal; 
        font-style: normal; 
    }
</style>

    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script>
    $(function(){
        $("#example").dataTable();
    })
    </script>