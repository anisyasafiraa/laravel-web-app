<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mentor;

class MentorController extends Controller
{
    public function index()
    {
        $mentor = mentor::all();
        return view('/mentor', compact('mentor'));
    }
}
