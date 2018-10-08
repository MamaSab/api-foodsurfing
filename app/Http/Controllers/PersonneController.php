<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
//pour se connecter à la DataBase
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
        $results = app('db')->select("SELECT `idrepas`,`plat`,`nombre_minimum_personne`,`nombre_maximum_personne`,`dateRepas`,`lieu`,`description`,`personnes_idPersonnes`,`themes_idthemes`,
        themes.nomTheme as nt , personnes.nom as np  FROM repas 
        INNER JOIN themes ON repas.themes_idthemes = themes.idthemes
        INNER JOIN personnes ON repas.personnes_idPersonnes = personnes.idPersonnes WHERE personnes_idPersonnes != " . $id );
        return $results;
    }

    public function participe(Request $request, $id)
    {
        $results = app('db')->select("SELECT `repas_idrepas`,`ajout_idajout`,`dateAjout`, repas.dateRepas as dr, repas.plat as plat, repasajout.personnes_idPersonnes as idp, ajout.nomAjout as na, personnes.prenom as pp, personnes.nom as pn
        FROM `repasajout`
        INNER JOIN repas ON repasajout.repas_idrepas=repas.idrepas
        INNER JOIN ajout ON repasajout.ajout_idajout=ajout.idajout
        INNER JOIN personnes ON repas.personnes_idPersonnes=personnes.idPersonnes");
        return $results;
    }


    public function store (Request $request)
     {
        $input = $request->all();
        $results = DB::insert('
        INSERT INTO personnes (nom, prenom, mot_de_passe, ville, age) VALUES ("'.$input["nom2"].'","'.$input["prenom"].'", "'.$input["mot_de_passe"].'","'.$input["ville"].'","'.$input["age"].'")');
        return response('Compte créer', 200);

    }
}