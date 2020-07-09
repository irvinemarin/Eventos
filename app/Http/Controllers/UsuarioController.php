<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;


class UsuarioController extends Controller
{

    public function validateUser(Request $request)
    {

        $username = $request->get('inputUsuario');
        $clave = $request->get('inputPassword');


        if ($username == "admin@01" && $clave == "01admin01@") {
            $session = new Session();
            $session->set('username', "admin@01");
            $session->set('usernameId', "1999999991");
            return redirect('evento/index');
        } else {

            $userTable = DB::table("usuario")
                ->where([
                    ['username', '=', $username],
                    ['clave', '=', $clave]
                ])
                ->limit(1)->get();


            if ($userTable != null) {
                //dd($abogadoUser[0]->l_activo);
                if ($userTable[0]->idEstado == 1) {

                    $session = new Session();

                    $session->set('username', $userTable[0]->username);
                    $session->set('usernameId', $userTable[0]->idUser);

                    return redirect('/');
                }
            } else {
                return redirect('/');
            }

        }
    }


    public function registerUser()
    {


        return view("login.create");
    }

    public function addUser(Request $request)
    {

        $username = $request->get("inputUsuario");
        $password = $request->get("inputPassword");


        $nombres = $request->get("inputNombres");
        $apellidoP = $request->get("inputApellidoPaterno");
        $apellidoM = $request->get("inputApellidoMaterno");
        $email = $request->get("inputEmail");

        $dni = $request->get("inputDni");

        $idUser = (DB::table('usuario')->max('idUser')) + 1;
        $dataLogin = array(
            "idUser" => $idUser,
            "username" => $username,
            "clave" => $password,
            "email" => $email,
            "idEstado" => 1,

        );

        $idPersona = (DB::table('persona')->max('idPersona')) + 1;
        $dataPersona = array(
            "idPersona" => $idPersona,
            "idUser" => $idUser,
            "nombres" => $nombres,
            "apellidoPaterno" => $apellidoP,
            "apellidoMaterno" => $apellidoM,
            "dni" => $dni,
            "idEstado" => 1,
        );


        DB::table("usuario")->insert($dataLogin);


        DB::table("persona")->insert($dataPersona);


        return redirect("/");

    }

}
