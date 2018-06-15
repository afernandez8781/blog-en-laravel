<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form method="POST" action="{{ route('admin.posts.store') }}">
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Agrega el título de tu nueva publicación</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group {{ $errors->has('title')? 'has-error' : '' }}">
                        {{--<label>Título de la publicación</label>--}}
                        <input name="title"
                               class="form-control"
                               value="{{ old('title') }}"
                               placeholder="Ingresa aquí el título de la publicación" required>
                        {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Crear publicación</button>
                </div>
            </div>
        </div>
    </form>>
</div>