@extends('layouts.auth')
@section('judul', 'Register')

@section('app')

  {{-- <!-- Headline --> --}}
  <div class="Hideline text-light d-flex justify-content-center m-3">
    <h1>Buat akun Terlebih dahulu !</h1>
  </div>
    
  {{-- <!-- Register card --> --}}
  <section class="d-flex justify-content-center py-4">
        <div class="col-lg-6 mb-1">
          <div class="card shadow-sm">
            <div class="card-body">
              <form>
                {{-- <!-- Name input --> --}}
                <div class="form-floating mb-2">
                  <input type="text" class="form-control" id="floatingInput" placeholder="names">
                  <label for="floatingInput">Name</label>
                </div>
                <p class="small mt-1 pt-1 fw-regular text-muted"><img src="{{ asset('icons/feather_BBBBBB/alert-circle.svg') }}"> Masukan nama asli anda </p>

                {{-- <!-- Username input --> --}}
                <div class="form-floating mb-2">
                  <input type="text" class="form-control" id="floatingInput" placeholder="username">
                  <label for="floatingInput">Username</label>
                </div>
                <p class="small mt-1 pt-1 fw-regular text-muted"><img src="{{ asset('icons/feather_BBBBBB/alert-circle.svg') }}"> Masukan username</p>

                {{-- <!-- Notlpn input --> --}}
                <div class="form-floating mb-2">
                  <input type="text" class="form-control" id="floatingInput" placeholder="nomertlp">
                  <label for="floatingInput">Nomer Telepone</label>
                </div>
                <p class="small mt-1 pt-1 fw-regular text-muted"><img src="{{ asset('icons/feather_BBBBBB/alert-circle.svg') }}"> Masukan no telepone</p>


                {{-- <!-- Password input --> --}}
                <div class="form-floating mb-2">
                  <input type="password" class="form-control" id="floatingInput" placeholder="password">
                  <label for="floatingInput">Password</label>
                </div>
                <p class="small mt-1 pt-1 fw-regular text-muted"><img src="{{ asset('icons/feather_BBBBBB/alert-circle.svg') }}"> Password menggunakan huruf kapital </p>

                {{-- <!-- Dropdown role input --> --}}
                <div class="form-floating mb-2">
                  <select type="text" id="role" class="form-select" required>
                      <option selected>Select role</option>
                      <option value="member">Member</option>
                      <option value="admin">Admin</option>
                      <option value="employee">Employee</option>
                  </select>
                  <label class="form-label" for="role">Role</label>
                </div>
                <p class="small mt-1 pt-1 fw-regular text-muted"><img src="{{ asset('icons/feather_BBBBBB/alert-circle.svg') }}"> Pilih role yang anda inginkan</p>

                {{-- <!-- Submit & back button --> --}}
                <div class="container text-center">
                  <div class="row gap-2">
                      <button type="submit" class="col-sm btn btn-success btn-block text-light mb-4 py-3 fw-bold">Sign up <img src="{{ asset('icons/feather_white/log-in.svg') }}"></button>
                      <button type="back" class="col-sm btn btn-outline-success mb-4 py-3 fw-bold">Back <img src="{{ asset('icons/feather_328D2A/corner-up-left.svg') }}"></button>
                  </div>
                  <p class="small mt-1 pt-1 fw-semibold">Already have an account?
                    <a href="/login" class="link-success">Login</a>
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
  </section>

@endsection