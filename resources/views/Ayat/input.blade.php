@extends('layoutAyat')
@section('title')
    Input Ayat
@endsection
@section('content')
    Input Ayat </br></br>
    <form action="{{ url('ayat') }}" method="POST">
        {{ csrf_field() }}
        Juz:<br>
        <input type="text" name="juz"><br>
        Nama Surat:<br>
        <input type="text" name="surat"><br>
        Ayat:<br>
        <textarea name="ayat"></textarea><br>
        Latin:<br>
        <textarea name="latin"></textarea><br>
        Terjemahan:<br>
        <textarea name="terjemahan"></textarea><br>
        <br><br>
        <input type="submit" value="Submit">
    </form>
@endsection