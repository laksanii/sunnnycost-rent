@extends('layout.admin.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sunnyrent Cost</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Orders List</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Order ID</th>
                                <th>Nama</th>
                                <th>No Telepon</th>
                                <th>Total</th>
                                <th class="text-center">Tanggal Rental</th>
                                <th class="text-center">Tanggal Kembali</th>
                                <th class="text-center">Ongkir</th>
                                <th class="text-center">Payment Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Order ID</th>
                                <th>Nama</th>
                                <th>No Telepon</th>
                                <th>Total</th>
                                <th class="text-center">Tanggal Rental</th>
                                <th class="text-center">Tanggal Kembali</th>
                                <th class="text-center">Ongkir</th>
                                <th class="text-center">Payment Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>00000001</td>
                                <td>Perental 1</td>
                                <td>083832352467</td>
                                <td>Rp 150.000</td>
                                <td class="text-center">2022-11-19</td>
                                <td class="text-center">2022-11-23</td>
                                <td class="text-center">Rp 20000</td>
                                <td class="text-center">Lunas</td>
                                <td class="text-center">
                                    <a href="/admin/orders/1" class="btn btn-success">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
