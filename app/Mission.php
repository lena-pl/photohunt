<?php

namespace App;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model implements StaplerableInterface
{
    use EloquentTrait;

	protected $fillable = ['title', 'description', 'photo'];

	public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('photo', [
            'styles' => [
                'hero' => [
                    'dimensions' => '1170x400#',
                    'convert_options' => ['quality' => 60]
                    ],
                'medium' => '500x500',
                'thumb'  => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }

    function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    function attempts()
    {
        return $this->hasMany(Attempt::class);
    }
}
