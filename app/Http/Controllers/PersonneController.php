<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        $results = app('db')->select("SELECT * FROM personnes");
        return $results;
    }

    public function repas(Request $request, $id)
    {
        $results = app('db')->select("SELECT * FROM repas WHERE personnes_idPersonnes = " . $id . " AND dateRepas >= '" . $request->input('date') . "'");
        return $results;
    }

    // public function show($id)
    // {
    //     $results = app('db')->select("SELECT * FROM personnes where id = " . $id);
    //     return $results;
    // }
}