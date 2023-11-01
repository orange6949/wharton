<?php

namespace App\Http\Controllers;

use App\Models\RequestEnrollment;
use App\Models\RequestTranscript;
use Illuminate\Http\Request;

class RequestTranscriptController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "request_date" => "required|string|max:500",
            "birth_date" => "required|string|max:500",
            "first_name" => "required|string|max:500",
            "last_name" => "required|string|max:500",
            "course" => "required|string|max:500",
            "address" => "required|string|max:500",
            "phone" => "required|string|max:500",
            "email" => "required|string|max:500",
            "send_transcript_to" => "required|string|max:500",
            "requested_number" => "required|integer|min:0",
            "file" => "required|file|max:40960" // 40MB
        ]);


        $requestTranscript = RequestTranscript::create([
            "request_date" => $request->request_date,
            "birth_date" => $request->birth_date,
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "course" => $request->course,
            "address" => $request->address,
            "phone" => $request->phone,
            "email" => $request->email,
            "send_transcript_to" => $request->send_transcript_to,
            "requested_number" => $request->requested_number
        ]);

        $requestTranscript->addMedia($request->file)->toMediaCollection("file", "s3");

        return redirect()->back()->with("success", "Processed Successfully!");
    }
}
