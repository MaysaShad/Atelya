<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function designs()
    {
        return $this->hasMany(Design::class);
    }
}
