<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class industry extends Model
{
    use HasFactory;
    protected $table = 'industry';

    protected $fillabe = [
        'name'
    ];
}
