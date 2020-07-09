@extends('login-layout')

@section('head')
    <title>LOGIN</title>
    <link href="{!! asset('vendor/linearicons/style.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('vendor/chartist/css/chartist-custom.css') !!}" rel="stylesheet"/>


@endsection

@section('content')



    <main class="container">
        <a href="{{url('/')}}" style="margin-top: 50px;">
            <h5 class="">Volver al Inicio</h5>
        </a>

        <div class="col-md-6 offset-md-3">


            {!! Form::open(['url' => 'validate']) !!}
            {!! Form::token() !!}

            <div class="form-signin" style="margin-top: 50px;">
                <div class="text-center mb-4">
                    <img class="mb-4" src="img/logo-pj.png" alt="">
                    <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
                </div>

                <div class="form-label-group">
                    <input type="text" name="inputUsuario" class="form-control" placeholder="Ingrese su Usuario"
                           required=""
                           autofocus="">
                    <label for="inputUsuario"></label>
                </div>

                <div class="form-label-group">
                    <input type="password" name="inputPassword" class="form-control" placeholder="Ingrese Password"
                           required="">
                    <label for="inputPassword"></label>
                </div>
                <a href="#" class="float-right">¿Olvido su Contraseña?</a>

                <button class="btn btn-lg btn-default-br btn-block mt-2" type="submit">Iniciar Sesion</button>

                <a href="{{url('user/create')}}" class="mt-4 float-right">Registrase</a>

                <br>
                <p class="mt-5 mb-3 text-muted text-center">INNOVACION JUDICIAL ©2020</p>
            </div>
            {!!  Form::close() !!}

        </div>


    </main>











@endsection
