<?php

namespace App\Http\Controllers;

class LoginController extends Controller
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

    //
}
