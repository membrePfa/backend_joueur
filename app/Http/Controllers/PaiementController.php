<?php

namespace App\Http\Controllers;
use App\Models\Paiement;
use App\Models\Joeur;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Paiement::selectRaw("paiements.id,paiements.joueur_id,paiements.numero_de_carte,paiements.date_expirationcarte, paiements.code_cvv, joeurs.nom as nomJoueur")
        ->join("joeurs","joeurs.id","paiements.joueur_id")
        ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $paiement = new Paiement();
      $paiement->joueur_id= $request->joueur_id;
      $paiement->numero_de_carte = $request->numero_de_carte;
      $paiement->date_expirationcarte= $request->date_expirationcarte;
      $paiement->code_cvv= $request->code_cvv;
     
     
      $paiement->save();
      return response($paiement, Response::HTTP_CREATED);
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
        $paiement = Paiement::find($id);
        $paiement->joueur_id= $request->joueur_id;
        $paiement->numero_de_carte = $request->numero_de_carte;
        $paiement->date_expirationcarte= $request->date_expirationcarte;
        $paiement->code_cvv= $request->code_cvv;
       
       
        $paiement->update();
        return response($paiement, Response::HTTP_ACCEPTED);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paiement = Paiement::find($id);
        $paiement->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
