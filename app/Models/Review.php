<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'provider_id',
        'rating',
        'comment',
        'offer_id',
    ];

    public function user(){
        return $this->belongsTo(User::class,'on delete cascade');
    }
    public function order(){
        return $this->hasOne(Service_Order::class);
    }
    public function offer(){
        return $this->hasOne(Offer::class);
    }
    
}
