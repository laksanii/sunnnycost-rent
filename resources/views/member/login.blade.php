<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/loginMember.css') }}">
</head>

<body class="bg-grey">
    <div class="container d-flex justify-content-center align-items-center box pt-5">
        <div class="card shadow py-4 px-2 bg-yellow" style="width: 18rem;">
            <div class="card-body">
                <div class="logo text-center mb-4">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="logo-img rounded-circle">
                </div>
                <form action="/login" method="post">
                    @csrf
                    <div class="field bg-light rounded rounded-3 py-2 px-3 mb-3">
                        <label for="username" class="fs-6 ">Username</label>
                        <div class="input-box row">
                            <div class="col-1">
                                <i class="fa-solid fa-user text-secondary"></i>
                            </div>
                            <div class="col-10">
                                <input type="text" name="username" id="username" placeholder="Username"
                                    class="bg-transparent border-0 border border-bottom text-secondary">
                            </div>
                        </div>
                    </div>
                    <div class="field bg-light rounded rounded-3 py-2 px-3 mb-3">
                        <label for="password" class="fs-6 ">Password</label>
                        <div class="input-box row">
                            <div class="col-1">
                                <i class="fa-solid fa-lock text-secondary"></i>
                            </div>
                            <div class="col-10">
                                <input type="password" name="password" id="password" placeholder="*********"
                                    class="bg-transparent border-0 border border-bottom text-secondary">
                            </div>
                        </div>
                    </div>
                    <div class="field d-flex mb-2">
                        <button type="submit" class="btn btn-primary rounded-pill login-btn fw-bold">Login</button>
                    </div>
                </form>
                <div class="caption text-center">
                    <span class="text-black">
                        Belum punya akun? <a href="/register">Daftar</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
