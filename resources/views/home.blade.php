@extends('layouts.app')

@section('current-series')
<div class="back-area-fumetti">
    <div class="container-cards">
        @foreach ($comics as $comic)
            <div class="card">
                <div class="card-img">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
                <div class="text-card">
                    <p>{{$comic['title']}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection


{{-- proseguire da qui  --}}
@section('more-comics')
    
@endsection

