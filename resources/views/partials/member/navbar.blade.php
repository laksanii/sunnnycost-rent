<nav class="navbar navbar-expand-lg bg-yellow shadow-sm sticky-top top-0">
    <div class="container d-flex nav-container gap-3">
        <div class="nav-button fs-5 me-2" onClick="slide(event)">
            <i class="fa-solid fa-bars-staggered"></i>
        </div>
        <a class="navbar-brand fw-semibold fs-4 me-auto" href="#">
            <img src="{{ asset('assets/img/logo.png') }}" class="brand-logo" alt="brand">
            SunnyRent
        </a>
        <div class="navbar-menu collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Costumes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Rules</a>
                </li>
            </ul>
        </div>
        <div class="right ms-auto d-flex gap-4 fs-5">
            <div class="account-btn navbar-nav">
                <i class=" fa-solid fa-cart-shopping"></i>
            </div>
            <div class="account-btn navbar-nav">
                <i class=" fa-solid fa-user"></i>
            </div>
        </div>
    </div>
</nav>
<div class="side-nav bg-light" id="sideNav">
    <div class="container pt-3">
        <div class="navbar-nav d-flex flex-column justify-content-center text-center fs-4">
            <div class="nav-item mb-3">
                <a class="nav-link side-nav-link" aria-current="page" href="#">Home</a>
            </div>
            <div class="nav-item mb-3">
                <a class="nav-link side-nav-link" href="#">Costumes</a>
            </div>
            <div class="nav-item mb-3">
                <a class="nav-link side-nav-link" href="#">Rules</a>
            </div>
        </div>
    </div>
</div>
