<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller as BaseController;

class RegisterController extends BaseController
{
    public function index(Request $request)
    {
        $nom = $request->input('nom2');
        $results = app('db')->select("SELECT * FROM personnes WHERE nom = '$nom' ");
        return $results;
    }
    
}
