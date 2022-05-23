@extends('layouts.master')


@section('content')
    <section>
        @if (session('alert'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('alert') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action="{{ route('barang.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control" placeholder="Komputer">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jumlah Barang</label>
                                <input type="number" name="jumlah_barang" class="form-control" placeholder="1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                                <input type="text" name="kategori" class="form-control" placeholder="Komputer">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kondisi</label>
                                <input type="text" name="kondisi" class="form-control" placeholder="Baik">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
