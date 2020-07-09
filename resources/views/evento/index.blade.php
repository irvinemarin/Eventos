@extends("login-layout")


@section('head')

    <title>Registrar Compra</title>

@endSection







@section('menu_list')


@endSection








@section("content")
    <!-- MAIN CONTENT -->



    <main role="main">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/img_carousel_1.gif')}}" class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/img_carousel_2.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/img_carousel_3.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
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
        <div class="container">

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


            <div id="divEventosContent01" class="card-deck" style="margin-top: 20px;">
                <h2>Eventos 1</h2>
                <div class="row">

                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_01.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>
                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4>
                                <a href="info-evento.html" class="btn btn-default2  my-2 my-sm-0">MAS ..</a> <a
                                        data-toggle="modal"
                                        data-target="#exampleModal" class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_02.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>
                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_03.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>
                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_01.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>
                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_02.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>
                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a>
                                <a data-toggle="modal" data-target="#exampleModal"
                                   class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_03.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>
                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_01.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>
                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_02.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>
                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <div id="divEventosContent01" class="card-deck" style="margin-top: 20px;">
                <h2>OTROS EVENTOS </h2>
                <div class="row">

                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_01.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>


                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_02.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>


                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_03.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>

                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_01.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>


                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_02.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>


                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_03.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>

                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_01.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>


                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mgfr-0 col-md-6">
                        <div class="card card-content">
                            <img src="img/img_card_02.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Conferencia decimo Primera..</h5>


                                <p class="card-precio">Desde <small class="text-muted">S/ 50.00</small></p>
                                <h4 class="card-fecha">Lunes 14 Jun. </h4> <a href="info-evento.html"
                                                                              class="btn btn-default2  my-2 my-sm-0">MAS
                                    ..</a> <a data-toggle="modal" data-target="#exampleModal"
                                              class="btn btn-default  my-2 my-sm-0">COMPRAR..</a>
                            </div>
                        </div>
                    </div>


                </div>


            </div>


        </div>


    </main>




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
            <p> ©INNOVACION JUDICIAL 2020</p>
            <p> ©INNOVACION JUDICIAL 2020</p>
            <p> ©INNOVACION JUDICIAL 2020</p>
        </div>

    </footer>








    <!-- Button trigger modal -->


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

                        <div class="row">


                            <div class="basket-section center">
                                <h5 aria-level=" 2"><span>Selecciona un método de pago</span></h5>
                                <p class="d-flex flex-wrap center">
                                    <button type="button" class="payment-method-button ">
                                        <img src="img/imgs_cards.png" height="25" alt="Tarjeta de crédito">
                                    </button>
                                </p>
                            </div>

                            <h4 class="col-md-12">Información Personal</h4>


                            <div class="col-md-6  form-input">
                                <input type="text" id="inputNombres" class="form-control" placeholder="Ingrese Nombres"
                                       required=""
                                       autofocus="">
                                <label for="inputNombres"></label>
                            </div>
                            <div class="col-md-6  form-input">
                                <input type="text" id="inputApellidos" class="form-control"
                                       placeholder="Ingrese Apellidos" required=""
                                       autofocus="">
                                <label for="inputApellidos"></label>
                            </div>
                            <h4>Información Facturación</h4>

                            <div class="col-md-12  form-input">
                                <img src="img/tarjeta_front.png" width="45%" class="" autofocus="">
                                <img src="img/tarjeta_back.png" width="45%" class="" autofocus="">
                            </div>
                            <div class="col-md-12  form-input">
                                <input type="text" id="inputTarjeta" class="form-control"
                                       placeholder="Ingrese Nro Tarjeta" required=""
                                       autofocus="">
                                <label for="inputTarjeta"></label>
                            </div>

                            <div class="col-md-12 col-lg-6 form-input">
                                <input type="number" id="inputCodigoSeguridad" class="form-control"
                                       placeholder="Mes Expiración"
                                       required="" autofocus="">
                                <label for="inputCodigoSeguridad"></label>
                            </div>

                            <div class="col-md-12 col-lg-6 form-input">


                                <select required="" id="inputMesExpiracion" class="form-control">
                                    <option value="">Año</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                    <option value="2034">2034</option>
                                    <option value="2035">2035</option>
                                </select>

                                <label for="inputMesExpiracion"></label>
                            </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button class="btn btn-default-br" type="submit">Realizar Pago</button>
                </div>
            </div>
        </div>
    </div>

@endSection()


