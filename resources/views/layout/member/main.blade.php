<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Sunny Rent</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/3e53fcc07c.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('partials.member.navbar')

    @yield('content')

    <footer class="bg-yellow mt-4 pt-5 pb-2">
        <div class="container d-flex flex-wrap pb-2">
            <div class="link-box d-flex flex-column gap-3 col-12 col-lg-3 mb-4">
                <div class="link">
                    <a href="#" class="text-decoration-none text-dark">Home</a>
                </div>
                <div class="link">
                    <a href="#" class="text-decoration-none text-dark">Costumes</a>
                </div>
                <div class="link">
                    <a href="#" class="text-decoration-none text-dark">Rules</a>
                </div>
            </div>
            <div class="link-box d-flex flex-column gap-3 col-12 col-lg-3 mb-4">
                <div class="link">
                    <a href="#" class="text-decoration-none text-dark">Facebook</a>
                </div>
                <div class="link">
                    <a href="#" class="text-decoration-none text-dark">Instagram</a>
                </div>
            </div>
        </div>
        <div class="container copyright text-dark text-center">
            &copy;sunnyrentcost - 2022
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/featuredSlider.js') }}"></script>
    <script src="{{ asset('assets/js/navbar.js') }}"></script>
</body>

</html>
