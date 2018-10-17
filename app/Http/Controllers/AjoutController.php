<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function store(Request $request)
    {
        $input = $request->all();

        $results = DB::insert('
        INSERT INTO repasajout ( repas_idrepas,ajout_idajout, personnes_idPersonnes,dateAjout)
        VALUES ("'.$input["idrepas"].'","'.$input["ajout"].'", "'.$input["idpersonne"].'","'.date("Y-m-d H:i:s").'")');
        return response('Ajout ajouter', 200);
    }


    //
}
