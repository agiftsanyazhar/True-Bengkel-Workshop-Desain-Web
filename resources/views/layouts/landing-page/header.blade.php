{{-- Header --}}
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="{{ route('landing-page.index') }}" class="logo">
      <h1>True Bengkel</h1>
    </a>

    {{-- Navbar --}}
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{ url()->route('landing-page.index') . '#hero' }}" class="active">Home</a></li>
        <li><a href="{{ url()->route('landing-page.index') . '#products' }}">Products</a></li>
        <li><a href="{{ url()->route('landing-page.index') . '#customer-service' }}">Customer Service</a></li>
        <li><a href="{{ url()->route('landing-page.index') . '#gallery' }}">Gallery</a></li>
        <li><a href="{{ url()->route('landing-page.index') . '#contact' }}">Contact</a></li>
        <li class="text-center">
          <div class="btn-group" role="group">
            <a href="javascript:void(0)"><i class="bi bi-search"></i></a>
            <a href="javascript:void(0)"><i class="bi bi-cart"></i></a>
          </div>
        </li>
        <li class="text-center">
          <div class="btn-group" role="group">
            <a class="btn-login" href="javascript:void(0)">Surabaya</a>
            <a class="btn-login" href="javascript:void(0)">Login</a>
          </div>
        </li>
      </ul>
    </nav>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header>