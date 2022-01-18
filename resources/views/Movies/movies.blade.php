<link rel="stylesheet" href="css/movies.css">
<link rel="stylesheet" href="css/movies2.css">
@extends('plantilla')


@section('titulo', 'Movies')

@section('contenido')

<div class="btn-cont">
    <a class="btun" href="{{route('movies.create')}}" >
        <button class="insert">
            <div class="panel">
                <img class="panel-img" src="imgs/logo/insert.svg" alt=""> <span class="panel-text">New Movie</span>
            </div>
        </button>
    </a>
</div>



<div class="contenedor">
    {{-- @if (isset($texto))
    <p style="font-size: 100px">{{$texto}}</p>
@endif --}}

{{-- @isset($texto)
<p>{{$texto}}</p>
@endisset --}}



    @forelse ($movies as $movie)
    <a href="{{Route('movies-show', $movie)}}" class="movie-card">
        <img src="imgs/movies/{{$movie['picture']}}" alt="" class="card__img">
        <p class="card__title">{{$movie['title']}}</p>
    </a>
    @empty

    @endforelse
</div>



@endsection




