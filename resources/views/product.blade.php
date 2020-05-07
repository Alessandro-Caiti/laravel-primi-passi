@php

    $cards = config('products');

    $card = $cards[$id];

@endphp

@extends('layouts.layout')

@section('title')
    La molisana {{$card['titolo']}}
@endsection

@section('main-content')
    <div class="card-prodotto">
        <img src="{{$card['src-h']}}" alt="{{$card['titolo']}}">
        <img src="{{$card['src-p']}}" alt="{{$card['titolo']}}">
        <div class="card-text">
            <div class="text-container">
                <p>{!!$card['descrizione']!!}</p>
            </div>
        </div>
    </div>
@endsection
