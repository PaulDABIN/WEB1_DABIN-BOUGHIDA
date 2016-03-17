@extends('layouts.app', ['pageTitle' => 'Edition de l\'article n°'.$post->id])

@section('content')
    @if($errors)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif


    @if($action == 'edit')
        {!! Form::model($post, ['route' => ['porjets.update', $post->id], 'method' => 'PUT']) !!}
    @else
        {!! Form::open(['route' => 'projets.store', 'method' => 'POST']) !!}
    @endif
    <div class="form-group">
        {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::text('title', null, [
            'class' => 'form-control',
            'placeholder' => 'Nom du projet'
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
    {!! Form::close() !!}
@endsection