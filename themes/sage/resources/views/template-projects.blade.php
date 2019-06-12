{{--
  Template Name: Projects Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

  @include('partials.tabs_terms_and_content', ['post_type' => 'projects', 'post_term' => 'project_cat'])

@endsection
