@extends('layout.master')

@section('title', $title)

@section('content')
    <h1>Blog pertama</h1>
    <a href="/blog/create">Tambah Data</a>
    <ul>
        @foreach ($rows as $r)
    <li><a href="{{ 'blog/'.$r->id }}">{{ $r->nama }}</a> <b><a href="{{ 'blog/'.$r->id.'/formEdit'}}">Edit</a> | <a href="{{ 'blog/'.$r->id.'/delete'}}">Hapus</a></b></li>
        @endforeach
    </ul>
@endsection

