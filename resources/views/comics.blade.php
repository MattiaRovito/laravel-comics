@extends('layouts.app')
@section('title','Current Series')

@section('content')
    <h1>Current Series</h1>
    <div class="container">
        <div class="row">
            @foreach($series as $serie)
            <div class="col-3">
                
                <img src="{{ $serie['thumb']}}" alt="{{ $serie['title']}}" class="box">
                
                <h2>
                    <a href=""> {{ $serie['series']}} </a>
                </h2>
            </div>
                
            @endforeach
        </div>
    </div>
@endsection