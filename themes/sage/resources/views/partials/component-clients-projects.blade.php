
@if ( $terms )
<div class="my-sm-5 pt-5 pb-0 pb-sm-5">

    <div class="mt-0 mt-sm-5 tabs position-sticky" style="top:0;z-index:99;">
      <ul class="nav nav-tabs border-0 w-100 justify-content-center mb-5 py-3 pb-md-5" id="myTab" role="tablist">
        @php $counter = 1; @endphp
        @foreach( $terms as $term )
          <li class="nav-item border-0">
            <a class="border-0 bg-transparent nav-link @if($counter++ == 1) active @endif" id="{{$term->slug}}-tab" data-toggle="tab" href="#{{$term->slug}}" role="tab" aria-controls="{{$term->slug}}" aria-selected="true">{{$term->name}}</a>
          </li>
        @endforeach
      </ul>
    </div>

    <div class="">
      <div class="tab-content" id="myTabContent">
        @php $counter = 1; @endphp
        @foreach( $terms as $term )
          @php
          $args = array(
              'post_type'      => $post_type,
              'posts_per_page' => 10,
              $post_term            => $term->slug,
              'posts_per_page' => -1
          );
          $posts = new WP_Query( $args );
          @endphp
          <div class="tab-pane fade @if($counter++ == 1) show active @endif" id="{{$term->slug}}" role="tabpanel" aria-labelledby="{{$term->slug}}-tab">

            @while ( $posts->have_posts() )
              @php
              $posts->the_post();
              global $post;

              $gallery_images = get_field('gallery', get_the_ID());
              ($gallery_images) ? $counter = count($gallery_images) : $counter = 0 ;
              @endphp
              <div id="{{$post->post_name}}" class="mb-5 pb-5" style="_height: 50vh;">
                <div class="row">
                  <div class="col-sm-6 d-flex flex-column justify-content-center">
                    <h2 class="text-left">{{the_title()}}</h2>
                    @if(true || !wp_is_mobile())
                      {{the_content()}}
                    @endif
                  </div>
                  <div class="col-sm-6 d-flex flex-column-reverse flex-sm-column justify-content-center">
                    @if(false && wp_is_mobile())
                      {{the_content()}}
                    @endif
                    @if( $_image = get_post_thumbnail_id( get_the_ID() ) )
                    @php $rand = rand(); @endphp
                    <figure id="figure_{{$rand}}" class="mb-0 @if($shadow) shadow @endif">
                      <script>
                      $(document).ready(function(){
                        var isInViewport = function (elem) {
                            var bounding = elem.getBoundingClientRect();
                            return (
                                bounding.top >= 0 &&
                                bounding.left >= 0 &&
                                bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                                bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
                            );
                        };

                        var el = document.querySelector('#figure_{{$rand}}');
                        $(window).scroll(function() { //when window is scrolled
                          if (isInViewport(el)) {
                            $('#figure_{{$rand}} .see_more_images').addClass('opacity1');
                          } else {
                            $('#figure_{{$rand}} .see_more_images').removeClass('opacity1');
                          }
                        });
                        
                        $('#lightgallery_{{$rand}}').lightGallery({
                          download: false,
                          loop: false,
                          hideControlOnEnd: true,
                        });
                        $('.see_more_images_{{$rand}}').on('click', function() {
                          $('#lightgallery_{{$rand}} a:first-child').trigger('click');
                        });
                      })
                      </script>
                      <div id="lightgallery_{{$rand}}">
                        <a class="unique" style="z-index:{{count($gallery_images)+1}};" data-src="{{wp_get_attachment_image_src($_image, 'full')[0]}}">{!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'rounded-lg w-100 h-100'] ) !!}</a>
                        @if( $gallery_images )
                            @foreach( $gallery_images as $image )
                              <a style="z-index:{{ (count($gallery_images) - (count($gallery_images) - --$counter)) }};" data-src="{{$image['url']}}">{!! wp_get_attachment_image( $image['id'], 'full', '', ['class' => 'rounded-lg w-100 h-100'] ) !!}</a>
                            @endforeach
                            </div>
                            <div class="see_more_images see_more_images_{{$rand}}"><span>{{__('виж повече', 'thnw')}}</span></div>
                        @else
                          </div>
                          <div class="see_more_images see_more_images_{{$rand}}"><span>{{__('виж повече', 'thnw')}}</span></div>
                        @endif
                    </figure>
                    @endif
                  </div>
                </div>
              </div>
            @endwhile
          </div>
          @php wp_reset_query(); @endphp
        @endforeach
      </div>
    </div>
</div>
@endif
