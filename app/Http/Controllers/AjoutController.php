<?php

namespace App\Http\Controllers;

class AjoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * 
     */
    public function index()
    {
       $results = app('db')->select("SELECT * FROM ajout");
        return $results;
    }

    //
}
