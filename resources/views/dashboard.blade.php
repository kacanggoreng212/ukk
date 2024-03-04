@extends('layouts.master')

@section ('content')

<div class="row">

    <div class="col-md-4 text-white ml-10 pt-5">
            <div class="card ml-5" style="background-color: highlight">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa-solid fa-calendar-days mr-2"></i>
                </div>
                <h5 class="card-title text-white">Data Barang</h5>
                <div class="display-4 text-white"><br></div>
                <a href="barang"><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
              </div>
            </div>
          </div>
    <div class="col-md-4 text-white ml-10 mt-5">
            <div class="card ml-5" style="background-color: highlight">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa-solid fa-calendar-days mr-2"></i>
                </div>
                <h5 class="card-title text-white">User</h5>
                <div class="display-4 text-white"><br></div>
                <a href="user"><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
              </div>
            </div>
          </div>
    <div class="col-md-4 text-white ml-10 mt-5">
            <div class="card ml-5" style="background-color: highlight">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa-solid fa-calendar-days mr-2"></i>
                </div>
                <h5 class="card-title text-white">Transaksi</h5>
                <div class="display-4 text-white"><br></div>
                <a href="transaksi"><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
              </div>
            </div>
          </div>
</div>


@endsection

