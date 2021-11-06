<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stars'
    ];

    public function video()
    {
        return $this->hasMany(Video::class);
    }
}
