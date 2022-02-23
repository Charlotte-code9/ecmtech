<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation_Status extends Model
{
    use HasFactory;
    protected $table = 'reservation_status';
    protected $fillable = [
        'resname',
        'reseqp',
        'resdate',
        'resroom',
        'res',
    ];

}
