<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class RepasController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        $results = app('db')->select("SELECT * FROM repas");
        return $results;
    }

    public function store(Request $request)
    {
        $repas = $request->input('toto');
        $nom = $repas['nom'];
        $results = app('db')->select("INSERT INTO repas (plat, nombre_minimum_personne, nombre_maximum_personne, date, lieux , idt) VALUES('$nom', 4, 8, '2018-08-11 15:00:00', 'saint-brieuc', 1)");
        return $results;
    }

}