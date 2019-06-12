
@if( in_array(get_the_ID(), get_field('hero_pages', 'option')) )
<div>
  <figure>
    @if( $hero_image = get_field('hero_image', 'option') )
      {!! wp_get_attachment_image( $hero_image, 'full', '', ['class' => 'w-50 h-auto'] ) !!}
    @endif
  </figure>
  {!!get_field('hero_heading', 'option')!!}
</div>
@endif
