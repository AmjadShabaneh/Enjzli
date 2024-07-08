<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'service_id',
        'city_id',
        'order_desc',
        'order_status',// مكتمل او غير مكتمل
        'date_service',//تاريخ النشر
        'duration_work',  
    ];
    public function user(){
        return $this->belongsTo(User::class,'on delete cascade');
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function review(){
        return $this->hasOne(Review::class);
    }

    public function offers(){
        return $this->hasMany(Offer::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }

}
