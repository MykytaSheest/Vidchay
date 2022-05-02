<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "image_url",
        "price",
        "sizes",
        "amount"
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('count-item', 'post-index', 'address');
    }
}
