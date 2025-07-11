<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav me-2 mb-2 mb-lg-0 flex-row">
    @guest
        <li class="nav-item px-3">
           <a class="nav-link px-3" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
               <a class="nav-link px-3" href="{{ route('register') }}">Register</a>
        </li>
      @endguest

      @auth
        <li class="nav-item text-nowrap">
         <a class="nav-link px-3" href="{{ route('logout') }}">Sign out</a>
        </li> 
      @endauth      

      </ul>
  </div>
</header>
