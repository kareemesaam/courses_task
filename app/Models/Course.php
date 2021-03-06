<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = ['id'];

    public function scopeActive($query)
    {
        $query->where('active', 1);
    }

    public function category()
    {
         return $this->belongsTo(Category::class,'category_id');
    }


}
