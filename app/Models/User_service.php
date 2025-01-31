<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_service extends Model
{
    use HasFactory;
    protected $fillable=['user_id','service_id'];

    public function user(){
         return $this->belongsTo(User::class,'on delete cascade');
    }
    public function service(){
        return $this->belongsTo(Service::class);
    }
}
