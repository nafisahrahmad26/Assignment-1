@extends('layouts.master')

@section('title', 'Contact Us - DevTeam Portfolio')

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

        <!-- Side Details -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-4 h-100 bg-primary text-white">
                <h4 class="fw-bold mb-4">Contact Information</h4>
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-geo-alt-fill fs-4 me-3"></i>
                    <div>
                        <h6 class="mb-0 fw-bold">Location</h6>
                        <small class="opacity-75">University Campus, Malaysia</small>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-envelope-fill fs-4 me-3"></i>
                    <div>
                        <h6 class="mb-0 fw-bold">Email</h6>
                        <small class="opacity-75">student@university.edu.my</small>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <i class="bi bi-clock-fill fs-4 me-3"></i>
                    <div>
                        <h6 class="mb-0 fw-bold">Working Hours</h6>
                        <small class="opacity-75">Mon - Fri: 9:00 AM - 5:00 PM</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection