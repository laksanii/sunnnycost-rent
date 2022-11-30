@extends('layout.member.main')

@section('content')
    <section id="carts" class="mt-4 container">
        <div class="">
            @if (session()->has('deleteStatus'))
                <div class="alert bg-yellow alert-dismissible fade show" role="alert">
                    <strong>{{ session()->get('deleteStatus') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-6 col-12 mb-lg-0 mb-3">
                    <div class="card item-list shadow-sm">
                        <div class="card-header bg-yellow">
                            <h3>Keranjang</h3>
                        </div>
                        <div class="card-body ">
                            @foreach ($cart as $item)
                                <div class="item d-flex gap-3 position-relative">
                                    <div class="item-img">
                                        <img src="{{ asset('assets/img/costumes/' . $item->costume->gambar) }}"
                                            class="w-100" alt="">
                                    </div>
                                    <div class="item-details">
                                        <div class="item-name">
                                            <h4>
                                                {{ $item->costume->costume_name }}
                                            </h4>
                                        </div>
                                        <div class="description mb-3">
                                            Deskripsi
                                        </div>
                                        <div class="item-price text-secondary">
                                            Rp {{ $item->costume->price }}
                                        </div>
                                    </div>
                                    <div class="delete position-absolute top-0 end-0">
                                        <form action="/delete-item" method="post">
                                            @csrf
                                            <input type="text" name="user_id" id="user_id" hidden
                                                value="{{ auth()->user()->id }}">
                                            <input type="text" name="costume_id" id="costume_id" hidden
                                                value="{{ $item->costume_id }}">
                                            <button type="submit" name="delete"
                                                class="bg-transparent border border-0 text-secondary fs-4 fw-lighter"><i
                                                    class="fa-regular fa-trash-can"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 mb-lg-0 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h3>Detail</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">
                                <h5 class="lh-1">Nama lengkap</h5>
                                <span>{{ auth()->user()->name }}</span>
                            </div>
                            <div class="address mb-3">
                                <h5 class="lh-1">Alamat</h5>
                                <span class="text-secondary">{{ auth()->user()->alamat }}</span>
                                <span
                                    class="d-block text-secondary">{{ App\helpers\Domisili::getProvinsi(auth()->user()->id) }},
                                    {{ App\helpers\Domisili::getKota(auth()->user()->id) }}</span>
                                <span class="text-secondary">Kode pos : {{ auth()->user()->kode_pos }}</span>
                            </div>
                            <div class="no-telepon">
                                No Telepon : {{ auth()->user()->no_telepon }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 mb-lg-0 mb-3">
                    <form action="/checkout" method="post">
                        @csrf
                        <div class="card shadow-sm payments">
                            <div class="card-header">
                                <h3>Pembayaran</h3>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="mb-2">
                                    <h5 class="lh-1">Tanggal Rental</h5>
                                    <input type="date" name="tgl_rental" class="form-control" id="" required>
                                    <span class="rent-msg text-danger">Durasi rental selama 3 hari dihitung dari tanggal
                                        yang
                                        dipilih</span>
                                </div>
                                <div class="prices mb-3">
                                    <h5 class="lh-1">Rincian harga</h5>
                                    @php
                                        $total = 0;
                                        $amount = 0;
                                    @endphp
                                    @foreach ($cart as $item)
                                        <div class="row text-secondary">
                                            <div class="col-8">
                                                {{ $item->costume->costume_name }}
                                            </div>
                                            <div class="col-4 text-end">
                                                {{ $item->costume->price }}
                                                @php
                                                    $total += $item->costume->price;
                                                    $amount += 1;
                                                @endphp
                                            </div>
                                        </div>
                                    @endforeach
                                    <hr>
                                    <div class="row">
                                        <div class="col-8">
                                            Total
                                        </div>
                                        <div class="col-4 text-end">
                                            {{ $total }}
                                        </div>
                                        <input type="text" hidden value={{ $amount }} name="amount">
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            Ongkos Kirim
                                        </div>
                                        <div class="col-4">
                                            <input type="text"
                                                value="{{ App\helpers\Domisili::getOngkir(auth()->user()->id)['value'] * $amount }}"
                                                class="w-100 border-0 text-end p-0" name="ongkir">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <span class="fw-semibold">Grand Total</span>
                                        </div>
                                        <div class="col-4 text-end">
                                            <input type="text"
                                                value="{{ $total + App\helpers\Domisili::getOngkir(auth()->user()->id)['value'] * $amount }}"
                                                class="w-100 border-0 text-end p-0" name="total">
                                        </div>
                                    </div>
                                </div>
                                <div class="payments-method mb-3">
                                    <h5 class="lh-1">Metode Pembayaran</h5>
                                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example"
                                        name="payment" required onchange="paymentMethod(event)">
                                        <option selected disabled hidden>Pilih Metode Pembayaran</option>
                                        @foreach ($payments as $payment)
                                            <option value="{{ $payment->id }}">{{ $payment->payment_method }}</option>
                                        @endforeach
                                    </select>
                                    <div class="row px-1 d-none bank-box">
                                        <div class="col-4">
                                            <img src="{{ asset('assets/img/bank/bca.png') }}" class="bank-img"
                                                alt="">
                                        </div>
                                        <div class="col-8 text-end">
                                            <span class="norek d-block"></span>
                                            <span class="a-n fw-semibold p-0"></span>
                                        </div>
                                    </div>
                                </div>
                                <button {{ $amount == 0 ? 'disabled' : '' }} type="submit"
                                    class="w-100 border border-0 rounded bg-yellow py-1 fw-semibold align-self-bottom">Checkout</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('assets/js/costume.js') }}"></script>
    <script src="{{ asset('assets/js/payment.js') }}"></script>
@endsection
