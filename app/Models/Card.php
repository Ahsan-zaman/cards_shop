<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function codes()
    {
        return $this->hasMany(Code::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
