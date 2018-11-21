@section('modal_detalle_adjuntar_nomina')
    <div id="modal_adjuntar_nomina" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Adjuntar documento</h4>
                </div>
                {!! Form::open(['method' => 'POST','id' => 'form_adjunto','class'=>'','action' => 'CobrarController@adjuntar_doc_nomina','files' => true]) !!}
                <div class="modal-body">
                    <div class="row">
                        <div class="alert alert-info" role="alert">
                            Formatos: pdf|excel - Tamaño máximo: 1mb
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputEmail3">Adjuntar</label>
                                <div class="col-sm-10">
                                    {!! Form::file('doc',['id' => 'doc']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_adjuntar" id="id_adjuntar_nomina">
                    <button class="btn btn-outline btn-success" type="submit">Adjuntar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection