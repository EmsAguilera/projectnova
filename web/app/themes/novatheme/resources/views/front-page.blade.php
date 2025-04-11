@extends('layouts.app')

@section('content')
  @php(the_content())

  <div class="text-center py-3">
    <a href="#top" class="btn btn-light border rounded-circle shadow-sm">
      <i class="bi bi-chevron-up"></i>
    </a>
  </div>
@endsection
