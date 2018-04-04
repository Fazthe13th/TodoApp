@extends('layout');

@section('content')
    @foreach ($todos as $todo)
        <h3>{{$todo->todo}}</h3>
        <br>
    @endforeach
@stop