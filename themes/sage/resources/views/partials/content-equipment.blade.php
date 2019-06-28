
@if( $section )

    @while( have_rows('section') ) @php the_row(); @endphp
        <div class="my-5 py-5 d-flex flex-column align-items-center">

            <div class="mb-5 col text-center">
                @if(get_sub_field('title'))
                    <h2>{{get_sub_field('title')}}</h2>
                @endif
                @if(get_sub_field('text'))
                    <p>{{get_sub_field('text')}}</p>
                @endif
                @if( $_image = get_sub_field('image') )
                    <div>
                        {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-100 h-auto'] ) !!}
                    </div>
                @endif
            </div>

            @if( have_rows('machines') )

                @while( have_rows('machines') ) @php the_row(); @endphp
                <div class="pt-3 mb-5 row d-flex _align-items-center">

                    @if( $_image = get_sub_field('image') )
                        <figure class="col-sm-5">
                            {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'rounded-lg shadow w-100 h-auto'] ) !!}
                        </figure>
                    @endif
                    <div class="col-sm-7">
                        @if(get_sub_field('title'))
                            <h2 class="text-left">{{get_sub_field('title')}}</h2>
                        @endif
                        @if(get_sub_field('text'))
                            <p>{{get_sub_field('text')}}</p>
                        @endif
                        @if( $cta = get_sub_field('cta') )
                            <a class="mt-3 selected btn btn-sm btn-deco" href="{{get_field('page_projects', 'option')}}{{$cta['url']}}" {{$cta['target']}}>{{$cta['title']}}</a>
                        @endif
                    </div>
                    
                </div>
                @endwhile

            @else
                <!-- no rows found -->
            @endif

        </div>
    @endwhile

@else
    <!-- no rows found -->
@endif