@extends('layouts.main')
@section('judul', 'detail')
@section('app')
    {{-- Content Detail --}}
    <section>
        <div class="container">
            <div class="card mb-5 my-5 border-0">
                <div class="row g-0">
                  {{-- Left element --}}
                  <div class="col-md-4">
                    <img src="{{ asset('img/Foto produk_sample.png') }}" class="img-fluid rounded" alt="...">
                  </div>
                  {{-- Right elements --}}
                  <div class="col-md-8">
                    <div class="card-body ms-5 p-0">
                      <h5 class="card-title">Kambing Etawa jantan umur 2 bulan</h5>
                  {{-- time auction --}}
                  <div class="time-auction col-sm badge text-bg-warning text-warning mb-2 fw-bold"> <img src="{{ asset('icons/feather_FFB800/clock.svg') }}">
                        <span class="ms-1">1 hari</span></div>
                  {{-- alert Bid --}}
                      <div class="col-sm fw-bold"> <img clas="waktu_auction" src="{{ asset('icons/feather_FF1221/tabler_hammer.svg') }}">
                        <span class="ms-1 text-danger">Bid saat ini</span></div>
                  {{-- Desc --}}
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
@endsection