@extends('layouts.app', ['pageTitle' => 'Edition de l\'article n°'.$post->id])

@section('content')

    <div class="container">
    @include('partials.articles.form', ['action' => 'edit'])
    @include('partials.articles.errors')
    </div>
@endsection