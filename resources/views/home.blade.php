@extends('layouts.master')

@section('title', 'Home - DevTeam Portfolio')

@section('content')
<!-- Hero Section -->
<div class="hero-section text-white py-5 mb-5 shadow-sm">
    <div class="container text-center py-4">
        <h1 class="display-3 fw-bold mb-3">Welcome to Our Portfolio</h1>
        <p class="lead mb-4 mx-auto" style="max-width: 700px;">
            We are passionate web development students building modern, responsive, and robust web applications using Laravel and Bootstrap.
        </p>
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ url('/about') }}" class="btn btn-light btn-lg text-primary fw-bold px-4">Meet the Team</a>
            <a href="{{ url('/contact') }}" class="btn btn-outline-light btn-lg px-4">Get in Touch</a>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="container mb-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4 text-center card-hover">
                <div class="card-body">
                    <i class="bi bi-laptop text-primary display-4 mb-3"></i>
                    <h4 class="card-title fw-bold">Responsive Design</h4>
                    <p class="card-text text-muted">Clean and structured layouts powered by Bootstrap 5 grid systems.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4 text-center card-hover">
                <div class="card-body">
                    <i class="bi bi-layers text-primary display-4 mb-3"></i>
                    <h4 class="card-title fw-bold">Laravel Framework</h4>
                    <p class="card-text text-muted">Modular Blade templating and clean routing for scalable development.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4 text-center card-hover">
                <div class="card-body">
                    <i class="bi bi-people text-primary display-4 mb-3"></i>
                    <h4 class="card-title fw-bold">Dual Profiles</h4>
                    <p class="card-text text-muted">Showcasing individual backgrounds, technical skillsets, and hobbies.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection