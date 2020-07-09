<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Session\Session;
use function GuzzleHttp\Promise\all;

class EventoController extends Controller
{

    public function __construct()
    {

        $session = new Session();
        if ($session->get("username") != "admin@01") {
            return redirect("/");
        }

    }

    //muestra el formulario
    public function index(Request $request)
    {

        $userSession = "";
        $session = new Session();
        if ($session->get("username") != "admin@01") {
            return redirect("/");
        } else {
            $userSession = $session->get("username");
            $ListaEventos = DB::table("evento")->get();
            return view("admin.create-evento", [
                "ListaEventos" => $ListaEventos,
                "userSession" => $userSession
            ]);
        }
    }

//muestra el formulario
    public function create(Request $request)
    {


//        return view("admin.create-evento");
    }

//registra nuevo evneto
    public function store(Request $request)
    {
        $countErrors = 0;
        $idevento = (DB::table('evento')->max('idEvento')) + 1;
        $nameFile = $request->file("fle_imgEvento")->getClientOriginalName();
        $transaction = DB::transaction(function () use ($request, $countErrors, $idevento, $nameFile) {


            $titulo = $request->get("txt_titulo");
            $desc = $request->get("txt_descripcion");
            $fInicio = $request->get("txt_fechaInicio");
            $precio = $request->get("txt_precio");
            $fFin = $request->get("txt_fechaFinal");
            $estado = 1;


            $data = array(
                "idEvento" => $idevento,
                "titulo" => $titulo,
                "precio" => $precio,
                "descripcion" => $desc,
                "fechaInicio" => $fInicio,
                "fechaFin" => $fFin,
                "idEstado" => $estado,
                "imgfondo" => $idevento . "_" . $nameFile,

            );


            $result = $request->file("fle_imgEvento")->storeAs("public/img/eventos/", $idevento . "_" . $nameFile);
            if (!$result) $countErrors++;


            DB::table('evento')->insert($data);

        });

        if ($countErrors == 0) {
            DB::commit();
            return redirect("evento/index");
        } else {
            DB::rollBack();

            Storage::delete($idevento . "_" . $nameFile);
            return redirect("evento/index");
        }


    }


    //registra nuevo evneto
    public function updateEvento(Request $request, $idEvento)
    {
        $session = new Session();
        if ($session->get("username") != "admin@01") {
            return redirect("/");
        } else {
            $countErrors = 0;
            $nameFile = "";


            if ($request->file("fle_imgEvento") != null)
                $nameFile = $request->file("fle_imgEvento")->getClientOriginalName();
            $transaction = DB::transaction(function () use ($request, $countErrors, $idEvento, $nameFile) {


                $titulo = $request->get("txt_titulo");
                $desc = $request->get("txt_descripcion");
                $fInicio = $request->get("txt_fechaInicio");
                $precio = $request->get("txt_precio");
                $fFin = $request->get("txt_fechaFinal");


                if ($nameFile == "") {
                    $data = array(

                        "titulo" => $titulo,
                        "precio" => $precio,
                        "descripcion" => $desc,
                        "fechaInicio" => $fInicio,
                        "fechaFin" => $fFin,

                    );
                    DB::table('evento')
                        ->where("idEvento", "=", $idEvento)
                        ->update($data);

                } else {

                    $data = array(

                        "titulo" => $titulo,
                        "precio" => $precio,
                        "descripcion" => $desc,
                        "fechaInicio" => $fInicio,
                        "fechaFin" => $fFin,
                        "imgfondo" => $idEvento . "_" . $nameFile,

                    );

                    $result = $request->file("fle_imgEvento")->storeAs("public/img/eventos/", $idEvento . "_" . $nameFile);
                    if (!$result) $countErrors++;


                    DB::table('evento')
                        ->where("idEvento", "=", $idEvento)
                        ->update($data);
                }


            });

            if ($countErrors == 0) {
                DB::commit();
                return redirect("evento/index");
            } else {
                DB::rollBack();

                Storage::delete($idEvento . "_" . $nameFile);
                return redirect("evento/index");
            }
        }

    }

    //muestra detalle del evento
    public function show(Request $request, $idEvento)
    {


        $session = new Session();
        $userSession = "";
        if ($session->get("username")) {
            $userSession = $session->get("username");
        }


        $Evento = DB::table("evento")
            ->where("idEvento", "=", $idEvento)
            ->get();

        $EventosCercanos = DB::table('evento')
            ->where('idEstado', '=', 3)
            ->get();

        return view('evento.show', [
            "EventosCercanos" => $EventosCercanos,
            "Evento" => $Evento,
            "userSession" => $userSession

        ]);
    }


    public function update(Request $request, $idEvento)
    {
        $session = new Session();
        if ($session->get("username") != "admin@01") {
            return redirect("/");
        } else {
            $userSession = "";
            $session = new Session();
            $userSession = $session->get("username");
            $evento = DB::table("evento")->where("idEvento", "=", $idEvento)->get();

            return view("admin.edit-evento", [
                "evento" => $evento,
                "userSession" => $userSession

            ]);
        }


    }//muestra detalle del evento

    public function activar(Request $request, $idEvento)
    {
        $table = DB::table("evento")->where("idevento", "=", $idEvento);


        $table->update(array("idEstado" => 1));


        return redirect("evento/index");
    }//muestra detalle del evento

    public function desactivar(Request $request, $idEvento)
    {
        $table = DB::table("evento")->where("idevento", "=", $idEvento);


        $table->update(array("idEstado" => 3));

        return redirect("evento/index");
    }
}
