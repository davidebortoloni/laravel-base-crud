<header class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ request()->routeIs('home') ? '#' : route('home') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Comics Logo" height="70px" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ request()->routeIs('home') ? '#' : route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('comics.index') ? 'active' : '' }}" href="{{ request()->routeIs('comics.index') ? '#' : route('comics.index') }}">Comics List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('comics.create') ? 'active' : '' }}" href="{{ request()->routeIs('comics.create') ? '#' : route('comics.create') }}">New Comic</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>