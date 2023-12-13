@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Batch') }}</div>

            <div class="card-body">
                <div class="mt-3">
                    <h3>List of Batches</h3>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                        @forelse($course->sortBy('batchNumber', SORT_REGULAR, false)->sortBy('course_id', SORT_REGULAR, false) as $course)
                            <tr>
                                <td>{{$course->courseId}}</td>
                                <td>{{$course->name}}</td>
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
