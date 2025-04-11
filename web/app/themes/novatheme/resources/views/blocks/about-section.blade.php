<section id="about" class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Text Column -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="fw-bold">{{ get_field('title') }}</h2>
        <p class="text-muted">
          {{ get_field('description') }}
        </p>
        <a href="{{ get_field('button_link') }}" class="btn btn-dark rounded-pill px-4">
          {{ get_field('button_label') }}
        </a>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6">
        @php $image = get_field('image'); @endphp
        @if ($image)
          <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="img-fluid rounded-3 shadow-sm">
        @endif
      </div>
    </div>
  </div>
</section>
