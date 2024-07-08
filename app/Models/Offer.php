<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'service_order_id',
        'offer_cost',
        'offer_status',
        'offer_desc',
        'duration_work'
    ];

    public function user(){
        return $this->belongsTo(User::class,'on delete cascade');
    }

    public function service_order(){
        return $this->belongsTo(Service_Order::class);
        
    }

    public function review(){
        return $this->hasOne(Review::class);
        
    }
}
