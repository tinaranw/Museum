<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'artist_id',
        'price',
        'type',
        'artwork_date'
    ];

    public function creator(){
        return $this->belongsTo(Artist::class, 'artist_id', 'id');
    }
}
