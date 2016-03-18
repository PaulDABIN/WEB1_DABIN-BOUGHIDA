<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Projet;
use Illuminate\Support\Facades\Auth;
class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        return view('projet.index')->with(compact('projets'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->lists('name', 'type',
            'descriptif', 'context', 'objectif', 'contrainte');
        return view('projet.create')->with(compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ProjetRequest $request)
    {
        $projet = new Projet;
        $projet->user_id       = Auth::user()->id;
        $projet->username      = Auth::user()->name;
        $projet->id            = $request->id;
        $projet->validate      = $request->validate;
        $projet->name          = $request->name;
        $projet->type          = $request->type;
        $projet->typeother     = $request->typeother;
        $projet->descriptif    = $request->descriptif;
        $projet->context       = $request->context;
        $projet->objectif      = $request->objectif;
        $projet->contrainte    = $request->contrainte;
        $projet->save();
        return redirect()
            ->route('projet.show', $projet->id)
            ->with(compact('projet'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $projet = Projet::findOrFail($id);
            return view('projet.show')->with(compact('projet'));
        }catch(\Exception $e){
            return redirect()->route('projet.index')->with(['erreur'=>'Whoooooops']);
        }
        return view('projet.show')->with(compact('projet'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projet   = Projet::find($id);
        $users  = User::all()->lists('name', 'id')  ;
        return view('projet.edit')->with(compact('projet', 'users'));    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $projet = Projet::find($id);
        $projet->validate      = $request->validate;
        $projet->name          = $request->name;
        $projet->username      = $request->username;
        $projet->type          = $request->type;
        $projet->typeother     = $request->typeother;
        $projet->descriptif    = $request->descriptif;
        $projet->context       = $request->context;
        $projet->objectif      = $request->objectif;
        $projet->contrainte    = $request->contrainte;
        $projet->descriptif     = $request->descriptif;
//        $projet->user_id = $request->user_id;
        $projet->save();
        return redirect()->route('projet.show', $projet->id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}