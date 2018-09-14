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
        $nom = $request->input('nom');
        $mot_de_passe = $request->input('mot_de_passe');
        if (is_null($nom) || is_null($mot_de_passe)) {
            return response('Données manquantes');
        }
        $results = app('db')->select("SELECT nom, mot_de_passe FROM personnes WHERE nom = '$nom' AND mot_de_passe = '$mot_de_passe' ");
            if (empty($results)) {
                return response("k.o");
            }   
            else {
                return response("ok");
            }
        
        
    }


    public function index(Request $request)
    {
      
        $results = app('db')->select("SELECT * FROM personnes WHERE nom = 'nono' ");
        return response($results);
    }


    

    //
}
