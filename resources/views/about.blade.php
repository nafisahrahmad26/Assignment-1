@extends('layouts.master')

@section('title', 'About Us - DevTeam Portfolio')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold display-5">About Our Team</h1>
        <p class="text-muted lead">Get to know the developers behind this project.</p>
    </div>

    <div class="row g-4">
        <!-- Profile 1: Sarah Hanis binti Supirman -->
        <div class="col-lg-6">
            <div class="card h-100 border-0 shadow-sm card-hover overflow-hidden">
                <div class="bg-primary text-white p-4 text-center">
                    <div class="rounded-circle bg-white text-primary d-inline-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px;">
                        <i class="bi bi-person-fill display-4"></i>
                    </div>
                    <h3 class="fw-bold mb-1">Sarah Hanis binti Supirman</h3>
                    <p class="mb-0 opacity-75">Full-Stack Web Developer Student</p>
                </div>
                <div class="card-body p-4">
                    <h5 class="fw-bold text-primary mb-3"><i class="bi bi-journal-bookmark me-2"></i>Background</h5>
                    <p class="text-muted">Passionate about web standards and back-end logic. Currently focusing on building RESTful APIs and mastering Laravel MVC structures.</p>

                    <h5 class="fw-bold text-primary mb-3 mt-4"><i class="bi bi-tools me-2"></i>Technical Skills</h5>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-primary px-3 py-2">Laravel</span>
                        <span class="badge bg-primary px-3 py-2">PHP</span>
                        <span class="badge bg-primary px-3 py-2">MySQL</span>
                        <span class="badge bg-secondary px-3 py-2">Git</span>
                    </div>

                    <h5 class="fw-bold text-primary mb-3"><i class="bi bi-controller me-2"></i>Hobbies & Interests</h5>
                    <ul class="list-unstyled text-muted mb-0">
                        <li><i class="bi bi-check2 text-success me-2"></i>Open-source contribution</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Competitive programming</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Tech blogging</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Profile 2: Siti Nafisah binti Rahmad -->
        <div class="col-lg-6">
            <div class="card h-100 border-0 shadow-sm card-hover overflow-hidden">
                <div class="bg-dark text-white p-4 text-center">
                    <div class="rounded-circle bg-white text-dark d-inline-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px;">
                        <i class="bi bi-person-fill display-4"></i>
                    </div>
                    <h3 class="fw-bold mb-1">Siti Nafisah binti Rahmad</h3>
                    <p class="mb-0 opacity-75">UI/UX & Front-End Specialist Student</p>
                </div>
                <div class="card-body p-4">
                    <h5 class="fw-bold text-dark mb-3"><i class="bi bi-journal-bookmark me-2"></i>Background</h5>
                    <p class="text-muted">Enthusiastic about creating responsive, human-centered UI designs. Focused on front-end frameworks and accessibility best practices.</p>

                    <h5 class="fw-bold text-dark mb-3 mt-4"><i class="bi bi-tools me-2"></i>Technical Skills</h5>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-dark px-3 py-2">Bootstrap 5</span>
                        <span class="badge bg-dark px-3 py-2">HTML5 / CSS3</span>
                        <span class="badge bg-dark px-3 py-2">JavaScript</span>
                        <span class="badge bg-secondary px-3 py-2">Figma</span>
                    </div>

                    <h5 class="fw-bold text-dark mb-3"><i class="bi bi-palette me-2"></i>Hobbies & Interests</h5>
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
@endsection