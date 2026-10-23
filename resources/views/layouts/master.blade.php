<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'DevTeam Portfolio')</title>

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
        /* General Layout */
        html {
            min-height: 100%;
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
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
            flex-shrink: 0;
            border-top: 3px solid #0d6efd;
        }

        /* About Me Dropdown */
        .navbar .dropdown-menu {
            background-color: #ffffff;
            border-radius: 10px;
            min-width: 220px;
            padding: 8px;
            margin-top: 10px;
        }

        .navbar .dropdown-item {
            color: #212529;
            font-weight: 500;
            border-radius: 6px;
            transition: background-color 0.2s ease,
                        color 0.2s ease;
        }

        .navbar .dropdown-item:hover {
            background-color: #e7f1ff;
            color: #0d6efd;
        }

        .navbar .dropdown-item.active {
            background-color: #0d6efd;
            color: #ffffff;
        }

        /* Consistent Team Profile Images */
        .profile-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            object-position: center;
            border-radius: 50%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        /* Tablet and Mobile Navigation */
        @media (max-width: 991.98px) {
            .navbar .navbar-nav {
                gap: 4px;
                padding-top: 12px;
            }

            .navbar .nav-link {
                padding: 12px 14px !important;
            }

            .navbar .dropdown-menu {
                margin-top: 4px;
                background-color: #1f2937;
            }

            .navbar .dropdown-item {
                color: #e5e7eb;
            }

            .navbar .dropdown-item:hover {
                background-color: #374151;
                color: #ffffff;
            }

            .navbar .dropdown-item.active {
                background-color: #0d6efd;
                color: #ffffff;
            }
        }

        /* Small Mobile Screens */
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

            <!-- Brand -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="bi bi-code-slash me-2"></i>DevTeam
                <span class="text-primary">Portfolio</span>
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
                <ul class="navbar-nav ms-auto align-items-lg-center">

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

                    <!-- About Me Dropdown -->
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle {{ request()->is('about-sarah') || request()->is('about-nafisah') ? 'active' : '' }}"
                            href="#"
                            id="aboutDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <i class="bi bi-people me-1"></i>
                            About Me
                        </a>

                        <ul
                            class="dropdown-menu dropdown-menu-end shadow border-0"
                            aria-labelledby="aboutDropdown"
                        >
                            <li>
                                <a
                                    class="dropdown-item py-2 {{ request()->is('about-sarah') ? 'active' : '' }}"
                                    href="{{ url('/about-sarah') }}"
                                >
                                    <i class="bi bi-person-circle me-2"></i>
                                    About Me — Sarah
                                </a>
                            </li>

                            <li>
                                <a
                                    class="dropdown-item py-2 {{ request()->is('about-nafisah') ? 'active' : '' }}"
                                    href="{{ url('/about-nafisah') }}"
                                >
                                    <i class="bi bi-person-circle me-2"></i>
                                    About Me — Nafisah
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Contact -->
                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ url('/contact') }}"
                        >
                            <i class="bi bi-envelope me-1"></i>
                            Contact
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-grow-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-auto">
        <div class="container text-center">
            <p class="mb-1">
                &copy; {{ date('Y') }} Our Team Portfolio. All rights reserved.
            </p>

            <small class="text-muted">
                Built with Laravel &amp; Bootstrap 5
            </small>
        </div>
    </footer>

    <!-- Bootstrap 5 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
