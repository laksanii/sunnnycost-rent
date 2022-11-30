<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny Rent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pagination.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/3e53fcc07c.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="d-none cart-success shadow position-fixed start-50 translate-middle-x alert bg-yellow alert-dismissible fade show"
        role="alert" id="cart-success">
        <strong> Berhasil ditambahkan ke keranjang</strong>
    </div>
    @include('partials.member.navbar')

    @yield('content')

    <footer class="bg-yellow mt-4 pt-3 pb-2">
        <div class="container d-flex flex-wrap">
            <div class="link-box d-flex flex-column gap-3 col-6 col-md-3 mb-4 mb-md-0">
                <div class="link">
                    <a href="/" class="text-decoration-none text-dark">Home</a>
                </div>
                <div class="link">
                    <a href="/costumes" class="text-decoration-none text-dark">Costumes</a>
                </div>
                <div class="link">
                    <a href="/rules" class="text-decoration-none text-dark">Rules</a>
                </div>
            </div>
            <div class="link-box d-flex flex-column gap-3 col-6 col-md-3 mb-4">
                <div class="link">
                    <a href="#" class="text-decoration-none text-dark"><i
                            class="fa-brands fa-facebook me-1"></i>Facebook</a>
                </div>
                <div class="link">
                    <a href="#" class="text-decoration-none text-dark"><i
                            class="fa-brands fa-instagram me-1"></i>Instagram</a>
                </div>
            </div>
        </div>
        <div class="container copyright text-dark text-center fw-semibold p-0">
            &copy;sunnyrentcost - 2022
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/featuredSlider.js') }}"></script>
    <script src="{{ asset('assets/js/categorySwiper.js') }}"></script>
    <script src="{{ asset('assets/js/navbar.js') }}"></script>
    @yield('script')
</body>

</html>
