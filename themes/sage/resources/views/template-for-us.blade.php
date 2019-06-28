{{--
  Template Name: For Us Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

  @include('partials.content-for-us')

  <!-- <div class="{{App\is_hero('container')}}">
  </div> -->

@endsection
