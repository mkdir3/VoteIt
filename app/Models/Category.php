<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // A Category can have multiple ideas
    public function ideas() 
    {
        return $this->hasMany(Idea::class);
    }
}
