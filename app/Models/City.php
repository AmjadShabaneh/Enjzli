<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable=['city_name'];

    public function users(){
        return $this->hasMany(User::class,'on delete cascade');
    }
    public function orders(){
        return $this->hasMany(Service_Order::class);
    }
}
