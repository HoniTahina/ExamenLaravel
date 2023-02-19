<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formation;
use App\Models\formation_referentiel;
use App\Models\referentiel;
class FormationController extends Controller
{
    //
    public function ajout(){
        $referentiel = referentiel::all();
        
        return view('ajoutFormation', compact('referentiel'));
    }
    public function enregistrer(Request $request){
        $request->validate([
            'nom' => 'required',
            'duree' => 'required',
            'description' => 'required',
            'dateDebut' => 'required',
            
        ]);
        $formation = new formation;
        $formation->nom = request('nom');
        $formation->duree = request('duree');
       
        $formation->description = request('description');
        $formation->isStarted = request('isStarted');
        $formation->dateDebut = request('dateDebut');
        
        $formation->save();
        return redirect('listeFormation');
    }
    public function liste(){
        $formation = formation::all();
        return view('listeFormation', ['formation'=> $formation]);
    }
    public function supprimer($id){
        $formation = formation::findOrFail($id);
        $formation->delete();
        return redirect('listeFormation');
    }
    public function modifier($id){
        $formation = formation::find($id);
        $referentiel = referentiel::all();
        return view('modifFormation', compact('formation'), compact('referentiel'));
    }
    public function maj($id, Request $request){
        $request->validate([
            'nom' => 'required',
            'duree' => 'required',
            'description' => 'required',
            'dateDebut' => 'required',
            
        ]);
        $formation = formation::findOrFail($id);
        $formation->nom = request('nom');
        $formation->duree = request('duree');
        $formation->description = request('description');
        $formation->isStarted = request('isStarted');
        $formation->dateDebut = request('dateDebut');
        $formation->update();
        
        return redirect('listeFormation');
    }
        
        public function detail($id){
            $formation = formation::findOrFail($id);
            $referentiel = referentiel::all();
            return view ('detailFormation', compact('referentiel'), compact('formation'));
        }
        public function ajoutReferentiel($id){
            $f = new formation_referentiel();
            $f->formation_id = $id;
            $f->referentiel_id = request('referentiel');;
            $f->save();
            return redirect('plusReferentiel/'. $id);

        }
    //
}