@extends('layouts.application')

@section('content')

{{ Form::open(array('url' => 'login', 'id' => 'login')) }}

<div class="row">
    
    <div class="col-md-6"> 
        <div class="form-group">
            {{ Form::label('email', 'Correo') }}            
            {{ Form::email('email', null, array('class' => 'form-control')) }}            
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Contraseña') }}            
            {{ Form::password('password', array('class' => 'form-control')) }}            
        </div>
                
        {{ Form::submit('Iniciar Sesión', array('class' => 'btn btn-primary', 'id' => 'btn-login')) }} 
        
    </div>
    
</div>

{{ Form::close() }}

@stop