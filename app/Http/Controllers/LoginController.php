<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Retrieve all users
     *
     * @return Response
     */


    public function login(Request $request)
    {
        $input = $request->all();
        $results = app('db')->select("SELECT nom, mot_de_passe FROM personnes WHERE nom = 'nono' ");
        return response($results);
    }


    public function index(Request $request)
    {
      
        $results = app('db')->select("SELECT * FROM personnes WHERE nom = 'nono' ");
        return response($results);
    }


    

    //
}
