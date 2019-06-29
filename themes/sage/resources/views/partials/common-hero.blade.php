
<div class="position-relative hero slide">

  <figure class="mb-0">
    @if( $hero_image = get_field('hero_image', 'option') )
      {!! wp_get_attachment_image( $hero_image, 'full', '', ['class' => 'w-100 h-auto'] ) !!}
    @endif
  </figure>

  <div class="pl-0 container">
    <h1>
      {!!get_field('hero_heading', 'option')!!}
      @if( is_front_page() )
        <a href="{{get_field('page_services', 'option')}}" class="btn-deco mt-5">{{__('Виж повече', 'thnw')}}</a>
      @endif
    </h1>
  </div>

  @if( is_front_page() )
    <a href="#services" class="scroll-down next-slide"><span class="bounce"></span></a>
  @endif

</div>
