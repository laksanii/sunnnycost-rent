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
                                <th>Tanggal Order</th>
                                <th>Payment Status</th>
                                <th class="text-center">Tanggal Rental</th>
                                <th class="text-center">Tanggal Kembali</th>
                                <th class="text-center">Jumlah</th>
                                <th class="text-center">Total</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->tgl_order }}</td>
                                    <td>{{ $order->payment_status }}</td>
                                    <td class="text-center">{{ $order->tgl_rental->format('Y-m-d') }}</td>
                                    <td class="text-center">{{ $order->tgl_kembali }}</td>
                                    <td class="text-center">{{ $order->amount }}</td>
                                    <td class="text-center">{{ $order->total }}</td>
                                    <td class="text-center">
                                        <a href="/admin/orders/{{ $order->id }}" class="btn btn-success">
                                            <i class="fa-solid fa-circle-info"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
