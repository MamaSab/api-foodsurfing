<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        $input = $request->all();

        // $repas = $request->input('toto');
        
        $personne = $request->get('personne');
        $theme = $request->get('theme');
        $results = DB::insert('
        INSERT INTO repas (personnes_idPersonnes, themes_idthemes, plat, description, lieu, dateRepas, nombre_minimum_personne, nombre_maximum_personne) VALUES('.$personne.','. $theme.', "'.$input["plat"].'","'.$input["description"].'","'.$input["lieu"].'","'.$input['date'].'","'.$input['min'].'","'.$input['max'].'")');
        return response('Hello World', 200);
    }

}