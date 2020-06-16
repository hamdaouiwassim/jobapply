<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Demandesstage;
use Auth;
class StagairesController extends Controller
{
    //

    public function createDemande($societeid){
        $userSociete = User::find($societeid);
        return view('stagaires.demandes.create')->with('userSociete',$userSociete);
    }

    public function storeDemande(Request  $request){
        $demande = new Demandesstage();
        $demande->userid = Auth::user()->id;
        $demande->societeid = $request->input('societeid');
        $demande->description = $request->input('description');
        $demande->stat = "EN ATTENTE";

        $demande->save();
        return redirect('/stagaire/mesdemandes');

        

    }
    public function mesdemandes(){
       

        $demandes = Demandesstage::where('userid',Auth::user()->id )->get();
        return view('stagaires.demandes.demandes')->with('demandes',$demandes);
    }

    public function StagaireStore(Request $request){
       $stagaire = new Stagaire();
       $stagaire->firstname = ;
       $stagaire->firstname = ;
       $stagaire->firstname = ;
       $stagaire->firstname = ;

        
    }
}
