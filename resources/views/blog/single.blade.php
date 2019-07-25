@extends('layout.master')

@section('title',$title)

@section('content')
    <h1>Belajar Controller</h1>
    <p>Ini adalah link {{ $id }}</p>
    <p>Nama {{ $nama }}</p>
    <ul>
        @foreach($hewan as $h)
            <li>{{ $h }}</li>
        @endforeach
    </ul>
@endsection