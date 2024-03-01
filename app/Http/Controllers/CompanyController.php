<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
        $company = new Company;

        $company->Accord_transmission_données_IRS = $request->Accord_transmission_données_IRS;
        $company->Adresse = $request->Adresse;
        $company->Adresse_postale = $request->Adresse_postale;
        $company->Adresse_électronique = $request->Adresse_électronique;
        $company->Bénéficiaire_ultime = $request->Bénéficiaire_ultime;
        $company->Capital = $request->Capital;
        $company->Chiffres_affaires = $request->Chiffres_affaires;
        $company->Civilité = $request->Civilité;
        $company->Code_BCT = $request->Code_BCT;
        $company->Date_création = $request->Date_création;
        $company->Date_dernière_requisition = $request->Date_dernière_requisition;
        $company->Date_naissance = $request->Date_naissance;
        $company->Fonction_perso_desgn = $request->Fonction_perso_desgn;
        $company->Forme_juridique = $request->Forme_juridique;
        $company->Identite_rais_sociale = $request->Identite_rais_sociale;
        $company->Lieu_création = $request->Lieu_création;
        $company->Lieu_naissance = $request->Lieu_naissance;
        $company->Localisation_géographique = $request->Localisation_géographique;
        $company->Nationalité = $request->Nationalité;
        $company->Nom = $request->Nom;
        $company->Nom_gérant = $request->Nom_gérant;
        $company->Nom_jeune_fille = $request->Nom_jeune_fille;
        $company->Numéro_groupe = $request->Numéro_groupe;
        $company->Numéro_téléphone = $request->Numéro_téléphone;
        $company->Origine_capital = $request->Origine_capital;
        $company->Pays_Nationalité = $request->Pays_Nationalité;
        $company->Pays_naissance = $request->Pays_naissance;
        $company->Raison_sociale = $request->Raison_sociale;
        $company->Requisition = $request->Requisition;
        $company->Secteur_d’activités = $request->Secteur_d’activités;
        $company->Sigle = $request->Sigle;
        $company->Siège_social = $request->Siège_social;
        $company->Société_bourse = $request->Société_bourse;
        $company->Trois_four_majeurs = $request->Trois_four_majeurs;
        $company->Type_consultation = $request->Type_consultation;
        $company->Type_transactions = $request->Type_transactions;
        $company->activités = $request->activités;
        $company->birthday_group = $request->birthday_group;
        $company->capital_detenu = $request->capital_detenu;
        $company->compte_contribuable = $request->compte_contribuable;
        $company->déclaration_BIC = $request->déclaration_BIC;
        $company->nom_perso_desgn = $request->nom_perso_desgn;
        $company->pays = $request->pays;
        $company->pays_pays_naissance = $request->pays_pays_naissance;
        $company->prenom = $request->prenom;
        $company->registre_commerce = $request->registre_commerce;
        $company->type_compte = $request->type_compte;
        $company->user_type = $request->user_type;


        $company->save();

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
