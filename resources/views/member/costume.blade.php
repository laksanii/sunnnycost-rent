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
    <div class="container px-5">
      <div class="row justify-content-center gap-3">
        <div class="col-md-4 col-12 border border-secondary border-1 rounded p-0 costume-img-box">
          <div class="img-main border-bottom border-3 border-secondary">
            <img src="/assets/img/featured/kobo.jpg" alt="kobo" class="thumbnail">
          </div>
          <div class="row g-3">
            <div class="col-4 img-list ">
              <img src="/assets/img/featured/kobo.jpg" alt="kobo" class="costume-img-list">
            </div>
            <div class="col-4 img-list">
              <img src="/assets/img/featured/kobo.jpg" alt="kobo" class="costume-img-list">
            </div>
            <div class="col-4 img-list">
              <img src="/assets/img/featured/kobo.jpg" alt="kobo" class="costume-img-list">
            </div>
          </div>
        </div>
        <div
          class="costume-detail-box col-md-4 col-12 border border-secondary border-1 rounded-1 text-poppins pt-3 px-3 d-flex flex-column position-relative">
          <div class="costume-title mb-3 fs-5">
            Kobo Kanaeru Fullset include wig, sepatu dan acc
          </div>
          <div class="costume-size mb-3 text-roboto">
            AVAILABLE SIZE :
            <span class="size">
              S - L
            </span>
          </div>
          <div class="costume-desc text-biryani">
            Kobo kanaeru GEN 3 HOLO ID original ver.
            <p class="costume-brand m-0 lh-lg">
              Brand : Taobao
            </p>
            <p class="wig-brand m-0 lh-lg">
              Wig Brand : Free base
            </p>
          </div>
          <div class="form position-absolute bottom-0 start-0 end-0 mb-3 px-3">
            <form action="" method="post">
              <div class="field mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Rent</label>
                <input type="date" class="form-control shadow-none" id="exampleFormControlInput1">
              </div>
              <a href="" class="rent-btn btn bg-yellow d-block">
                Rent
              </a>
            </form>
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