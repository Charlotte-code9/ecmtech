<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eborrower extends Model
{
    use HasFactory;
    protected $table = 'eborrower';
    protected $fillable = [
        'idnum',
        'bname',
        'bdept',
        'btype',
        'byrsec',

    ];
}
