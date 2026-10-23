
@extends('layouts.master')

@section('title', 'Home - DevTeam Portfolio')

@section('content')

<!-- Hero Section -->
<section class="hero-section text-white py-5 shadow-sm">
    <div class="container text-center py-5">

        <span class="badge rounded-pill bg-light text-primary px-3 py-2 mb-3">
            <i class="bi bi-code-slash me-1"></i>
            Our Team Portfolio
        </span>

        <h1 class="display-3 fw-bold mb-3">
            Welcome to Our Portfolio
        </h1>

        <p class="lead mb-4 mx-auto" style="max-width: 700px;">
            We are passionate web development students building
            modern, responsive, and user-friendly web applications
            using Laravel and Bootstrap.
        </p>

        <a href="#our-team" class="btn btn-light btn-lg text-primary fw-bold px-4">
            <i class="bi bi-people-fill me-2"></i>
            Meet Our Team
        </a>

    </div>
</section>


<!-- Team Profiles Section -->
<section class="container py-5" id="our-team">

    <div class="text-center mb-5">
        <h2 class="fw-bold display-6">Meet Our Team</h2>

        <p class="text-muted lead">
            Get to know the people behind this project.
        </p>
    </div>

    <div class="row g-4 justify-content-center">

        <!-- Sarah Profile -->
        <div class="col-md-6 col-lg-5">
            <div class="card h-100 border-0 shadow-sm card-hover overflow-hidden">

                <div class="bg-primary text-white text-center p-4">

                    <img
                        src="{{ asset('images/SARAH CV PIC.jpeg') }}"
                        alt="Sarah Hanis binti Supirman"
                        class="profile-image border border-4 border-white shadow-sm mb-3"
                    >

                    <h3 class="fw-bold mb-1">
                        Sarah Hanis binti Supirman
                    </h3>

                    <p class="mb-0 opacity-75">
                        Full-Stack Web Developer Student
                    </p>

                </div>

                <div class="card-body p-4 text-center d-flex flex-column">

                    <p class="text-muted">
                        Discover my background, technical skills,
                        interests, and journey in web development.
                    </p>

                    <a
                        href="{{ url('/about-sarah') }}"
                        class="btn btn-primary mt-auto"
                    >
                        View Sarah's Profile
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>

                </div>
            </div>
        </div>


        <!-- Nafisah Profile -->
        <div class="col-md-6 col-lg-5">
            <div class="card h-100 border-0 shadow-sm card-hover overflow-hidden">

                <div class="bg-dark text-white text-center p-4">

                    <img
                        src="{{ asset('images/icah.jpeg') }}"
                        alt="Siti Nafisah binti Rahmad"
                        class="profile-image border border-4 border-white shadow-sm mb-3"
                    >

                    <h3 class="fw-bold mb-1">
                        Siti Nafisah binti Rahmad
                    </h3>

                    <p class="mb-0 opacity-75">
                        UI/UX &amp; Front-End Specialist Student
                    </p>

                </div>

                <div class="card-body p-4 text-center d-flex flex-column">

                    <p class="text-muted">
                        Explore my background, design skills,
                        interests, and passion for creating
                        user-friendly interfaces.
                    </p>

                    <a
                        href="{{ url('/about-nafisah') }}"
                        class="btn btn-dark mt-auto"
                    >
                        View Nafisah's Profile
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>

                </div>
            </div>
        </div>

    </div>

</section>


<!-- Features Section -->
<section class="container pb-5">

    <div class="text-center mb-4">
        <h2 class="fw-bold">What We Bring to the Table</h2>

        <p class="text-muted">
            Our skills and approach to web development.
        </p>
    </div>

    <div class="row g-4">

        <!-- Feature 1 -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4 text-center card-hover">

                <div class="card-body">
                    <div class="feature-icon mx-auto mb-3">
                        <i class="bi bi-laptop text-primary fs-1"></i>
                    </div>

                    <h4 class="fw-bold">Responsive Design</h4>

                    <p class="text-muted mb-0">
                        Responsive layouts that provide a consistent
                        experience across desktop, tablet, and mobile.
                    </p>
                </div>

            </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4 text-center card-hover">

                <div class="card-body">
                    <div class="feature-icon mx-auto mb-3">
                        <i class="bi bi-layers text-primary fs-1"></i>
                    </div>

                    <h4 class="fw-bold">Laravel Framework</h4>

                    <p class="text-muted mb-0">
                        Structured page templates and routing using
                        Laravel Blade and Bootstrap 5.
                    </p>
                </div>

            </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4 text-center card-hover">

                <div class="card-body">
                    <div class="feature-icon mx-auto mb-3">
                        <i class="bi bi-people text-primary fs-1"></i>
                    </div>

                    <h4 class="fw-bold">Team Collaboration</h4>

                    <p class="text-muted mb-0">
                        Two team members with different skills,
                        interests, and contributions to the project.
                    </p>
                </div>

            </div>
        </div>

    </div>

</section>

@endsection
