@extends('layouts.app')

@section('content')
    <h1 class="mb-4 text-center">lista comics</h1>
    <div class="container">
        <table class="table py-5">
            <thead>
              <tr>
                <th>id</th>
                <th>titolo</th>
                <th>serie</th>
                <th>prezzo</th>
                <th>tipologia</th>
                <th>azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <th>{{$comic->id}}</th>
                    <th>{{$comic->title}}</th>
                    <th>{{$comic->series}}</th>
                    <th>{{$comic->price}}</th>
                    <th>{{$comic->type}}</th>
                    <th>
                       <a class="btn btn-success" href="{{route('comics.show', ['comic'=> $comic->id])}}">Dettagli</a>
                       <a class="btn btn-warning" href="{{route('comics.create', ['comic'=> $comic->id])}}">Modifica</a>
                    </th>       
                </tr> 
                
                @endforeach
             
            </tbody>
          </table>
    </div>
   
@endsection