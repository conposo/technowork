<header class="border-0 @if( ! App\is_hero() ) mb-5 @endif py-4 border-bottom banner">
  <div class="container d-flex _flex-column _flex-sm-row justify-content-between align-items-center">
    <a class="brand" href="{{ home_url('/') }}">
      <img src="@asset('images/TechnoworkLogo.png')" alt="TechnoWork Official Logo">
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>