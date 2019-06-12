
@if( $section )
    @php $counter = 1; @endphp

    @while( have_rows('section') ) @php the_row(); @endphp
        <div class="row d-flex align-items-center">

        <div class="col">
            <h2>{{get_sub_field('title')}}</h2>
            <p>{{get_sub_field('text')}}</p>
            <div>
            @if( $_image = get_sub_field('image') )
                {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-100 h-auto'] ) !!}
            @endif
            </div>
        </div>

        @if( have_rows('machines') )

            @while( have_rows('machines') ) @php the_row(); @endphp
            <div class="border pt-3 mb-5 row d-flex align-items-center">

                <div class="col">
                <figure>
                    @if( $_image = get_sub_field('image') )
                    {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-25 h-auto'] ) !!}
                    @endif
                </figure>
                <h2>{{get_sub_field('title')}}</h2>
                <p>
                    {{get_sub_field('text')}}
                    @if( $cta = get_sub_field('cta') )
                    <a class="d-block" href="{{get_site_url()}}/проекти/{{$cta['url']}}" {{$cta['target']}}>{{$cta['title']}}</a>
                    @endif
                </p>
                </div>

                @php $counter++; @endphp
            </div>
            @endwhile

        @else
            // no rows found
        @endif

        @php $counter++; @endphp
        </div>
    @endwhile

@else
    <!-- no rows found -->
@endif