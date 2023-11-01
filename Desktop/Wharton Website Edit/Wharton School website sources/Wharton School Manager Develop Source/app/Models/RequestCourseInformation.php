<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCourseInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        "grades",
        "first_name",
        "last_name",
        "phone",
        "email",
        "state",
        "post_code",
        "comment",
        "check"
    ];
}
