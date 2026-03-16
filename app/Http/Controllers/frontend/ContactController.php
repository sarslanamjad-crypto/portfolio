<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSubmittedEmail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($data);

        // Send an email notification
        try {
            Mail::to(env('MAIL_FROM_ADDRESS', 'admin@example.com'))->send(new ContactSubmittedEmail($contact));
        } catch (\Exception $e) {
            // Log the error but don't stop the user from submitting
            \Log::error('Failed to send contact email: ' . $e->getMessage());
        }

        // If the request expects JSON (AJAX), return JSON response so client JS can handle it
        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'message' => 'Message sent successfully. Thank you!',
                'data' => $contact,
            ], 201);
        }

        return back()->with('success', 'Message sent successfully. Thank you!');
    }
}
