{{-- <link rel="stylesheet" href="../css/home.css"> --}}
<link rel="stylesheet" href="../css/home2.css">
@extends('plantilla')

@section('titulo', 'Home')


@section('contenido')
{{-- <div class="title">
    <h1 class="home-title">Sydoria Cinema</h1>
    <p class="home-subtitle">The best place to watch your movies! Even better than Netflix!</p>
</div> --}}

<div class="c-home">
    <div class="c-background">
        <img src="imgs/home/background.png" alt="" class="c-background__image">
    </div>

<div class="title">
    <h1 class="home-title">Sydoria Cinema</h1>
    <p class="home-subtitle">The best place to watch your movies! Even better than Netflix!</p>
    {{-- <video class="video" width="580" height="360" poster="../imgs/home/joker.jpg" controls>
        <source src="../videos/joker.mp4" type="video/mp4">
      </video> --}}
</div>


</div>



@endsection
