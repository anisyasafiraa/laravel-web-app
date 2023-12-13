<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::all();
        return view('/courses', compact('course'));
    }
}
