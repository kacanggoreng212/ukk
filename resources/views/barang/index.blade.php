@extends('layout.template')

@section ('konten')

        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{url('dashboard')}}' class="btn btn-secondary"><< Kembali</a>
            </div>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{url('barang')}}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{url('barang/create')}}' class="btn btn-primary">+ Tambah Data</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = $data->firstItem()?>
                    @foreach ($data as $item )


                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$item->kode_barang}}</td>
                            <td>{{$item->nama_barang}}</td>
                            <td>{{$item->harga_beli}}</td>
                            <td>{{$item->harga_jual}}</td>
                            <td>{{$item->stok}}</td>
                            <td>
                                <a href='{{url('barang/'.$item->kode_barang.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                                <form class='d-inline' action="{{url('barang/'.$item->kode_barang)}}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                </form>
                            </td>
                        </tr>
                        <?php $i++?>
                        @endforeach
                    </tbody>
                </table>
               {{$data->withQueryString()->links()}}
          </div>
          <!-- AKHIR DATA -->

@endsection
