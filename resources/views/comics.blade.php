@extends('layouts.app')

@section('fumetti')
    @foreach ($comics as $comic)
        <h1>{{$comic['title']}}</h1>
        <p>{{$comic['price']}}</p>
    @endforeach
@endsection