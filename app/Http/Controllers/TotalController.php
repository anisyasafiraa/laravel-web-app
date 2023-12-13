<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\total;
use App\Models\Course;
use App\Models\Batch;
use App\Models\Mentor;
use DB;

class TotalController extends Controller
{
    public function index()
    {
        $total = Total::all();
        return view('/total', compact('total'));
    }

    public function chart()
    {
        $da = Total::select(DB::raw('cast(sum(total)/5 as int) as total'))
        ->groupBy(DB::raw('sk_batch'))
        ->where('sk_course', '=', 1)
        ->pluck('total');
        
        $dm = Total::select(DB::raw('cast(sum(total)/5 as int) as total'))
        ->groupBy(DB::raw('sk_batch'))
        ->where('sk_course', '=', 2)
        ->pluck('total');

        $pm = Total::select(DB::raw('cast(sum(total)/5 as int) as total'))
        ->groupBy(DB::raw('sk_batch'))
        ->where('sk_course', '=', 3)
        ->pluck('total');

        $batch = Batch::select(DB::raw('batchNumber'))
        ->where('courseId', '=', 'DA')
        ->pluck('batchNumber');

        $course = Total::select(DB::raw('cast(sum(total)/5 as int) as total'))
        ->groupBy(DB::raw('sk_course'))
        ->pluck('total');

        $courseN = Course::select(DB::raw('name'))
        ->orderBy('sk_course')
        ->pluck('name');

        $mentor = Total::select(DB::raw('cast(sum(total) as int) as total'))
        ->groupBy(DB::raw('sk_mentor'))
        ->orderBy('sk_mentor')
        ->pluck('total');

        $mentorN = Mentor::select(DB::raw('name'))
        ->orderBy('sk_mentor')
        ->pluck('name');
        
        return view('visual', compact('da', 'dm', 'pm', 'batch', 'course', 'courseN', 'mentor', 'mentorN'));
    }
}
