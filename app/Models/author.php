<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function books()
    {
        return $this->hasMany(Books::class);
    }
}
