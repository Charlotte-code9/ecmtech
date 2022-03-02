<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';
    protected $guarded = [];
    // protected $fillable = [
    //     'name',
    //     'Name_item',
    //     'quantity_item',
    //     'dt_item',
    //     'room_item',
    //     'ldate_item',
    // ];

    protected $casts = [
        'dt_item' => 'datetime',

    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
