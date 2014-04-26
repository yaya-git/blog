@extends('layouts.account')

@section('content')

Account {{ Auth::user()->email }}

@include('post.create')

@stop