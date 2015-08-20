<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{

	protected $fillable = ['title', 'description', 'filename'];
	
    function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
