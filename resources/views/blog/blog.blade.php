@extends('layout.master')

@section('title', $title)

@section('content')
    <h1>Blog pertama</h1>
    <ul>
        @foreach ($rows as $key => $value)
            <li><a href="{{ 'blog/'.$key }}">{{ $value }}</a></li>
        @endforeach
    </ul>
@endsection

