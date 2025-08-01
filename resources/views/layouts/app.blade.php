<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stylerbd</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <!-- Thin Top Header -->
    <div class="top-header text-white py-0 px-3 d-flex justify-content-between align-items-center"
        style="background: linear-gradient(90deg, #dc3545, #d63384); font-size: 14px;">
        <div>
            📞 <a href="tel:+8801795144422" class="text-white text-decoration-none">+880 1795144422</a>
        </div>
        <div class="d-flex gap-2">
            <a href="https://facebook.com/yourpage" target="_blank"
                class="social-icon d-flex align-items-center justify-content-center">
                <i class="bi bi-facebook text-white"></i>
            </a>
            <a href="https://instagram.com/yourpage" target="_blank"
                class="social-icon d-flex align-items-center justify-content-center">
                <i class="bi bi-instagram text-white"></i>
            </a>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header d-flex align-items-center justify-content-between px-4 py-2 shadow-sm flex-wrap">
        <!-- Left: Logo, Shop Name, and Categories -->
        <div class="d-flex align-items-center flex-wrap">
            <a href="{{ url('/') }}" class="d-flex align-items-center text-decoration-none text-dark me-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px; margin-right: -17px;">
                <!-- <h4 class="mb-0 fw-bold">stylerbd</h4> -->
            </a>
            <!-- Categories -->
            <nav class="d-flex gap-3 category-nav">
                <a href="#" class="nav-link text-dark fw-semibold">MEN</a>
                <a href="#" class="nav-link text-dark fw-semibold">WOMEN</a>
                <a href="#" class="nav-link text-dark fw-semibold">KID</a>
                <a href="#" class="nav-link text-dark fw-semibold">ACCESSORIES</a>
            </nav>
        </div>

        <!-- Right: Search, Sign In, Cart -->
        <div class="d-flex align-items-center gap-3 mt-2 mt-md-0">
            <!-- Search Bar -->
            <form action="#" class="search-form d-flex">
                <input type="text" class="form-control square-input" placeholder="Search..." />
            </form>

            <!-- Sign In with Hover Popup -->
            <div class="position-relative">
                <a href="{{ route('login') }}" class="btn btn-outline-primary position-relative" id="signin-btn">Sign
                    In</a>
                <div id="hover-message" class="hover-popup">
                    Don’t have an account? <a href="{{ route('login') }}"
                        class="text-decoration-underline text-white">Register</a>
                </div>
            </div>

            <!-- Cart Button -->
            <!-- Cart Button -->
            <a href="{{ route('cart.index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-cart"></i>
            </a>
        </div>
    </header>

    @include('partials.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Hover popup JS -->
    <script>
        const signinBtn = document.getElementById('signin-btn');
        const hoverMessage = document.getElementById('hover-message');

        signinBtn.addEventListener('mouseenter', () => {
            hoverMessage.style.display = 'block';
        });
        signinBtn.addEventListener('mouseleave', () => {
            hoverMessage.style.display = 'none';
        });
    </script>

    <!-- Optional custom CSS -->
    <style>
        .hover-popup {
            display: none;
            position: absolute;
            top: 110%;
            left: 0;
            background: #343a40;
            color: white;
            padding: 10px;
            border-radius: 4px;
            z-index: 10;
            white-space: nowrap;
        }

        .social-icon {
            width: 24px;
            height: 24px;
        }

        .square-input {
            border-radius: 0;
        }
    </style>
</body>

</html>