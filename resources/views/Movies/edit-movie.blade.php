<link rel="stylesheet" href="../../css/editMovie.css">
@extends('plantilla')

@section('titulo', 'Edit Movie')

@section('contenido')


<div class="contenedora">

{{-- <p>{{$movie['title']}}</p> --}}

<div class="izquierda">
    <img class="imagen" src="../../imgs/movies/{{$movie['picture']}}" alt="">
    <p class="titulo">{{$movie['title']}}</p>
</div>

<div class="derecha">

<h2 class="tituloder">Edit Movie</h2>

    <form class="derechas" action="{{route('movies.update', $movie['id'])}}" method="POST">

        @csrf
        @method('put')

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input name="title" type="text" class="form-controld" id="title" value="{{$movie['title']}}" >
          </div>

          <div class="mb-3">
            <label for="year" class="form-label">Year:</label>
            <input name="year" type="text" class="form-controld" id="year" value="{{$movie['year']}}">
          </div>

          <div class="mb-3">
            <label for="director" class="form-label">Director:</label>
            <input name="director" type="text" class="form-controld" id="director" value="{{$movie['director']}}">
          </div>

          <div class="mb-3">
            <label for="picture" class="form-label">Picture:</label>
            <input name="picture" type="text" class="form-controld" id="picture" value="{{$movie['picture']}}">
          </div>

          <div class="row-auto">
            <button type="submit" class="enviar">Update</button>
          </div>





    </form>


</div>


</div>








@endsection
