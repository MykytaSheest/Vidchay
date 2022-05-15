<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    const DEFAULT_STATUS_ID = 1;


    protected $fillable = [
        'status_value',
        'status_name',
        'status_id',
        'order_id'
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
