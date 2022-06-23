@extends('layouts.main')

@section('container')
    <h2> Rizal Arif Section About</h2>
    <h3>{{$nama}}</h3>
    <p>{{$email}}</p>
    <img src="img/{{$image}}" alt="{{$image}}">
@endsection