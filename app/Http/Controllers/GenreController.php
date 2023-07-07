<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenreRequest;
use App\Models\Genre;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function dashboard()
    {
        $genres = Genre::latest()->get();

        return view('genres.dashboard', compact(['genres']));
    }

    public function create()
    {
        return view('genres.create');
    }

    public function store(GenreRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        Genre::create($validatedData);

        return to_route('genre.dashboard')->with('status', 'Genre has been added.');
    }

    public function show(Genre $genre)
    {
        return view('genres.show', compact('genre'));
    }

    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    public function update(GenreRequest $request, Genre $genre)
    {
        $genre->update($request->validated());

        return to_route('genre.dashboard')->with('status', 'Genre has been updated.');
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();

        return back()->with('status', 'Review has been deleted.');
    }
}
