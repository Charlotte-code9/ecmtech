<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';
    protected $fillable = [
        'name',
        'Name_item',
        'quantity_item',
        'dt_item',
        'room_item',
        'ldate_item',
    ];
}
