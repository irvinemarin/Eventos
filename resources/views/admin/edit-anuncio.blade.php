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


                    </h6>

                    <br>


                    {!! Form::open(['url' => 'anuncio/updateAnuncio/'.$anuncio[0]->idAnuncio,  'files' => true]) !!}
                    {{Form::token()}}
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="txt_NroOrden" class="col-form-label">ORDEN DE PUBLICACION:</label>
                            <input type="number" class="form-control" id="txt_NroOrden"
                                   value="{{$anuncio[0]->nroOrden}}"
                                   name="txt_NroOrden">
                        </div>

                        <div class="form-group">
                            <label for="txt_fechaInicio" class="col-form-label">FECHA INICIO:</label>
                            <input type="date" class="form-control" id="txt_fechaInicio"
                                   value="{{$anuncio[0]->fechaInicio}}"
                                   name="txt_fechaInicio">
                        </div>
                        <div class="form-group">
                            <label for="txt_fechaFinal" class="col-form-label">FECHA FINAL:</label>
                            <input type="date" class="form-control" id="txt_fechaFinal"
                                   value="{{$anuncio[0]->fechaFin}}"
                                   name="txt_fechaFinal">
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

                                    @if($anuncio[0]->idEvento==$itemEventoAC->idEvento)
                                        <option value="{{$itemEventoAC->idEvento}}"
                                                selected>{{$itemEventoAC->titulo}}</option>
                                    @else
                                        <option value="{{$itemEventoAC->idEvento}}">{{$itemEventoAC->titulo}}</option>
                                    @endif


                                @endforeach
                            </select>


                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="{{url("anuncio/index")}}" type="button" class="btn btn-secondary">CERRAR</a>
                        <button type="submit" class="btn btn-primary">ACTULIZAR ANUNCIO</button>
                    </div>
                    {!! Form::close() !!}

                </div>


            </div>


        </div>

    </div>










@endSection()
