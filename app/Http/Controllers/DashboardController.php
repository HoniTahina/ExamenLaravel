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
            $formation = formation::all();  

        return view ('dashboard', compact('ageData','ages', 'ageCount',
        'sexeData', 'sexes', 'sexeCount','formation',
         'referentiel'));
    }
}