@extends('layout.member.main')

@section('content')
    <section id="newArrival" class="mt-4">
        <div class="container">
            <h4 class="mb-3">New Arrival</h4>
            <div class="img-box">
                <img src="{{ asset('assets/img/banners/new-arrival.jpg') }}" alt="New Arrival"
                    class="new-arrival-img rounded-3 shadow border border-warning border-2">
            </div>
        </div>
    </section>

    <section id="featured" class="mt-4">
        <div class="container pb-2">
            <h4 class="mb-3">Featured</h4>
            <div class="swiper featured-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper shadow">
                    <!-- Slides -->
                    <div class="img-box swiper-slide shadow border border-2 border-dark rounded rounded-1">
                        <img src="{{ asset('assets/img/featured/gura.jpg') }}" alt="Gura" class="featured-img">
                    </div>
                    <div class="img-box swiper-slide shadow border border-2 border-dark rounded rounded-1">
                        <img src="{{ asset('assets/img/featured/miku.jpg') }}" alt="Gura" class="featured-img">
                    </div>
                    <div class="img-box swiper-slide shadow border border-2 border-dark rounded rounded-1">
                        <img src="{{ asset('assets/img/featured/yae.jpg') }}" alt="Gura" class="featured-img">
                    </div>
                    <div class="img-box swiper-slide shadow border border-2 border-dark rounded rounded-1">
                        <img src="{{ asset('assets/img/featured/kokomi.jpg') }}" alt="Gura" class="featured-img">
                    </div>
                    <div class="img-box swiper-slide shadow border border-2 border-dark rounded rounded-1">
                        <img src="{{ asset('assets/img/featured/kobo.jpg') }}" alt="Gura" class="featured-img">
                    </div>
                    <div class="img-box swiper-slide shadow border border-2 border-dark rounded rounded-1">
                        <img src="{{ asset('assets/img/featured/nahida.jpg') }}" alt="Gura" class="featured-img">
                    </div>
                    <div class="img-box swiper-slide shadow border border-2 border-dark rounded rounded-1">
                        <img src="{{ asset('assets/img/featured/uta.jpg') }}" alt="Gura" class="featured-img">
                    </div>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>

    <section id="payment" class="mt-4">
        <div class="container">
            <h4 class="mb-3">Payment</h4>
            <div class="payment-box d-flex justify-content-between row flex-wrap text-center">
                <div class="img-box col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3">
                    <img src="{{ asset('assets/img/bank/bca.png') }}" alt="bca" class="payment-img shadow">
                </div>
                <div class="img-box col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3">
                    <img src="{{ asset('assets/img/bank/bri.jpg') }}" alt="bca" class="payment-img shadow">
                </div>
                <div class="img-box col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3">
                    <img src="{{ asset('assets/img/bank/dana.png') }}" alt="bca" class="payment-img shadow">
                </div>
                <div class="img-box col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 mb-3">
                    <img src="{{ asset('assets/img/bank/bca.png') }}" alt="bca" class="payment-img shadow">
                </div>
            </div>
        </div>
    </section>
@endsection
