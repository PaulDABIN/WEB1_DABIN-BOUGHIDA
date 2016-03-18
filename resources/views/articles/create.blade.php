@extends('layouts.app', ['pageTitle' => 'Ajouter un article'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
    @include('partials.articles.form', ['action' => 'create'])
    @include('partials.articles.errors')
    </div>
    </div>
    </div>
@endsection