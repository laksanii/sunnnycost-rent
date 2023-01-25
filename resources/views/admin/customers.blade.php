@extends('layout.admin.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sunnyrent Cost</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Customers</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th class="text-center">No Hp</th>
                                <th class="text-center">Provinsi</th>
                                <th class="text-center">Kota</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">No Hp Kerabat</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($customers as $customer)
                                <tr>
                                    <td class="align-middle">{{ $i++ }}</td>
                                    <td class="align-middle">{{ $customer->name }}</td>
                                    <td class="align-middle">{{ $customer->email }}</td>
                                    <td class="align-middle text-center">{{ $customer->no_telepon }}</td>
                                    <td class="align-middle text-center">
                                        {{ \App\helpers\Domisili::getProvinsi($customer->id) }}</td>
                                    <td class="align-middle text-center">{{ \App\helpers\Domisili::getKota($customer->id) }}
                                    </td>
                                    <td class="align-middle text-center">{{ $customer->alamat }}</td>
                                    <td class="align-middle text-center">{{ $customer->no_kerabat }}</td>
                                    <td class="align-middle text-center">
                                        <a href="/admin/customers/{{ $customer->id }}" class="btn btn-success">
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
