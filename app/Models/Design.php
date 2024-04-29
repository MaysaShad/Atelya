<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function categoryName()
    {
        return $this->belongsTo(CategoryName::class);
    }


    public function size()
    {
        return $this->belongsTo(Size::class);
    }


    public function color()   
    {
        return $this->belongsTo(Color::class);
    }
}
