
@extends('layouts.master')

@section('title', 'About Me - Sarah | Our Team Portfolio')

@section('content')

<div class="container py-5">

    <!-- Profile Heading -->
    <div class="text-center mb-5">
        <span class="badge rounded-pill bg-primary px-3 py-2 mb-3">
            Meet Our Team
        </span>

        <h1 class="fw-bold display-5">About Ms. Sarah</h1>

        <p class="text-muted lead">
            Get to know me, my background, skills, and interests.
        </p>
    </div>

    <!-- Sarah Profile Card -->
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">

            <div class="card border-0 shadow-sm card-hover overflow-hidden">

                <!-- Profile Header -->
                <div class="bg-primary text-white text-center p-4 p-md-5">

                    
            <img
                src="{{ asset('images/SARAH CV PIC.jpeg') }}"
                 alt="Sarah Hanis binti Supirman"
                class="profile-image border border-4 border-white shadow-sm mb-3"
            >


                    <h2 class="fw-bold mb-2">
                        Sarah Hanis Binti Supirman
                    </h2>

                    <p class="mb-0 opacity-75">
                        Full-Stack Web Developer Student
                    </p>

                </div>

                <!-- Profile Details -->
                <div class="card-body p-4 p-md-5">

                    <!-- Background -->
                    <section class="mb-4">
                        <h4 class="fw-bold text-primary mb-3">
                            <i class="bi bi-journal-bookmark me-2"></i>
                            Background
                        </h4>

                        <p class="text-muted mb-0">
                            Passionate about web development, web standards,
                            and back-end logic. Interested in building
                            structured web applications using Laravel
                            and understanding how front-end and back-end
                            components work together.
                        </p>
                    </section>

                    <!-- Technical Skills -->
                    <section class="mb-4">
                        <h4 class="fw-bold text-primary mb-3">
                            <i class="bi bi-tools me-2"></i>
                            Technical Skills
                        </h4>

                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary px-3 py-2">Laravel</span>
                            <span class="badge bg-primary px-3 py-2">PHP</span>
                            <span class="badge bg-primary px-3 py-2">MySQL</span>
                            <span class="badge bg-primary px-3 py-2">HTML</span>
                            <span class="badge bg-primary px-3 py-2">CSS</span>
                            <span class="badge bg-secondary px-3 py-2">Git</span>
                        </div>
                    </section>

                    <!-- Hobbies and Interests -->
                    <section class="mb-4">
                        <h4 class="fw-bold text-primary mb-3">
                            <i class="bi bi-heart me-2"></i>
                            Hobbies &amp; Interests
                        </h4>

                        <ul class="list-unstyled text-muted mb-0">
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Web development
                            </li>

                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Learning new technologies
                            </li>

                            <li>
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Exploring creative ideas
                            </li>
                        </ul>
                    </section>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
