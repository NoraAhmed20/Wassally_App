<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable=[
        'price',
        'offer',
        'order_id',
        'provider_id'
    ];

    public function order()
    {
       return $this->belongsTo(Order::class);
    }

    public function provider()
    {
       return $this->belongsTo(Provider::class);
    }

}

