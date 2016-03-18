@if($action == 'edit')
    {!! Form::model($post, ['route' => ['projets.update', $post->id], 'method' => 'PUT']) !!}
@else
    {!! Form::open(['route' => 'projet', 'method' => 'POST']) !!}
@endif
    <div class="form-group">
        {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::text('title', null, [
            'class' => 'form-control',
            'placeholder' => 'Titre du projet'
        ]) !!}
    </div>

<div class="form-group">
    {!! Form::text('title', null, [
        'class' => 'form-control',
        'placeholder' => 'Prenom'
    ]) !!}
</div>

    <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
{!! Form::close() !!}