{{--
  Template Name: Projects Template
--}}

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="container">@include('partials.content-page')</div>
  @endwhile

  <div class="container">
    @include('partials.component-clients-projects', ['post_type' => 'projects', 'post_term' => 'project_cat', 'shadow' => true])
  </div>

@endsection
