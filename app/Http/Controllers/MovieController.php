<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieStoreRequest;
use App\Http\Requests\MovieUpdateRequest;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();

        return view('homepage', compact(['reviews']));
    }

    public function origin()
    {
        $indoMovies = Movie::where('origin', 0)->latest()->with(['review'])->get();
        $westernMovies = Movie::where('origin', 1)->latest()->with(['review'])->get();

        return view('origin', compact(['indoMovies', 'westernMovies']));
    }

    public function genre()
    {
        $genres = Genre::latest()->get();
        $movies = Movie::latest()->latest()->with(['review'])->get();

        return view('genre', compact(['genres', 'movies']));
    }

    public function about()
    {

        return view('about');
    }

    public function dashboard()
    {
        $movies = Movie::latest()->get();
        return view('movies.dashboard', compact(['movies']));
    }

    public function create()
    {
        $genres = Genre::all();

        return view('movies.create', compact('genres'));
    }

    public function store(MovieStoreRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();
        if ($request->has('thumbnail')) {
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        }

        Movie::create($validatedData);

        return to_route('dashboard')->with('status', 'Movie has been added.');
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        $genres = Genre::all();

        return view('movies.edit', compact('movie', 'genres'));
    }

    public function update(MovieUpdateRequest $request, Movie $movie)
    {

        if ($request->has('thumbnail')) {
            !is_null($movie->thumbnail) && Storage::delete($movie->thumbnail);
            $movie->thumbnail = $request->file('thumbnail')->store('thumbnails');
        }

        $movie->update($request->validated() + [
            'thumbnail' => $movie->thumbnail,
        ]);

        return to_route('dashboard')->with('status', 'Movie has been updated.');
    }

    public function destroy(Movie $movie)
    {

        Storage::delete($movie->thumbnail);
        $movie->delete();

        return back()->with('status', 'Movie has been deleted.');
    }
}
