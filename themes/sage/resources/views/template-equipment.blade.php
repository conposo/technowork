{{--
  Template Name: Equipment Template
--}}

@extends('layouts.app')

@section('content')

  <div class="container">

    @while(have_posts()) @php the_post() @endphp
      @include('partials.page-header')
      @include('partials.content-page')
    @endwhile

    @include('partials.content-equipment')

  </div>

@endsection
