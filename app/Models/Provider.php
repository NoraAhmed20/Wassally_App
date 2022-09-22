<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'Profile_pic',
        'ID_pic',
        'phone'
    ];

    public function user()
    {
        return  $this->belongsTo(User::class);
    }

    
    public function offer()
    {
        return  $this->hasMany(Offer::class);
    }
    
}

