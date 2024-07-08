<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'phone',
        'password',
        'photo',
        'email',
        'birth_date',
        'height',
        'gender',
        'trainer_name',
        'notes',
        'club_id',
        'sub_expiry_date',
        "join_date"
        
    ];
    public function club(){
        return $this->belongsTo(Club::class);
    }
    public function weights(){
        return $this->hasMany(Weight::class);
    }
    public function trainings(){
        return $this->hasMany(Training::class);
    }
    public function food_systems(){
        return $this->hasMany(Food_System::class);
    }
    public function customer_notes(){
        return $this->hasMany(Customer_Note::class);
    }
}
