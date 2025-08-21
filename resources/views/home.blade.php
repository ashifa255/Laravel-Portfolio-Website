@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="hero-section">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Welcome to My Portfolio</h1>
        <p class="lead">I'm a passionate web developer creating amazing digital experiences</p>
        <a href="{{ route('projects') }}" class="btn btn-light btn-lg mt-3">View My Work</a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 text-center mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <i class="fas fa-code fa-3x text-primary mb-3"></i>
                    <h3>Web Development</h3>
                    <p>Creating responsive and modern web applications using the latest technologies.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <i class="fas fa-mobile-alt fa-3x text-primary mb-3"></i>
                    <h3>Responsive Design</h3>
                    <p>Building websites that work perfectly on all devices and screen sizes.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <i class="fas fa-paint-brush fa-3x text-primary mb-3"></i>
                    <h3>UI/UX Design</h3>
                    <p>Designing intuitive and beautiful user interfaces that enhance user experience.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
