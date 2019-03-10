@extends('layoutAyat')
@section('title')
    Input Ayat
@endsection
@section('content')
    Input Ayat </br></br>
    <form action="{{ url('dataTafsir') }}" method="POST">
        {{ csrf_field() }}
        Juz:<br>
        <input type="text" name="juz"><br>
        Nama Surat:<br>
        <input type="text" name="surat"><br>
        No Ayat:<br>
        <input type="text" name="noAyat"><br>
        Ayat:<br>
        <textarea name="ayat" style="font-size:37px;"></textarea><br>
        Latin:<br>
        <textarea name="latin"></textarea><br>
        Terjemahan:<br>
        <textarea name="terjemahan"></textarea><br>
        Tafsir Ibnu Katsir:<br>
        <textarea name="tafsirIbnuKatsir"></textarea><br>
        <br><br>
        <input type="submit" value="Submit">
    </form>
@endsection