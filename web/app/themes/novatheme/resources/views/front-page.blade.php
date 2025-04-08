@extends('layouts.app')

@section('content')
  @include('sections.hero')
  @include('sections.products')
  @include('sections.blog')
  @include('sections.about')
  <div class="text-center py-3">
    <a href="#top" class="btn btn-light border rounded-circle shadow-sm">
      <i class="bi bi-chevron-up"></i>
    </a>
  </div>
@endsection
