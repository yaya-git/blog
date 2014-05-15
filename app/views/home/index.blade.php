@extends('layouts.application')

@section('content')

{{ Form::open(array('url' => '/', 'method' => 'get', 'id'=> 'pagination')) }}
    <div class="row">
        
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('Fecha') }}
                {{ Form::text('date', $date, array('id' => 'datetimepicker', 'class' => 'form-control')) }}                
            </div>
        </div> 
        
        <div class="col-md-1">
            <div class="form-group">
                <label>&nbsp;</label>
                {{ Form::submit('Buscar', array('class' => 'btn btn-default')) }}  
            </div>            
        </div>
        
        <div class="col-md-8">
            <div class="form-group pull-right">
                {{ link_to('#', 'Busqueda avanzada', array('id' => 'btn-search')) }}
            </div>            
        </div>
        
    </div>

    <div class="row">
        <div  class="advanceSearch" style="{{ ($avanzado) ? '' : 'display:none;' }}">

            @include('search.search')

        </div>    
    </div>

    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-10">

            <H2>{{ $post->id }} . {{ $post->title }}</H2>

            <p>{{ $post->content }}</p>
        </div>

        <div class="col-md-2">
            <span>{{ $post->created_at }}</span>
        </div>
        @endforeach  
    </div>

    <div class="paginate row">
        <div class="col-md-6">
            <span>Mostrando  </span>
               {{ Form::select('pagiante',array('10'=>'10', '15' => '15', '20' => '20'), $limit, array('id' => 'sel-paginate', 'class' => 'form-control')) }} 
            <span> de un total de <b>{{ $posts->getTotal() }}</b> </span>
        </div>

        <div class="col-md-6 page">{{ $posts->appends(Input::except('page'))->links() }}</div>
    </div>      

{{ Form::close() }}

@stop