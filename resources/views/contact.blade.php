@extends('layouts.app', ['pageTitle' => 'Formulaire de contact'])
@section('content')
{!! Form::open(array('url' => '/post', 'method' => 'POST')) !!}

{!! Form::token() !!}

<div class="form-group">
    {!! Form::text('title', null, [
        'class' => 'form-control',
        'placeholder' => 'Prenom'
    ]) !!}
</div>

<div class="form-group">
    {!! Form::text('title', null, [
        'class' => 'form-control',
        'placeholder' => 'Nom'
    ]) !!}
</div>

<div class="form-group">
    {!! Form::email('title', null, [
        'class' => 'form-control',
        'placeholder' => 'Mail'
    ]) !!}
</div>

<div class="form-group">
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>



{{-- Champs du formulaire --}}
{!! Form::submit('Envoyer') !!}
{!! Form::close() !!}
@endsection