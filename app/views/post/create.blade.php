{{ Form::open(array('route' => 'posts.store', 'id' => 'posts')) }}

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('title', 'Titulo') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}               
        </div>
        
        <div class="form-group">
            {{ Form::label('content', 'Contenido') }}
            {{ Form::textarea('content', null, array('class' => 'form-control')) }}               
        </div>
        
        {{ Form::submit('Guardar', array('class' => 'btn btn-primary', 'id' => 'post-save')) }}
        
    </div>
</div>

{{ Form::close() }}