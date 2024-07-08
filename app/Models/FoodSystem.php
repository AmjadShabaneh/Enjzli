<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class FoodSystem extends Model
{
    use HasFactory;
    protected $table = 'food_systems';

    protected $fillable = [
        'photo',
        'customer_id',
        'goal',
        'date',
    ];
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
