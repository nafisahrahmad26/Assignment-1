<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Our Portfolio')</title>

    <!-- Bootstrap 5 CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- Custom CSS -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #f8f9fa;
            color: #212529;
            font-family: Arial, sans-serif;
        }

        /* Navigation Bar */
        .navbar {
            background: #111827 !important;
            min-height: 78px;
            padding: 14px 0;
            border-bottom: 3px solid #0d6efd;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.18);
            z-index: 1030;
        }

        .navbar-brand {
            color: #ffffff !important;
            font-size: 1.4rem;
            font-weight: 800;
            letter-spacing: 0.5px;
        }

        .navbar-brand i {
            color: #60a5fa;
        }

        .navbar .navbar-nav {
            gap: 8px;
        }

        .navbar .nav-link {
            color: #d1d5db !important;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 12px 18px !important;
            border-radius: 8px;
            transition: background-color 0.25s ease,
                        color 0.25s ease;
        }

        .navbar .nav-link:hover {
            color: #ffffff !important;
            background-color: #263449;
        }

        .navbar .nav-link.active {
            color: #ffffff !important;
            background-color: #0d6efd;
            box-shadow: 0 3px 10px rgba(13, 110, 253, 0.3);
        }

        .navbar-toggler {
            border: 1px solid rgba(255, 255, 255, 0.5);
            padding: 8px 10px;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.35);
        }

        /* Home Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #0d6efd, #084298);
            position: relative;
            overflow: hidden;
        }

        .hero-section h1 {
            line-height: 1.2;
        }

        .hero-section p {
            line-height: 1.8;
        }

        /* Buttons */
        .btn {
            transition: transform 0.2s ease,
                        box-shadow 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        /* Feature Cards */
        .card-hover {
            transition: transform 0.25s ease,
                        box-shadow 0.25s ease;
            border-radius: 14px;
        }

        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.12) !important;
        }

        .feature-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 76px;
            height: 76px;
            background-color: #e7f1ff;
            border-radius: 50%;
        }

        /* Footer */
        footer {
            border-top: 3px solid #0d6efd;
        }

        /* Mobile Responsive Design */
        @media (max-width: 991.98px) {
            .navbar .navbar-nav {
                gap: 4px;
                padding-top: 12px;
            }

            .navbar .nav-link {
                padding: 12px 14px !important;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                padding-top: 2rem !important;
                padding-bottom: 2rem !important;
            }

            .hero-section h1 {
                font-size: 2.2rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: stretch;
            }

            .hero-buttons .btn {
                width: 100%;
            }

            .navbar-brand {
                font-size: 1.15rem;
            }
        }

        /* Accessibility: Reduce Motion */
        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            .btn,
            .card-hover,
            .navbar .nav-link {
                transition: none;
            }

            .btn:hover,
            .card-hover:hover {
                transform: none;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                <i class="bi bi-code-slash text-primary me-2"></i>Our Team Portfolio
            </a>

            <!-- Mobile Menu Button -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <!-- Home -->
                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                            href="{{ url('/') }}"
                            @if(request()->is('/')) aria-current="page" @endif
                        >
                            <i class="bi bi-house-door me-1"></i>
                            Home
                        </a>
                    </li>

                    <!-- About Us -->
                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href="{{ url('/about') }}"
                            @if(request()->is('about')) aria-current="page" @endif
                        >
                            <i class="bi bi-people me-1"></i>
                            About Us
                        </a>
                    </li>

                    <!-- Contact Us -->
                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ url('/contact') }}"
                            @if(request()->is('contact')) aria-current="page" @endif
                        >
                            <i class="bi bi-envelope me-1"></i>
                            Contact Us
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 border-top mt-auto">
        <div class="container text-center">
            <p class="mb-1">&copy; {{ date('Y') }} Our Team Portfolio. All rights reserved.</p>
            <small class="text-muted">Built with Laravel & Bootstrap 5</small>
        </div>
    </footer>

    <!-- Bootstrap 5 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
