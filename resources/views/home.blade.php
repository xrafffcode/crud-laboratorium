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
                Data
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-hover" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Kategori</th>
                            <th>Kondisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $i => $b)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $b->nama_barang }}</td>
                                <td>{{ $b->jumlah_barang }}</td>
                                <td>{{ $b->kategori }}</td>
                                <td>{{ $b->kondisi }}</td>
                                <td width="150">
                                    <a href="/delete_barang/{{ $b->id }}">
                                        <button type="button" class="btn btn-danger">Hapus</button>
                                    </a>
                                    <a href="/edit_barang/{{ $b->id }}">
                                        <button type="button" class="btn btn-warning">Edit</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                {{ $barang->links() }}
            </div>

        </div>

    </section>
@endsection
