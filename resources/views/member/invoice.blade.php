<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body onload="timer('{{ $order->created_at }}', '{{ $order->payment_status }}')">
    <div class="container gap-3 d-flex flex-column align-items-center justify-content-center my-3">
        <div class="caption fs-4">
            Selesaikan Pembayaran Sebelum
        </div>
        <div class="timer bg-warning invoice-box rounded shadow-sm text-center py-3 fs-4 fw-semibold" id="time">

        </div>
        <div class="card shadow invoice-box">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="">
                        <div class="invoice-header">
                            <div class="fs-4 fw-semibold invoice-no">
                                Invoice#{{ $order->id }}
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
                            <div class="tanggal mb-2">
                                tanggal: {{ $order->tgl_order }}
                            </div>
                        </div>
                        <div class="mb-3">
                            <h6 class="lh-1">Customer</h6>
                            {{ $order->user->name }}
                            <div class="">
                                {{ $order->user->no_telepon }}
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <h6>Alamat pengiriman</h6>
                                <span>{{ $order->user->alamat }}</span>
                            </div>
                            <div class="">
                                {{ App\helpers\Domisili::getProvinsi(auth()->user()->id) }},
                                {{ App\helpers\Domisili::getKota(auth()->user()->id) }}
                            </div>
                            <div class="">
                                Kode Pos : {{ $order->user->kode_pos }}
                            </div>
                        </div>
                    </div>
                    <div class="invoice-logo">
                        <img src="{{ asset('assets/img/logo.png') }}" class="w-100" alt="">
                    </div>
                </div>
                <hr>
                <div class="table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kostum</th>
                                <th scope="col" class="text-center">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($order->costumes as $item)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $item->costume_name }}</td>
                                    <td class="text-center">Rp {{ $item->price }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <th colspan="2" scope="row">Ongkir</th>
                                <td class="text-center">Rp {{ $order->ongkir }}</td>
                            </tr>
                            <tr>
                                <th colspan="2" scope="row">Total</th>
                                <td class="text-center">Rp {{ $order->total }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="">
                    <h6>Metode Pembayaran</h6>
                    <div class="d-flex justify-content-between">
                        <div class="bank-invoice">
                            <img src="{{ asset('assets/img/bank/' . $order->payment->gambar) }}" class="w-100"
                                alt="">
                        </div>
                        <div class="text-end">
                            {{ $order->payment->no_rekening }}<br>
                            {{ $order->payment->atas_nama }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="/" class="btn btn-success">Kembali</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
</body>

</html>
