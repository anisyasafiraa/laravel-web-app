@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Mentors') }}</div>

            <div class="card-body">
                <div class="mt-3">
                    <h3>List of Mentors</h3>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Job</th>
                        </tr>
                        @forelse($mentor->sortBy('batchNumber', SORT_REGULAR, false)->sortBy('course_id', SORT_REGULAR, false) as $mentor)
                            <tr>
                                <td>{{$mentor->mentorId}}</td>
                                <td>{{$mentor->name}}</td>
                                <td>{{$mentor->job}}</td>
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
