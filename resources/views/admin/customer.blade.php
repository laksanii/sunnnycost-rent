@extends('layout.admin.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sunnyrent Cost</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Customer Detail</li>
            </ol>
            <a href="/admin/customers" class="btn btn-success mb-3">Kembali</a>
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
                                        {{ $customer->name }}
                                    </div>
                                    <div class="customer-address">
                                        <div class="states fs-6 lh-sm">
                                            <span class="state">DKI Jakarta</span>, <span class="city">Jakarta
                                                Timur</span>
                                        </div>
                                        <div class="address">
                                            {{ $customer->alamat }}
                                        </div>
                                        <div class="kode-pos fs-6">
                                            {{ $customer->kode_pos }}
                                        </div>
                                    </div>
                                    <div class="customers-socmed mt-2">
                                        Socmed :
                                        <div class="customer-phone fs-6">
                                            <i class="fa-regular fa-envelope"></i> : {{ $customer->email }}
                                        </div>
                                        <div class="customer-phone fs-6">
                                            <i class="fa-brands fa-whatsapp"></i> : {{ $customer->no_telepon }}
                                        </div>
                                        <div class="customer-phone fs-6">
                                            <i class="fa-brands fa-instagram"></i> : pacarnya_miku
                                        </div>
                                    </div>
                                    <div class="customers-socmed mt-2">
                                        Kerabat :
                                        <div class="customer-phone fs-6">
                                            <i class="fa-brands fa-whatsapp"></i> : {{ $customer->no_kerabat }}
                                        </div>
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
        </div>
    </main>
@endsection
