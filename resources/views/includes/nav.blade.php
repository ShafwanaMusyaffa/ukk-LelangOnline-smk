<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container justify-content-between">
      <!-- Left elements -->
      <div class="d-flex">
        <!-- Brand -->
        <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
          <img
            src="{{ asset('img/Logo_Animal Auction.png') }}"
            height="20"
            alt=""
            loading="lazy"
            style="margin-top: 2px;"
          />
        </a>
  
        <!-- Search form -->
        <form class="input-group w-auto my-auto d-none d-sm-flex ms-5">
          <input
            autocomplete="off"
            type="search"
            class="form-control rounded"
            placeholder="Search"
            style="min-width: 125px;"
          />
          <span class="input-group-text border-0 d-none d-lg-flex"
            ><i class="fas fa-search"></i
          ></span>
        </form>
      </div>
      <!-- Left elements -->
  
      <!-- Right elements -->
      <ul class="navbar-nav flex-row gap-3">
        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link d-sm-flex align-items-sm-center" href="#">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp"
              class="rounded-circle"
              height="22"
              alt="Black and White Portrait of a Man"
              loading="lazy"
            />
            <strong class="d-none d-sm-block ms-1">Krisna Makmur</strong>
          </a>
        </li>
        {{-- Button --}}
        <li class="nav-item me-3 me-lg-1">
          <button type=""
            class="mybid_button btn btn-warning text-bg-warning btn-block text-warning  fw-bold"><img src="{{ asset('icons/feather_E88D13/coin-stack.svg') }}"><span class="ms-2">My Bid</span>
          </button>
        </li>
        <li class="nav-item me-3 me-lg-1">
          <button type=""
           class="mybid_button btn btn-success btn-block text-warning  fw-bold"><img src="{{ asset('icons/feather_FFFFFF/log-out.svg') }}">
          </button>
        </li>
      </ul>
      {{-- Button --}}
      
      <!-- Right elements -->

    </div>
  </nav>
  <!-- Navbar -->