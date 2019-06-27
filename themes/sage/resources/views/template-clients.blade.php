{{--
  Template Name: Clients Template
--}}

@extends('layouts.app')

@section('content')

  <div class="container">
  
    @while(have_posts()) @php the_post() @endphp
      @include('partials.page-header')
      @include('partials.content-page')
    @endwhile

    @include('partials.component-clients-projects', ['post_type' => 'clients', 'post_term' => 'client_cat'])
    
  </div>

@endsection
