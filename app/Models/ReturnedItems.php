<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnedItems extends Model
{
    use HasFactory;
    protected $table = 'returneditem';
    protected $fillable = [
        'rname',
        'rdate',
        'itemr',
        'rroom',
        'rquantity',
    ];
}
