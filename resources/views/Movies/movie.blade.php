<link rel="stylesheet" href="css/movies.css">
<link rel="stylesheet" href="../css/movie.css">
@extends('plantilla')

@section('title', 'Movie')


@section('contenido')

<div class="contenedora">
    <div class="izquierda">
        <img class="imagen" src="../imgs/movies/{{$movie['picture']}}" alt="">
        <p class="titulo">{{$movie['title']}}</p>
    </div>
    <div class="derecha">
        <p class="titulo-der">About {{$movie['title']}}</p>
        <div class="infor">
            <span class="span-info">Director: </span><span class="p-info">{{$movie['director']}}</span>
        </div>
        <div class="infor">
            <span class="span-info">Year: </span><span  class="p-info">{{$movie['year']}}</span>
        </div>




        <form action="{{route('movies.destroy', $movie['id'])}}" method="POST">
            <div class="c-panel">
                @csrf
                @method('delete')
                    <div class="editar">
                        <a href="{{route('movies.edit', $movie['id'])}}"><img  class="img-panel" src="../imgs/logo/edit.png" alt=""></a>
                    </div>
                    <div class="borrar">
                        <input type="image" class="img-panel" value="Delete Movie" src="../imgs/logo/trash.png" />
                            </div>
                    </div>
        </form>



        </div>






</div>


@endsection






        {{-- <form action="{{ route('movies-destroy', $movie)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="c-panel">
                <div class="editar">
                    <img class="img-panel" src="../imgs/logo/edit.png" alt="">
                </div>
                <div class="borrar">
            <input type="image" class="img-panel" value="Delete Movie" src="../imgs/logo/trash.png" />
                    <img class="img-panel" src="../imgs/logo/trash.png" alt="">
                </div>
            </div>
           </form> --}}



                        {{-- <img class="img-panel" src="../imgs/logo/trash.png" alt=""> --}}


            {{-- <button type="submit">Borrar</button> --}}
