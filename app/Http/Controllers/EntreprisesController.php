<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\entreprises;
use Illuminate\Http\Request;

class EntreprisesController extends Controller
{
    public function index()
    { 
        $entreprises = entreprises::all();
    return view('/entreprise.index');
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/entreprise.create');
    }
       
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entreprise  = $request->validate([
            
            "nom"=>'required',
            "structure"=>'Required',
            "adresse"=>'required',
        ]);
    
        $entreprises = entreprises::create($entreprise);
        return redirect('admin/home');
    }

   
}