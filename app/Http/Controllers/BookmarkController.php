<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookmarkController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "blog_id" => "required|integer"
        ]);

        $bookmark = Bookmark::where("user_id", auth()->id())->where("blog_id", $request->blog_id)->first();

        $bookmark ? $bookmark->delete() : Bookmark::create([
            "user_id" => auth()->id(),
            "blog_id" => $request->blog_id
        ]);

        return redirect()->back()->with("success", "Processed Successfully!");
    }
}
