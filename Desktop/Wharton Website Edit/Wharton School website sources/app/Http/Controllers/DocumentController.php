<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DocumentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|string|max:500",
            "file" => "required|file|max:40960" // 40MB
        ]);

        $document = Document::create($request->all());

        $document->addMedia($request->file)->toMediaCollection("file", "s3");

        return redirect()->back();
    }
}
