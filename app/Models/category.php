<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'category_add';

    protected $fillabe = [
        'name','industry_id'
    ];

    public function Industry_name()
    {
        return $this->belongsTo(industry::class,'industry_id','id');
    }
}
