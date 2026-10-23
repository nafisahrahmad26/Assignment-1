@extends('layouts.master')

@section('title', 'Home - Our Team Portfolio')

@section('content')

<!-- Hero Section -->
<section class="hero-section text-white py-5 mb-5 shadow-sm">
    <div class="container text-center py-5">

        <h1 class="display-3 fw-bold mb-3">
            Welcome to Our Portfolio
        </h1>

        <p class="lead mb-4 mx-auto" style="max-width: 700px;">
            We are passionate web development students building
            modern, responsive, and user-friendly web applications
            using Laravel and Bootstrap.
        </p>

        <div class="d-flex justify-content-center gap-3 hero-buttons flex-wrap">

            <a
                href="{{ url('/about') }}"
                class="btn btn-outline-light btn-lg px-4"
            >
                <i class="bi bi-people-fill me-2"></i>
                Meet the Team
            </a>

            <a
                href="{{ url('/contact') }}"
                class="btn btn-outline-light btn-lg px-4"
            >
                <i class="bi bi-envelope-fill me-2"></i>
                Get in Touch
            </a>

        </div>
    </div>
</section>


<!-- Features Section -->
<section class="container mb-5">

    <div class="text-center mb-4">
        <h2 class="fw-bold">What We Bring to the Table</h2>

        <p class="text-muted">
            Our skills and approach to web development.
        </p>
    </div>

    <div class="row g-4 justify-content-center">

        <!-- Feature 1: Responsive Design -->
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm p-4 text-center card-hover">

                <div class="card-body">

                    <div class="feature-icon mx-auto mb-3">
                        <i class="bi bi-laptop text-primary fs-1"></i>
                    </div>

                    <h4 class="card-title fw-bold">
                        Responsive Design
                    </h4>

                    <p class="card-text text-muted">
                        Clean and structured layouts using Bootstrap 5
                        to provide a consistent experience across
                        different screen sizes.
                    </p>

                </div>
            </div>
        </div>

        <!-- Feature 2: Laravel Framework -->
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm p-4 text-center card-hover">

                <div class="card-body">

                    <div class="feature-icon mx-auto mb-3">
                        <i class="bi bi-layers text-primary fs-1"></i>
                    </div>

                    <h4 class="card-title fw-bold">
                        Laravel Framework
                    </h4>

                    <p class="card-text text-muted">
                        Organised page templates and routing using
                        Laravel Blade to keep our website structured
                        and easy to maintain.
                    </p>

                </div>
            </div>
        </div>

    </div>
</section>

@endsection