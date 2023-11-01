<?php

namespace App\Http\Controllers;

use App\Models\RequestCourseInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RequestCourseInformationController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            "grades" => "required|string|max:500",
            "first_name" => "required|string|max:500",
            "phone" => "required|string|max:500",
            "email" => "required|string|email|max:500",
            "state" => "required|string|max:500",
            "post_code" => "required|string|max:500",
            "comment" => "nullable|string|max:500",
        ]);

        RequestCourseInformation::create(array_merge($request->all(), ["check" => false]));

        return Redirect::back()->with("success", "Processed successfully!");
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
