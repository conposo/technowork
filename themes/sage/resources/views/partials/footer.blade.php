
<div class="{{App\is_hero()}}">
  @include('partials.common-ctas')
</div>

<footer class="content-info">
  <div class="container d-flex justify-content-between">
    @php dynamic_sidebar('sidebar-footer') @endphp
    <div>
      {{ get_bloginfo('name', 'display') }} © {{date('Y')}}
    </div>
    <nav class="nav-footer">
      @if (has_nav_menu('primary_footer'))
        {!! wp_nav_menu(['theme_location' => 'primary_footer', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</footer>
