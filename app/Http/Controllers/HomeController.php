<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  
    public function index()
    {
        if ( Auth::user()->roles == "Societe"  ){
            if (  Auth::user()->society != null ){
                return view('societes.home');
            }
            return view('societes.first');
        }else if ( Auth::user()->roles == "Condidate" ){
            if (  Auth::user()->condidate != null ){
                return view('condidates.home'); 
            }
            return view('condidates.first');
        }else{
            if (  Auth::user()->stagaire != null ){
                return view('stagaires.home');
            }
            return view('stagaires.first');
        }
        
    }

    public function profile()
    {
        
        if ( Auth::user()->roles == "Societe"  ){
            if (  Auth::user()->society != null ){
                return view('societes.profile')->with('societe',Auth::user()->society);
            }
            return view('societes.first');
        }else if ( Auth::user()->roles == "Condidate" ){
            if (  Auth::user()->condidate != null ){

                return view('condidates.profile')->with('condidate',Auth::user()->condidate); 
            }

            return view('condidates.first');
        }else{
            if (  Auth::user()->stagaire != null ){
                return view('stagaires.profile')->with('stagaire',Auth::user()->stagaire);
            }
            return view('stagaires.first');
        }
        
    }


 
}
