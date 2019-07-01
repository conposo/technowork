
<div class="container">
  @if( $pages_footer_text = get_field('pages_footer_text') )
    <div class="mb-5 pb-5">{!!$pages_footer_text!!}</div>
  @endif
  @if( in_array(get_the_ID(), get_field('ctas_pages', 'option')) )
    @include('partials.common-ctas')
  @endif
</div>

@if( is_front_page() )
  @include('partials.clients')
@endif

<footer class="pt-4 pb-3 pb-sm-1 _border-top content-info d-flex flex-column">
  <div class="position-relative container d-flex flex-column flex-sm-row justify-content-between align-items-center">
    @php dynamic_sidebar('sidebar-footer') @endphp
    <div class="__w-25 mb-3 mb-sm-0 d-flex justify-content-center justify-content-sm-start">
      <a href="{{ home_url('/') }}" class="brand d-block">
        <img src="@asset('images/TechnoworkLogo.png')" alt="TechnoWork Official Logo">
      </a>
    </div>
    <nav class="nav-footer mb-3 mb-sm-0">
      @if (has_nav_menu('primary_footer'))
        {!! wp_nav_menu(['theme_location' => 'primary_footer', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <div class="__w-25 mb-3 mb-sm-0">
      @if (has_nav_menu('primary_footer_secondary'))
        {!! wp_nav_menu(['theme_location' => 'primary_footer_secondary', 'menu_class' => 'nav d-flex justify-content-center d-flex justify-content-sm-end']) !!}
      @endif
    </div>
  </div>
  <div class="copy text-center">
    © {{date('Y')}} Technowork All Rights Reserved
  </div>
</footer>
