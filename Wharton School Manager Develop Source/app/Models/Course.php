<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [ "category_id", "title", "description", "grade", "unit", "school"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
