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

    public function clients()
    {
        return $this->belongsToMany(Client::class)->withPivot('count-item', 'post-index', 'address');
    }
}