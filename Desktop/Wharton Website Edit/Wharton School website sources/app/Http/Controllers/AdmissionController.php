<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdmissionController extends Controller
{
    public function admissions()
    {
        return Inertia::render("Admission/Admissions");
    }

    public function applyNow()
    {
        return Inertia::render("Admission/ApplyNow");
    }

    public function dualEnrollment()
    {
        return Inertia::render("Admission/DualEnrollment");
    }

    public function qna()
    {
        return Inertia::render("Admission/Qna");
    }

    public function whsGlobal()
    {
        return Inertia::render("Admission/WhsGlobal");
    }
}
