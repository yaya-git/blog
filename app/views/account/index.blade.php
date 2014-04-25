@extends('layouts.account')


@section('content')

Account {{ Auth::user()->email }}

@stop