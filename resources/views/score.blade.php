@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Score') }}</div>

            <div class="card-body">
                <a href="{{ route('visualScore') }}" class="btn btn-primary">Average Score</a>
                <h1></h1>
                <a href="{{ route('passedFailed') }}" class="btn btn-primary">Total Passed and Failed</a>
                <div class="mt-3">
                    <h3>List of Score</h3>
                    <table class="table">
                        <tr>
                            <th>Course</th>
                            <th>Batch</th>
                            <th>Cut Score</th>
                            <th>Average Score</th>
                            <th>Total Passed</th>
                            <th>Total Failed</th>
                        </tr>
                        @forelse($score->sortBy('sk_batch', SORT_REGULAR, false) as $score)
                            <tr>
                                <td>{{$score->courseName}}</td>
                                <td>{{$score->batchNumber}}</td>
                                <td>{{$score->cutScore}}</td>
                                <td>{{$score->average}}</td>
                                <td>{{$score->totalPassed}}</td>
                                <td>{{$score->totalFailed}}</td>
                            </tr>                                
                        @empty
                            <tr>
                                <td colspon="5">No Batch Added Yet</td>
                            </tr>
                        @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
