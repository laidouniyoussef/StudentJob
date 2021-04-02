<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonce = Annonce::all();
        return view('annonce.index',compact('annonce'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobCategory = JobCategory::all();
        return view('annonce.create',compact('jobCategory'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Annonce::create(
            [
                'title' => $request->title,
                'job_desc' => $request->job_desc,
                'address' => $request->address,
                'skills' => $request->skills,
                'nbr_profils_needed' => $request->nbr_profils_needed, 
                'salaire' => $request->salaire,
                'job_nature' => $request->job_nature,
                'duration' => $request->duration,
                'category_id' => $request->job_category
            ]
         );
         return redirect()->route('annonce.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        $jobCategory = JobCategory::all();
        return view('annonce.update',compact('product','jobCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
        $annonce->update(
            [
                'title' => $request->title,
                'job_desc' => $request->job_desc,
                'address' => $request->address,
                'skills' => $request->skills,
                'nbr_profils_needed' => $request->nbr_profils_needed, 
                'salaire' => $request->salaire,
                'job_nature' => $request->job_nature,
                'duration' => $request->duration,
                'category_id' => $request->job_category
            ]
            );
            return redirect()->route('annonce.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();
        return redirect()->route('annonce.index');
    }
}
