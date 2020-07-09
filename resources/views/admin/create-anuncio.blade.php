@extends("admin-layout")


@section('head')
    <title>ANUNCIOS </title>

@endsection



@section("content")
    <div class="container">

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">ANUNCIOS
                        <a href="#" class="btn btn-success float-right " data-toggle="modal"
                           data-target="#staticBackdrop">REGISTRAR NUEVO</a>
                    </h6>

                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">FECHA INICIO</th>
                            <th scope="col">FECHA FIN</th>
                            <th scope="col">IMAGEN</th>
                            <th scope="col">EVENTO</th>
                            <th scope="col">NRO ORDEN</th>
                            <th scope="col">OPCIONES</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($countAnuncios=0)
                        @foreach($ListaAnuncios as $item)
                            @php($countAnuncios++)
                            <tr>
                                <th scope="row">{{$countAnuncios}}</th>
                                <td>{{$item->fechaInicio}}</td>
                                <td>{{$item->fechaFin}}</td>
                                <td>
                                    <a href="{{url("anuncio/".$item->imgAnuncio)}}"
                                       target="__blank">
                                        <img src="{{url("anuncio/".$item->imgAnuncio)}}"
                                             class="rounded"
                                             height="50"
                                             alt="...">
                                    </a>
                                </td>
                                <td>{{$item->eventoNombre}}</td>
                                <td>{{$item->nroOrden}}</td>


                                <td>


                                    @if($item->mostrarPublicidad=="S")
                                        <a href="{{url('anuncio/desactivar/'.$item->idAnuncio)}}" data-toggle="tooltip"
                                           data-placement="top" title="Desactivar Anuncio">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                 class="bi bi-slash-circle-fill"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.146-3.146a.5.5 0 0 0-.708-.708l-7 7a.5.5 0 0 0 .708.708l7-7z"/>
                                            </svg>
                                        </a>
                                    @else
                                        <a href="{{url('anuncio/activar/'.$item->idAnuncio)}}" data-toggle="tooltip"
                                           data-placement="top" title="Activar Anuncio">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </a>
                                    @endif
                                    <a class="btn btn-warning" href="{{url('anuncio/update/'.$item->idAnuncio)}}"
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
                    <h5 class="modal-title" id="exampleModalLabel">REGISTRANDO ANUNCIO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {!! Form::open(['url' => 'anuncio/store',  'files' => true]) !!}
                {{Form::token()}}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="txt_fechaInicio" class="col-form-label">FECHA INICIO:</label>
                        <input type="date" class="form-control" id="txt_fechaInicio" name="txt_fechaInicio">
                    </div>
                    <div class="form-group">
                        <label for="txt_fechaFinal" class="col-form-label">FECHA FINAL:</label>
                        <input type="date" class="form-control" id="txt_fechaFinal" name="txt_fechaFinal">
                    </div>

                    <div class="form-group">
                        <label for="fle_imgEvento">IMAGEN DE ANUNCIO</label>
                        <input type="file" class="form-control-file" id="fle_imgAnuncio" name="fle_imgAnuncio"
                               accept="image/*">
                    </div>


                    <div class="form-group">

                        <label for="sel_evento" class="col-form-label">Asignar a Evento</label>
                        <select required="" id="sel_evento" name="sel_evento" class="form-control">
                            @foreach($ListaEvento as $itemEventoAC)
                                <option value="{{$itemEventoAC->idEvento}}">{{$itemEventoAC->titulo}}</option>
                            @endforeach
                        </select>


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








@endSection()
