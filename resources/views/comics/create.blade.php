@extends('layouts.app');
@section('content')
    <div class="container">
        <h2 class="text-center py-5">Aggiungi elemento</h2>
        @if ($errors->any())
        <div class="callout">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{$error}}</li>
                @endforeach
            </ul>
        </div>
            
        @endif
        <form action="{{route('comics.store')}}" method="post"> 
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{old('title')}}">
             
            </div>
            <div class="mb-3">
              <label for="thumb" class="form-label">Immagine</label>
              <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control"  id="description" name="description" style="height: 100px">{{old('description')}}</textarea>
                <label for="description">Descrizione</label>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
            </div>

            <div class="mb-3">
                <label for="sale_date">Data di vendita:</label>
                <input type="date" id="sale_date" name="sale_date" value="{{old('sale_date')}}"/>
            </div>

            <div class="mb-3">
                <label for="type"></label>
                <select class="form-select" id="type" name="type" aria-label="Default select example">
                    <option selected>Seleziona il tipo</option>
                    <option @selected(old('type')=== 'comic book') value="comic book">comic book</option>
                    <option @selected(old('type')=== 'graphic novel') value="graphic novel">graphic novel</option>
                </select>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Salva</button>

          </form>
    </div>
@endsection