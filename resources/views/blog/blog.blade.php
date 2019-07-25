@extends('layout.master')

@section('title', $title)

@section('content')
    <h1>Blog pertama</h1>
    <ul>
        @foreach ($rows as $r)
            <li><a href="{{ 'blog/'.$r->Id }}">{{ $r->nama }}</a></li>
        @endforeach
    </ul>
@endsection

