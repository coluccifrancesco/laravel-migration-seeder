@extends('layouts.master')

@section('tab')
    
    @foreach ($trains as $train)
        <h2>Arriva da:</h2>
        <p>{{$train['arriving_from']}}</p>
        <h2>Diretto a:</h2>
        <p>{{$train['going_to']}}</p>
        <br>
    @endforeach

@endsection