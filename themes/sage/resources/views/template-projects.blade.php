{{--
  Template Name: Projects Template
--}}

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="m-5 px-5">@include('partials.content-page')</div>
  @endwhile

  <div class="container">
    @include('partials.component-clients-projects', ['post_type' => 'projects', 'post_term' => 'project_cat'])
  </div>

@endsection
