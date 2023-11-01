<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PolicyController extends Controller
{
    public function legalNotice()
    {
        return Inertia::render("Policy/LegalNotice");
    }

    public function privacyPolicy()
    {
        return Inertia::render("Policy/PrivacyPolicy");
    }

    public function termsOfUse()
    {
        return Inertia::render("Policy/TermsOfUse");
    }

    public function copyRight()
    {
        return Inertia::render("Policy/CopyRight");
    }
}
