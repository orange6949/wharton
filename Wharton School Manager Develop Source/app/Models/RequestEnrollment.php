<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestEnrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        "grade",
        "first_name",
        "last_name",
        "phone",
        "email",
        "country",
        "address",
        "comment",
    ];
}
