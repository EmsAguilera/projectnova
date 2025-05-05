<div class="text-center py-3">
    <a href="#top" class="btn btn-light border rounded-circle shadow-sm">
      <i class="bi bi-chevron-up"></i>
    </a>
  </div>
<footer class="bg-light pt-5 pb-3 mt-5">
  <div class="container">
    <div class="row d-none d-md-flex">

      <div class="col-md-3 mb-4">
        <h6 class="fw-bold">{{ get_field('company_name') }}</h6>
        <p class="mb-1">{!! nl2br(get_field('company_address')) !!}</p>
        <p class="mb-1">Telefon: {{ get_field('phone') }}</p>
        <p class="mb-3">Telefax: {{ get_field('fax') }}</p>
        <a href="{{ get_field('contact_button_url') }}" class="btn btn-dark btn-sm rounded-pill">
          {{ get_field('contact_button_text') }}
        </a>
      </div>

      @php $groups = ['corporate_links', 'product_links', 'service_links']; @endphp
      @foreach ($groups as $group)
        <div class="col-md-3 mb-4">
          <h6 class="fw-bold">{{ ucfirst(str_replace('_', ' ', str_replace('_links', '', $group))) }}</h6>
          <ul class="list-unstyled">
            @if (have_rows($group))
              @while (have_rows($group)) @php the_row(); @endphp
                <li>
                  <a href="{{ get_sub_field('url') }}" class="text-decoration-none text-muted">
                    {{ get_sub_field('label') }}
                  </a>
                </li>
              @endwhile
            @endif
          </ul>
        </div>
      @endforeach

    </div>

    <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-between align-items-center mt-4 border-top pt-3">
      <small>© {{ date('Y') }} {{ get_field('company_name') }}</small>
      <div class="text-center text-md-start">
        <a href="#" class="text-muted text-decoration-none me-3">Impressum</a>
        <a href="#" class="text-muted text-decoration-none">Datenschutz</a>
      </div>
    </div>
  </div>
</footer>
