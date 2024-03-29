<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';
    protected $fillable = [
        'title',
        'phone',
        'email',
        'date-call',
        'room-type',
        'status_id',
        'time_create'
    ];
}
