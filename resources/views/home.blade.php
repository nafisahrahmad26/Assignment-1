
@extends('layouts.master')

@section('title', 'Home - My Portfolio')

@section('content')
<div class="container py-5">
    <div class="row align-items-center min-vh-75">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-3">
                Welcome to My Portfolio
            </h1>

            <p class="lead text-muted mb-4">
                Hello! Welcome to my personal portfolio website.
                Here, you can learn more about me, my skills, and
                how to contact me.
            </p>

            <a href="{{ url('/about') }}" class="btn btn-primary btn-lg me-2">
                About Me
            </a>

            <a href="{{ url('/contact') }}" class="btn btn-outline-primary btn-lg">
                Contact Me
            </a>
        </div>
    </div>
</div>
@endsection
