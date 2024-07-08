<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Club extends Authenticatable
{
    use HasFactory;
   
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone',
        'photo',
        'country_id',
        'owner_id',
        'package',
        
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    public function subscription(){
        return $this->hasOne(Subscription::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    public function customers(){
        return $this->hasMany(Customer::class);
    }
    
}
