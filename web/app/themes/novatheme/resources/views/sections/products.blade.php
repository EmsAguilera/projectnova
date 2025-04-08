<section class="products-section py-5" id="products">
  <div class="container">
    <h2 class="mb-4">Our Products</h2>

    <div class="row g-4" id="product-cards">
      @foreach ($products as $index => $product)
        <div class="col-12 col-md-6 col-lg-4 d-flex {{ $index >= 3 ? 'd-none extra-product' : '' }}">
          <div class="card h-100 w-100 text-white product-card {{ $product['bg'] }}">
            <img src="@asset('images/' . $product['image'])" class="card-img-top" alt="{{ $product['name'] }}">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $product['name'] }}</h5>
              <p class="card-text product-description flex-grow-1">
                {{ $product['description'] }}
              </p>
              <a href="#" class="btn btn-light rounded-circle align-self-start mt-3">
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    @if ($products->count() > 3)
      <div class="text-end mt-4">
        <a href="#" class="btn btn-link show-more-products">Show all</a>
      </div>
    @endif
  </div>
</section>