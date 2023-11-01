<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $casts = [
        "started_at" => "date",
        "finished_at" => "date"
    ];

    protected $fillable = ["title", "started_at", "finished_at"];
}
