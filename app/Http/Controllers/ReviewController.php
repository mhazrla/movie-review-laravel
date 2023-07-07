<?php

namespace App\Http\Controllers;

use App\Http\Requests\RatingRequest;
use App\Http\Requests\ReviewRequest;
use App\Models\Movie;
use App\Models\Review;
use App\Models\ReviewRating;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function dashboard()
    {
        $reviews = Review::latest()->get();

        return view('reviews.dashboard', compact(['reviews']));
    }

    public function create()
    {
        $movies = Movie::get();

        return view('reviews.create', compact('movies'));
    }

    public function store(ReviewRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        Review::create($validatedData);

        return to_route('review.dashboard')->with('status', 'Review has been added.');
    }

    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    public function update(ReviewRequest $request, Review $review)
    {
        $review->update($request->validated());

        return to_route('review.dashboard')->with('status', 'Review has been updated.');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return back()->with('status', 'Review has been deleted.');
    }

    public function reviewRating(RatingRequest $request)
    {
        $validatedData = $request->validated();

        ReviewRating::create($validatedData);

        return redirect()->back()->with('status', 'Your review has been submitted Successfully');
    }
}
