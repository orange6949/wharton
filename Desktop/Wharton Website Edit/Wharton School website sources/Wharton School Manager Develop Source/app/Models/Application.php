<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        "student_first_name",
        "student_last_name",
        "student_birthdate",
        "student_sex",
        "student_country",
        "student_street",
        "student_city",
        "student_state",
        "student_postal_code",
        "student_grade",
        "relationship_to_student",
        "guardian_first_name",
        "guardian_last_name",
        "guardian_email",
        "guardian_phone",
        "session",
    ];
}
