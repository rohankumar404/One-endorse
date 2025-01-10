<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Show the contact form.
     */
    public function showForm()
    {
        return view('pages.contact');
    }

    /**
     * Handle form submission.
     */
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'phone_number' => 'nullable|string|max:10|regex:/^[0-9]+$/',
            'terms_accepted' => 'required|boolean',
        ]);

        // Save the data in the 'contact' table
        $contact = new Contact();
        $contact->full_name = $validatedData['full_name'];
        $contact->email = $validatedData['email'];
        $contact->message = $validatedData['message'];
        $contact->phone_number = $validatedData['phone_number']; // Save phone number
        $contact->terms_accepted = $validatedData['terms_accepted'];
        $contact->save();

        // Redirect with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
