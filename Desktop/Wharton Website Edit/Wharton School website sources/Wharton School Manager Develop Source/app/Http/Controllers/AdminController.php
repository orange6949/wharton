<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Watcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:500",
            "email" => "required|email|max:500|unique:admins",
            "contact" => "required|string|max:500",
            "password" => "required|string|confirmed|min:8|max:20",
        ]);

        $admin = Admin::create([
            "name" => $request->name,
            "email" => $request->email,
            "contact" => $request->contact,
            "password" => Hash::make($request->password),
        ]);

        return redirect("/nova");
    }
}
