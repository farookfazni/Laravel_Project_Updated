<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    use HasFactory;
    protected $fillable = [
        'ino',
        'name',
        'mobile',
        'address',
        'testtype',
        'testdate',
        'testtime',
    ];
}
