@extends('layouts.master')


@section('content')
    <section>
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    @foreach ($barang as $b)
                        <form method="POST" action="/update_barang">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $b->id }}"> <br />
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Nama"
                                    name="nama_barang" value="{{ $b->nama_barang }}">
                                <label for="floatingInput">Nama Barang</label>

                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput" placeholder="Jumlah"
                                    name="jumlah_barang" value="{{ $b->jumlah_barang }}">
                                <label for="floatingInput">Jumlah Barang</label>

                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Kategori"
                                    name="kategori" value="{{ $b->kategori }}">
                                <label for="floatingInput">Kategori</label>

                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Kondisi"
                                    name="kondisi" value="{{ $b->kondisi }}">
                                <label for="floatingInput">Kondisi</label>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
@endsection
