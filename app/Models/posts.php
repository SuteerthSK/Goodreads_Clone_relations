<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{


    public function groups_table()
    {
        return $this->belongsTo(groups_table::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
