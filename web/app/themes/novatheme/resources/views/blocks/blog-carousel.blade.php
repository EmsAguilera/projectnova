<section class="container py-5 blog-section" id="blog">
  <div class="text-center mb-4">
    <h2>{{ get_field('section_title') ?: 'Blog' }}</h2>
    <p class="text-muted">{{ get_field('paragraph_1') }}</p>
    <p class="text-muted">{{ get_field('paragraph_2') }}</p>
  </div>

  <div class="d-flex justify-content-center gap-2 mb-4 flex-wrap blog-filters">
    @php
      $categories = get_field('categories') ?: ['Show All', 'City', 'Forest', 'Water'];
    @endphp
    @foreach ($categories as $cat)
      <button class="btn btn-light rounded-pill px-4 py-2 filter-btn {{ $loop->first ? 'active' : '' }}" data-filter="{{ strtolower($cat) }}">
        {{ $cat }}
      </button>
    @endforeach
  </div>

  <div class="position-relative">
    <button id="scrollLeft" class="btn btn-light position-absolute top-50 start-0 translate-middle-y z-1">
      <i class="bi bi-chevron-left"></i>
    </button>

    <div id="scrollContainer" class="d-flex overflow-auto gap-3 pb-2">
      @if (have_rows('posts'))
        @while (have_rows('posts')) @php the_row(); @endphp
          @php
            $image = get_sub_field('image');
            $title = get_sub_field('title');
          @endphp
          <div class="flex-shrink-0" style="width: 350px;">
            <div class="card border-0" style="width: 350px; height: 450px; overflow: hidden;">
              @if ($image)
                <img src="{{ $image['url'] }}" class="card-img-top object-fit-cover" alt="{{ $image['alt'] }}" style="height: 100%; object-fit: cover;">
              @endif
              <div class="card-body text-center position-absolute bottom-0 start-50 translate-middle-x mb-3">
                <span class="badge bg-light text-dark px-3 py-2 rounded-pill">{{ $title }}</span>
              </div>
            </div>
          </div>
        @endwhile
      @endif
    </div>

    <button id="scrollRight" class="btn btn-light position-absolute top-50 end-0 translate-middle-y z-1">
        <i class="bi bi-chevron-right"></i>
    </button>
  </div>
</section>
