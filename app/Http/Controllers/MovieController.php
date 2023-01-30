<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        foreach ($movies as $movie){
            $movie->storyline = Str::limit($movie->storyline, 150, '...');
        }
        return view('/movies',compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo($request);
        $request->validate([
            'title' => "required|min:3|max:255",
            'genre' => "required|min:3|max:255",
            'director' => "required|min:3|max:255",
            'releasedate' => "required|date|after:01/01/1900",
            'storyline' => "required|min:3|max:255",
        ]);

        $movie = new Movie();
        $movie->title = $request->title;
        $movie->genre = $request->genre;
        $movie->director = $request->director;
        $movie->releasedate = $request->releasedate;
        $movie->storyline = $request->storyline;

        $movie->save();

        return redirect('movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::with('comments')->find($id);

        return view('movie',compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
