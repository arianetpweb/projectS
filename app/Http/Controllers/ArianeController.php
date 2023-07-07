<?php

namespace App\Http\Controllers;

use App\Http\Requests\CvFormRequest;
use App\Models\Curriculum;
use App\Models\Dessert;
use App\Models\Entree;
use App\Models\Plat;
use App\Models\Plats;
use App\Models\Refreshing;
use App\Models\Sauce;
use Illuminate\Http\Request;

class ArianeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('ariane.home');
    }

    public function discover()
    {
         $plats=Plat::all();
        return view('decouvrir',compact('plats'));
    }
    public function african()
    {
        $plats=Plat::all();
        return view('african',compact('plats'));
    }
    public function european()
    {
        return view('european');
    }
    public function commande()
    {
        return view('commande');
    }
    public function reserver()
    {
        return view('reservation');
    }
    public function connexion()
    {
        return view('include.connexion');
    }
    public function mets()
    {
        $plats = Plat::all();
        return view('mets', compact('plats'));
    }
public function entree(){
    $entrees=Entree::all();
    return view('entrees',compact('entrees'));
}
public function dessert(){
    $desserts=Dessert::all();
    return view('dessert',compact('desserts'));
}
public function boisson(){
    $boissons=Refreshing::all();
    return view('drink',compact('boissons'));
}
public function account(){
    return view('inscription');
}

public function traitement(Request $request){
    $credentials = $request->only('email', 'password');

    if (auth()->attempt($credentials)) {
        // Authentification réussie
        return redirect()->route('commande');
    } else {
        // Identifiants invalides
        return redirect()->back()->withErrors(['message' => 'Identifiants invalides']);
    }
}


    public function afficherDonnees()
    {
        $etudiants = Curriculum::all();

        return view('list', ['etudiants' => $etudiants]);
    }
    public function supprimerDonnee($id)
    {
        Curriculum::destroy($id);

        return redirect()->back()->with('message', 'La ligne a été supprimée avec succès.');
    }
    public function editerDonnee($id)
    {
        $etudiants = Curriculum::find($id);

        return view('editer', ['donnee' => $etudiants]);
    }
    public function mettreAJourDonnee(Request $request, $id)
    {
        $donnee = Curriculum::find($id);

        $donnee->matricule = $request->input('matricule');
        $donnee->nom = $request->input('nom');
        $donnee->contact = $request->input('contact');
        $donnee->adresse = $request->input('adresse');
        $donnee->email = $request->input('email');
        $donnee->lieu = $request->input('lieu');
        $donnee->lieu = $request->input('diplome');
        $donnee->lieu = $request->input('annee');
        $donnee->lieu = $request->input('information');
        $donnee->lieu = $request->input('pourcentage');
        $donnee->lieu = $request->input('texte');
        $donnee->lieu = $request->input('description');
        $donnee->lieu = $request->input('langue');

        $donnee->save();

        // Redirigez l'utilisateur vers la page appropriée après la mise à jour
        return redirect()->back()->with('message', 'La ligne a été mise à jour avec succès.');
    }

    public function afficherDetails($id)
    {
        $etudiant = Curriculum::find($id);

        // Retournez la vue des détails avec la donnée à afficher
        return view('details', ['donnee' => $etudiant]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CvFormRequest $request)
    {
        try {
            $curriculum = Curriculum::make($request->all());
            $curriculum->save();

            return redirect()->route('get_register')->with('success', 'Succès');
        } catch (\Throwable $th) {
            return redirect()->route('get_register')->with('error', 'Une erreur a été rencontrée');
        }
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
        //
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
