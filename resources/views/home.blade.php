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
    <div class="btn-fumetti">
        <span>LOAD MORE</span> 
    </div>
</div>
@endsection


{{-- proseguire da qui  --}}
@section('more-comics')
<div class="info">
    <div class="info-container">
        @foreach ($infos as $info)
            <div class="info-card">
                <div class="info-foto">
                    <img src="{{$info['path']}}" alt="">
                </div>
                <div class="info-text">
                    <span>{{$info['text']}}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

