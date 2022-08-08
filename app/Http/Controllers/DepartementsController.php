<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\departements;
use Illuminate\Http\Request;

class DepartementsController extends Controller
{
    public function index()
    { 
        $departement = departements::all();
    return view('/departement.index', compact('departement'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/departement.index');
    }
       
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departement  = $request->validate([
            
            "nom"=>'required',
            "entreprise"=>'required',
        ]);
    
        $departement = departements::create($departement);
        return redirect('departement/index');
    }
}
