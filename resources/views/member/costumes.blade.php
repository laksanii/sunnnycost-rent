@extends('layout.member.main')

@section('content')
    <section id="costumes" class="mt-4">
        <div class="container">
            <div class="row m-auto">
                @foreach ($costumes as $costume)
                    <div class="col-6 col-md-4  col-lg-3 px-2 mb-3">
                        <div class=" costume-card rounded border">
                            <a href="/costumes/{{ $costume->id }}" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/img/costumes/' . $costume->gambar) }}" class="costume-img mb-1"
                                    alt="{{ $costume->costume_name }}">
                                <div class="costume-card-body p-2">
                                    <p class="fs-6 mb-1 text-capitalize">{{ $costume->costume_name }}</p>
                                    <span class="fw-semibold">Rp 100.000</span>
                                </div>
                            </a>
                            <div class="costume-card-foot text-dark  text-center   ">
                                <button class="btn-cart border border-none bg-yellow fw-semibold py-2"
                                    onclick="addToCart(event, {{ auth()->user()->id }}, {{ $costume->id }})">
                                    <i class="fa-solid fa-cart-plus me-2"></i>Keranjang
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $costumes->links('partials.paginate') }}
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('assets/js/cart.js') }}"></script>
@endsection
