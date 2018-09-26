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
        // date_default_timezone_set('Europe/Paris');

        // $dateUrl = $request->get('date');
        // dd($dateUrl);
        // $dateTime = new \DateTime($dateUrl); 
        // dd($dateString);
        // $dateString = $dateTime;
            
        // $dateString = $dateTime->format('Y-m-d H:i:s');
        // dd(date('Y-m-d H:i:s', $date));
        // $d1 = new \DateTime('2018-09-18 13:39:35');
        
        // $myTs=new \DateTime();
        // $myTs->setTimestamp($request->input('date'));

        // dd($myTs->format('Y-m-d H:i:s'));
        
        // $myDate=$myTs->format('Y-m-d H:i:s');

        // $results = app('db')->select("SELECT * FROM repas ");
        $results = app('db')->select("SELECT * FROM repas WHERE personnes_idPersonnes = " . $id . " AND dateRepas >= '" . $request->input('date') . "'");
     //  dd("SELECT * FROM repas WHERE personnes_idPersonnes = " . $id . " AND dateRepas >= '" . $myDate. "'");
        
        
        return $results;
    }

    // public function show($id)
    // {
    //     $results = app('db')->select("SELECT * FROM personnes where id = " . $id);
    //     return $results;
    // }

    public function autre(Request $request, $id)
    {
        $results = app('db')->select("SELECT * FROM repas WHERE personnes_idPersonnes != " . $id );
        return $results;
    }
}