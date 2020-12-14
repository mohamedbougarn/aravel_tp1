<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function index()
    {
    echo"bonjour form";
    }


    public function form()
{
return view('formvue');
}



/*public function ajout(Request $req)
{
//ajoux ou php ordinaire
//dd affichage
dd($req);
}
*/

public function ajout(Request $req)
    {
        //ajoux ou php ordinaire
        //appel avec App\personne ou bien use en haut
        $p= new \App\personne();
        $p->nom=$req->input('nom');
        $p->prenom=$req->input('prenom');
        $p->age=$req->input('age');
        $p->save();
    }

}
