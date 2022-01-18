<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::get();
        return view("Movies.movies", compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie();
        // $movie['id'] = 100;
        $movie['title'] = $request['title'];
        $movie['year'] = $request['year'];
        $movie['director'] = $request['director'];
        $movie['picture'] = $request['picture'];

        $movie->save();
        return redirect()->route('movies');

        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    // public function show(Movie $movie)
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('Movies.movie', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);

        return view('Movies.edit-movie', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        // return $request->all();
        $movie['title'] = $request['title'];
        $movie['year'] = $request['year'];
        $movie['director'] = $request['director'];
        $movie['picture'] = $request['picture'];


        $movie->save();
        return view('Movies.movie', compact('movie'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Movie $movie)
    // {
    //     $movie = Movie::findOrFail($movie->id);
    //     $movie->delete();
    //     // return redirect()->route('movies');
    //     return redirect('movies');
    // }



    // public function destroy(Movie $movie) {
    //     $movie->delete();

    //     return redirect()->route('movies');
    // }



    public function destroy($id) {
        $movie = Movie::findOrFail($id);
        // $texto = $movie['title'] . " has been deleted succesfuly!" ;

        $movie->delete();

        return redirect()->route('movies');


        // return redirect()->route('movies', compact('texto'));
    }




}
