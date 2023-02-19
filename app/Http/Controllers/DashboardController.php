<?php

namespace App\Http\Controllers;
use App\Models\referentiel;
use App\Models\candidat;
use Illuminate\Http\Request;
use App\Models\formation;
use App\Models\type;
class DashboardController extends Controller
{
    //
    public function go(){
            $ageData = candidat::select('id','age')->get()->groupBy(function($ageData){
               return $ageData->age;
            });
                $ages = [];
                $ageCount = [];
            foreach($ageData as $age => $values){
                $ages[] = $age;
                $ageCount[] = count($values);
            }
        
            $sexeData = candidat::select('id','sexe')->get()->groupBy(function($sexeData){
                return $sexeData->sexe;
            });
            $sexes = [];
            $sexeCount = [];
            foreach($sexeData as $sexe => $values){
                $sexes[] = $sexe;
                $sexeCount[] = count($values);
            }
           
            $referentiel = referentiel::all();
            $ref =[];
            $formCount = [];
            foreach($referentiel as $r){
                $ref[]= $r->libelle;
                foreach($r->formation as $f =>$val){
                $formCount[]=1;
            }}
            $formation = formation::all();
            $form =[];
            $candCount = [];
            foreach($formation as $f){
                $form[]= $f->nom;
                $f1 = $f->candidat;
                $fo = function($f1){
                    $x = $f1::select('id')->get();
                    return $x;
                };
                foreach($fo as $f =>$val){
                    $candCount[]=count($val);
                }
            }
            $type = type::all();
            $types =[];
            $formCount2 =[];
            foreach($type as $t){
                $types []= $t->libelle;
                foreach($t->referentiel->formation as $f){
                    $fo = $f::select('id')->get();
                    $formCount2 []= count($fo);
                }
                
            }
        return view ('dashboard', compact('ageData','ages', 'ageCount',
        'sexeData', 'sexes', 'sexeCount','ref', 'formCount','form', 'candCount', 'types',
         'formCount2'));
    }
}