<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Demandesstage;
use App\Stagaire;
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
        $demande->userid = Auth::user()->stagaire->id;
        $demande->societeid = $request->input('societeid');
        $demande->description = $request->input('description');
        $demande->stat = "EN ATTENTE";

        $demande->save();
        return redirect('/stagaire/mesdemandes');

        

    }
    public function mesdemandes(){
        $demandes = auth()->user()->stagaire->demandes;
        //dd($demandes[0]->societe);
        return view('stagaires.demandes.demandes')->with('demandes',$demandes);
    }

    public function StagaireStore(Request $request){
       $stagaire = new Stagaire();
       $stagaire->firstname = $request->input('firstname');
       $stagaire->lastname = $request->input('lastname');
       $stagaire->phone = $request->input('phone');
       $stagaire->university = $request->input('university');
       $stagaire->duration = "";
       $stagaire->age = $request->input('age'); 
       $stagaire->level = $request->input('level');
       if ($request->file('cv') != null ){
        //dd($request);
        $file = $request->file('cv');
        $filename=uniqid().'.'.$file->getClientOriginalExtension();
        $destinationPath = 'uploads';
        $file->move($destinationPath,$filename);
        
       
        }
       $stagaire->cv = $filename;
       $stagaire->iduser = auth()->user()->id;
       $stagaire->save(); 

       if ($request->file('avatar') != null ){
        //dd($request);
        $file = $request->file('avatar');
        $filename=uniqid().'.'.$file->getClientOriginalExtension();
        $destinationPath = 'uploads';
        $file->move($destinationPath,$filename);
        auth()->user()->avatar = $filename ;
        auth()->user()->save();
    }
    return redirect()->back();
        
    }
    public function StagaireUpdate(Request $request){
       
        auth()->user()->stagaire->firstname = $request->input('firstname');
        auth()->user()->stagaire->lastname = $request->input('lastname');
        if ($request->file('cv') != null ){
         //dd($request);
         $file = $request->file('cv');
         $filename=uniqid().'.'.$file->getClientOriginalExtension();
         $destinationPath = 'uploads';
         $file->move($destinationPath,$filename);
         auth()->user()->stagaire->cv = $filename;
        
         }
        auth()->user()->stagaire->save(); 
 
        if ($request->file('avatar') != null ){
         //dd($request);
         $file = $request->file('avatar');
         $filename=uniqid().'.'.$file->getClientOriginalExtension();
         $destinationPath = 'uploads';
         $file->move($destinationPath,$filename);
         auth()->user()->avatar = $filename ;
        }
         auth()->user()->email = $request->input('email');
        if ($request->input('password') != null ){
                    
                        auth()->user()->password = $request->input('password');
        }
        auth()->user()->save();
        return redirect("/home");
    }
}
