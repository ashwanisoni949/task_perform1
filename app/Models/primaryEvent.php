<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class primaryEvent extends Model
{
    use HasFactory;
    protected $table = 'primary-event';
    protected $fillable = [
        'code','date','name','industry_id','category_id'
    ];

    public function IndustryName()
    {
        return $this->belongsTo(industry::class,'industry_id','id');
    }
    public function CategoryName()
    {
        return $this->belongsTo(category::class,'category_id','id');
    }
}
