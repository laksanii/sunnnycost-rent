<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Sunny Rent</title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <!-- <link rel="stylesheet" href="/assets/css/navbar.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/3e53fcc07c.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light top-0 sticky-top">
    <div class="container d-flex nav-container gap-3">
      <div class="nav-button fs-5 me-2" onClick="slide(event)">
        <i class="fa-solid fa-bars-staggered"></i>
      </div>
      <a class="navbar-brand fw-semibold fs-4 me-auto" href="#">SunnyRent</a>
      <div class="navbar-menu collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Costumes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Rules</a>
          </li>
        </ul>
      </div>
      <div class="right ms-auto d-flex gap-4 fs-5">
        <div class="account-btn navbar-nav">
          <i class="fa-solid fa-cart-shopping"></i>
        </div>
        <div class="account-btn navbar-nav">
          <i class="fa-solid fa-user"></i>
        </div>
      </div>
    </div>
  </nav>
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
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" class="form-control search-bar shadow-none" placeholder="Search..." aria-label="Search"
              aria-describedby="basic-addon1" name="search">
          </div>
        </form>
      </div>
    </div>
  </div>

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

  <section id="costumes" class="mt-5">
    <div class="container">
      <div class="row gap-4 m-auto justify-content-center">
        <div class="costume-card rounded border p-0" style="width: 18rem;">
          <img src="/assets/img/featured/gura.jpg" class="costume-img mb-1" alt="...">
          <div class="costume-card-body p-2">
            <p class="fs-6 mb-1">Gawr Gura</p>
            <span class="fw-semibold">Rp 100.000</span>
          </div>
          <div class="costume-card-foot bg-yellow text-dark fw-semibold text-center py-2  ">
            Keranjang
          </div>
        </div>
        <div class="costume-card rounded border p-0" style="width: 18rem;">
          <img src="/assets/img/featured/gura.jpg" class="costume-img mb-1" alt="...">
          <div class="costume-card-body p-2">
            <p class="fs-6 mb-1">Gawr Gura</p>
            <span class="fw-semibold">Rp 100.000</span>
          </div>
          <div class="costume-card-foot bg-yellow text-dark fw-semibold text-center py-2  ">
            Keranjang
          </div>
        </div>
        <div class="costume-card rounded border p-0" style="width: 18rem;">
          <img src="/assets/img/featured/gura.jpg" class="costume-img mb-1" alt="...">
          <div class="costume-card-body p-2">
            <p class="fs-6 mb-1">Gawr Gura</p>
            <span class="fw-semibold">Rp 100.000</span>
          </div>
          <div class="costume-card-foot bg-yellow text-dark fw-semibold text-center py-2  ">
            Keranjang
          </div>
        </div>
        <div class="costume-card rounded border p-0" style="width: 18rem;">
          <img src="/assets/img/featured/gura.jpg" class="costume-img mb-1" alt="...">
          <div class="costume-card-body p-2">
            <p class="fs-6 mb-1">Gawr Gura</p>
            <span class="fw-semibold">Rp 100.000</span>
          </div>
          <div class="costume-card-foot bg-yellow text-dark fw-semibold text-center py-2  ">
            Keranjang
          </div>
        </div>
        <div class="costume-card rounded border p-0" style="width: 18rem;">
          <img src="/assets/img/featured/gura.jpg" class="costume-img mb-1" alt="...">
          <div class="costume-card-body p-2">
            <p class="fs-6 mb-1">Gawr Gura</p>
            <span class="fw-semibold">Rp 100.000</span>
          </div>
          <div class="costume-card-foot bg-yellow text-dark fw-semibold text-center py-2  ">
            Keranjang
          </div>
        </div>
        <div class="costume-card rounded border p-0" style="width: 18rem;">
          <img src="/assets/img/featured/gura.jpg" class="costume-img mb-1" alt="...">
          <div class="costume-card-body p-2">
            <p class="fs-6 mb-1">Gawr Gura</p>
            <span class="fw-semibold">Rp 100.000</span>
          </div>
          <div class="costume-card-foot bg-yellow text-dark fw-semibold text-center py-2  ">
            Keranjang
          </div>
        </div>
        <div class="costume-card rounded border p-0" style="width: 18rem;">
          <img src="/assets/img/featured/gura.jpg" class="costume-img mb-1" alt="...">
          <div class="costume-card-body p-2">
            <p class="fs-6 mb-1">Gawr Gura</p>
            <span class="fw-semibold">Rp 100.000</span>
          </div>
          <div class="costume-card-foot bg-yellow text-dark fw-semibold text-center py-2  ">
            Keranjang
          </div>
        </div>
        <div class="costume-card rounded border p-0" style="width: 18rem;">
          <img src="/assets/img/featured/gura.jpg" class="costume-img mb-1" alt="...">
          <div class="costume-card-body p-2">
            <p class="fs-6 mb-1">Gawr Gura</p>
            <span class="fw-semibold">Rp 100.000</span>
          </div>
          <div class="costume-card-foot bg-yellow text-dark fw-semibold text-center py-2  ">
            Keranjang
          </div>
        </div>


      </div>
    </div>
  </section>


  <footer class="bg-black mt-5 pt-5 pb-2">
    <div class="container d-flex flex-wrap pb-2">
      <div class="link-box d-flex flex-column gap-3 col-12 col-md-3 mb-4">
        <div class="link">
          <a href="#" class="text-decoration-none text-grey">Home</a>
        </div>
        <div class="link">
          <a href="#" class="text-decoration-none text-grey">Costumes</a>
        </div>
        <div class="link">
          <a href="#" class="text-decoration-none text-grey">Rules</a>
        </div>
      </div>
      <div class="link-box d-flex flex-column gap-3 col-12 col-md-3 mb-4">
        <div class="link">
          <a href="#" class="text-decoration-none text-grey">Facebook</a>
        </div>
        <div class="link">
          <a href="#" class="text-decoration-none text-grey">Instagram</a>
        </div>
      </div>
    </div>
    <div class="container copyright text-grey text-center">
      &copy;sunnyrentcost - 2022
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="/assets/js/featuredSlider.js"></script>
  <script src="/assets/js/navbar.js"></script>
</body>

</html>