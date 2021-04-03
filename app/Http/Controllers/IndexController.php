<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $annonce = Annonce::all();
        return view('frontend.layouts.main',compact('annonce'));
    }
}
