<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourriersEntrantsController extends Controller
{
    public function courrierentrant(){
        return view('admin.courrierentrant');
    }
   
}
