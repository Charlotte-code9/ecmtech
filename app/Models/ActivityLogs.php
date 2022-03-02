<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLogs extends Model
{
    use HasFactory;
    protected $table = 'activitylogs';
    protected $fillable = [
        'name',
        'description',
        'date',
    ];

    protected $casts = [
        'date' => 'datetime',

    ];
}
