<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Http\Resources\PostResource;
use App\Models\Blog;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CommunityController extends Controller
{
    public function blogs(Request $request)
    {
        $request->validate([
            "word" => "nullable|string|max:5000"
        ]);

        $blogs = new Blog();

        if($request->word)
            $blogs = $blogs->where("title", "like", "%".$request->word."%");

        $blogs = $blogs->orderBy("created_at", "desc")->paginate(30);

        return Inertia::render("Community/Blogs",[
            "blogs" => BlogResource::collection($blogs),
            "count" => Blog::count()
        ]);
    }

    public function blog(Blog $blog)
    {
        $posts = $blog->posts()->orderBy("created_at", "desc")->paginate(30);

        return Inertia::render("Community/Blog", [
            "blog" => BlogResource::make($blog),
            "posts" => PostResource::collection($posts)
        ]);
    }

    public function post(Post $post)
    {
        return Inertia::render("Community/Post", [
           "post" => PostResource::make($post)
        ]);
    }

    public function whartonSchool()
    {
        return Inertia::render("Community/WhartonSchool");
    }

    public function summerCamp()
    {
        return Inertia::render("Community/SummerCamp");
    }

    public function summerProgram()
    {
        return Inertia::render("Community/SummerProgram");
    }

    public function emergencyCrisisAndOperation()
    {
        return Inertia::render("Community/EmergencyCrisisAndOperation");

    }

    public function handicapAccessibleCurriculum()
    {
        return Inertia::render("Community/HandicapAccessibleCurriculum");

    }

    public function whartonSurvey()
    {
        return Inertia::render("Community/WhartonSurvey");
    }

}
