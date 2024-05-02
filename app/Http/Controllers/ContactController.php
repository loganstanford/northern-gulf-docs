<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSubmission;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Create a new ContactSubmission instance and save it to the database
        $contactSubmission = ContactSubmission::create($validatedData);

        // Optionally, you can return a response to the user
        return response()->json(['message' => 'Form submitted successfully', 'submission_id' => $contactSubmission->id]);
    }
}