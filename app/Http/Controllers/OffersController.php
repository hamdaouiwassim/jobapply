<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use App\Categorie;
use Auth;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $offers = Offre::where('userid',Auth::user()->society->id)->get();
        $categories = Categorie::all();
        return view('societes.offers.list')->with("offers",$offers)->with("categories",$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categorie::all();
        return view('societes.offers.add')->with("categories",$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $offer = Offre::find($id);
       
        $categorie = Categorie::find($offer->category);
      
        return view('condidates.offers.offer')->with('categorie', $categorie)->with('offer', $offer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function indexCondidates(){

        $offers = Offre::all();
       
        
        $categories = Categorie::all();
        
        return view("condidates.offers.list")->with("offers",$offers)->with("categories",$categories);
    }

    public function CondidatesSearchoffers(Request $request){

        $title = $request->input("offerTitle");
        $engagement = $request->input("offerEngagement");
        $location = $request->input("offerLocation");
        if ($title != ""){
            $offers = Offre::where('name','LIKE','%'.$title.'%')
            ->orWhere('description','LIKE','%'.$title.'%')
            ->where('engagement',$engagement)
            ->where('location','LIKE',$location)
            ->get(); 
        }else{
            if($engagement == ""){
                $offers = Offre::
                where('location','LIKE',$location)
                ->get(); 
            }else{
                $offers = Offre:://where('name','LIKE','%'.$title.'%')
                //->orWhere('description','LIKE','%'.$title.'%')
                where('engagement',$engagement)
                ->where('location','LIKE',$location)
                ->get();
            }
               
        }
        
        
        return view('condidates.offers.search')->with('offers',$offers);
        
    }


    public function tagsOffersCondidates($tags){
        $offers = Offre::where('category',$tags)->get();
        return view('condidates.offers.search')->with('offers',$offers);

    }
}

