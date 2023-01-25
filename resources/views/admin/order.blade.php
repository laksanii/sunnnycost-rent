@extends('layout.admin.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sunnyrent Cost</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Order Detail</li>
                <li class="breadcrumb-item active">Order ID : <span>#{{ $order->id }}</span>
                    @if ($order->payment_status == 'belum lunas')
                        <span class="bg-warning py-1 px-2 text-dark rounded">{{ $order->payment_status }}</span>
                        <a href="#" class="bg-success text-decoration-none py-1 px-2 text-light rounded">Konfirmasi
                            Pembayaran</a>
                    @elseif($order->payment_status == 'lunas')
                        <span class="bg-success py-1 px-2 text-light rounded">{{ $order->payment_status }}</span>
                    @else
                        <span class="bg-danger py-1 px-2 text-light rounded">{{ $order->payment_status }}</span>
                    @endif
                </li>
            </ol>
            <a href="/admin/orders" class="btn btn-success mb-3">Kembali</a>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="customer-detail">
                        <div class="cust-head">
                            <h3>Customer Details</h3>
                        </div>
                        <hr class="m-0">
                        <div class="customer-info">
                            <div class="row justify-content-between mt-3">
                                <div class="col-md-3 col-12">
                                    <div class="customer-name fs-3">
                                        {{ $order->user->name }}
                                    </div>
                                    <div class="customer-address">
                                        <div class="states fs-6 lh-sm">
                                            <span
                                                class="state">{{ App\helpers\Domisili::getProvinsi($order->user->id) }}</span>,
                                            <span
                                                class="city">{{ App\helpers\Domisili::getKota($order->user->id) }}</span>
                                        </div>
                                        <div class="address">
                                            {{ $order->user->alamat }}
                                        </div>
                                    </div>
                                    <div class="customer-phone fs-5 lh-lg">
                                        {{ $order->user->no_telepon }}
                                    </div>
                                </div>
                                <div
                                    class="col-md-9 col-12 d-flex flex-column flex-md-row gap-2 justify-content-start justify-content-md-end ">
                                    <div class="cust-img-box">
                                        <img src="{{ 'data:image/jpeg;base64,' . base64_encode($img_selfie) }}"
                                            alt="" class="cust-img rounded-1 border border-2 border-secondary">
                                    </div>
                                    <div class="cust-idcard-box">
                                        <img src="{{ 'data:image/jpeg;base64,' . base64_encode($img_ktp) }}" alt=""
                                            class="cust-idcard rounded-1 border border-2 border-secondary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="costume-detail">
                        <div class="cust-head">
                            <h3>Item Details</h3>
                        </div>
                        <hr class="m-0">
                        @foreach ($order->costumes as $costume)
                            <div class="costume-info">
                                <div class="row justify-content-between mt-3">
                                    <div class="col-md-3 col-12">
                                        <div class="costume-name fs-3">
                                            {{ $costume->costume_name }}
                                        </div>
                                        <div class="mb-2">
                                            <div class="costume-desc lh-sm">
                                                {{ $costume->description }}
                                            </div>
                                            <div class="costume-brand lh-sm">
                                                Brand : Taobao
                                            </div>
                                            <div class="costume-size lh-sm">
                                                Size : S - L
                                            </div>
                                        </div>
                                        <div class="costume-date mb-3">
                                            <div class="label fw-semibold">
                                                Tanggal rental:
                                            </div>
                                            <div class="date">
                                                {{ $order->tgl_rental->format('Y-m-d') }} - {{ $order->tgl_kembali }}
                                            </div>
                                        </div>
                                        <div class="price fw-semibold">
                                            {{ $costume->price }}
                                        </div>
                                    </div>
                                    <div
                                        class="col-md-9 col-12 d-flex flex-column flex-md-row gap-2 justify-content-start justify-content-md-end ">
                                        <div class="cust-img-box">
                                            <img src="{{ asset('assets/img/costumes/' . $costume->gambar) }}"
                                                alt=""
                                                class="costume-img rounded-1 border border-2 border-secondary">
                                        </div>
                                        <div class="cust-idcard-box">
                                            <img src="{{ asset('assets/img/costumes/' . $costume->gambar) }}"
                                                alt=""
                                                class="costume-img rounded-1 border border-2 border-secondary">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="total-detail">
                        <div class="total-head">
                            <h3>Total</h3>
                        </div>
                        <hr>
                        <div class="items">
                            <table class="table table-bordered border-dark align-middle">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item</th>
                                        <th class="text-center">Kategori</th>
                                        <th class="text-center">Size</th>
                                        <th class="text-center">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total = 0;
                                        $i = 1;
                                    @endphp
                                    @foreach ($order->costumes as $costume)
                                        <tr class="align-middle">
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $costume->costume_name }}</td>
                                            <td class="text-center">{{ $costume->category->category_name }}</td>
                                            <td class="text-center">S</td>
                                            <td class="text-center">Rp {{ $costume->price }}</td>
                                        </tr>
                                        @php
                                            $total += $costume->price;
                                        @endphp
                                    @endforeach
                                    <tr class="fw-bold">
                                        <td></td>
                                        <td colspan="3" class="text-center">Ongkos kirim</td>
                                        <td class="text-center">Rp {{ $order->ongkir }}</td>
                                    </tr>
                                    <tr class="fw-bold">
                                        <td></td>
                                        <td colspan="3" class="text-center">Total</td>
                                        <td class="text-center">Rp {{ $total + $order->ongkir }}</td>
                                    </tr>
                                </tbody>
                            </table>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Status Orderan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <select class="form-select" aria-label="Default select example">
                            <option value="2">Sedang dirental</option>
                            <option value="3">Dalam pengiriman (kembali)</option>
                            <option value="3">Dalam pengiriman (ke customer)</option>
                            <option value="3">Sudah dikembalikan</option>
                            <option value="3">Terlambat</option>
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
