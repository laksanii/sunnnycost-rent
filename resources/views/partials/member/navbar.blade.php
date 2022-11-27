<nav class="navbar navbar-expand-lg bg-yellow shadow-sm sticky-top top-0">
    <div class="container d-flex nav-container gap-3">
        <div class="nav-button fs-5 me-2" onClick="slide(event)">
            <i class="fa-solid fa-bars-staggered"></i>
        </div>
        <a class="navbar-brand fw-semibold fs-4 me-auto" href="/">
            <img src="{{ asset('assets/img/logo.png') }}" class="brand-logo" alt="brand">
            SunnyRent
        </a>
        <div class="navbar-menu collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/costumes">Costumes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/rules">Rules</a>
                </li>
            </ul>
        </div>
        <div class="right ms-auto d-flex gap-4 fs-5">
            @if (auth()->check())
                <div class="account-btn nav-item d-flex align-items-center ">
                    <i class=" fa-solid fa-cart-shopping"></i>
                </div>
                <div class="account-btn nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw me-1"></i>
                        <span class="name">{{ auth()->user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <input type="submit" value="Logout" class="dropdown-item">
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <div class="account-btn navbar-nav d-flex align-items-center">
                    <a class="text-decoration-none text-dark" href="/login">
                        <i class="fa-solid fa-right-to-bracket fs-6 me-1"></i>Login
                    </a>
                </div>
            @endif
        </div>

    </div>
</nav>
@if ($title == 'Costumes')
    <hr class="m-0">
    <div class="costumes-nav bg-light shadow py-2">
        <div class="container d-flex flex-column flex-xl-row justify-content-between align-items-center">
            <div class="categories d-flex gap-3 mb-2">
                <div class="category-item">
                    <a href="" class="text-decoration-none category-list">Genshin Impact</a>
                </div>
                <div class="category nav-item">
                    <a href="" class="text-decoration-none category-list category-active">Love Live</a>
                </div>
                <div class="category nav-item">
                    <a href="" class="text-decoration-none category-list">Anime</a>
                </div>
                <div class="category nav-item">
                    <a href="" class="text-decoration-none category-list">Game</a>
                </div>
            </div>
            <div class="search">
                <form action="#" method="GET">
                    <div class="input-group search-box">
                        <span class="input-group-text" id="basic-addon1"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control search-bar shadow-none" placeholder="Search..."
                            aria-label="Search" aria-describedby="basic-addon1" name="search">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
<div class="side-nav bg-light" id="sideNav">
    <div class="container pt-3">
        <div class="navbar-nav d-flex flex-column justify-content-center text-center fs-4">
            <div class="nav-item mb-3">
                <a class="nav-link side-nav-link" aria-current="page" href="/">Home</a>
            </div>
            <div class="nav-item mb-3">
                <a class="nav-link side-nav-link" href="/costumes">Costumes</a>
            </div>
            <div class="nav-item mb-3">
                <a class="nav-link side-nav-link" href="/rules">Rules</a>
            </div>
        </div>
    </div>
</div>
