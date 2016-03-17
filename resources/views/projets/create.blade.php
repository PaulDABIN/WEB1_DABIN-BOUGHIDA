@extends('layouts.app', ['pageTitle' => 'Ajouter un projet'])

@section('content')
    @include('partials.articles.form', ['action' => 'create'])
    @include('partials.articles.errors')
@endsection