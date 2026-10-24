@extends('layouts.master')

@section('title', 'Contact Us - Our Team Portfolio')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold display-5">Get In Touch</h1>
        <p class="text-muted lead">Have questions or want to collaborate? Send us a message!</p>
    </div>

    <div class="row g-4 justify-content-center">
        <!-- Contact Form -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm p-4">
                <form action="#" method="POST" onsubmit="event.preventDefault();">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control bg-light" placeholder="Enter your full name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control bg-light" placeholder="name@example.com" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Message</label>
                        <textarea class="form-control bg-light" rows="5" placeholder="Write your message here..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold">
                        <i class="bi bi-send me-2"></i>Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>  
</div>
@endsection