<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ContactController extends Controller
{

    public function index(Request $request)
    {
        /*
        $contacts = Contact::orderBy("created_at", "desc")->paginate(30);

        return Inertia::render("Contacts/Index", ["contacts" => $contacts]);
        */
    }

    public function store(Request $request)
    {
        $request->validate([
            "first_name" => "required|string|max:500",
            "last_name" => "required|string|max:500",
            "phone" => "required|string|max:500",
            "email" => "required|email|string|max:500",
            "interest" => "required|string|max:500",
            "comment" => "required|string|max:20000",
        ]);

        $contact = Contact::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "phone" => $request->phone,
            "email" => $request->email,
            "interest" => $request->interest,
            "comment" => $request->comment,
        ]);

        return Redirect::back()->with("success", "Contact has been received!");
    }


    public function show($id)
    {
        $contact = Contact::find($id);

        return Redirect::route("Contacts/Show", ["contact" => $contact]);
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
