<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_Note extends Model
{
    use HasFactory;
    protected $fillable=[
        'customer_id',
        'title',
        'content'
    ];
    public function customer(){
        return $this->belongsTo(Customer::class);
        }
}
