<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Dotenv\Validator;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = Movie::latest()->simplePaginate(5);

        return view('movies.index', compact('movies'))->with(request()->input('page'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $validator = Validator($request->all(),[
        //         'title' => 'required',
        //         'length' => 'required',
        //         'story' => 'required',
        //         'releaseDate' => 'nullable',
        //         'country' => 'nullable',
        //         'language' => 'nullable',
        //         'production_studio' => 'nullable',
        //         'budget' => 'nullable',
        //         'director' => 'nullable',
        //         'writer' => 'nullable'

        // ]);


        // if ($validator->fails()) {
        //     return redirect('post/create')
        //     ->withErrors($validator)
        //         ->withInput();
        // }

        // $validated = $validator->validated();


        //validate input
        $request->validate([
            'title' => 'required',
            'length' => 'required',
            'story' => 'required',
            'releaseDate' => 'nullable|date',
            'country' => 'nullable',
            'language' => 'nullable',
            'production_studio' => 'nullable',
            'budget' => 'nullable',
            'director' => 'nullable',
            'writer' => 'nullable'


        ]);
        //create a new Movie

        Movie::create($request->all());

        //redirect the user and send friendly message

        return redirect()->route('movies.index')->with('success', 'Movie created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required',
            'length' => 'required',
            'story' => 'required',
            'releaseDate' => 'nullable|date',
            'country' => 'nullable',
            'language' => 'nullable',
            'production_studio' => 'nullable',
            'budget' => 'nullable',
            'director' => 'nullable',
            'writer' => 'nullable'
        ]);

        // $affected = Movie::table('movies')->where('id', $movie->id)->update($request->all());
        $movie->update($request->all());

        return redirect()->route('movies.index')->with('success', 'Movie updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {

       // delete product

        $movie->delete();

        //redirect the user and send success massage

        return redirect()->route('movies.index')->with('success', 'Movie delete successfully');
    }
}
