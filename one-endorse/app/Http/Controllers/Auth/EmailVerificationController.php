<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    public function index()
    {
        $email = 'user@example.com'; // Replace this with the actual email
        return view('auth.email-verification', compact('email'));
    }
}
