<?php

  

namespace App\Http\Controllers;

use App\Models\Courriers_Entrants;
use Illuminate\Http\Request;

  

class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }

  

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {

        return view('home');

    } 

  

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function adminHome()

    {

        return view('adminHome');
        

    }

  

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function managerHome()

    {

        return view('managerHome');
        // $oumou = Courriers_Entrants::Where('id=Auth::user()->id');

        // return view('admin/indexentrant', compact('oumou'));

    }

}