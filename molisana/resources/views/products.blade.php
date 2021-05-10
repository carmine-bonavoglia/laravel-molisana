@extends('layouts.app')

@section('name', 'La Molisana - Prodotti')

@section('content')
    <div class="container">
        <div class="card-container">
            @foreach ($formati as $formato)
                <div class="card">
                    <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                    <div class="overlay">
                        <a href="#">{{$formato['titolo']}}</a> 
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection