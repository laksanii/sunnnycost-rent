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
                        <tfoot>
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
                        </tfoot>
                        <tbody>
                            <tr>
                                <td class="align-middle">1</td>
                                <td class="align-middle">Perental 1</td>
                                <td class="align-middle">rental@gmail.com</td>
                                <td class="align-middle text-center">083832352467</td>
                                <td class="align-middle text-center">Jakarta</td>
                                <td class="align-middle text-center">Jakarta Timur</td>
                                <td class="align-middle text-center">Jakarta Timur</td>
                                <td class="align-middle text-center">081392398977</td>
                                <td class="align-middle text-center">
                                    <a href="/admin/customers/1" class="btn btn-success">
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
