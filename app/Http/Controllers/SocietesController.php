<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Societe;
use App\User;
use Auth;
class SocietesController extends Controller
{
    //

    /* Fonction qui permet d'ajouter 
    les coordonnes du societe lors de la creation du compte */

    public function complete(Request $request){

        $validatedData = $request->validate([
            'category' => 'required|max:255',
            'location' => 'required|max:255',
            'phone' => 'required | min:8 | max:12 ',
            'manincharge' => 'required',
            'description' => 'required | min:40',
            'creationdate' => 'required',
        ]);


        $societe = new Societe();
        $societe->location=$request->input('location');
        $societe->phone=$request->input('phone');
        $societe->manincharge=$request->input('manincharge');
        $societe->description=$request->input('description');
        $societe->creationdate=$request->input('creationdate');
        $societe->avatar=$request->input('avatar');
        $societe->category=$request->input('category');
        $societe->iduser=Auth::user()->id ;

        $societe->save();
        return redirect('/home');

    }

        /* Fonction qui permet d'ajouter 
    les coordonnes du societe lors de la creation du compte */

    public function modify(Request $request){

        $validatedData = $request->validate([
            'category' => 'required|max:255',
            'location' => 'required|max:255',
            'phone' => 'required | min:8 | max:12 ',
            'manincharge' => 'required',
            'description' => 'required | min:40',
            'creationdate' => 'required',
        ]);


        $societe =Societe::find(Auth::user()->id);
        $societe->location=$request->input('location');
        $societe->phone=$request->input('phone');
        $societe->manincharge=$request->input('manincharge');
        $societe->description=$request->input('description');
        $societe->creationdate=$request->input('creationdate');
        $societe->avatar=$request->input('avatar');
        $societe->category=$request->input('category');
        $societe->save();
        return redirect('/home');

    }

    public function profileSociete($id){
        
        $societe = Societe::find($id);
        $userSociete = User::find($societe->iduser);
        return view("societes.guestprofile")->with('societe',$societe)->with("userSociete",$userSociete);

    }
    public function AllSocieties(){
        $societes = User::where('roles','Societe')->get();
        return view('societes.list')->with('societes',$societes);
    }
}
