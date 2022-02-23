<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowedItems extends Model
{
    use HasFactory;
    protected $table = 'borroweditem';
    protected $fillable = [
        'bname',
        'bdate',
        'itemb',
        'broom',
        'bquantity',

    ];

    protected $casts = [
        'itemb' => 'datetime',
        'returnd' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
