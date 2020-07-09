@extends("main-layout")


@section('head')

    <title>Registrar Usuario</title>

@endSection


@section("content")
    <!-- MAIN CONTENT -->

    <main class="container">
        <a href="{{url('user/login')}}" style="margin-top: 50px;">
            <h5 class="">Iniciar Sesion</h5>
        </a>
        {!! Form::open(['url' => 'user/addUser']) !!}
        {!! Form::token() !!}
        <div class="form-signin" style="margin-top: 50px; margin: 0 auto">
            <div class="text-center mb-4">
                <img class="mb-4" src="{{asset('img/logo-pj.png')}}" alt="">
                <h1 class="h3 mb-3 font-weight-normal">Registrando Nuevo Usuario</h1>

            </div>
            <div class="row">
                <div class="col-md-12 col-lg-4 form-input">
                    <input type="text" name="inputNombres" class="form-control" placeholder="Ingrese su Nombre"
                           required=""
                           autofocus="">
                    <label for="inputNombres"></label>
                </div>

                <div class="col-md-12 col-lg-4 form-input">
                    <input type="text" name="inputApellidoPaterno" class="form-control"
                           placeholder="Ingrese su Apellido Paterno"
                           required=""
                           autofocus="">
                    <label for="inputApellidoPaterno"></label>
                </div>

                <div class="col-md-12 col-lg-4 form-input">
                    <input type="text" name="inputApellidoMaterno" class="form-control"
                           placeholder="Ingrese su Apellido Materno"
                           required=""
                           autofocus="">
                    <label for="inputApellidoMaterno"></label>
                </div>


                <div class="col-md-12 col-lg-6 form-input">
                    <input type="text" name="inputEmail" class="form-control" placeholder="Ingrese Correo Elcetronico"
                           required=""
                    >
                    <label for="inputEmail"></label>
                </div>
                <div class="col-md-12 col-lg-6 form-input">
                    <input type="text" name="inputDni" class="form-control"
                           placeholder="Ingrese su DNI"
                           required=""
                    >
                    <label for="EnputEmail_rep"></label>
                </div>

                <div class="col-md-12 col-lg-6 form-input">
                    <input type="text" name="inputUsuario" class="form-control" placeholder="Usuario"
                           required=""
                    >
                    <label for="inputUsuario"></label>
                </div>


                <div class="col-md-12 col-lg-6 form-input">
                    <input type="password" name="inputPassword" class="form-control" placeholder="Ingrese su Contraseña"
                           required=""
                    >
                    <label for="inputPassword"></label>
                </div>


                {{--                <div class="col-md-12 col-lg-6 form-input">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <select name="country" required="required" class="form-control px-1">--}}
                {{--                            <option value="1">Perú</option>--}}

                {{--                            <option value="56">Otros</option>--}}
                {{--                        </select></div>--}}
                {{--                    <label for="sel_Pais"></label>--}}
                {{--                </div>--}}


                {{--                <div class="col-md-12 col-lg-6 form-input">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <select name="sel_ciudad" required="required" class="form-control px-1">--}}
                {{--                            <option value="1">Lima</option>--}}
                {{--                            <option value="5">Arequipa</option>--}}
                {{--                            <option value="6">Moquegua</option>--}}
                {{--                            <option value="7">Huancayo</option>--}}
                {{--                            <option value="8">Trujillo</option>--}}
                {{--                            <option value="9">Chiclayo</option>--}}
                {{--                            <option value="10">Tumbes</option>--}}
                {{--                            <option value="11">Piura</option>--}}
                {{--                            <option value="12">Chimbote</option>--}}
                {{--                            <option value="13">Puno</option>--}}
                {{--                            <option value="14">Cajamarca</option>--}}
                {{--                            <option value="15">Ayacucho</option>--}}
                {{--                            <option value="16">Tacna</option>--}}
                {{--                            <option value="17">Cusco</option>--}}
                {{--                            <option value="18">Oxapampa</option>--}}
                {{--                            <option value="19">Pacasmayo</option>--}}
                {{--                            <option value="20">Huaraz</option>--}}
                {{--                            <option value="21">Tarapoto</option>--}}
                {{--                            <option value="26">Ica</option>--}}
                {{--                            <option value="28">Iquitos</option>--}}
                {{--                            <option value="30">Huánuco</option>--}}
                {{--                            <option value="31">Chachapoyas</option>--}}
                {{--                            <option value="35">Pucallpa</option>--}}
                {{--                            <option value="47">Huacho</option>--}}
                {{--                            <option value="48">Jaen</option>--}}
                {{--                            <option value="52">Chepen</option>--}}
                {{--                        </select>--}}
                {{--                        <label for="sel_Pais"></label>--}}
                {{--                    </div>--}}
                {{--                </div>--}}


                <div class="row">
                    <div class="small">
                        <label for="terms" class="form-group form-check">
                            <input name="terms"
                                   type="checkbox"
                                   required="required"
                                   class="form-check-input"/>
                            <span class="form-check-label">
                            He leído y acepto los
                            <a href="#" target="_blank">
                            <span> Términos y Condiciones</span> </a>.
                        </span>
                        </label>
                    </div>


                    <div class="small">
                        <label for="policies" class="form-group form-check">
                            <input name="policies" type="checkbox"
                                   required="required"
                                   class="form-check-input">
                            <span class="form-check-label">
                        ¿Usted ha leído y acepta los términos y condiciones para el tratamiento de sus datos personales contenidos
                        en la <a href="#" target="_blank">
                                <span> Política de Privacidad Web</span></a>?
                        </span>
                        </label>
                    </div>

                    <div class="small">
                        <label for="notifNewsletter" class="form-group form-check">
                            <input name="notifNewsletter"
                                   type="checkbox" class="form-check-input">
                            <span class="form-check-label">
                                ¿Usted desea qué recibir información sobre eventos y/o promociones que ofrece?
                        </span>
                        </label>
                    </div>

                    <button class="btn btn-lg btn-default-br btn-block" type="submit">Registrar Usuario</button>


                    <br>
                    <p class="mt-5 mb-3 text-muted text-center">INNOVACION JUDICIAL ©2020</p>
                </div>

            </div>

        </div>

        {!! Form::close() !!}
    </main>


@endSection()











@section("script_adicional")


@endsection()