<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccaine extends Model
{
    use HasFactory;
    protected $fillable = [
        'ino',
        'name',
        'mobile',
        'address',
        'dose',
        'vactype',
        'vacdate',
        'vactime',
    ];
}
