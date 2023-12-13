<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Course;
use App\Models\Batch;
use DB;

class ScoreController extends Controller
{
    public function index()
    {
        $score = Score::all();
        return view('/score', compact('score'));
    }

    public function average()
    {
        $da = Score::select(DB::raw("average"))
        ->where('sk_course', '=', '1')
        ->pluck('average');

        $dm = Score::select(DB::raw("average"))
        ->where('sk_course', '=', 2)
        ->pluck('average');

        $pm = Score::select(DB::raw("average"))
        ->where('sk_course', '=', 3)
        ->pluck('average');

        $batch = Batch::select(DB::raw('batchNumber'))
        ->where('courseId', '=', 'DA')
        ->pluck('batchNumber');

        $course = Score::select(DB::raw('cast(avg(average) as int) as avg'))
        ->groupBy(DB::raw('sk_course'))
        ->pluck('avg');

        $cut = Score::select(DB::raw("cast(avg(cutScore) as int) as avg"))
        ->groupBy(DB::raw('sk_course'))
        ->pluck('avg');

        $courseN = Course::select(DB::raw('name'))
        ->orderBy(DB::raw('sk_course'))
        ->pluck('name');

        return view('visualScore', compact('da', 'dm', 'pm', 'batch', 'course', 'cut', 'courseN'));
    }

    public function total()
    {
        $batch = Batch::select(DB::raw('batchNumber'))
        ->where('courseId', '=', 'DA')
        ->pluck('batchNumber');

        $daPassed = Score::select(DB::raw("totalPassed"))
        ->where('sk_course', '=', 1)
        ->pluck('totalPassed');

        $dmPassed = Score::select(DB::raw("totalPassed"))
        ->where('sk_course', '=', 2)
        ->pluck('totalPassed');

        $pmPassed = Score::select(DB::raw("totalPassed"))
        ->where('sk_course', '=', 3)
        ->pluck('totalPassed');

        $daFailed = Score::select(DB::raw("totalFailed"))
        ->where('sk_course', '=', 1)
        ->pluck('totalFailed');

        $dmFailed = Score::select(DB::raw("totalFailed"))
        ->where('sk_course', '=', 2)
        ->pluck('totalFailed');

        $pmFailed = Score::select(DB::raw("totalFailed"))
        ->where('sk_course', '=', 3)
        ->pluck('totalFailed');

        return view('passedFailed', compact('batch', 'daPassed', 'dmPassed', 'pmPassed', 'daFailed', 'dmFailed', 'pmFailed'));
    }
}
