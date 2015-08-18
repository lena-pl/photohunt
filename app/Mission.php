<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
