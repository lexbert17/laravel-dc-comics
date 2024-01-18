@extends('layouts.app') 
@section('content')
    <div class="container">
        <h1>{{$comics->series}}</h1>
        <img src="{{$comics->thumb}}" alt="">
        <h3>{{$comics->price}}</h3>
        <h3>{{$comics->type}}</h3>
        
    </div>
@endsection