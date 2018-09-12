<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class LoginController extends Controller
{
    /**
     * Retrieve all users
     *
     * @return Response
     */
    public function index()
    {
        $results = app('db')->select("SELECT * FROM personnes");
        return response($results);
    }

    //
}
