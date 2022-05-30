<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'client_id',
        'merch_id',
        'count-item',
        'post-index',
        'address',
        'status_id',
        'order_id'
    ];

    public function merches()
    {
        return $this->hasMany(Merch::class, 'id', 'merch_id');
    }

    public function clients()
    {
        return $this->hasMany(Client::class, 'id', 'client_id');
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class, 'order_status')->withPivot('status_id');
    }
}


