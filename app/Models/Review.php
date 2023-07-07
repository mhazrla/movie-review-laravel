<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'section_1_title',
        'section_1_desc',
        'section_2_title',
        'section_2_desc',
        'section_3_title',
        'section_3_desc',
        'movie_id',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function ratings()
    {
        return $this->hasMany(ReviewRating::class);
    }
}
