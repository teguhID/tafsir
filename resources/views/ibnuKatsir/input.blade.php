@extends('layoutIbnuKatsir')
@section('title')
    Input Ayat
@endsection
@section('content')
    Input Tafsir Ibnu Katsir </br></br>
    <form action="{{ url('ibnuKatsir') }}" method="POST">
        {{ csrf_field() }}
        Nama Surat:<br>
        <input type="text" name="surat"><br>
        Ayat:<br>
        <input type="number" name="ayat"><br>
        Tafsir:<br>
        <textarea name="tafsir"></textarea><br>
        <br><br>
        <input type="submit" value="Submit">
    </form>
@endsection