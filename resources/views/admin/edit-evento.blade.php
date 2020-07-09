@extends("admin-layout")


@section('head')
    <title>ANUNCIOS </title>

@endsection



@section("content")
    <div class="container">

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">EVENTO
                    </h6>

                    <br>


                    {!! Form::open(['url' => 'evento/updateEvento/'.$evento[0]->idEvento,  'files' => true]) !!}
                    {{Form::token()}}
                    <div class="modal-body">


                        <div class="form-group">
                            <label for="txt_titulo" class="col-form-label">TITULO:</label>
                            <input type="text" class="form-control" id="txt_titulo" name="txt_titulo"
                                   value="{{$evento[0]->titulo}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="txt_descripcion" class="col-form-label">DESCRIPCION :</label>
                            <textarea type="text" class="form-control" rows="3" id="txt_descripcion"
                                      name="txt_descripcion"

                            >{{$evento[0]->descripcion}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="txt_precio" class="col-form-label">Precio Entrada:</label>
                            <input type="number" class="form-control" id="txt_precio" name="txt_precio"
                                   value="{{$evento[0]->precio}}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="txt_fechaInicio" class="col-form-label">FECHA INICIO:</label>
                            <input type="date" class="form-control" id="txt_fechaInicio" name="txt_fechaInicio"
                                   value="{{$evento[0]->fechaInicio}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="txt_fechaFinal" class="col-form-label">FECHA FINAL:</label>
                            <input type="date" class="form-control" id="txt_fechaFinal" name="txt_fechaFinal"
                                   value="{{$evento[0]->fechafin}}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="fle_imgEvento">IMAGEN DE EVENTO</label>
                            <input type="file" class="form-control-file" id="fle_imgEvento" name="fle_imgEvento"
                                   accept="image/*">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <a href="{{url("evento/index")}}" type="button" class="btn btn-secondary">CERRAR</a>
                        <button type="submit" class="btn btn-primary">ACTULIZAR EVENTO</button>
                    </div>
                    {!! Form::close() !!}

                </div>


            </div>


        </div>

    </div>










@endSection()
