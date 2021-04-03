<?php

namespace App\Http\Controllers;

use App\Models\Postuler;
use Illuminate\Http\Request;

class PostulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postuler=Postuler::all();
        return view('postuler.index',['postuler'=>$postuler]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['id_Student']=$request->id_Student;
     $data['id_Company']=$request->id_Company;
     $data['date'] =$request->date;
     Postuler::create($data);
     return redirect()->route('postuler.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function show(Postuler $postuler)
    {
        $post= Postuler::findOrFail($postuler);  
        return view('postuler.show',[ 'postuler' => $post]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function edit(Postuler $postuler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postuler $postuler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postuler $postuler)
    {
        //
    }
}
