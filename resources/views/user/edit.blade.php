@extends('layout.templateuser')

@section ('konten')

<form action='{{ url('user/'.$data->id) }}' method='post'>
@csrf
@method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{url('user')}}' class="btn btn-secondary"><< Kembali</a>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    {{$data->id}}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{$data->nama}}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='email' value="{{$data->email}}" id="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name='password' value="{{$data->password}}" id="password">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="role" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                <select class="form-select" name="role" id="role">
                    <option value=""selected>Pilih role</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                    </select>
                
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
