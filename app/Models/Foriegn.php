<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foriegn extends Model
{
    use HasFactory;
    protected $table = 'add-foriegn';

    protected $fillable = [
        'code','r_event_date','e_event_name','industry_id','category_id','primary_id'
    ];
    public function IndustryName1()
    {
        return $this->belongsTo(industry::class,'industry_id','id');
    }
    public function CategoryName1()
    {
        return $this->belongsTo(category::class,'category_id','id');
    }
}
