@extends('layout.member.main')

@section('content')
    <section id="orders" class="mt-4">
        <div class="container d-flex flex-column justify-content-center align-items-center cont">
            @forelse ($orders as $order)
                <a href="/order/{{ $order->id }}" class="d-block text-decoration-none text-dark card-item mb-4">
                    <div class="card  shadow-sm">
                        <div class="card-header d-flex justify-content-between">
                            <div class="">
                                {{ $order->tgl_order }}&nbsp;
                                <span
                                    class="{{ $order->payment_status == 'belum lunas' ? 'bg-warning' : ($order->payment_status == 'lunas' ? 'bg-success' : 'bg-danger') }} px-2 py-1 rounded">{{ $order->payment_status }}</span>
                            </div>
                            <div class="">
                                #{{ $order->id }}
                            </div>
                        </div>
                        <div class="card-body row">
                            <div class="img-item col-lg-2 col-3">
                                <img src="{{ asset('assets/img/costumes/' . $order->costumes[0]->gambar) }}"
                                    class="w-100 rounded" alt="">
                            </div>
                            <div class="detail-item col-lg-8 col-5">
                                <div class="">
                                    <span class="fw-semibold cost-name">Order #{{ $order->id }}</span>
                                    <span class="text-secondary">{{ $order->amount }} item</span>
                                </div>
                                @php
                                    $count = 0;
                                @endphp
                                @foreach ($order->costumes as $costume)
                                    @php
                                        if ($count == 3) {
                                            break;
                                        }
                                        $count++;
                                    @endphp
                                    <div class="">
                                        <span class="text-secondary">{{ $costume->costume_name }}</span>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-lg-2 col-4 d-flex">
                                <div class="vr me-2 me-lg-0"></div>
                                <div class="mx-auto pt-md-5 text-center pt-2 total-belanja">
                                    <span class="d-block  fw-light lh-1 text-secondary">Total</span>
                                    <span class="">Rp {{ $order->total }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @empty

                <div class="container text-center">
                    <h3>Anda belum melakukan transaksi</h3>
                    <h5>Ayo cepet rental tunggu apa lagi</h5>
                </div>
            @endforelse
        </div>
    </section>
@endsection
