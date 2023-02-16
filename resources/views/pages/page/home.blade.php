@extends('layouts.main')
@section('judul', 'Home')
@section('app')

{{-- content home --}}

{{-- Banner --}}
<section>
  <div class="container">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner my-4 rounded-3  md-5">
        <div class="carousel-item active">
          <img src="{{ asset('img/Carousel_img.png') }}" class="d-block  w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/Carousel_img.png') }}" class="d-block   w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/Carousel_img.png') }}" class="d-block  w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
 </div>
</section>
{{-- Headline --}}
<div class="container">
  <div class="Headline_home text-light d-flex justify-content text-align-left py-3">
    <h1 class="H1_ijo">Lelang yang berlangsung</h1>
  </div>
</div>
{{-- Cards --}}
<section>
<div class="container">  
    <div class="row row-cols-2 justify-content-center g-3 mb-5">
      {{-- card --}}
      <div class="col-sm-2">
        <a class="card_produk w-100 col text-decoration-none text-black" href="/login">
          <div class="card shadow-sm">
            {{-- img produk --}}
              <img src="{{ asset('img/Foto produk_sample.png') }}" class="col-md-auto card-img-top width-350px" alt=""/>
              <div class="card-body">
                {{-- time auction --}}
                <div class="time-auction col-sm badge text-bg-warning text-warning mb-2 fw-bold"><img src="{{ asset('icons/feather_FFB800/clock.svg') }}"><span class="ms-1">1 hari</span></div>
                {{-- Nama Barang --}}
                <p class="nama-barang card-text fw-medium">Kambing Etawa jantan umur 2 bulan</p>
                {{-- alert Bid --}}
                <div class="col-sm fw-bold"> <img clas="waktu_auction" src="{{ asset('icons/feather_FF1221/tabler_hammer.svg') }}"><span class="ms-1 text-danger">Bid saat ini</span></div>
                {{-- harga produk --}}
                <p class="harga-barang card-text fw-bold fs-5">Rp.1.000.000</p>
              </div>
          </div>
        </a>
      </div>
      {{-- card --}}

    </div>
  </div>
</section>
@endsection 