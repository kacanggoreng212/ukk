@extends('layout.templateuser')

@section ('konten')

        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{url('dashboard')}}' class="btn btn-secondary"><< Kembali</a>
            </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{url('user')}}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{url('user/create')}}' class="btn btn-primary">+ Tambah Data</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th class="col-md-1">#</th>
                            <th class="col-md-1">Nama </th>
                            <th class="col-md-1">Role</th>
                            <th class="col-md-1">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = $data->firstItem()?>
                    @foreach ($data as $item )


                        <tr>

                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->role}}</td>
                            <td>
                                <a href='{{url('user/'.$item->id.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                                <form class='d-inline' action="{{url('user/'.$item->id)}}"
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
