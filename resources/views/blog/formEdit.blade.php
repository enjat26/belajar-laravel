@extends('layout.master')

@section('title',$title)

@section('content')
    <h1>Form Edit</h1>
    <form action="/blog/{{$rows->id}}" method="post">
        {{-- <input type="hidden" value="PUT" name="_method"> --}}
        {{ method_field('PUT')}}
        {{ csrf_field() }}
        <input type="text" value="{{ $rows->nama}}" name="nama"><br>
        <input type="text" value="{{ $rows->tahun}}" name="tahun"><br>
        <input type="submit" value="Simpan">
    </form>
    <a href="/blog">kembali</a>
@endsection