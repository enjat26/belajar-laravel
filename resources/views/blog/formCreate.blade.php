@extends('layout.master')

@section('title',$title)

@section('content')
    <h1>Form Create</h1>
    <form action="/blog" method="post">
        {{ csrf_field() }}
        <input type="text" name="nama"><br>
        <input type="text" name="tahun"><br>
        <input type="submit" value="Simpan">
    </form>
    <a href="/blog">kembali</a>
@endsection