@extends('layouts.master')

@section('title', 'About Us - DevTeam Portfolio')

@section('content')
<div class="container py-5">

    <!-- Page Heading -->
    <div class="text-center mb-5">
        <h1 class="fw-bold display-5">About Our Team</h1>
        <p class="text-muted lead">
            Get to know the developers behind this project. Click on a profile to view details.
        </p>
    </div>

    <div class="row g-4">

        <!-- Profile 1: Sarah Hanis binti Supirman -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm overflow-hidden">

                <!-- Sarah Header -->
                <div class="bg-primary text-white p-4 text-center cursor-pointer" 
                     data-bs-toggle="collapse" 
                     data-bs-target="#sarahDetails" 
                     style="cursor: pointer;">

                    <img src="{{ asset('images/SARAH CV PIC.jpeg') }}"
                         alt="Sarah Hanis binti Supirman"
                         class="rounded-circle img-fluid border border-4 border-white shadow-sm mb-3"
                         width="120"
                         height="120"
                         style="object-fit: cover;">

                    <h3 class="fw-bold mb-1">Sarah Hanis binti Supirman</h3>
                    <p class="mb-2 opacity-75">Full-Stack Web Developer Student</p>
                    <span class="btn btn-sm btn-light text-primary fw-bold rounded-pill px-3 mt-2">
                        View Details <i class="bi bi-chevron-down ms-1"></i>
                    </span>
                </div>

                <!-- Sarah Dropdown Details -->
                <div class="collapse" id="sarahDetails">
                    <div class="card-body p-4 border-top">

                        <h5 class="fw-bold text-primary mb-3">
                            <i class="bi bi-journal-bookmark me-2"></i>Background
                        </h5>
                        <p class="text-muted">
                            Passionate about web standards and back-end logic.
                            Currently focusing on building RESTful APIs and mastering Laravel MVC structures.
                        </p>

                        <h5 class="fw-bold text-primary mb-3 mt-4">
                            <i class="bi bi-tools me-2"></i>Technical Skills
                        </h5>
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <span class="badge bg-primary px-3 py-2">Laravel</span>
                            <span class="badge bg-primary px-3 py-2">PHP</span>
                            <span class="badge bg-primary px-3 py-2">MySQL</span>
                            <span class="badge bg-secondary px-3 py-2">Git</span>
                        </div>

                        <h5 class="fw-bold text-primary mb-3">
                            <i class="bi bi-controller me-2"></i>Hobbies &amp; Interests
                        </h5>
                        <ul class="list-unstyled text-muted mb-0">
                            <li><i class="bi bi-check2 text-success me-2"></i>Open-source contribution</li>
                            <li><i class="bi bi-check2 text-success me-2"></i>Competitive programming</li>
                            <li><i class="bi bi-check2 text-success me-2"></i>Tech blogging</li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>


        <!-- Profile 2: Siti Nafisah binti Rahmad -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm overflow-hidden">

                <!-- Nafisah Header -->
                <div class="bg-dark text-white p-4 text-center cursor-pointer" 
                     data-bs-toggle="collapse" 
                     data-bs-target="#nafisahDetails" 
                     style="cursor: pointer;">

                    <img src="{{ asset('images/icah.jpeg') }}"
                         alt="Siti Nafisah binti Rahmad"
                         class="rounded-circle img-fluid border border-4 border-white shadow-sm mb-3"
                         width="120"
                         height="120"
                         style="object-fit: cover;">

                    <h3 class="fw-bold mb-1">Siti Nafisah binti Rahmad</h3>
                    <p class="mb-2 opacity-75">UI/UX &amp; Front-End Specialist Student</p>
                    <span class="btn btn-sm btn-light text-dark fw-bold rounded-pill px-3 mt-2">
                        View Details <i class="bi bi-chevron-down ms-1"></i>
                    </span>
                </div>

                <!-- Nafisah Dropdown Details -->
                <div class="collapse" id="nafisahDetails">
                    <div class="card-body p-4 border-top">

                        <h5 class="fw-bold text-dark mb-3">
                            <i class="bi bi-journal-bookmark me-2"></i>Background
                        </h5>
                        <p class="text-muted">
                            Enthusiastic about creating responsive, human-centered UI designs. Focused on front-end frameworks and accessibility best practices.
                        </p>

                        <h5 class="fw-bold text-dark mb-3 mt-4">
                            <i class="bi bi-tools me-2"></i>Technical Skills
                        </h5>
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <span class="badge bg-dark px-3 py-2">Bootstrap 5</span>
                            <span class="badge bg-dark px-3 py-2">HTML5 / CSS3</span>
                            <span class="badge bg-dark px-3 py-2">JavaScript</span>
                            <span class="badge bg-secondary px-3 py-2">Figma</span>
                        </div>

                        <h5 class="fw-bold text-dark mb-3">
                            <i class="bi bi-palette me-2"></i>Hobbies &amp; Interests
                        </h5>
                        <ul class="list-unstyled text-muted mb-0">
                            <li><i class="bi bi-check2 text-success me-2"></i>Digital illustration</li>
                            <li><i class="bi bi-check2 text-success me-2"></i>UI prototyping</li>
                            <li><i class="bi bi-check2 text-success me-2"></i>Photography</li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection