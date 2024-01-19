@extends('layouts.app');
@section('content')
    <div class="container">
        <h2 class="text-center py-5">Modifica elemento</h2>
        <form action="{{route('comics.store')}}" method="post"> 
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
             
            </div>
            <div class="mb-3">
              <label for="thumb" class="form-label">Immagine</label>
              <input type="text" class="form-control" id="thumb" name="thumb">
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control"  id="description" name="description" style="height: 100px"></textarea>
                <label for="description">Descrizione</label>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>

            <div class="mb-3">
                <label for="sale_date">Data di vendita:</label>
                <input type="date" id="sale_date" name="sale_date" />
            </div>

            <div class="mb-3">
                <label for="type"></label>
                <select class="form-select" id="type" name="type" aria-label="Default select example">
                    <option selected>Seleziona il tipo</option>
                    <option value="comic book">comic book</option>
                    <option value="graphic novel">graphic novel</option>
                </select>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Salva</button>

          </form>
    </div>
@endsection