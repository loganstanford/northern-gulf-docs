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
            // Split the name into first and last name
            $nameParts = explode(' ', $validatedData['name']);

            // If the name has more than two parts, combine everything after the first part into the last name
            if (count($nameParts) > 2) {
                $firstName = $nameParts[0];
                $lastName = array_slice($nameParts, 1);
                $nameParts = [$nameParts[0], implode(' ', $lastName)];
            }
            elseif (count($nameParts) === 2) {
                $firstName = $nameParts[0];
                $lastName = $nameParts[1];
            }
            elseif (count($nameParts) === 1) {
                $firstName = $nameParts[0];
                $lastName = '';
            }
            
            // Create a new client
            $client = Client::create([
                'first_name' => $firstName ?? '',
                'last_name' => $lastName ?? '',
                'email' => $validatedData['email'],
            ]);

            // Add the client_id to the validated data
            $validatedData['client_id'] = $client->id;
        }

        // Create a new ContactSubmission instance and save it to the database
        $contactSubmission = ContactSubmission::create($validatedData);

        // Optionally, you can return a response to the user
        return response()->json(['message' => 'Form submitted successfully', 'submission_id' => $contactSubmission->id, 'client_id' => $client->id, 'client_name' => $client->first_name . ' ' . $client->last_name, 'client_email' => $client->email, 'validated_data' => $validatedData]);
    }
}