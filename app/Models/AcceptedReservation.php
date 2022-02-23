<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedReservation extends Model
{
    use HasFactory;
    protected $table = 'acceptedreservation';
    protected $fillable = [
        'a_name',
        'a_nitem',
        'a_dtitem',
        'a_ritem',
        'a_ldateitem',
        'status'
    ];
}
