@extends('layouts.app', ['pageTitle' => 'Formulaire de contact'])
@section('content')
{!! Form::open(array('url' => '/post', 'method' => 'POST')) !!}


{!! Form::token() !!}
{!! Form::label('nom', 'Votre nom') !!}
{!! Form::label('prénom', 'Votre prénom') !!}

{!! Form::text('name_du_champs', 'value',
['class', 'maClasse', 'placeholder', 'Mon champs']) !!}

{{-- Champs du formulaire --}}
{!! Form::submit('Envoyer') !!}
{!! Form::close() !!}
@endsection