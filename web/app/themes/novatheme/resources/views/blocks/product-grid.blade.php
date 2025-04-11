<section class="products-section py-5" id="products">
  <div class="container">
    <h2 class="mb-4">{{ get_field('section_title') ?: 'Our Products' }}</h2>

    <div class="row g-4" id="product-cards">
      @if (have_rows('products'))
        @php $index = 0; @endphp
        @while (have_rows('products')) @php the_row(); @endphp
          @php
            $name = get_sub_field('name');
            $description = get_sub_field('description');
            $image = get_sub_field('image');
            $bg = get_sub_field('background_class');
          @endphp

          <div class="col-12 col-md-6 col-lg-4 d-flex {{ $index >= 3 ? 'd-none extra-product' : '' }}">
            <div class="card h-100 w-100 text-white product-card {{ $bg }}">
              @if ($image)
                <img src="{{ $image['url'] }}" class="card-img-top" alt="{{ $image['alt'] }}">
              @endif
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $name }}</h5>
                <p class="card-text product-description flex-grow-1">
                  {{ $description }}
                </p>
                <a href="#" class="btn btn-light rounded-circle align-self-start mt-3">
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          @php $index++; @endphp
        @endwhile
      @endif
    </div>

    @if (get_field('products') && count(get_field('products')) > 3)
      <div class="text-end mt-4">
        <a href="#" class="btn btn-link show-more-products">Show all</a>
      </div>
    @endif
  </div>
</section>
