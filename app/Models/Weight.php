<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;
    protected $fillable = [
        'weight',
        'customer_id',
    ];
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
