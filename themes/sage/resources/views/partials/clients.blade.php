
@php
$args = array(
    'post_type'      => 'clients',
    'posts_per_page' => 10,
);
$posts = new WP_Query( $args );
@endphp

<h4 class="pt-5 border-top text-center">{{__('Нашите клиенти', 'thnw')}}</h4>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @php $counter = 1; @endphp

    <div class="carousel-item text-center @if($counter == 1) active @endif">
    @while ( $posts->have_posts() )
        @php
        $posts->the_post();
        global $post;
        @endphp

        @if( $_image = get_post_thumbnail_id( get_the_ID() ) )
        <a href="{{get_field('page_clients', 'options')}}">
            {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-25 mx-auto h-auto'] ) !!}
        </a>
        @endif

        @if( $counter%3 == 0 && $counter < 6 )
        </div><div class="carousel-item text-center @if($counter == 1) active @endif">
        @endif

        @php $counter++; @endphp

    @endwhile
    </div>

    @php wp_reset_query(); @endphp
  </div>
</div>