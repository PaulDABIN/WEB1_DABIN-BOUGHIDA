@extends('layouts.app', ['pageTitle' => 'Articles n°'.$post->id])

@section('content')
    <div><h2>{{$post->title}} <br> Auteur: {{ $post->user->name }} </h2>
    <p>{{$post->content}}</p>


    </div>

    <div> Ajouter un commentaire</div>

    {!! Form::open(array('url' => '/post', 'method' => 'POST')) !!}

    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::text('title', null, [
            'class' => 'form-control',
            'placeholder' => 'Nom'
        ]) !!}
    </div>


    <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>


    {{-- Champs du formulaire --}}
    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection