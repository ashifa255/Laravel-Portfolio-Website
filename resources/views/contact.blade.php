@extends('layouts.master')

@section('title', 'Contact')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4 text-center mb-5">Get In Touch</h1>
            
            <div class="card shadow">
                <div class="card-body p-5">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                    </form>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="fas fa-map-marker-alt fa-2x text-primary mb-3"></i>
                            <h4>Location</h4>
                            <p>123 Street, City, Country</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="fas fa-phone fa-2x text-primary mb-3"></i>
                            <h4>Phone</h4>
                            <p>+1 234 567 8900</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="fas fa-envelope fa-2x text-primary mb-3"></i>
                            <h4>Email</h4>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
