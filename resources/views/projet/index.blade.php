@extends('layouts.app')

@section('content')
    @if(Session::has('erreur'))
        <h1>{{Session::get('erreur')}}</h1>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">IIM - Bourse au projet</div>

                    @foreach($projets as $projet)

                        @if(Auth::check() && Auth::user()->id == $projet->user_id)

                            <div class="thumbnail col-md-3" style="margin-right:20px; min-height:200px">

                                <a href="{{route('projet.show', $bap->id)}}">
                                    <div class="description" style="font-size:1.4em;">
                                        {{$projet->id}}. {{$projet->name}}
                                    </div>
                                </a>
                                <a href="{{$projet->username}}}}"><p>{{$projet->username}}</p></a>
                                <p>Type de projet {{$projet->type}}</p>


                                <a href="{{ route('projet.edit', $projet->id)}}" class="btn btn-success btn-line btn-rect">
                                    <i class="fa fa-pencil">Editer</i>
                                </a>

                                <br/>
                                <br/>


                                <div class="text-center"
                                     @if($projet->validate == 1)
                                     style="position:absolute; bottom:0; color:green;"><i class="fa fa-check">Projet validé</i>
                                    @else
                                        style="position: absolute; bottom: 0; color:red;"><i class="fa fa-close">Projet non validé</i>
                                    @endif
                                </div>
                            </div>
                        @else
                        @endif

                    @endforeach
                </div>
            </div>
@endsection