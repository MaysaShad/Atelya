<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function categoryNames()
    {
        return $this->hasMany(CategoryName::class)
            ->orderBy('name');
    }


    public function designs()
    {
        return $this->hasMany(Design::class);
    }
}
