<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class RequestTranscript extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        "request_date",
        "birth_date",
        "first_name",
        "last_name",
        "course",
        "address",
        "phone",
        "email",
        "send_transcript_to",
        "requested_number",
        "file"
    ];

    protected $appends = ["file"];

    public function getFileAttribute()
    {
        if($this->hasMedia('file')) {
            $media = $this->getMedia('file')[0];

            return [
                "name" => $media->file_name,
                "url" => $media->getFullUrl()
            ];
        }

        return null;
    }
}
