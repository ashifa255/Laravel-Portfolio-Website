@extends('layouts.master')

@section('title', 'Blog')

@section('content')
<div class="container py-5">
    <h1 class="display-4 text-center mb-5">My Blog</h1>
    
    <div class="row">
        @foreach($posts as $post)
        <div class="col-lg-6 mb-4">
            <div class="card blog-card h-100">
                <div class="card-body">
                    <h3 class="card-title">{{ $post['title'] }}</h3>
                    <p class="text-muted">Posted on {{ $post['date'] }} by {{ $post['author'] }}</p>
                    <p class="card-text">{{ $post['excerpt'] }}</p>
                    <a href="#" class="btn btn-outline-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <nav aria-label="Blog pagination" class="mt-5">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
@endsection
