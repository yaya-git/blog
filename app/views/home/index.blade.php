@extends('layouts.application')

@section('content')

{{ Form::open(array('url' => '/', 'method' => 'get', 'id'=> 'pagination')) }}
    <div class="pull-right">
        {{ Form::text('date', $date, array('id' => 'datetimepicker')) }}
        {{ Form::submit('Buscar') }}
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