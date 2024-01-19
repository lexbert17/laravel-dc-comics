@extends('layouts.app') 
@section('content')
    <div class="container">
        <h2>{{$comics->title}}</h2>
        <img src="{{$comics->thumb}}" alt="comic">
        <h3>{{$comics->description}}</h3>
        <h3>{{$comics->price}}</h3>
        <h3>{{$comics->type}}</h3>
        <h3>{{$comics->series}}</h3>
        <h3>{{$comics->sale_date}}</h3>
        
    </div>
@endsection