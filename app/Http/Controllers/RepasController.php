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

        $repas = $request->input('toto');
        
        // $personne = $request->get('personnes');
        // $theme = $request->get('theme');
        $results = DB::insert('
        INSERT INTO repas (personnes_idPersonnes, themes_idthemes, plat, description, lieu, dateRepas, nombre_minimum_personne, nombre_maximum_personne) VALUES ("'.$input["personne"].'","'.$input["theme"].'", "'.$input["plat"].'","'.$input["description"].'","'.$input["lieu"].'","'.$input['date'].'","'.$input['min'].'","'.$input['max'].'")');
        return response('Repas créer', 200);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

    $results = DB::update('UPDATE repas SET themes_idthemes = "'.$input["theme"].'" , plat = "' . $input['plat'] . '", description = "' . $input["description"].'" , lieu = "'. $input["lieu"] .'" , dateRepas = "'.$input['date'].'", nombre_minimum_personne = "' .$input['min'] . '" , nombre_maximum_personne = "' .$input['max'] . '"  WHERE idrepas = ' . $id);
        // return response('lieu modifié', 200);
}

public function delete(Request $request, $id)
    {
        $results = DB::delete('DELETE FROM repas WHERE idrepas = ' . $id);
        
        return response ('repas effacer de la table');
    }

}