<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = [
        'expiry_date'
    ];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
