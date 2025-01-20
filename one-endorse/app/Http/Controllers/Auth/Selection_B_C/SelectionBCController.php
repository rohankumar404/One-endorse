<?php

namespace App\Http\Controllers\Auth\Selection_B_C;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SelectionBCController extends Controller
{
    public function index()
    {
        // $email = 'user@example.com';
        return view('auth.selection-b-c.index');
    }
}
