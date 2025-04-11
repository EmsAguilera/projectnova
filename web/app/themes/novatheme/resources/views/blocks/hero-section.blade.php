@php
  $bg = get_field('background_image');
  $style = $bg ? "style=\"background: url('{$bg['url']}') center center / cover no-repeat; min-height: 100vh;\"" : '';
@endphp

<div class="hero-section d-flex align-items-center justify-content-center text-center text-white" {!! $style !!}>
  <div class="container">
    <h1 class="display-4 fw-bold">{!! nl2br(e(get_field('title'))) !!}</h1>
    <p class="lead mb-4">{!! nl2br(e(get_field('subtitle'))) !!}</p>
    <a href="{{ get_field('button_link') }}" class="btn btn-light rounded-pill px-4 py-2 fw-semibold">
      {{ get_field('button_label') }}
    </a>
  </div>
</div>
