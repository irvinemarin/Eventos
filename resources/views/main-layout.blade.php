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

    />
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
            min-height: 35% !important;
            max-height: 50% !important;
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
        <!--
        <div class="row">
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
              condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
              Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
              condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
              Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
              felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
              massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>
        </div>

      -->
        <p> ©INNOVACION JUDICIAL 2020</p>

    </div>

</footer>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Comprando</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="margin:15px;">


                <form class="form-signin" style="margin-top: 50px; margin: 0 auto">

                    <script
                            src="https://www.paypal.com/sdk/js?client-id=AbMrgfWm6TxTu61NR54Jt0Prm0ze8uPvxGOeBZ1nKdplT-GqpoNqBS7F75kFkD7_n-X-jejuF66FHIE7">
                    </script>



                    <div id="paypal-button-container"></div>

                    <script>
                        paypal.Buttons(
                            {
                                createOrder: function (data, actions) {
                                    // This function sets up the details of the transaction, including the amount and line item details.
                                    return actions.order.create({
                                        purchase_units: [{
                                            amount: {
                                                value: '30.00',

                                            }
                                        }]
                                    });
                                }
                                ,
                                onApprove: function (data, actions) {
                                    // This function captures the funds from the transaction.
                                    return actions.order.capture().then(function (details) {
                                        // This function shows a transaction success message to your buyer.
                                        alert('Transaction completed by ' + details.payer.name.given_name);
                                    });
                                }
                            }
                        ).render('#paypal-button-container');
                        // This function displays Smart Payment Buttons on your web page.
                    </script>
                </form>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                {{--                <button class="btn btn-default-br" type="submit">Realizar Pago</button>--}}
            </div>
        </div>
    </div>
</div>


<script src="{!! asset('jquery/jquery.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}" type="text/javascript"></script>


@yield('extra_js')
</body>

</html>
