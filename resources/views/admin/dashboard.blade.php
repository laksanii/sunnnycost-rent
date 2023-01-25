@extends('layout.admin.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sunnyrent Cost</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-primary shadow-sm text-white mb-4">
                        <div class="card-body rent-info d-flex flex-column justify-content-between">
                            <div class="label fs-4 text-center ">
                                Sedang Dirental
                            </div>
                            <div class="jumlah fs-3 text-center">
                                {{ $on_rent }}
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-warning shadow-sm text-white mb-4">
                        <div class="card-body rent-info d-flex flex-column justify-content-between">
                            <div class="label fs-4 text-center">
                                Dalam Pengiriman (kembali)
                            </div>
                            <div class="jumlah fs-3 text-center">
                                {{ $pengiriman_kembali }}
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-success shadow-sm text-white mb-4">
                        <div class="card-body rent-info d-flex flex-column justify-content-between">
                            <div class="label fs-4 text-center">
                                Sudah Dikembalikan (Ready)
                            </div>
                            <div class="jumlah fs-3 text-center">
                                {{ $ready }}
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-dark shadow-sm text-white mb-4">
                        <div class="card-body rent-info d-flex flex-column justify-content-between">
                            <div class="label fs-4 text-center">
                                Telat Dikembalikan
                            </div>
                            <div class="jumlah fs-3 text-center">
                                {{ $terlambat }}
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-danger  shadow-sm text-white mb-4">
                        <div class="card-body rent-info d-flex flex-column justify-content-between">
                            <div class="label fs-4 text-center">
                                Transaksi Gagal
                            </div>
                            <div class="jumlah fs-3 text-center">
                                {{ $gagal }}
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card text-white shadow-sm mb-4" style="background-color: #dfab00">
                        <div class="card-body rent-info d-flex flex-column justify-content-between">
                            <div class="label fs-4 text-center">
                                Transaksi Menunggu Konfirmasi Pembayaran
                            </div>
                            <div class="jumlah fs-3 text-center">
                                {{ $belum_lunas }}
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Income Rental per Bulan Tahun

                            <input type="text" name="" id="" value="{{ $year }}"
                                class="income-tahun text-center rounded border-1 bg-transparent" onblur="getData(event)">
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Frekuensi Costume di Rental
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
