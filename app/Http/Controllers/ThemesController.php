<?php

namespace App\Http\Controllers;



class ThemesController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        $results = app('db')->select("SELECT * FROM themes");
        return $results;
    }

}