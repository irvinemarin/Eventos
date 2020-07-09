@extends("admin-layout")


@section('head')

    <title>Registrar evento</title>

@endSection


@section("content")
    <!-- MAIN CONTENT -->
    <div class="container">

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">EVENTOS
                        <a href="#" class="btn btn-success float-right " data-toggle="modal"
                           data-target="#staticBackdrop">REGISTRAR NUEVO</a>
                    </h6>

                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">TITULO</th>
                            <th scope="col">DESCRIPCION</th>
                            <th scope="col">FECHA INICIO</th>
                            <th scope="col">FECHA FIN</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">OPCIONES</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($countEventos=0)
                        @foreach($ListaEventos as $item)
                            @php($countEventos++)
                            <tr>
                                <th scope="row">{{$countEventos}}</th>
                                <td>{{$item->titulo}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td>{{$item->fechaInicio}}</td>
                                <td>{{$item->fechafin}}</td>

                                <td>
                                    <a href="{{url("image/".$item->imgFondo)}}"
                                       target="__blank">
                                        <img src="{{url("image/".$item->imgFondo)}}"
                                             class="rounded"
                                             height="50"
                                             alt="...">
                                    </a>

                                </td>
                                <td>


                                    @if($item->idEstado==1 or $item->idEstado==2)
                                        <a href="{{url('evento/desactivar/'.$item->idEvento)}}" data-toggle="tooltip"
                                           data-placement="top" title="Desactivar avento">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                 class="bi bi-slash-circle-fill"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.146-3.146a.5.5 0 0 0-.708-.708l-7 7a.5.5 0 0 0 .708.708l7-7z"/>
                                            </svg>
                                        </a>
                                    @else
                                        <a href="{{url('evento/activar/'.$item->idEvento)}}" data-toggle="tooltip"
                                           data-placement="top" title="Activar evento">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </a>
                                    @endif
                                    <a class="btn btn-warning" href="{{url('evento/update/'.$item->idEvento)}}"
                                       data-toggle="tooltip">EDITAR</a>

                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                    <br><br>

                    {{--                    <a href="#" class="btn btn-default right">CANCELAR</a>--}}


                </div>


            </div>


        </div>

    </div>




    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REGISTRANDO EVENTO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {!! Form::open(['url' => 'evento/store',  'files' => true]) !!}
                {{Form::token()}}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="txt_titulo" class="col-form-label">TITULO:</label>
                        <input type="text" class="form-control" id="txt_titulo" name="txt_titulo">
                    </div>
                    <div class="form-group">
                        <label for="txt_descripcion" class="col-form-label">DESCRIPCION :</label>
                        <textarea type="text" class="form-control" id="txt_descripcion"
                                  name="txt_descripcion"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="txt_fechaInicio" class="col-form-label">FECHA INICIO:</label>
                        <input type="date" class="form-control" id="txt_fechaInicio" name="txt_fechaInicio">
                    </div>
                    <div class="form-group">
                        <label for="txt_fechaFinal" class="col-form-label">FECHA FINAL:</label>
                        <input type="date" class="form-control" id="txt_fechaFinal" name="txt_fechaFinal">
                    </div>
                    <div class="form-group">
                        <label for="txt_precio" class="col-form-label">Precio Entrada:</label>
                        <input type="number" class="form-control" id="txt_precio" name="txt_precio">
                    </div>


                    <div class="form-group">
                        <label for="fle_imgEvento">IMAGEN DE EVENTO</label>
                        <input type="file" class="form-control-file" id="fle_imgEvento" name="fle_imgEvento"
                               accept="image/*">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                    <button type="submit" class="btn btn-primary">REGISTRAR EVENTO</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>



    <!-- Modal UPDATE-->
    <div class="modal fade" id="modalEditEvento" data-backdrop="static" data-keyboard="false" tabindex="-1"
         role="dialog"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR EVENTO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {!! Form::open(['url' => 'evento/update',  'files' => true]) !!}
                {{Form::token()}}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="txt_titulo" class="col-form-label">TITULO:</label>
                        <input type="text" class="form-control" id="e_txt_titulo" name="e_txt_titulo">
                    </div>
                    <div class="form-group">
                        <label for="txt_descripcion" class="col-form-label">DESCRIPCION :</label>
                        <input type="text" class="form-control" id="e_txt_descripcion" name="e_txt_descripcion">
                    </div>
                    <div class="form-group">
                        <label for="txt_fechaInicio" class="col-form-label">FECHA INICIO:</label>
                        <input type="date" class="form-control" id="e_txt_fechaInicio" name="e_txt_fechaInicio">
                    </div>
                    <div class="form-group">
                        <label for="txt_fechaFinal" class="col-form-label">FECHA FINAL:</label>
                        <input type="date" class="form-control" id="e_txt_fechaFinal" name="e_txt_fechaFinal">
                    </div>
                    <div class="form-group">
                        <label for="txt_precio" class="col-form-label">Precio Entrada:</label>
                        <input type="number" class="form-control" id="e_txt_precio" name="e_txt_precio">
                    </div>


                    <div class="form-group">
                        <label for="fle_imgEvento">IMAGEN DE EVENTO</label>
                        <input type="file" class="form-control-file" id="e_fle_imgEvento" name="e_fle_imgEvento"
                               accept="image/*">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                    <button type="submit" class="btn btn-primary">ACTUALIZAR EVENTO</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endSection()


@section("script_adicional")

    <script>
        // function updateEvento(idEvento, titulo, desc, fechainicio, fechfin) {
        //     console.log("click update")
        //
        //
        //     $("#e_txt_titulo").val(titulo);
        //
        // }


        $(".btn_UpdateEvento").on("click", function () {
            var titulo = $(this).data - titulo
            var descripcion = $(this).data - descripcion
            var fechainicio = $(this).data("-fechainicio")
            var fechafin = $(this).data("fechafin")
            console.log("click update")
            var evento = $(this).data("eventoitem");
            console.table(evento)

            $("#e_txt_titulo").val(titulo);
        })


        var errors = 0;

        function validarImputs(idSelect, tipoValidacion) {
            // switch (tipoValidacion) {
            //     case "s":
            if ($(idSelect).val() == 0 || $(idSelect).val() == "") {
                errors++;
            }


        }


    </script>

@endsection()