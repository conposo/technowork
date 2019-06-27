
@if( !is_front_page() )
  <div class="@if( App\is_hero() ) my-5 @endif page-header text-center">
    <h1>{!! App::title() !!}</h1>
  </div>
@endif

@include('partials.common-hero')
