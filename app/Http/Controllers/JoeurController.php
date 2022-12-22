<?php

namespace App\Http\Controllers;
use App\Models\Joeur;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JoeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Joeur::all();
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
      $joeur = new Joeur();
      $joeur->nom= $request->nom;
      $joeur->prenom = $request->prenom;
      $joeur->adresse= $request->adresse;
      $joeur->quartier= $request->quartier;
      $joeur->ville= $request->ville;
      $joeur->email= $request->email;
      $joeur->telephone= $request->telephone;
     
      $joeur->save();
      return response($joeur, Response::HTTP_CREATED);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $joeur= Joeur::find($id);
      
        $joeur->nom= $request->nom;
        $joeur->prenom = $request->prenom;
        $joeur->adresse= $request->adresse;
        $joeur->quartier= $request->quartier;
        $joeur->ville= $request->ville;
        $joeur->email= $request->email;
        $joeur->telephone= $request->telephone;
        $joeur->update();
       return response($joeur, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $joeur = Joeur::find($id);
       $joeur->delete();
       return response(null,Response::HTTP_NO_CONTENT);

    }
}
