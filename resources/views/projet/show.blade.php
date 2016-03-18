@extends('layouts.app')

@section('content')
    @if(Auth::check() && Auth::user()->id == $projet->user_id)

        <div class="container">
            Votre projet
            <h1>{{$projet->name}}</h1>
            <p> Auteur: {{ $projet->username }}</p>
            <p><b>Descriptif: </b>{{$projet->descriptif}}</p>
            <p><b>Context: </b>{{$projet->context}}</p>
        </div>
    @else
        Pas de posts correspondant à cet user_id

    @endif
@endsection