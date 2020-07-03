<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Condidate;

class CondidatesController extends Controller
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
    public function create()
    {
        //
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
        $condidate = new Condidate();
        $condidate->firstname = $request->input('firstname');
        $condidate->lastname = $request->input('lastname');
        $condidate->phone = $request->input('phone');
        $condidate->university = $request->input('university');
        $condidate->age = $request->input('age');
        $condidate->diplome = $request->input('diplome');
        $condidate->promotion = $request->input('promotion');
        $condidate->title = "";

                    $avatarfile = $request->file('avatar');
                    $cvfile = $request->file('cv');
   
      
                    $cvName =uniqid().'.'.$cvfile->getClientOriginalExtension();
                    $avatarName =uniqid().'.'.$avatarfile->getClientOriginalExtension();
                    $destinationPath = 'uploads';
        $cvfile->move($destinationPath,$cvName);
        $avatarfile->move($destinationPath,$avatarName);

        $condidate->cv = $cvName;
        $condidate->iduser = auth()->user()->id;
        $condidate->avatar = $avatarName;
        
        $condidate->save();
        return redirect('/profile');
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
    public function update(Request $request)
    {
        //
        auth()->user()->condidate->firstname = $request->input('firstname');
        auth()->user()->condidate->lastname = $request->input('lastname');
        if ($request->file('cv') != null ){
         //dd($request);
         $file = $request->file('cv');
         $filename=uniqid().'.'.$file->getClientOriginalExtension();
         $destinationPath = 'uploads';
         $file->move($destinationPath,$filename);
         auth()->user()->condidate->cv = $filename;
        
         }
        auth()->user()->condidate->save(); 
 
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
}
