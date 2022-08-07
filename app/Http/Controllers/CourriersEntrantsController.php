<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Courriers_Entrants;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourriersEntrantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $oumou = Courriers_Entrants::all();
          //$messages = Message::latest()->get();
    $currentUser = Auth::user()->id;

    $oumou = Courriers_Entrants::
        whereRaw('Courriers__Entrants.id = (select max(id) from `Courriers__Entrants` id where user = '.$currentUser.')' )
        ->orderBy('id', 'desc')
        ->get(); 


        // $oumou = Courriers_Entrants::Where('id=Auth::user()->id');
        // $oumou = Courriers_Entrants::Where('User', Auth::id());

        return view('admin/indexentrant', compact('oumou'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ref' => 'required',
            'objet' => 'required',
            'status' => 'required',
            'expediteur'=>'required',
            'pieces_jointe'=>'required',
            'sate_recept'=>'required',
            'libelle'=>'required',
            'user'=>'required',
            
        ]);
        $Courrier_Entrants = courriers_entrants::create($validatedData);

        return redirect('')->with('');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $users
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $user
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}

