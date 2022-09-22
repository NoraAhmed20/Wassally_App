<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'from',
        'to',
        'date',
        'weight',
        'information',
        'user_id'
    ];

    public function user()
    {
        return  $this->belongsTo(User::class);
    }

    
    public function offers()
    {
     return   $this->hasMany(Offer::class);
    }
}
