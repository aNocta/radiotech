<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = ['image', 'name', 'short_description', 'description', 'advantages'];
    protected $casts = [
        "advantages" => "array",
    ];
}
