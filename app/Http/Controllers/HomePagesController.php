<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Offre;
class HomePagesController extends Controller
{
    //
    public function welcome(){
        $offres = Offre::all();
        $categories = Categorie::all();
        return view('welcome')->with('offres',$offres)->with('categories',$categories);
    }
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
}
