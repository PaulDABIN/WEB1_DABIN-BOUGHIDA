@extends('layouts.app', ['pageTitle' => 'Edition du projet n°'.$post->id])

@section('content')
    @include('partials.articles.form', ['action' => 'edit'])
    @include('partials.articles.errors')
@endsection