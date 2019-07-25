@extends('layout.master')

@section('title',$title)

@section('content')
    <h1>Belajar Controller</h1>
    <p>ID Ke{{ $id }}</p>
    <a href="/blog">kembali</a>
    <ul>
        @foreach($rows as $r)
            {{ 'Judul Buku : '.$r->nama}}
        @endforeach
    </ul>
@endsection