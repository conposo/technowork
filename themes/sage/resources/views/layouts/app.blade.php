<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>

    <div class="loading">
      <span class="pulse">
        <img src="@asset('images/large_gears.gif')">
      </span>
    </div>

    <div class="bg-white w-100 position-fixed" style="top:0;bottom:0;z-index: -1;"></div>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap position-relative @if(App\is_hero()) container-fluid p-0 @endif" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp

  </body>
</html>