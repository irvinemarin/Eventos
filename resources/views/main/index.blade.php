@extends("main-layout")


@section('head')

    <title>Ofertas</title>

@endSection


@section("content")
    <!-- MAIN CONTENT -->



    <main role="main">

        {{-- :::: STAR :::: CAROUSEL DIV CONTENT --}}
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">


                @php($countAnuncios=0)

                @foreach($Anuncios as $capsAN)
                    @php($classActive='')
                    @if($capsAN->nroOrden===1)
                        @php($classActive='active')
                    @endif
                    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $countAnuncios }}"
                        class="{{$classActive}}"></li>

                    @php($countAnuncios++)
                @endforeach
            </ol>
            <div class="carousel-inner">

                @foreach($Anuncios as $itemAN)
                    @php($classActiveSl='')
                    @if($itemAN->nroOrden===1)
                        @php($classActiveSl='active')
                    @endif
                    <div class="carousel-item {{$classActiveSl}}">
                        <img src="{{url('anuncio/'.$itemAN->imgAnuncio)}}" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            @if($itemAN->titulo!="")
                                <h5>{{$itemAN->titulo}}</h5>
                                <a href="{{url("evento/show/".$itemAN->idEvento)}}" class="btn btn-default">MAS
                                    INFORMACION</a>
                            @endif
                        </div>
                    </div>
                @endforeach


            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {{-- :::: END  :::: CAROUSEL DIV CONTENT --}}

        <div class="container">


            {{-- :::: STAR :::: BUSCADOR --}}
            <div class="row" style="margin-top: 20px;">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="buscar..." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">buscar</button>
                </form>
                <div class="form-inline my-2 my-lg-0 float-right">
                    <a class="btn  my-2 my-sm-0">PRECIO</a>
                    <a class="btn  my-2 my-sm-0">CATEGORIA</a>
                    <a class="btn my-2 my-sm-0">FECHA</a>
                </div>
            </div>
            {{-- :::: END :::: BUSCADOR --}}



            {{-- :::: STAR :::: EVENTOS BUSCADO --}}
            <h2>Eventos 1</h2>
            <div id="divEventosContent01" class="card-deck" style="margin-top: 20px;">

                <div class="row" style="width: 100%;">
                    @php(setlocale(LC_ALL, 'es_ES'))
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
                    {{--                    <div class="col-lg-3 mgfr-0 col-md-6">--}}
                    {{--                        <div class="card card-content">--}}
                    {{--                            <img src="img/img_card_01.jpg" class="card-img-top" alt="...">--}}
                    {{--                            <div class="card-body">--}}
                    {{--                                <h5 class="card-title"> Conferencia decimo Primera..</h5>--}}


                    {{--                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>--}}
                    {{--                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"--}}
                    {{--                                                                              class="btn btn-default2  my-2 my-sm-0">MAS--}}
                    {{--                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"--}}
                    {{--                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-3 mgfr-0 col-md-6">--}}
                    {{--                        <div class="card card-content">--}}
                    {{--                            <img src="img/img_card_01.jpg" class="card-img-top" alt="...">--}}
                    {{--                            <div class="card-body">--}}
                    {{--                                <h5 class="card-title"> Conferencia decimo Primera..</h5>--}}


                    {{--                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>--}}
                    {{--                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"--}}
                    {{--                                                                              class="btn btn-default2  my-2 my-sm-0">MAS--}}
                    {{--                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"--}}
                    {{--                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-3 mgfr-0 col-md-6">--}}
                    {{--                        <div class="card card-content">--}}
                    {{--                            <img src="img/img_card_01.jpg" class="card-img-top" alt="...">--}}
                    {{--                            <div class="card-body">--}}
                    {{--                                <h5 class="card-title"> Conferencia decimo Primera..</h5>--}}


                    {{--                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>--}}
                    {{--                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"--}}
                    {{--                                                                              class="btn btn-default2  my-2 my-sm-0">MAS--}}
                    {{--                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"--}}
                    {{--                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>


            </div>
            {{-- :::: END :::: EVENTOS BUSCADO --}}



            {{-- :::: STAR :::: EVENTOS RELACIONADOS --}}
            <h2 STYLE="margin-top: 20px;">OTROS EVENTOS </h2>
            <div id="divEventosContent02" class="card-deck" style="margin-top: 20px;">

                <div class="row" style="width: 100%;">
                    @foreach($EventosExtra as $itemEx)
                        <div class="col-lg-3 mgfr-0 col-md-6">
                            <div class="card card-content">
                                <img src="img/img_card_01.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$itemEx->titulo}}</h5>


                                    <p class="card-precio">Desde <small
                                                class="text-muted">S/ {{$itemEx->precio}}</small></p>
                                    <h4 class="card-fecha">{{\Carbon\Carbon::parse($itemEx->fechaInicio)->format('j F, Y')}} </h4>
                                    <a href="{{url('evento/show/'.$itemEx->idEvento)}}"
                                       class="btn btn-default2  my-2 my-sm-0">MAS ..</a>
                                    <a data-toggle="modal"
                                       data-target="#exampleModal"
                                       class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


            </div>

            {{-- :::: END :::: EVENTOS RELACIONADOS --}}
        </div>


    </main>




@endSection()

