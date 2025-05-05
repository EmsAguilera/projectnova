@php
  $logo = get_field('logo', 'option');
  $brand = get_field('brand_name', 'option');
  $navLinks = get_field('nav_links', 'option');
@endphp

<header class="hero-header position-relative">
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm py-3">
    <div class="container">
      <a class="navbar-brand fw-bold text-success d-flex align-items-center" href="#">
        @if ($logo)
          <img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" width="40" class="me-2">
        @endif
        {{ $brand }}
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
        <ul class="navbar-nav gap-4">
          @if ($navLinks)
            @foreach ($navLinks as $link)
              <li class="nav-item">
                <a class="nav-link" href="{{ $link['url'] }}">{{ $link['label'] }}</a>
              </li>
            @endforeach
          @endif
        </ul>
      </div>
    </div>
  </nav>
</header>
