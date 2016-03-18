@extends('layouts.app', ['pageTitle' => 'Articles n°'.$post->id])

@section('content')
    <h2>{{$comments->id}}</h2>
    <p>{{$comments->comment}}</p>
@endsection