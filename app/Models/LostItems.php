<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostItems extends Model
{
    use HasFactory;
    protected $table = 'lostitems';
    protected $fillable = [
        'borrower_name',
        'b_date',
        'b_ite,',
        'b_room',
        'quantity',
        'r_date',
        'user_id',

    ];

    protected $casts = [
        'b_date' => 'datetime',
        'r_date' => 'datetime',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
