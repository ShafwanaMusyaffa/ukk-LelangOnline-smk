@extends('layouts.auth')
@section('judul', 'Login')

@section('app')
<div class="bg w-100">
    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          {{-- Image --}}
          <div class="col-lg-5">
            <img src="{{ asset('img/ilustrasi petani.png') }}" class="img-fluid" style="object-fit:cover max-height: 400px" alt="Ilustrasi Petani">
          </div>
    
          {{-- Login Card --}}
          <div class="col-md-8 col-lg-5 offset-xl-1">
              {{-- Headline --}}
            <div class="Hideline text-light d-flex justify-content text-align-left py-3">
              <h1>Login Terlebih dahulu !</h1>
            </div>
            <div class="card shadow-sm">
              <div class="card-body">
                  <form>
                      {{-- <!-- Username input --> --}}
                      <div class="form-floating mb-2">
                          <input type="text" class="form-control" id="floatingInput" placeholder="username">
                          <label for="floatingInput">Username</label>
                      </div>
                      <p class="small mt-1 pt-1 fw-regular text-muted"><img
                              src="{{ asset('icons/feather_BBBBBB/alert-circle.svg') }}"> Masukan
                          username</p>
  
                      {{-- <!-- Password input --> --}}
                      <div class="form-floating mb-2">
                          <input type="password" class="form-control" id="floatingInput"
                              placeholder="password">
                          <label for="floatingInput">Password</label>
                      </div>
                      <p class="small mt-1 pt-1 fw-regular text-muted"><img
                              src="{{ asset('icons/feather_BBBBBB/alert-circle.svg') }}"> Password
                          menggunakan huruf kapital </p>
  
                      {{-- <!-- Login & Signe button --> --}}
                      <div class="container text-center">
                          <div class="row gap-2">
                              
                              <button type="submit"
                                  class="col-sm btn btn-success btn-block text-light mb-4 py-3 fw-bold">Login <img src="{{ asset('icons/feather_white/log-in.svg') }}"></button>
                              <button type="back"
                                  class="col-sm btn btn-outline-success mb-4 py-3 fw-bold">Registrasi</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection