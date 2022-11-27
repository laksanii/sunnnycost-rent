<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/select2.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/registerMember.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="bg-grey">
    <div class="container d-flex justify-content-center align-items-center box py-5">
        <div class="card shadow py-3 px-2 bg-yellow" style="width: 24rem;">
            <div class="card-body">
                <div class="logo mb-4 d-flex align-items-center gap-2">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="logo"
                        class="logo-img-register rounded-circle">
                    <h3 class="text-black">Registration</h3>
                </div>
                <form action="/register" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="field bg-light rounded rounded-3 py-2 px-3 mb-3">
                        <label for="nama" class="fs-6 ">Nama Lengkap</label>
                        <div class="input-box row">
                            <div class="col-1">
                                <i class="fa-solid fa-id-card text-secondary"></i>
                            </div>
                            <div class="col-11">
                                <input type="text" name="nama" id="nama" placeholder="Nama Lengkap"
                                    class="bg-transparent border-0 border border-bottom text-secondary" name="nama">
                            </div>
                        </div>
                        @error('nama')
                            <span class="error-msg text-danger">
                                * {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="field bg-light rounded rounded-3 py-2 px-3 mb-3">
                        <label for="username" class="fs-6 ">Username</label>
                        <div class="input-box row">
                            <div class="col-1">
                                <i class="fa-solid fa-user text-secondary"></i>
                            </div>
                            <div class="col-11">
                                <input type="text" name="username" id="nama" placeholder="Username"
                                    class="bg-transparent border-0 border border-bottom text-secondary" name="username">
                            </div>
                            @error('username')
                                <span class="error-msg text-danger">
                                    * {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="field bg-light rounded rounded-3 py-2 px-3 mb-3">
                        <label for="email" class="fs-6 ">Email</label>
                        <div class="input-box row">
                            <div class="col-1">
                                <i class="fa-solid fa-envelope text-secondary"></i>
                            </div>
                            <div class="col-11">
                                <input type="text" name="email" id="email" placeholder="example@domain"
                                    class="bg-transparent border-0 border border-bottom text-secondary" name="email">
                            </div>
                            @error('email')
                                <span class="error-msg text-danger">
                                    * {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="field bg-light rounded rounded-3 py-2 px-3 mb-3">
                        <label for="password" class="fs-6 ">Password</label>
                        <div class="input-box row">
                            <div class="col-1">
                                <i class="fa-solid fa-lock text-secondary"></i>
                            </div>
                            <div class="col-11">
                                <input type="password" name="password" id="password" placeholder="*********"
                                    class="bg-transparent border-0 border border-bottom text-secondary">
                            </div>
                            @error('password')
                                <span class="error-msg text-danger">
                                    * {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="field bg-light rounded rounded-3 py-2 px-3 mb-3">
                        <label for="no_hp" class="fs-6 ">No HP</label>
                        <div class="input-box row">
                            <div class="col-1">
                                <i class="fa-solid fa-mobile-screen-button text-secondary"></i>
                            </div>
                            <div class="col-11">
                                <input type="number" name="no_hp" id="no_hp" placeholder="08xxxx"
                                    class="bg-transparent border-0 border border-bottom text-secondary">
                            </div>
                            @error('no_hp')
                                <span class="error-msg text-danger">
                                    * {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="field bg-light rounded rounded-3 py-2 px-3 mb-3">
                        <label for="selectProvinsi" class="fs-6 ">Provinsi</label>
                        <div class="input-box row select2-container">
                            <div class="col-1">
                                <i class="fa-solid fa-city text-secondary"></i>
                            </div>
                            <div class="col-11">
                                <select name="provinsi" id="selectProvinsi"
                                    class="bg-transparent border-0 border border-bottom text-secondary js-example-basic-single"
                                    style="
                                    border: none; background-color:rgba(0,0,0,);width: 100%;
                                    "
                                    onchange="openCity(event)">
                                    <option value="" disabled selected>Pilih Provinsi</option>
                                    @foreach ($provinces as $prov)
                                        <option value="{{ $prov['province_id'] }}">{{ $prov['province'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('provinsi')
                                <span class="error-msg text-danger">
                                    * {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="field bg-light rounded rounded-3 py-2 px-3 mb-3">
                        <label for="selectKota" class="fs-6 ">Kota/Kabupaten</label>
                        <div class="input-box row select2-container">
                            <div class="col-1">
                                <i class="fa-solid fa-building text-secondary"></i>
                            </div>
                            <div class="col-11">
                                <select name="kota" id="selectKota"
                                    class="bg-transparent border-0 border border-bottom text-secondary js-example-basic-single"
                                    style="
                                    border: none; background-color:rgba(0,0,0,);width:100%;
                                    ">
                                    <option value="" disabled selected>Pilih Kota/Kabupaten</option>
                                </select>
                            </div>
                            @error('kota')
                                <span class="error-msg text-danger">
                                    * {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="field bg-light rounded rounded-3 py-2 px-3 mb-3">
                        <label for="alamat" class="fs-6 ">Alamat Lengkap</label>
                        <div class="input-box row">
                            <div class="col-1">
                                <i class="fa-solid fa-house-chimney text-secondary"></i>
                            </div>
                            <div class="col-11">
                                <textarea name="alamat" id="alamat" rows="10"
                                    class="bg-transparent border-0 border border-bottom text-secondary p-1" style="width: 100%"
                                    placeholder="example: Jl. Melati No. 99 RT.1/RW.2, Kec. Bunga"></textarea>
                            </div>
                            @error('alamat')
                                <span class="error-msg text-danger">
                                    * {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="field bg-light rounded rounded-3 py-2 px-3 mb-3">
                        <label for="kode_pos" class="fs-6 ">Kode Pos</label>
                        <div class="input-box row">
                            <div class="col-1">
                                <i class="fa-solid fa-signs-post text-secondary"></i>
                            </div>
                            <div class="col-11">
                                <input type="text" name="kode_pos" id="kode_pos" placeholder="60xxx"
                                    class="bg-transparent border-0 border border-bottom text-secondary">
                            </div>
                            @error('kode_pos')
                                <span class="error-msg text-danger">
                                    * {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="field bg-light rounded rounded-3 py-2 px-3 mb-3">
                        <label for="foto_selfie" class="fs-6 ">Foto Selfie (No Cosplay)</label>
                        <div class="input-box row mb-3">
                            <div class="col-1">
                                <i class="fa-solid fa-image-portrait text-secondary"></i>
                            </div>
                            <div class="col-11">
                                <label class="file">
                                    <input type="file" name="foto_selfie" id="foto_selfie"
                                        aria-label="File browser example" onchange="previewImg(event)">
                                    <span
                                        class="file-custom bg-transparent border-0 border border-bottom text-secondary">Choose
                                        File...</span>
                                </label>
                            </div>
                            @error('foto_selfie')
                                <span class="error-msg text-danger">
                                    * {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="preview-img-box">
                            <img class="preview-img" src="" alt="prev">
                        </div>
                    </div>
                    <div class="field bg-light rounded rounded-3 py-2 px-3 mb-3">
                        <label for="foto_ktp" class="fs-6 ">Foto KTP</label>
                        <div class="input-box row mb-3">
                            <div class="col-1">
                                <i class="fa-solid fa-file-image text-secondary"></i>
                            </div>
                            <div class="col-11">
                                <label class="file">
                                    <input type="file" name="foto_ktp" id="foto_ktp"
                                        aria-label="File browser example" onchange="previewImg(event)">
                                    <div
                                        class="file-custom bg-transparent border-0 border border-bottom text-secondary">
                                        Choose File ...</div>
                                </label>
                            </div>
                            @error('foto_ktp')
                                <span class="error-msg text-danger">
                                    * {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="preview-img-box">
                            <img class="preview-img" src="" alt="prev">
                        </div>
                    </div>
                    <div class="field d-flex mb-2">
                        <button type="submit" class="btn btn-primary rounded-pill login-btn fw-bold">Login</button>
                    </div>
                </form>
                <div class="caption text-center">
                    <span class="text-black">
                        Sudah punya akun? <a href="/login">Login</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('assets/js/city.js') }}"></script>
    <script src="{{ asset('assets/js/preview.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
</body>

</html>
