@extends('layouts.master')

@section('title', 'Projects')

@section('content')
<div class="container py-5">
    <h1 class="display-4 text-center mb-5">My Projects</h1>
    
    <div class="row">
        @foreach($projects as $project)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card project-card h-100">
                <div class="card-body">
                    <h3 class="card-title">{{ $project['title'] }}</h3>
                    <p class="card-text">{{ $project['description'] }}</p>
                    <h6>Technologies Used:</h6>
                    <div class="d-flex flex-wrap">
                        @foreach($project['technologies'] as $tech)
                        <span class="badge bg-primary me-1 mb-1">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <a href="#" class="btn btn-outline-primary btn-sm">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
