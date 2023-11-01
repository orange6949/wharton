<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TuitionController extends Controller
{
    public function tuition()
    {
        return Inertia::render("Tuition/Tuition");
    }
    public function financialAid()
    {
        return Inertia::render("Tuition/FinancialAid");
    }

}
