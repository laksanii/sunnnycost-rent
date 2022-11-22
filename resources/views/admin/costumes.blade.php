@extends('layout.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sunnyrent Cost</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Costumes List</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <button class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah Costume</button>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Costume</th>
                                <th>Deskripsi</th>
                                <th>Size</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Costume</th>
                            <th>Deskripsi</th>
                            <th>Size</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>gambar</td>
                                <td>Kobo Kanaeru</td>
                                <td>Kobo Kanaeru bla bla bla</td>
                                <td>S, M, L</td>
                                <td>Rp 100.000</td>
                                <td>VTuber</td>
                                <td>Ready</td>
                                <td>
                                    <a href="" class="btn btn-warning">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
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
