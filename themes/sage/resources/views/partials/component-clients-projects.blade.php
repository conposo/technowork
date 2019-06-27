
@if ( $terms )
<div class="my-5 py-5 row">

      <div class="col-3">
        <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
          @php $counter = 1; @endphp
          @foreach( $terms as $term )
            <li class="nav-item">
              <a class="nav-link @if($counter++ == 1) active @endif" id="{{$term->slug}}-tab" data-toggle="tab" href="#{{$term->slug}}" role="tab" aria-controls="{{$term->slug}}" aria-selected="true">{{$term->name}}</a>
            </li>
          @endforeach
        </ul>
      </div>

      <div class="col-9">
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
              <h3 class="pb-3 mb-5 border-bottom d-block"><?php echo $term->name; ?></h3>

              @while ( $posts->have_posts() )
                @php
                $posts->the_post();
                global $post;
                @endphp
                <div id="{{$post->post_name}}" class="mb-5" style="_height: 50vh;">
                  <div class="row">
                    <div class="col-6 d-flex flex-column justify-content-center">
                      <h2>{{the_title()}}</h2>
                      {{the_content()}}
                    </div>
                    <div class="col-6">
                    @if( $_image = get_post_thumbnail_id( get_the_ID() ) )
                    <figure>
                        {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'border p-1 shadow w-100 h-auto'] ) !!}
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