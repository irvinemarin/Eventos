<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Session\Session;

class AnuncioController extends Controller
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


            $ListaAnuncios = DB::table("anuncio")->select("anuncio.*", "evento.titulo as eventoNombre")
                ->leftJoin("evento", "evento.idEvento", "=", "anuncio.idEvento")
                ->get();


            $ListaEvento = DB::table("evento")
                ->where("idEstado", "!=", "3")
                ->get();


            return view("admin.create-anuncio", [
                "ListaAnuncios" => $ListaAnuncios,
                "ListaEvento" => $ListaEvento,
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
        $session = new Session();
        if ($session->get("username") != "admin@01") {
            return redirect("/");
        } else {
            $countErrors = 0;
            $idAnuncio = (DB::table('anuncio')->max('idAnuncio')) + 1;
            $nameFile = $request->file("fle_imgAnuncio")->getClientOriginalName();
            $transaction = DB::transaction(function () use ($request, $countErrors, $idAnuncio, $nameFile) {


                $fInicio = $request->get("txt_fechaInicio");
                $fFin = $request->get("txt_fechaFinal");
                $idEvento = $request->get("sel_evento");
                $mostrarPublicidad = "S";
                $nroOrden = (DB::table('anuncio')->where("mostrarPublicidad", "=", "S")->count('nroOrden')) + 1;


                $data = array(
                    "idAnuncio" => $idAnuncio,
                    "fechaInicio" => $fInicio,
                    "fechaFin" => $fFin,
                    "mostrarPublicidad" => $mostrarPublicidad,
                    "nroOrden" => $nroOrden,
                    "idEvento" => $idEvento,
                    "imgAnuncio" => $idAnuncio . "_" . $nameFile,

                );


                $result = $request->file("fle_imgAnuncio")->storeAs("public/img/anuncios/", $idAnuncio . "_" . $nameFile);
                if (!$result) $countErrors++;


                $insertResult = DB::table('anuncio')->insert($data);

            });

            if ($countErrors == 0) {
                DB::commit();
                return redirect("anuncio/index");
            } else {
                DB::rollBack();

                Storage::delete($idAnuncio . "_" . $nameFile);
                return redirect("anuncio/index");
            }

        }
    }

    public function updateAnuncio(Request $request, $idAnuncio)
    {
        $session = new Session();
        if ($session->get("username") != "admin@01") {
            return redirect("/");
        } else {

            $countErrors = 0;
            $nameFile = "";


            if ($request->file("fle_imgAnuncio") != null)
                $nameFile = $request->file("fle_imgAnuncio")->getClientOriginalName();
            $transaction = DB::transaction(function () use ($request, $countErrors, $idAnuncio, $nameFile) {


                $fInicio = $request->get("txt_fechaInicio");
                $fFin = $request->get("txt_fechaFinal");
                $idEvento = $request->get("sel_evento");
                $mostrarPublicidad = "S";
                $nroOrden = $request->get("txt_NroOrden");

                if ($nameFile == "") {
                    $data = array(
                        "idAnuncio" => $idAnuncio,
                        "fechaInicio" => $fInicio,
                        "fechaFin" => $fFin,
                        "mostrarPublicidad" => $mostrarPublicidad,
                        "nroOrden" => $nroOrden,
                        "idEvento" => $idEvento,

                    );
                    $insertResult2 = DB::table('anuncio')
                        ->where("idAnuncio", "=", $idAnuncio)
                        ->update($data);
//                dd("SF " . $insertResult2);

                } else {

                    $result = $request->file("fle_imgAnuncio")->storeAs("public/img/anuncios/", $idAnuncio . "_" . $nameFile);


                    $data = array(
                        "idAnuncio" => $idAnuncio,
                        "fechaInicio" => $fInicio,
                        "fechaFin" => $fFin,
                        "mostrarPublicidad" => $mostrarPublicidad,
                        "nroOrden" => $nroOrden,
                        "idEvento" => $idEvento,
                        "imgAnuncio" => $idAnuncio . "_" . $nameFile,

                    );

                    $insertResult1 = DB::table('anuncio')
                        ->where("idAnuncio", "=", $idAnuncio)
                        ->update($data);
//                dd("WF " . $insertResult1);


                }


            });


            if ($countErrors == 0) {
                DB::commit();
                return redirect("anuncio/index");
            } else {
                DB::rollBack();

                Storage::delete($idAnuncio . "_" . $nameFile);
                return redirect("anuncio/index");
            }
        }

    }

//muestra detalle del evento
    public function show(Request $request, $idEvento)
    {

        return view('evento.show');
    }//muestra detalle del evento


    public function update(Request $request, $idAnuncio)
    {
        $session = new Session();
        if ($session->get("username") != "admin@01") {
            return redirect("/");
        } else {
            $userSession = "";
            $session = new Session();
            $userSession = $session->get("username");
            $anuncio = DB::table("anuncio")->where("idAnuncio", "=", $idAnuncio)->get();
            $ListaEvento = DB::table("evento")
                ->where("idEstado", "!=", "3")
                ->get();
            return view("admin.edit-anuncio", [
                "anuncio" => $anuncio,
                "ListaEvento" => $ListaEvento,
                "userSession" => $userSession

            ]);
        }
    }

    public function activar(Request $request, $idAnuncio)
    {
        $session = new Session();
        if ($session->get("username") != "admin@01") {
            return redirect("/");
        } else {
            $table = DB::table("anuncio")->where("idAnuncio", "=", $idAnuncio);


            $table->update(array("mostrarPublicidad" => "S"));


            return redirect("anuncio/index");
        }
    }//muestra detalle del evento

    public function desactivar(Request $request, $idAnuncio)
    {
        $session = new Session();
        if ($session->get("username") != "admin@01") {
            return redirect("/");
        } else {
            $table = DB::table("anuncio")->where("idAnuncio", "=", $idAnuncio);


            $table->update(array("mostrarPublicidad" => "N"));

            return redirect("anuncio/index");
        }
    }
}
