<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function merches()
    {
        return $this->belongsToMany(Merch::class)->withPivot('count-item', 'post-index', 'address');
    }
}
