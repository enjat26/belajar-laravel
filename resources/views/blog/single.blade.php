@extends('layout.master')

@section('title',$title)

@section('content')
    <h1>Belajar Controller</h1>
    <p>ID Ke{{ $id }}</p>
    <a href="/blog">kembali</a>
    <ul>
        Judul Buku :  {{ $rows->nama }}
        {{-- @foreach($rows as $r)
            {{ ''.$r->nama}}
        @endforeach --}}
    </ul>
@endsection