<?php

namespace App\Http\Controllers;

use App\Http\Resources\ScheduleResource;
use App\Models\Category;
use App\Models\Course;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AcademicsController extends Controller
{
    public function apCourses()
    {
        return Inertia::render("Academics/APCourses");
    }

    public function middleSchool(Request $request)
    {
        $request->validate([
            "category_id" => "nullable|integer",
            "word" => "nullable|string|max:5000"
        ]);

        $categories = Category::get();

        $courses = Course::where("school", "Middle School");

        if($request->category_id)
            $courses = $courses->where("category_id", $request->category_id);

        if($request->word)
            $courses = $courses->where("title", "like", "%".$request->word."%");


        $courses = $courses->with("category")->orderBy("created_at", "asc")->paginate(30);

        return Inertia::render("Academics/MiddleSchool",[
            "category_id" => $request->category_id,
            "categories" => $categories,
            "courses" => $courses,
        ]);
    }

    public function highSchool(Request $request)
    {
        $request->validate([
            "category_id" => "nullable|integer",
            "word" => "nullable|string|max:5000"
        ]);

        $categories = Category::get();

        $courses = Course::where("school", "High School");

        if($request->category_id)
            $courses = $courses->where("category_id", $request->category_id);

        if($request->word)
            $courses = $courses->where("title", "like", "%".$request->word."%");


        $courses = $courses->with("category")->orderBy("created_at", "asc")->paginate(30);

        return Inertia::render("Academics/HighSchool",[
            "category_id" => $request->category_id,
            "categories" => $categories,
            "courses" => $courses,
        ]);
    }

    public function whartonSchool()
    {
        return Inertia::render("Academics/WhartonSchool");
    }

    public function course(Course $course)
    {
        $course = $course->load("category");
        return Inertia::render("Academics/Course",[
            "course" => $course
        ]);
    }

    public function onlineEsl()
    {
        return Inertia::render("Academics/OnlineEsl");
    }

    public function aboutAp()
    {
        $categories = Category::with("courses")->get();

        return Inertia::render("Academics/AboutAp",[
            "categories" => $categories,
        ]);
    }

    public function calendar(Request $request)
    {
        $date = $request->date ? $request->date : Carbon::now()->format("Y-m-d");

        $schedules = Schedule::where(function($query) use ($date){
            $query->where("started_at", ">=", Carbon::make($date)->startOfMonth()->startOfDay())
                ->where("started_at", "<=", Carbon::make($date)->startOfMonth()->endOfDay())
                ->where("finished_at", ">=", Carbon::make($date)->endOfMonth()->startOfDay())
                ->where("finished_at", "<=", Carbon::make($date)->endOfMonth()->endOfDay());
        })->orWhere(function($query) use ($date){
            $query->where("started_at", ">=", Carbon::make($date)->startOfMonth()->startOfDay())
                ->where("started_at", "<=", Carbon::make($date)->endOfMonth()->endOfDay());
        })->orWhere(function($query) use ($date){
            $query->where("finished_at", ">=", Carbon::make($date)->startOfMonth()->startOfDay())
                ->where("finished_at", "<=", Carbon::make($date)->endOfMonth()->endOfDay());
        })->orWhere(function($query) use ($date){
            $query->where("started_at", "<=", Carbon::make($date)->startOfMonth()->startOfDay())
                ->where("finished_at", ">=" , Carbon::make($date)->endOfMonth()->endOfDay());
        })->paginate(500);

        return Inertia::render("Academics/Calendar", [
            "schedules" => ScheduleResource::collection($schedules),
            "date" => $date
        ]);
    }
}
