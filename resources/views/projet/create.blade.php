@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Nouveau Projet</div>

                </div>
                <h1>Remplissez ce formulaire</h1>
                <div class="panel panel-default">

                    <div class="panel-body">


                        {!! Form::open(['route' => 'projet.store', 'method' => 'POST']) !!}

                        <div class="form-group">
                            {!! Form::text('name', null, [
                            'class' => 'form-control',
                            'placeholder' => 'Ex: Campagne de pub'
                            ]) !!}
                        </div>



                        <div class="form-group">
                            <label>Type de projet</label>


                            {!! Form::select('type', array(
                            'business_plan' =>'Business Plan',
                            '3d' =>'3D',
                            'print' =>'Print',
                            'multimedia' =>'Installation Multimédia',
                            'jeu_video' =>'Jeu Vidéo',
                            'site_internet' => 'Site Internet',
                            'dvd' =>'DVD',
                            'evenement' =>'Evenement',
                            'cd-rom' =>'CD-ROM',
                            'appel_doffre' =>'Appel d\'offre',
                            '2d' =>'2D'


                            ),[
                            'class' => 'form-control', 'style'=>'display:inline;'])
                            !!}

                            <br/>
                            <br/>


                            {!! Form::text('typeother', null, [
                                  'class' => ' ',
                                  'placeholder' => 'Autres'
                              ]) !!}

                        </div>

                        <label for="">Descriptif du projet</label>
                        {!! Form::text('descriptif', null, [
                                  'class' => 'form-control',
                                  'placeholder' => 'Détails du projet'
                              ]) !!}

                        <label for="">Contexte de la demande</label>
                        {!! Form::text('context', null, [
                                  'class' => 'form-control',
                                  'placeholder' => 'Précision sur l\'environnement du projet'
                              ]) !!}

                        <label for="">Vos objetifs</label>
                        {!! Form::text('objectif', null, [
                                  'class' => 'form-control',
                                  'placeholder' => 'Objectifs du projet'
                              ]) !!}

                        <label for="">Contraintes particulières</label>
                        {!! Form::text('contrainte', null, [
                                  'class' => 'form-control',
                                  'placeholder' => 'Les contraintes du projet'
                              ]) !!}

                        <span style="display:none;">
                                    {!! Form::number('validate','0') !!}}
                                </span>
                        <br/>

                        {!! Form::submit('Envoyer', ['class' => ' form-control']) !!}

                        {!! Form::close() !!}

                        @if($errors)
                            <br>
                            <div class="alert-warning">
                                @foreach($errors->all() as $error)
                                    <p>{{$error}}</p>
                                @endforeach
                            </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection