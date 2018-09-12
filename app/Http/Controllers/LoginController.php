<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $results = app('db')->select("SELECT * FROM personnes");
        return $results;
    }

    //
}
