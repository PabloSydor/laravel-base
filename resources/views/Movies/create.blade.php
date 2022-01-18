<link rel="stylesheet" href="../../css/create.css">
@extends('plantilla')

@section('titulo', 'New Movie')

@section('contenido')

{{-- <p>Hola, Crear works</p> --}}
<div class="contenedora">

    <p class="c-new">Insert a new Movie</p>


    <div class="derecha">


        <form class="derechas" action="{{route('movies.store')}}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input name="title" type="text" class="form-controld" id="title" placeholder="The Hateful Eight" >
              </div>

              <div class="mb-3">
                <label for="year" class="form-label">Year:</label>
                <input name="year" type="text" class="form-controld" id="year" placeholder="2014">
              </div>

              <div class="mb-3">
                <label for="director" class="form-label">Director:</label>
                <input name="director" type="text" class="form-controld" id="director" placeholder="Quentin Tarantino">
              </div>

              <div class="mb-3">
                <label for="picture" class="form-label">Picture:</label>
                <input name="picture" type="text" class="form-controld" id="picture" placeholder="hateful-8.jpg">
              </div>

              <div class="row-auto">
                <button type="submit" class="enviar">Add Movie</button>
              </div>





        </form>
    </div>
</div>


@endsection
