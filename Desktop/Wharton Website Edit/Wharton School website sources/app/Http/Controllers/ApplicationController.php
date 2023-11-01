<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            "student_first_name" => "required|string|max:500",
            "student_last_name" => "required|string|max:500",
            "student_birthdate" => "required|string|max:500",
            "student_sex" => "required|string|max:500",
            "student_country" => "nullable|string|max:500",
            "student_street" => "nullable|string|max:500",
            "student_city" => "nullable|string|max:500",
            "student_state" => "nullable|string|max:500",
            "student_postal_code" => "nullable|string|max:500",
            "student_grade" => "required|string|max:500",
            "relationship_to_student" => "required|string|max:500",
            "guardian_first_name" => "required|string|max:500",
            "guardian_last_name" => "required|string|max:500",
            "guardian_email" => "required|string|max:500",
            "guardian_phone" => "required|string|max:500",
            "session" => "required|string|max:500",
        ]);

        Application::create($request->all());

        return redirect()->back()->with("success", "Processed successfully!");
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
