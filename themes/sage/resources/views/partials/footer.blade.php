
<div class="container">
  @if( $pages_footer_text = get_field('pages_footer_text') )
    <div class="mb-5">{!!$pages_footer_text!!}</div>
  @endif
  @include('partials.common-ctas')
</div>

@if( is_front_page() )
  @include('partials.clients')
@endif

<footer class="pt-4 pb-1 _border-top content-info d-flex flex-column align-items-center">
  <div class="container d-flex justify-content-between align-items-center">
    @php dynamic_sidebar('sidebar-footer') @endphp
    <div class="__w-25">
      <span class="brand d-block">
        <img src="@asset('images/TechnoworkLogo.png')" alt="TechnoWork Official Logo">
      </span>
    </div>
    <nav class="nav-footer">
      @if (has_nav_menu('primary_footer'))
        {!! wp_nav_menu(['theme_location' => 'primary_footer', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <div class="__w-25">
      @if (has_nav_menu('primary_footer_secondary'))
        {!! wp_nav_menu(['theme_location' => 'primary_footer_secondary', 'menu_class' => 'nav d-flex justify-content-center d-flex justify-content-sm-end']) !!}
      @endif
    </div>
  </div>
  <div class="copy text-center">
    © {{date('Y')}} Technowork All Rights Reserved
  </div>
</footer>
