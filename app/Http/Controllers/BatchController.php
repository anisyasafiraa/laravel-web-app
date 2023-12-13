<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\batch;

class BatchController extends Controller
{
    public function index()
    {
        $batch = Batch::all();
        return view('/batch', compact('batch'));
    }
}
