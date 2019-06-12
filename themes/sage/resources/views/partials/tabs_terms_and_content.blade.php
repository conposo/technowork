
@if ( $terms )
<div class="{{App\is_hero('container')}}">
      <div>
        <?php foreach( $terms as $term ): ?>
            <a class="d-block" data-href="#<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a>
        <?php endforeach; ?>
      </div>

      <div>
        <?php
        foreach( $terms as $term ):
            $args = array(
                'post_type'      => $post_type,
                'posts_per_page' => 10,
                $post_term            => $term->slug,
                'posts_per_page' => -1
            );
            $posts = new WP_Query( $args );
            ?>
            <h3 class="d-block" data-href="#<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></h3>

            @while ( $posts->have_posts() )
              @php $posts->the_post(); @endphp
              @php
              global $post;
              @endphp
              <div id="{{$post->post_name}}" class="mb-5" style="height: 50vh;">
                <h2>{{the_title()}}</h2>
                {{the_content()}}
              </div>
            @endwhile
            @php wp_reset_query(); @endphp
            <?php
        endforeach;
        ?>
      </div>
</div>
@endif