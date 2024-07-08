<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillabel=['service_name','service_desc'];
    
    

    public function user_services(){
        return $this->hasMany(User_service::class);
    }

    public function orders(){
        return $this->hasMany(Service_Order::class);
    }
    public function projects(){
        return $this->hasMany(Project_Gallery::class);
    }
}
