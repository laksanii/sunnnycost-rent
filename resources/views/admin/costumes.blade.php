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
                                <th class="desc-column">Deskripsi</th>
                                <th>Size</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th class="action-column">Action</th>
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
                            @foreach ($costumes as $costume)
                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">
                                        <img src="{{ asset('assets/img/costumes/' . $costume->gambar) }}" alt="Kobo"
                                            class="list-costume-img">
                                    </td>
                                    <td class="align-middle">{{ $costume->costume_name }}</td>
                                    <td class="align-middle">{{ $costume->description }}</td>
                                    <td class="align-middle">
                                        @foreach ($costume->sizes as $size)
                                            {{ $size->size }}&nbsp;
                                        @endforeach
                                    </td>
                                    <td class="align-middle">Rp {{ $costume->price }}</td>
                                    <td class="align-middle">{{ $costume->category->category_name }}</td>
                                    <td class="align-middle">{{ $costume->status }}</td>
                                    <td class="text-center align-middle">
                                        <a href="" class="btn btn-warning py-1 px-2 mb-2 mb-lg-0">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="" class="btn btn-danger py-1 px-2">
                                            <i class="fa-solid fa-trash"></i>
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
