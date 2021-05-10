@extends('layouts.app')

@section('title', $formato['titolo'] . ' - La Molisana')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection

@section('content')
    <div class="container">
        <h1>{{$formato['titolo']}}</h1>
    </div>
    <div class="scheda-prodotto">
        <img src="{{$formato['src-h']}}" alt="Pasta Molisana">
        <img src="{{$formato['src-p']}}" alt="Pasta Molisana">
    </div>
    <div class="description">
        <div class="container">
            {!!$formato['descrizione']!!}
            <div class="boxes">
                <div class="box-info">
                    <i class="fas fa-info-circle"></i>
                    <p>{{$formato['tipo']}}</p>
                </div>
                <div class="box-info">
                    <i class="fas fa-clock"></i>
                    <p>{{$formato['cottura']}}</p>
                </div>
                <div class="box-info">
                    <i class="fas fa-weight"></i>
                    <p>{{$formato['peso']}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection