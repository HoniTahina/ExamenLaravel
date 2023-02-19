<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\referentiel;
use App\Models\type;
class ReferentielController extends Controller
{
    //
    public function ajout(){
        return view('ajoutReferentiel');
    }
    public function enregistrer(Request $request){
        $request->validate([
            'libelle' => 'required',
            'validite' => 'required',
            'horaire' => 'required',
            
        ]);
        $type = new type;
        $referentiel = new referentiel;
       
        $referentiel->libelle = request('libelle');
        $referentiel->validite = request('validite');
        $referentiel->horaire = request('horaire');
        $referentiel->save();
        $type->libelle = request('type');
        $type->referentiel_id = $referentiel->id;
        $type->save();
        return redirect('listeReferentiel');
    }
    public function liste(){
        $referentiel = referentiel::all();
        return view('listeReferentiel', ['referentiel'=> $referentiel]);
    }
    public function supprimer($id){
        $referentiel = referentiel::find($id);
        $referentiel->delete();
        return redirect('listeReferentiel');
    }
    public function modifier($id){
        $referentiel = referentiel::find($id);
        return view('modifReferentiel', compact('referentiel'));
    }
    public function maj($id, Request $request){
        $request->validate([
            'libelle' => 'required',
            'validite' => 'required',
            'horaire' => 'required',
            
        ]);
        $referentiel = referentiel::findOrFail($id);
        $referentiel->libelle = request('libelle');
        $referentiel->validite = request('validite');
        $referentiel->horaire = request('horaire');
        $referentiel->update();
        
        return redirect('listeReferentiel');
    }
    public function info($id){
        $referentiel = referentiel::findOrFail($id);
       
        return view('detailReferentiel', compact('referentiel'));
    }
}