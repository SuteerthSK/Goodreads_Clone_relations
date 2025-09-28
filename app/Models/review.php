<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Books::class);
    }
}
