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

    <div class="pull-left">
        {{ Form::select('pagiante',array('10'=>'10', '15' => '15', '20' => '20'), $limit, array('id' => 'sel-paginate', 'class' => 'form-control')) }}
    </div>
{{ Form::close() }}

<div class="pull-right">{{ $posts->appends(Input::except('page'))->links() }}</div>

@stop