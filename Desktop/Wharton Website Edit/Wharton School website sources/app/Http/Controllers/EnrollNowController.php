<?php

namespace App\Http\Controllers;

use App\Http\Resources\DocumentResource;
use App\Models\Document;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EnrollNowController extends Controller
{
    public function enrollNow()
    {
        return Inertia::render("EnrollNow/EnrollNow");
    }

    public function documentsDownloads()
    {
        $documents = Document::orderBy("created_at", "desc")->get();

        return Inertia::render("EnrollNow/DocumentsDownloads", [
            "documents" => DocumentResource::collection($documents)
        ]);
    }

    public function requestTranscript()
    {
        return Inertia::render("EnrollNow/RequestTranscript");
    }

}
