<?php

namespace App\Http\Controllers;

use App\Models\Entreprises;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntreprisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ents=Entreprises::all();
        return view('entreprises.index',['ents'=>$ents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
        if(1==1)      //the user is not a company. this condition will be removed
            {
                return redirect('/entreprises');
            }
        }
        return view('entreprises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            return redirect('/entreprises');
        }
     $data['Company_Email']=$request->Company_Email;
     $data['Company_NumTel']=$request->Company_NumTel;
     $data['Company_Name'] =$request->Company_Name;
     $data['logo'] =$request->logo;
     $data['Password'] =$request->Password;
     Entreprises::create($data);
     return redirect()->route('entreprises.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprises $entreprises)
    {
       
        $ent= Entreprises::findOrFail($entreprises);  
        return view('entreprise.show',[ 'ent' => $ent]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprises $entreprises)
    {
        $ent = Entreprises::findOrFail($entreprises); 
        if(1==1)   //the user is not a company. this condition will be removed
            {
                return redirect('/entreprise');
            }
            else{
        return view('entreprise.edit',[ 'ent' => $ent]);}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprises $entreprises)
    {
        $ent=Entreprises::findOrFail($entreprises);
         if(1==1) //the user is not a company. this condition will be removed
            {
                return redirect('/entreprise');
            }

         $ent->Company_Email=$request->Company_Email;
         $ent->Company_NumTel=$request->Company_NumTel;
         $ent->Company_Name=$request->Company_Name;
         $ent->logo=$request->logo;
         $ent->Password=$request->Password;
         $ent->save();
         return view('entreprise');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprises $entreprises)
    {
        $ent=Entreprises::findOrFail($entreprises);
      if(1==1) //the user is not a company. this condition will be removed
            {
                return redirect('/entreprise');
            }
            else{
      $ent->delete();
        return
        view('entreprise.index');}
    }
    }

