
@if( !is_front_page() )
  <div class="@if( App\is_hero() ) my-5 @endif page-header text-center">
    <h1 class="px-3 px-lg-0">{!! App::title() !!}</h1>
  </div>
@endif

@if( in_array(get_the_ID(), get_field('hero_pages', 'option')) )
  @include('partials.common-hero')
@endif
