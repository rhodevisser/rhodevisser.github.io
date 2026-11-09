<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rhodé Visser') - sociaal ontwerpend kunstenaar, webdesigner en onderzoeker</title>
    <meta name="description" content="@yield('description', 'Hoi, ik ben Rhodé Visser: Op dit moment maak ik de overstap naar IT, waar ik mijn ervaring met mensen, passie voor leren en innovatie wil inzetten om bij te dragen aan technologie die de wereld mooier maakt.')">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9104f8e396.js" crossorigin="anonymous"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black">
    <!-- SEO Header -->
    <header class="sr-only">
        <h1>Rhodé Visser</h1>
        <h2>@yield('header-subtitle', 'Op dit moment maak ik de overstap naar IT, waar ik mijn ervaring met mensen, passie voor leren en innovatie wil inzetten om bij te dragen aan technologie die de wereld mooier maakt.')</h2>
    </header>

    <!-- Navigation -->
    <nav class="nav_bar">
        <!-- Desktop Navigation -->
        <ul class="nav_menu desktop-nav">
            <li class="nav_item">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav_item">
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Over mij</a>
            </li>
            <li class="nav_item">
                <a href="{{ route('cv') }}" class="{{ request()->routeIs('cv') ? 'active' : '' }}">CV</a>
            </li>
            <li class="nav_item">
                <a href="{{ route('blog.index') }}" class="{{ request()->routeIs('blog.*') ? 'active' : '' }}">Blog</a>
            </li>
            <li class="nav_item">
                <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
            </li>
            <li class="nav_item">
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </li>
        </ul>

        <!-- Mobile Hamburger Menu -->
        <div class="nav_container_burger">
            <div class="hamburger" id="hamburger-menu">
                <button id="menu_hamburger" class="hamburger_button" onclick="menuBar()">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>

            <ul id="menu_list" class="nav_menu mobile-nav">
                <li class="nav_item">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav_item">
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Over mij</a>
                </li>
                <li class="nav_item">
                    <a href="{{ route('cv') }}" class="{{ request()->routeIs('cv') ? 'active' : '' }}">CV</a>
                </li>
                <li class="nav_item">
                    <a href="{{ route('blog.index') }}" class="{{ request()->routeIs('blog.*') ? 'active' : '' }}">Blog</a>
                </li>
                <li class="nav_item">
                    <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
                </li>
                <li class="nav_item">
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Flower Animation Container -->
    <div id="flower-container"></div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="button_box">
            <a href="https://github.com/rhodevisser" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="https://bsky.app/profile/kapufskipauw.bsky.social" target="_blank" rel="noopener noreferrer" aria-label="Bluesky">
                <i class="fa-brands fa-bluesky"></i>
            </a>
            <a href="https://www.instagram.com/rhode.visser/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
