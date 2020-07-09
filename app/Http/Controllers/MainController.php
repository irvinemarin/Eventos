<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class MainController extends Controller
{
    //

    public function __construct()
    {

    }

    public function index()
    {

        $session = new Session();
        $userSession = "";
        if ($session->get("username")) {
            $userSession = $session->get("username");
        }

        $EventosExtra = DB::table('evento')
            ->where('idEstado', '=', 2)
            ->get();


        $EventosCercanos = DB::table('evento')
            ->where('idEstado', '=', 1)
            ->get();


        $Anuncios = DB::table("anuncio")->select("anuncio.*", "evento.*")
            ->leftJoin("evento", "evento.idEvento", "=", "anuncio.idEvento")
            ->where("evento.idEstado", "<>", "3")
            ->get();


        return view("main.index", [
            'EventosCercanos' => $EventosCercanos,
            'EventosExtra' => $EventosExtra,
            'Anuncios' => $Anuncios,
            'userSession' => $userSession,
        ]);
    }


    public function salir()
    {

        $session = new Session();
        $session->clear();
        return redirect("/");
    }


}
