<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'price',
        'address',
        'birthdate',
        'birthplace'
        
    ];

    public function artworks(){
        return $this->hasMany(Artwork::class, 'artist_id','id');
    }

}
