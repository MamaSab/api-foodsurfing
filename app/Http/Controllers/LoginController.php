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
        $results = app('db')->select("SELECT idPersonnes, nom, prenom, ville, age  FROM personnes WHERE nom = '$nom' AND mot_de_passe = '$mot_de_passe' ");
            if (empty($results)) {
                return response('erreur');
            }   
            else {
                return response($results);
            }
        
        
    }


    public function index(Request $request)
    {
        $nom = $request->input('nom');
        $results = app('db')->select("SELECT * FROM personnes WHERE nom = '$nom' ");
        return response($results);
    }
    

    

    //
}
