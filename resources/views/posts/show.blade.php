@extends('layouts.app', ['pageTitle' => 'Projets n°'.$post->id])

@section('content')
    <h2>{{$post->title}} <br> Auteur: {{ $post->user->name }} </h2>
    <p>{{$post->content}}</p>
@endsection