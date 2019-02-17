@extends('layoutAyat')
@section('title')
    Edit Ayat
@endsection
@section('content')
    Edit Ayat </br></br>
    <form action="{{ url('ayat/' . $data->id) }}" method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        Juz:<br>
        <input type="text" name="juz" value="{{ $data->juz }}"><br>
        Nama Surat:<br>
        <input type="text" name="surat" value="{{ $data->surat }}"><br>
        Ayat:<br>
        <textarea name="ayat">{{ $data->ayat }}</textarea><br>
        Latin:<br>
        <textarea name="latin">{{ $data->latin }}</textarea><br>
        Terjemahan:<br>
        <textarea name="terjemahan">{{ $data->terjemahan }}</textarea><br>
        <br><br>
        <input type="submit" value="Submit">
    </form>
@endsection