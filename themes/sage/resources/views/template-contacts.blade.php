{{--
  Template Name: Contacts Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

  <div class="mb-5 row">
    
    <div class="col-4">
      <h5 class="card-title">{{$title_phone}}</h5>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h3>{{$contact_person}}</h3>
          <p class="card-text">
            <a href="{{$gps_coords->gps_coords_cta}}">{{$phone}}</a>
          </p>
        </div>
      </div>
      <p>{{$description_phone}}</p>
    </div>

    <div class="col-4">
      <h5 class="card-title">{{$title_email}}</h5>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <p class="card-text">
            <a href="{{$gps_coords->gps_coords_cta}}">{{$email}}</a>
          </p>
        </div>
      </div>
      <p>{{$description_email}}</p>
    </div>
    
    <div class="col-4">
      <h5 class="card-title">{{$title_place}}</h5>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <p class="card-text">
            {{$label_address}}
          </p>
          @php $gps_coords = $gps_coords; @endphp
          @if( $gps_coords )
            <div>
              <h3>{{$gps_coords->label_gps_coords}}</h3>
              <span class="d-block">{{$gps_coords->gps_coords_long}}, {{$gps_coords->gps_coords_lat}}</span>
              <a href="{{$gps_coords->gps_coords_cta}}">виж в Google Maps ></a>
            </div>
          @endif
        </div>
      </div>
      <p>{{$description_place}}</p>
    </div>
    
  </div>

  
  <div>
  {{$text_see_more}}
  <a href="{{$cta_see_more->url}}" {{$cta_see_more->target}}>{{$cta_see_more->title}}</a>
  <?php
    // dd();
  ?>
  </div>

@endsection
