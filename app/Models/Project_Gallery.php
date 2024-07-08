<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_id',
        'image',
        'work_desc',
        'completion_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'on delete cascade');
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
