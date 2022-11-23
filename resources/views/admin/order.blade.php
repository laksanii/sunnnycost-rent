@extends('layout.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sunnyrent Cost</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Order Detail</li>
                <li class="breadcrumb-item active">Order ID : <span>00000001</span></li>
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
                                        Perental 1
                                    </div>
                                    <div class="customer-address">
                                        <div class="states fs-6 lh-sm">
                                            <span class="state">DKI Jakarta</span>, <span class="city">Jakarta
                                                Timur</span>
                                        </div>
                                        <div class="address">
                                            Jakarta Timur
                                        </div>
                                    </div>
                                    <div class="customer-phone fs-5 lh-lg">
                                        083832352467
                                    </div>
                                </div>
                                <div
                                    class="col-md-9 col-12 d-flex flex-column flex-md-row gap-2 justify-content-start justify-content-md-end ">
                                    <div class="cust-img-box">
                                        <img src="{{ asset('assets/img/featured/kobo.jpg') }}" alt=""
                                            class="cust-img rounded-1 border border-2 border-secondary">
                                    </div>
                                    <div class="cust-idcard-box">
                                        <img src="{{ asset('assets/img/featured/kobo.jpg') }}" alt=""
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
                        <div class="costume-info">
                            <div class="row justify-content-between mt-3">
                                <div class="col-md-3 col-12">
                                    <div class="costume-name fs-3">
                                        Kobo Kanaeru
                                    </div>
                                    <div class="mb-2">
                                        <div class="costume-desc lh-sm">
                                            Kobo Kanaeru Fullset
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
                                            2022-11-19 - 2022-11-23
                                        </div>
                                    </div>
                                    <div class="price fw-semibold">
                                        Price : Rp 100.000
                                    </div>
                                </div>
                                <div
                                    class="col-md-9 col-12 d-flex flex-column flex-md-row gap-2 justify-content-start justify-content-md-end ">
                                    <div class="cust-img-box">
                                        <img src="{{ asset('assets/img/featured/kobo.jpg') }}" alt=""
                                            class="costume-img rounded-1 border border-2 border-secondary">
                                    </div>
                                    <div class="cust-idcard-box">
                                        <img src="{{ asset('assets/img/featured/kobo.jpg') }}" alt=""
                                            class="costume-img rounded-1 border border-2 border-secondary">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="customer-status fs-6 lh-lg btn btn-warning px-1 py-1 fw-semibold mb-3 me-2">
                                Status : Sedang Dirental
                            </div>
                            <div class="customer-status fs-6 lh-lg btn btn-success px-1 py-1 fw-semibold mb-3"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                update status
                            </div>
                        </div>
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
                                        <th>Kategori</th>
                                        <th>Size</th>
                                        <th>Qty</th>
                                        <th>Harga</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td>1</td>
                                        <td>Kobo Kanaeru</td>
                                        <td>VTuber</td>
                                        <td>S</td>
                                        <td>1</td>
                                        <td>Rp 100.000</td>
                                        <td>Rp 100.000</td>
                                    </tr>
                                    <tr class="fw-bold">
                                        <td></td>
                                        <td colspan="5" class="text-center">Total</td>
                                        <td>Rp 100.000</td>
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
