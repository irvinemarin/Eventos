@extends("main-layout")


@section('head')

    <title>Detalle Evento</title>

@endSection



@section("content")
    <!-- MAIN CONTENT -->
    <div class="container">





        <h2>{{$Evento[0]->titulo}}</h2>
        <a data-toggle="modal" data-target="#exampleModal"
           class="btn btn-default-br  my-2 my-sm-0 float-right">COMPRAR..</a>

        <h5>Lorem Ipsum</h5>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('img/img_card_03.jpg')}}" class="responsive-img" alt="...">
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/img_card_02.jpg')}}" class="responsive-img" alt="...">
                <img src="{{asset('img/img_card_01.jpg')}}" class="responsive-img" alt="...">
            </div>
            <div class="col-md-6">

            </div>
        </div>
        <P>{{$Evento[0]->descripcion}}</P>


        <h3>OTROS EVENTOS </h3>
        <div id="divEventosContent01" class="card-deck" style="margin-top: 20px;">

            <div class="row" style="width: 100%;">
                @foreach($EventosCercanos as $itemEC)


                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="{{url("image/".$itemEC->imgFondo)}}" class="card-img-top"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$itemEC->titulo}}</h5>


                                <p class="card-precio">Desde <small
                                            class="text-muted">S/ {{$itemEC->precio}}</small></p>
                                <h4 class="card-fecha">{{\Carbon\Carbon::parse($itemEC->fechaInicio)->format('j F, Y')}} </h4>
                                <a href="{{url('evento/show/'.$itemEC->idEvento)}}"
                                   class=" btn btn-default2 my-2 my-sm-0">MAS ..</a>
                                <a data-toggle="modal"
                                   data-target="#exampleModal"
                                   class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endSection()







@section("script_adicional")


@endsection()