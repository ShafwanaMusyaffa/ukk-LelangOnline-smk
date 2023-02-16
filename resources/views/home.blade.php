@extends('layouts.main')
@section('judul', 'Home')
@section('app')
{{-- content home --}}
<div class="row m-3">  
  {{-- Row card --}}
    <div class="row gap-3">
      {{-- cards --}}
        <div class="card p-0" style="width: 15rem;">
            <img src="{{ asset('img/Foto produk_sample.png') }}" class="col-md-auto card-img-top width-350px" alt=""/>
            <div class="card-body">
              <span class="col-sm badge text-bg-light text-warning mb-2 fw-bold"> <img src="{{ asset('icons/feather_E88D13/clock.svg') }}"> 1 hari</span>
              <p class="nama-barang card-text fw-medium">Kambing Etawa</p>
              <span class="col-sm fw-bold"> <img src="{{ asset('icons/feather_E88D13/clock.svg') }}"> 1 hari</span>
            </div>
        </div>
    </div>
</div>
</div>
@endsection 