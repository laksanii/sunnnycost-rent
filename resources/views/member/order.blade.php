@extends('layout.member.main')

@section('content')
    <section id="carts" class="mt-4 container">
        <div class="">
            <div class="row">
                <div class="col-lg-6 col-12 mb-lg-0 mb-3">
                    <div class="card item-list shadow-sm">
                        <div class="card-header bg-yellow">
                            <h3>List Kostum</h3>
                        </div>
                        <div class="card-body ">
                            @foreach ($order->costumes as $item)
                                <div class="item d-flex gap-3 position-relative">
                                    <div class="item-img">
                                        <img src="{{ asset('assets/img/costumes/' . $item->gambar) }}" class="w-100"
                                            alt="">
                                    </div>
                                    <div class="item-details">
                                        <div class="item-name">
                                            <h4>
                                                {{ $item->costume_name }}
                                            </h4>
                                        </div>
                                        <div class="description mb-3">
                                            Deskripsi
                                        </div>
                                        <div class="item-price text-secondary">
                                            Rp {{ $item->price }}
                                        </div>
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
                                <h5 class="lh-1">Nama</h5>
                                <span>{{ auth()->user()->name }}</span>
                            </div>
                            <div class="address mb-3">
                                <h5 class="lh-1">Alamat Pengiriman</h5>
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
                    <div class="card shadow-sm payments">
                        <div class="card-header d-flex gap-2 align-items-center">
                            <h3>Pembayaran</h3>
                            <div class="">
                                @if ($order->payment_status == 'belum lunas')
                                    <span class="bg-warning rounded px-2 py-1">{{ $order->payment_status }}</span>
                                @elseif($order->payment_status == 'lunas')
                                    <span
                                        class="bg-success text-light rounded px-2 py-1">{{ $order->payment_status }}</span>
                                @else
                                    <span
                                        class="bg-danger text-light rounded px-2 py-1">{{ $order->payment_status }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="mb-2">
                                <h5 class="lh-1">Tanggal Rental</h5>
                                <input type="text" name="tgl_rental" class="p-0 form-control border-0"
                                    value="{{ $order->tgl_rental }}" id="">
                            </div>
                            <div class="prices mb-3">
                                <h5 class="lh-1">Rincian harga</h5>
                                @php
                                    $total = 0;
                                    $amount = 0;
                                @endphp
                                @foreach ($order->costumes as $item)
                                    <div class="row text-secondary">
                                        <div class="col-8">
                                            {{ $item->costume_name }}
                                        </div>
                                        <div class="col-4 text-end">
                                            {{ $item->price }}
                                            @php
                                                $total += $item->price;
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
                                        <input type="text" value="{{ $order->ongkir }}"
                                            class="w-100 border-0 text-end p-0" name="ongkir">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <span class="fw-semibold">Grand Total</span>
                                    </div>
                                    <div class="col-4 text-end">
                                        <input type="text" value="{{ $total + $order->ongkir }}"
                                            class="w-100 border-0 text-end p-0" name="total">
                                    </div>
                                </div>
                            </div>
                            <div class="payments-method mb-3">
                                <h5 class="lh-1">Metode Pembayaran</h5>

                                <div class="row px-1">
                                    <div class="col-4">
                                        <img src="{{ asset('assets/img/bank/' . $order->payment->gambar) }}"
                                            class="bank-img" alt="">
                                    </div>
                                    <div class="col-8 text-end">
                                        <span class="norek d-block">{{ $order->payment->no_rekening }}</span>
                                        <span class="a-n fw-semibold p-0">{{ $order->payment->atas_nama }}</span>
                                    </div>
                                </div>
                            </div>
                            <a href="/invoice/{{ $order->id }}"
                                class="w-100 border border-0 rounded bg-yellow py-1 fw-semibold align-self-bottom text-center text-decoration-none text-dark">Invoice</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
