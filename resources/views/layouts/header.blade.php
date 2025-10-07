<header id="header" class="header d-flex align-items-center position-relative">
  <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

    <a href="{{ route('home') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('assets/img/logo-digclo.png') }}" alt="Logo Digclo">
      <h1 class="sitename">Digclo</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ route('home') }}#hero" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
        <li><a href="{{ route('home') }}#about">Tentang</a></li>
        <li><a href="{{ route('home') }}#services">Layanan</a></li>
        <li><a href="{{ route('home') }}#portfolio">Portofolio</a></li>
        <li><a href="{{ route('home') }}#team">Tim</a></li>
        <li><a href="{{ route('home') }}#contact">Kontak</a></li>
      </ul>
    </nav>

    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

  </div>
</header>