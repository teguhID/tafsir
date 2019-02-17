@extends('layoutIbnuKatsir')
@section('title')
    Edit Ayat
@endsection
@section('content')
    Edit Ayat </br></br>
    <form action="{{ url('ibnuKatsir/' . $data->id) }}" method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        Nama Surat:<br>
        <input type="text" name="surat" value="{{ $data->surat }}"><br>
        Ayat:<br>
        <input type="number" name="ayat" value="{{ $data->ayat }}"><br>
        Tafsir:<br>
        <textarea name="tafsir">{{ $data->tafsir }}</textarea><br>
        <br><br>
        <input type="submit" value="Submit">
    </form>
@endsection