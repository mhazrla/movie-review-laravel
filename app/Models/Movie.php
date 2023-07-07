<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'judul',
        'genre_id',
        'sinopsis',
        'tahun',
        'sutradara',
        'thumbnail',
        'origin',
    ];

    public function review()
    {
        return $this->hasOne(Review::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
