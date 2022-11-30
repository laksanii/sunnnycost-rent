@extends('layout.admin.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sunnyrent Cost</h1>
            <a href="/admin/costumes" class="btn btn-success mb-3">Kembali</a>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="customer-detail">
                        <div class="cust-head pb-2">
                            <h3 class="d-inline">Costume Details</h3>

                        </div>
                        <hr class="m-0">
                        <div class="customer-info">
                            <div class="row justify-content-between mt-3">
                                <div class="col-md-5 col-12 mb-2 mb-md-0">
                                    <div class="customer-name fs-3">
                                        {{ $costume->costume_name }} ({{ $costume->category->category_name }})
                                        @if ($costume->status == 'on book' || $costume->status == 'on rent')
                                            <span class="bg-warning fs-6 rounded px-2 pb-1">{{ $costume->status }}</span>
                                        @elseif($costume->status == 'ready')
                                            <span
                                                class="bg-success fs-6 rounded text-light rounded px-2 pb-1">{{ $costume->status }}</span>
                                        @else
                                            <span
                                                class="bg-danger fs-6 rounded text-light rounded px-2 pb-1">{{ $costume->status }}</span>
                                        @endif
                                    </div>
                                    <div class="customer-address">
                                        <div class="states fs-6 lh-sm">
                                            {{ $costume->description }}
                                        </div>
                                        <div class="address">
                                            Size :
                                            @foreach ($costume->sizes as $size)
                                                {{ $size->size }}&nbsp;
                                            @endforeach
                                        </div>
                                        <div class="kode-pos fs-6">
                                            Price :
                                            <p>Rp {{ $costume->price }}</p>
                                        </div>
                                    </div>
                                    <div class="customers-socmed mt-2">
                                        <a class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                                <div
                                    class="position-relative col-lg-4 col-md-7 col-12 d-flex flex-column flex-md-row gap-2 justify-content-start justify-content-md-end">
                                    <div class="swiper" style="width: 300px; height:300px">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Slides -->
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/img/costumes/' . $costume->gambar) }}"
                                                    alt=""
                                                    class="cost-slide-img rounded-1 border border-2 border-secondary">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/img/costumes/' . $costume->gambar) }}"
                                                    alt=""
                                                    class="cost-slide-img rounded-1 border border-2 border-secondary">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/img/costumes/' . $costume->gambar) }}"
                                                    alt=""
                                                    class="cost-slide-img rounded-1 border border-2 border-secondary">
                                            </div>

                                            ...
                                        </div>
                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination"></div>

                                        <!-- If we need navigation buttons -->

                                    </div>
                                    <div class="swiper-button-prev text-dark"></div>
                                    <div class="swiper-button-next text-dark"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
@endsection
