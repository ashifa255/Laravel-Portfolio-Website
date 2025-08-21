@extends('layouts.master')

@section('title', 'About')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="display-4 mb-4">About Me</h1>
            <p class="lead">Hello! I'm a passionate web developer with expertise in Laravel, Vue.js, and modern web technologies.</p>
            <p>I have over 5 years of experience building web applications for various clients and industries. My goal is to create software that not only looks great but also provides exceptional user experiences.</p>
            <p>When I'm not coding, you can find me hiking, reading tech blogs, or experimenting with new programming languages and frameworks.</p>
            
            <h3 class="mt-5">My Skills</h3>
            <div class="mb-2">
                <span class="fw-bold">Laravel:</span>
                <div class="progress mb-3">
                    <div class="progress-bar" style="width: 90%">90%</div>
                </div>
            </div>
            <div class="mb-2">
                <span class="fw-bold">Vue.js:</span>
                <div class="progress mb-3">
                    <div class="progress-bar" style="width: 85%">85%</div>
                </div>
            </div>
            <div class="mb-2">
                <span class="fw-bold">HTML/CSS:</span>
                <div class="progress mb-3">
                    <div class="progress-bar" style="width: 95%">95%</div>
                </div>
            </div>
            <div class="mb-2">
                <span class="fw-bold">JavaScript:</span>
                <div class="progress mb-3">
                    <div class="progress-bar" style="width: 88%">88%</div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="https://via.placeholder.com/500x600" alt="Profile Image" class="img-fluid rounded shadow">
        </div>
    </div>
</div>
@endsection
