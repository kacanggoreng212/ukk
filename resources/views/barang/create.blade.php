@extends('layout.template')

@section ('konten')

<!-- START FORM -->
<form action='{{ url('barang') }}' method='post'>
@csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{url('barang')}}' class="btn btn-secondary"><< Kembali</a>
            <div class="mb-3 row">
                <label for="kodebarang" class="col-sm-2 col-form-label">Kode Barang</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='kode_barang' id="kodebarang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="namabarang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_barang' id="namabarang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="namabarang" class="col-sm-2 col-form-label">Harga Beli</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='harga_beli' id="harga_beli">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="namabarang" class="col-sm-2 col-form-label">Harga Jual</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='harga_jual' id="harga_jual">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='stok' id="stok">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="stok" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
<!-- AKHIR FORM -->
@endsection
