<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'user_type',
        'image',
        'city_id',
        'address',
        

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function user_services(){
        return $this->hasMany(User_service::class);
    }

    public function projects(){
        return $this->hasMany(Project_Gallery::class);
    }
    
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function offers(){
        return $this->hasMany(Offer::class);
    }

    public function service_orders(){
        return $this->hasMany(Service_Order::class);
    }
    
}
