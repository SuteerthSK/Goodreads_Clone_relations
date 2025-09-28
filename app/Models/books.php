<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    public function user()
    {
        return $this->belongsToMany(User::class, 'user_books')->withPivot('shelf');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
