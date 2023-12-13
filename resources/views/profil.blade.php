@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Your Profile') }}</div>

            <div class="card-body">
                <div class="mt-3">
                    <ul class="list-item">
                        <li class="list-group-item">
                            <h6><b>Name: {{ Auth::user()->name }}</b></h6>
                            <h6><b>Email: {{ Auth::user()->email }}</b></h6>
                            <h6><b>Phone: {{ Auth::user()->phoneNumber }}</b></h6>
                            <h6><b>Job: {{ Auth::user()->job }}</b></h6>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
