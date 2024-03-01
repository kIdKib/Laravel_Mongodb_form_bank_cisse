<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User;

        $user->adr_employeur = $request->adr_employeur;
        $user->adr_post_amployeur= $request->adr_post_amployeur;
        $user->adresse_postale = $request->adresse_postale;
        $user->autres_revenu = $request->autres_revenu;
        $user->birthday = $request->birthday;
        $user->civilite = $request->civilite;
        $user->conjoint_nom = $request->conjoint_nom;
        $user->conjoint_prenom = $request->conjoint_prenom;
        $user->country = $request->country;
        $user->date_etablissement = $request->date_etablissement;
        $user->e_mail = $request->e_mail;
        $user->employeur = $request->employeur;
        $user->fonction = $request->fonction;
        $user->leu_etablissement = $request->leu_etablissement;
        $user->lieu_naissance = $request->lieu_naissance;
        $user->localisation_géo = $request->localisation_géo;
        $user->loyer = $request->loyer;
        $user->mere_nom = $request->mere_nom;
        $user->mere_prenom = $request->mere_prenom;
        $user->nationnalite = $request->nationnalite;
        $user->nom = $request->nom;
        $user->pack = $request->pack;
        $user->pays = $request->pays;
        $user->pays_resi_employeur = $request->pays_resi_employeur;
        $user->pere_nom = $request->pere_nom;
        $user->pere_prenom = $request->pere_prenom;
        $user->pesion_retraite = $request->pesion_retraite;
        $user->piece_id = $request->piece_id;
        $user->prenom = $request->prenom;
        $user->salaire = $request->salaire;
        $user->secteur_employeur = $request->secteur_employeur;
        $user->situa_matrimoniale = $request->situa_matrimoniale;
        $user->statut_salar = $request->statut_salar;
        $user->tel_bureau = $request->tel_bureau;
        $user->tel_domicile = $request->tel_domicile;
        $user->tel_employeur = $request->tel_employeur;
        $user->tel_mobile = $request->tel_mobile;
        $user->type_compte = $request->type_compte;
        $user->type_pack = $request->type_pack;
        $user->validite = $request->validite;

        $user->save();

        return response()->json(["result" => "ok"], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
