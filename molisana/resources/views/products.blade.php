@extends('layouts.app')

@section('title', 'La Molisana - Prodotti')

@section('content')
    <div class="container">
        @foreach ($formati as $tipo => $formato)
        <h2>{{$tipo}}</h2>
        <div class="card-container">
            @foreach ($formato as $key => $item)
            <div class="card">
                <img src="{{$item['src']}}" alt="{{$item['titolo']}}">
                <div class="overlay">
                    <a href="{{route('pagina-dettagli', ['id' => $key])}}">{{$item['titolo']}}</a> 
                </div>
            </div>
            @endforeach
        @endforeach
        </div>
    </div>
@endsection