  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Lu's Laravel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item @yield('nav_home') px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('home')}}">介紹
            </a>
          </li>
          <li class="nav-item @yield('nav_about') px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('about')}}">關於我</a>
          </li>
          <li class="nav-item @yield('nav_products') px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('products')}}">經歷</a>
          </li>
          <li class="nav-item @yield('nav_store') px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('store')}}">技能</a>
          </li>
          <li class="nav-item @yield('nav_store') px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('login')}}">登入</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>