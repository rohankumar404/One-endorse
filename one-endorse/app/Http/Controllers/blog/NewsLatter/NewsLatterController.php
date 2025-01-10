<?php

namespace App\Http\Controllers\blog\NewsLatter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog\newslatter\Newsletter;

class NewsLatterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate email input
        $validatedData = $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        // Save email to the database
        Newsletter::create($validatedData);

        return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}