<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "blog_id" => "required|integer"
        ]);

        $subscribe = Subscribe::where("user_id", auth()->id())->where("blog_id", $request->blog_id)->first();

        $subscribe ? $subscribe->delete() : Subscribe::create([
            "user_id" => auth()->id(),
            "blog_id" => $request->blog_id
        ]);

        return redirect()->back()->with("success", "Processed Successfully!");
    }
}
