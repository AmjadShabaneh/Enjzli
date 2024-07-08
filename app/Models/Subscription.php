<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable=[
        'club-id',
        'expiry_date',
        'type'
    ];
    public function club(){
        return $this->belongsTo(Club::class);
    }
}
