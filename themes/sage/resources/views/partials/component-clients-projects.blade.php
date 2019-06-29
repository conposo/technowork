
@if ( $terms )
<div class="my-sm-5 pt-5 pb-0 pb-sm-5">

    <div class="tabs">
      <ul class="nav nav-tabs border-0 w-100 justify-content-center mb-5 py-3 py-sm-5" id="myTab" role="tablist">
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
              @endphp
              <div id="{{$post->post_name}}" class="mb-5 pb-5" style="_height: 50vh;">
                <div class="row">
                  <div class="col-sm-6 d-flex flex-column justify-content-center">
                    <h2 class="text-left">{{the_title()}}</h2>
                    @if(true || !wp_is_mobile())
                      {{the_content()}}
                    @endif
                  </div>
                  <div class="col-sm-6 d-flex flex-column-reverse flex-sm-column">
                    @if(false && wp_is_mobile())
                      {{the_content()}}
                    @endif
                    @if( $_image = get_post_thumbnail_id( get_the_ID() ) )
                    <figure>
                        @php
                        if($shadow)
                        {
                          $classes = 'rounded-lg shadow w-100 h-auto';
                        }
                        else
                        {
                          $classes = 'rounded-lg w-100 h-auto';
                        }
                        @endphp
                        {!! wp_get_attachment_image( $_image, 'full', '', ['class' => $classes] ) !!}
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