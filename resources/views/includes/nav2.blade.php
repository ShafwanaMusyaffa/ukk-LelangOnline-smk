<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom sticky-top shadow-sm">
    <div class="container">
      <!-- Left elements -->
        <!-- Brand -->
        <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
          <img
            src="{{ asset('img/Logo_Animal Auction.png') }}"
            height="20"
            alt=""
            loading="lazy"
            style="margin-top: 2px;"/>
        </a>

        <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
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
                src="{{ asset('icons/feather_328D2A/user icon.svg') }}"
                class="rounded-circle"
                height="22"
                alt="Black and White Portrait of a Man"
                loading="lazy"
              />
              <strong class="d-none d-sm-block ms-2">Nama akun</strong>
            </a>
          </li>
          {{-- Button --}}
          <li class="nav-item me-3 me-lg-1">
            {{-- Mybid Button --}}
            <a href="/mybid">
              <button type=""
                class="mybid_button btn btn-warning text-bg-warning btn-block text-warning  fw-bold">
                <img src="{{ asset('icons/feather_E88D13/coin-stack.svg') }}"><span class="ms-2">My Bid</span>
              </button>
            </a>
          </li>
          {{-- Button Logout --}}
          <li class="nav-item me-3 me-lg-1">
            <a href="/login">
              <button type=""
               class="logout_button btn btn-success btn-block text-warning fw-bold">
               <img src="{{ asset('icons/feather_FFFFFF/log-out.svg') }}">
              </button>          
            </a>
          </li>
        </ul>
        </div>
    </div>
  </nav>