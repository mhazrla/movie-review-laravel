<?php

namespace App\Http\Livewire;

use App\Models\ReviewRating;
use Livewire\Component;

class ReviewRatings extends Component
{
    public $rating;
    public $nama;
    public $email;
    public $comment;
    public $currentId;
    public $review;
    public $hideForm;

    protected $rules = [
        'rating' => ['required', 'in:1,2,3,4,5'],
        'comment' => 'required',
        'nama' => 'required',
        'email' => 'required',

    ];

    public function render()
    {
        $comments = ReviewRating::where('review_id', $this->review->id)->get();
        return view('livewire.review-ratings', compact('comments'));
    }

    public function mount()
    {
        $rating = ReviewRating::where('review_id', $this->review->id)->first();
        if (!empty($rating)) {
            $this->rating  = $rating->rating;
            $this->nama  = $rating->nama;
            $this->email  = $rating->email;
            $this->comment = $rating->comment;
            $this->currentId = $rating->id;
        }
        return view('livewire.review-ratings');
    }

    public function delete($id)
    {
        $rating = ReviewRating::where('id', $id)->first();
        if ($rating) {
            $rating->delete();
        }
        if ($this->currentId) {
            $this->currentId = '';
            $this->rating  = '';
            $this->comment = '';
            $this->nama  = '';
            $this->email = '';
        }
    }

    public function rate()
    {
        $rating = ReviewRating::where('review_id', $this->review->id)->first();
        $this->validate();
        if (!empty($rating)) {
            $data =
                [
                    'review_id' => $this->review->id,
                    'rating' => $this->rating,
                    'nama' => $this->nama,
                    'email' => $this->email,
                    'comment' => $this->comment,
                ];

            try {
                ReviewRating::create($data);
            } catch (\Throwable $th) {
                throw $th;
            }
            session()->flash('message', 'Success!');
        } else {
            $rating = new ReviewRating;
            $rating->review_id = $this->review->id;
            $rating->rating = $this->rating;
            $rating->comment = $this->comment;
            $rating->nama = $this->nama;
            $rating->email = $this->email;
            try {
                $rating->save();
            } catch (\Throwable $th) {
                throw $th;
            }
            $this->hideForm = true;
        }
    }
}
