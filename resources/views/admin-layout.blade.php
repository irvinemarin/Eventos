<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">


    @yield('head')


    <link href="{!! asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700') !!}"
          rel="text/css"/>
    <link href="{!! asset('img/iconPj.png') !!}" rel="shortcut icon" type="image/png"/>


    <style>
        .btn-default {
            background-color: maroon !important;
            color: #fff !important;
            position: absolute;
            bottom: 0;
            right: 0;
            margin-right: 10px !important;
            margin-bottom: 10px !important;

        }

        .btn-default2 {
            background-color: #fff !important;
            color: blue !important;
            position: absolute;
            bottom: 0;
            right: 0;
            margin-right: 10px !important;
            margin-bottom: 15% !important;

        }

        .btn-default-br {
            background-color: maroon !important;
            color: #fff !important;
        }

        .carousel-item {
            max-height: 450px !important;
        }

        .card-content {
            height: 350px !important;
            margin-bottom: 20px !important;
            margin-right: 0px !important;
            margin-left: 0px !important;
        }

        .card-precio {
            position: absolute;
            bottom: 0;
            color: darkgray;
        }

        .card-title {
            position: absolute;
            bottom: 25%;

        }

        .card-fecha {
            position: absolute;
            bottom: 15%;

        }

        .card-img-top {
            min-height: 55% !important;
        }

        .mgfr-0 {
            padding-right: 7px !important;
            padding-left: 7px !important;
        }

        .footer {
            /*position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            line-height: 60px;*/
            color: #fff;
            background-color: #500000;
        }
    </style>


</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.html">Eventos y Capacitaciones</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>


        </ul>
        <div class="form-inline my-2 my-lg-0">
            @if($userSession!=null)
                {{ $userSession}}
                <a style="margin-left: 15px;" class="btn btn-danger my-2 my-sm-0" href="{{url('/user/out')}}">SALIR</a>

            @else
                <a class="btn btn-default my-2 my-sm-0" href="{{url('/user/login')}}">Iniciar Sesión</a>
            @endif
        </div>
    </div>
</nav>


<!-- WRAPPER -->
@yield('content')
<!-- END WRAPPER -->


<footer class="footer">

    <div class="container">

        <p> ©INNOVACION JUDICIAL 2020</p>

    </div>

</footer>


<script src="{!! asset('jquery/jquery.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}" type="text/javascript"></script>


@yield('extra_js')
</body>

</html>
