<?php

namespace App\Http\Controllers;

use App\Http\Resources\ScheduleResource;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WhoWeAreController extends Controller
{
    public function aboutUs()
    {
        return Inertia::render("WhoWeAre/AboutUs");
    }

    public function contactUs()
    {
        return Inertia::render("WhoWeAre/ContactUs");
    }

    public function ourMission()
    {
        return Inertia::render("WhoWeAre/OurMission");
    }

    public function ourStaff()
    {
        return Inertia::render("WhoWeAre/OurStaff");
    }


}
