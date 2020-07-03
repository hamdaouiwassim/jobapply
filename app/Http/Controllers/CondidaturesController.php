<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use App\Condidature;
use Auth;

class CondidaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $offer = Offre::find($id);
        return view('condidatures.add')->with('offer',$offer);
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
        $condidature = new Condidature();
        $condidature->idcondidate = Auth::user()->condidate->id ;
        $condidature->idoffer = $request->input('idoffer')  ;
        $condidature->lettre = $request->input('lettre')  ;
        $condidature->save();
        return redirect("/condidate/mescondidatures");

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

    public function condidaturesCondidates(){

        $condidatures = auth()->user()->condidate->condidatures;
        return view("condidatures.list")->with("condidatures",$condidatures);

    }

    public function SocieteOfferCondidates($idoffer){
        $offre = Offre::find($idoffer);
        //dd($offre->condidatures[0]->condidate);
        return view("societes.condidatures.liste")->with('offre',$offre);

    }
}
