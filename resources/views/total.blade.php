@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Class') }}</div>

            <div class="card-body">
                <a href="{{ route('visual') }}" class="btn btn-primary">Chart</a>
                <div class="mt-3">
                    <h3>List of Class</h3>
                    <table class="table">
                        <tr>
                            <th>Course</th>
                            <th>Batch Number</th>
                            <th>Class</th>
                            <th>Mentor</th>
                            <th>Date</th>
                            @can('admin')
                            <th>Total Student</th>
                            @endcan
                        </tr>
                        @forelse($total->sortBy('batchNumber', SORT_REGULAR, false)->sortBy('course_id', SORT_REGULAR, false) as $total)
                            <tr>
                                <td>{{$total->courseName}}</td>
                                <td>{{$total->batchNumber}}</td>
                                <td>{{$total->topic}}</td>
                                <td>{{$total->mentorName}}</td>
                                <td>{{$total->sk_date}}</td>
                                @can('admin')
                                <td>{{$total->total}}</td>
                                @endcan
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
