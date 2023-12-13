@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Students') }}</div>

            <div class="card-body">
                <div class="mt-3">
                    <h3>List of Students</h3>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            @can('admin')
                            <th>Email</th>
                            <th>Phone Number</th>
                            @endcan
                            <th>Course Name</th>
                            <th>Batch Number</th>
                        </tr>
                        @forelse($student->sortBy('id', SORT_REGULAR, false) as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->name}}</td>
                                @can('admin')
                                <td>{{$student->email}}</td>
                                <td>{{$student->phoneNumber}}</td>
                                @endcan
                                <td>{{$student->courseName}}</td>
                                <td>{{$student->batchNumber}}</td>
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
