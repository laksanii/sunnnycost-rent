@extends('layout.member.main')

@section('content')
    <section id="costumes" class="mt-4">
        <div class="container">
            <div class="row justify-content-center px-3">
                <div class="col-md-8 col-lg-4 col-12 p-0 costume-img-box mb-lg-0 mb-3">
                    <div class="img-main mb-2">
                        <img src="{{ asset('assets/img/costumes/' . $costume->gambar) }}" alt="thumbnail"
                            class="thumbnail border border-1 border-secondary rounded" id="thumbnail">
                    </div>
                    <div class="d-flex justify-content-between gap-2">
                        <div class="kolom col-3 flex-grow-1 img-list">
                            <img src="{{ asset('assets/img/costumes/' . $costume->gambar) }}" alt="kobo"
                                class="selected costume-img-list rounded" onclick="changeThumbnail(event)">
                        </div>
                        <div class="kolom col-3 flex-grow-1 img-list">
                            <img src="{{ asset('assets/img/costumes/' . $costume->gambar) }}" alt="kobo"
                                class="costume-img-list rounded " onclick="changeThumbnail(event)">
                        </div>
                        <div class="kolom col-3 flex-grow-1 img-list">
                            <img src="{{ asset('assets/img/costumes/' . $costume->gambar) }}" alt="kobo"
                                class="costume-img-list rounded " onclick="changeThumbnail(event)">
                        </div>
                    </div>
                </div>
                <div
                    class="costume-detail-box col-md-8 col-lg-4 col-12  rounded-1 text-poppins px-3 d-flex flex-column position-relative">
                    <div class="costume-title mb-3 fs-5 text-capitalize">
                        {{ $costume->costume_name }}
                    </div>
                    <div class="costume-size mb-3 text-roboto">
                        AVAILABLE SIZE :
                        <span class="size">
                            S - L
                        </span>
                    </div>
                    <div class="costume-desc text-biryani">
                        {{ $costume->description }}
                        <p class="costume-brand m-0 lh-lg">
                            Brand : Taobao
                        </p>
                        <p class="wig-brand m-0 lh-lg">
                            Wig Brand : Free base
                        </p>
                    </div>
                    <div class="form position-absolute bottom-0 start-0 end-0 px-3">
                        @if (auth()->check())
                            <button class="btn-cart border border-none bg-yellow fw-semibold py-2 w-100"
                                onclick="addToCart(event, {{ auth()->user()->id }}, {{ $costume->id }})">
                                <i class="fa-solid fa-cart-plus me-2"></i>Keranjang
                            </button>
                        @else
                            <button class="btn-cart border border-none bg-yellow fw-semibold py-2 w-100"
                                onclick="location.href = '/login'">
                                Login
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('assets/js/costume.js') }}"></script>
    <script src="{{ asset('assets/js/cart.js') }}"></script>
@endsection
