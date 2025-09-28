<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class groups_table extends Model
{
    public function User()
    {
        return $this->belongsToMany(User::class);
    }
    public function posts()
    {
        return $this->belongsToMany(posts::class);
    }
}
