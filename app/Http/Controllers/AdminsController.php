<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Societe;
class AdminsController extends Controller
{
    //

    public function usersListe(){
        $users = User::where('roles','!=','Admin')->get();
        return view('admin.users.liste')->with('users',$users);
    }
    public function validerSociete($id){
        $societe = Societe::find($id);
        $societe->etat = "VALIDE";
        $societe->update();
       return redirect()->back();

    }
    
    public function refuserSociete($id){
        $societe = Societe::find($id);
        $societe->etat = "REFUE";
        $societe->update();
        return redirect()->back();
    }

    public function UpdateProfile(Request $request){

            if ($request->file('avatar') != null ){
                //dd($request);
                $file = $request->file('avatar');
                $filename=uniqid().'.'.$file->getClientOriginalExtension();
                $destinationPath = 'uploads';
                $file->move($destinationPath,$filename);
                auth()->user()->avatar = $filename ;
            }
            auth()->user()->email = $request->input("email");
            if ($request->input("password") != "" ){
                auth()->user()->password = $request->input("password") ;
            }
            auth()->user()->save();
            auth()->user()->admin->nom = $request->input("nom");
            auth()->user()->admin->prenom = $request->input("prenom");
            auth()->user()->admin->save();
            return redirect()->back();        
    }
}
