<?php

namespace App\Http\Controllers;



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

    // public function show($id)
    // {
    //     $results = app('db')->select("SELECT * FROM personnes where id = " . $id);
    //     return $results;
    // }
}