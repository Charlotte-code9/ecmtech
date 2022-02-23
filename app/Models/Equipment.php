<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $table = 'equipment';
    protected $fillable = [
        'e_model',
        'e_category',
        'e_brand',
        'e_quantity',
        'e_status',
        'e_image',

    ];
}
