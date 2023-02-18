<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candidat;
use App\Models\formation;
use App\Models\candidat_formation;

class CandidatController extends Controller
{
    //
    public function ajout(){
        return view('ajoutCandidat');
    }
    public function enregistrer(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'age' => 'required',
            
        ]);
        $candidat = new candidat;
        $candidat->nom = request('nom');
        $candidat->prenom = request('prenom');
        $candidat->email = request('email');
        $candidat->age = request('age');
        $candidat->niveauEtude = request('niveauEtude');
        $candidat->sexe = request('sexe');
        $candidat->save();
        return redirect('listeCandidat');
    }
    public function liste(){
        $candidat = candidat::all();
        return view('listeCandidat', ['candidat'=> $candidat]);
    }
    public function supprimer($id){
        $candidat = candidat::findOrFail($id);
        $candidat->delete();
        return redirect('listeCandidat');
    }
    public function modifier($id){
        $candidat = candidat::findOrFail($id);
        return view('modifCandidat', compact('candidat'));
    }
    public function maj($id, Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'age' => 'required',
            
        ]);
        $candidat = candidat::findOrFail($id);
        $candidat->nom = request('nom');
        $candidat->prenom = request('prenom');
        $candidat->email = request('email');
        $candidat->age = request('age');
        $candidat->niveauEtude = request('niveauEtude');
        $candidat->sexe = request('sexe');
        $candidat->update();
        
        return redirect('listeCandidat');
    }
    public function detail($id){
        $candidat = candidat::findOrFail($id);
        $formation = formation::all();
        return view ('detailCandidat', compact('candidat'), compact('formation'));
    }
    public function ajoutFormation($id){
        $f = new candidat_formation;
        $f->candidat_id = $id;
        $f->formation_id = request('formation');
        $f->save();
        return redirect('plus/'. $id);
    }
}