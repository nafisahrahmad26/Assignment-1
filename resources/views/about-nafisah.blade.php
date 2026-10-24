
@extends('layouts.master')

@section('title', 'About Me - Nafisah | Our Team Portfolio')

@section('content')

<div class="container py-5">

    <!-- Profile Heading -->
    <div class="text-center mb-5">
        <span class="badge rounded-pill bg-dark px-3 py-2 mb-3">
            Meet Our Team
        </span>

        <h1 class="fw-bold display-5">About Ms. Nafisah</h1>

        <p class="text-muted lead">
            Get to know me, my background, skills, and interests.
        </p>
    </div>

    <!-- Nafisah Profile Card -->
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">

            <div class="card h-100 border-0 shadow-sm card-hover overflow-hidden">

                <!-- Nafisah's Profile Header -->
                <div class="bg-dark text-white text-center p-4 p-md-5">

                    
                <img
                     src="{{ asset('images/icah.jpeg') }}"
                     alt="Siti Nafisah Binti Rahmad"
                     class="profile-image border border-4 border-white shadow-sm mb-3"
                >


                    <h2 class="fw-bold mb-2">
                        Siti Nafisah Binti Rahmad
                    </h2>

                    <p class="mb-0 opacity-75">
                        UI/UX &amp; Front-End Specialist Student
                    </p>

                </div>

                <!-- Nafisah's Profile Details -->
                <div class="card-body p-4 p-md-5">

                    <!-- Background -->
                    <section class="mb-4">
                        <h4 class="fw-bold text-dark mb-3">
                            <i class="bi bi-journal-bookmark me-2"></i>
                            Background
                        </h4>

                        <p class="text-muted mb-0">
                            Enthusiastic about creating responsive and
                            user-friendly interfaces. Interested in
                            front-end development, UI/UX design, and
                            creating accessible digital experiences.
                        </p>
                    </section>

                    <!-- Technical Skills -->
                    <section class="mb-4">
                        <h4 class="fw-bold text-dark mb-3">
                            <i class="bi bi-tools me-2"></i>
                            Technical Skills
                        </h4>

                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-dark px-3 py-2">Bootstrap 5</span>
                            <span class="badge bg-dark px-3 py-2">HTML5</span>
                            <span class="badge bg-dark px-3 py-2">CSS3</span>
                            <span class="badge bg-dark px-3 py-2">JavaScript</span>
                            <span class="badge bg-secondary px-3 py-2">Figma</span>
                        </div>
                    </section>

                    <!-- Hobbies and Interests -->
                    <section class="mb-4">
                        <h4 class="fw-bold text-dark mb-3">
                            <i class="bi bi-heart me-2"></i>
                            Hobbies &amp; Interests
                        </h4>

                        <ul class="list-unstyled text-muted mb-0">
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Digital illustration
                            </li>

                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                UI prototyping
                            </li>

                            <li>
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Photography
                            </li>
                        </ul>
                    </section>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
