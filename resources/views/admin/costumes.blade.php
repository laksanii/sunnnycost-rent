@extends('layout.admin.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sunnyrent Cost</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Costumes List</li>
            </ol>
            @if (session()->has('deleteSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('deleteSuccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('insertSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('insertSuccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('errors'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Kostum gagal ditambahkan</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card mb-4">
                <div class="card-body">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                            class="fa-solid fa-plus"></i> Tambah Costume</button>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Costume</th>
                                <th class="desc-column">Deskripsi</th>
                                <th>Size</th>
                                <th>Harga</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Status</th>
                                <th class="action-column text-center">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <th>#</th>
                            <th>Costume</th>
                            <th>Deskripsi</th>
                            <th>Size</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tfoot>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($costumes as $costume)
                                <tr>
                                    <td class="align-middle">{{ $i++ }}</td>
                                    <td class="align-middle">
                                        <a href="/admin/costumes/{{ $costume->id }}" class="text-dark">
                                            {{ $costume->costume_name }}
                                        </a>
                                    </td>
                                    <td class="align-middle">{{ $costume->description }}</td>
                                    <td class="align-middle">
                                        @foreach ($costume->sizes as $size)
                                            {{ $size->size }}&nbsp;
                                        @endforeach
                                    </td>
                                    <td class="align-middle">Rp {{ $costume->price }}</td>
                                    <td class="align-middle text-center">{{ $costume->category->category_name }}</td>
                                    <td class="align-middle text-center">{{ $costume->status }}</td>
                                    <td class="text-center align-middle">
                                        <a href="/admin/costume/{{ $costume->id }}/delete"
                                            class="btn btn-danger py-1 px-2">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/costume/insert-costume" method="post" enctype="multipart/form-data"
                        id="insertform">
                        @csrf
                        <div class="field d-flex flex-column mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="field d-flex flex-column mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="field d-flex flex-column mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" name="harga" id="harga" class="form-control">
                        </div>
                        <div class="field d-flex flex-column mb-3">
                            <label for="gambar" class="form-label">gambar</label>
                            <input type="file" name="gambar" id="gambar" class="form-control">
                        </div>
                        <div class="field d-flex flex-column mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" name="category">
                                @foreach ($categories as $category)
                                    <option selected value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="submitform()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function submitform() {
            document.getElementById('insertform').submit();
        }
    </script>
@endsection
