<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewRating extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'nama',
        'email',
        'rating',
        'comment',
        'review_id',
    ];

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
