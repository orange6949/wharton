<?php

namespace App\Http\Controllers;

use App\Models\RequestEnrollment;
use Illuminate\Http\Request;

class RequestEnrollmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "grade" => "required|string|max:500",
            "first_name" => "required|string|max:500",
            "last_name" => "required|string|max:500",
            "phone" => "required|string|max:500",
            "email" => "required|email|max:500",
            "country" => "required|string|max:500",
            "address" => "required|string|max:500",
            "comment" => "nullable|string|max:5000",
        ]);

        $requestEnrollment = RequestEnrollment::create($request->all());

        return redirect()->back()->with("success", "Processed Successfully!");
    }
}
