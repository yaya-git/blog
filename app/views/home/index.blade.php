@extends('layouts.application')

@section('content')



@foreach ($posts as $post)
    <H2>{{ $post->title }}</H2>
    
    <p>{{ $post->content }}</p>
@endforeach
<br>
<br>
<br>

{{ print_r($paginator) }}



<br>
<br>
<br>


{{ $posts->links('paginate.pagination') }}


@stop