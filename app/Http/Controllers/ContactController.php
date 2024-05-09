<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSubmission;
use App\Models\Client;

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

        // Check if client exists
        $clientExists = Client::where('email', $validatedData['email'])->exists();

        if ($clientExists) {
            // Get the client
            $client = Client::where('email', $validatedData['email'])->first();

            // Add the client_id to the validated data
            $validatedData['client_id'] = $client->id;
        } else {
            
            // Create a new client
            $client = Client::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
            ]);

            // Add the client_id to the validated data
            $validatedData['client_id'] = $client->id;
        }

        $contactData = [
            'client_id' => $validatedData['client_id'],
            'message' => $validatedData['message'],
        ];

        // Create a new ContactSubmission instance and save it to the database
        $contactSubmission = ContactSubmission::create($contactData);

        // Optionally, you can return a response to the user
        return response()->json(['message' => 'Form submitted successfully', 'submission_id' => $contactSubmission->id, 'client_id' => $client->id, 'client_name' => $client->name, 'client_email' => $client->email, 'validated_data' => $validatedData]);
    }
}