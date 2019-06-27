
@if( $section )

    @while( have_rows('section') ) @php the_row(); @endphp
        <div class="my-5 py-5 row d-flex align-items-center">

            <div class="mb-5 col text-center">
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
                <div class="border shadow pt-3 mb-5 row d-flex align-items-center">

                    <div class="col-7">
                        <h2>{{get_sub_field('title')}}</h2>
                        <p>
                            {{get_sub_field('text')}}
                            @if( $cta = get_sub_field('cta') )
                                <br>
                                <a class="mt-3 btn btn-sm btn-outline-info" href="{{get_field('page_projects', 'option')}}{{$cta['url']}}" {{$cta['target']}}>{{$cta['title']}}</a>
                            @endif
                        </p>
                    </div>
                    <figure class="col-5">
                        @if( $_image = get_sub_field('image') )
                        {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'border p-1 w-100 h-auto'] ) !!}
                        @endif
                    </figure>
                    
                </div>
                @endwhile

            @else
                // no rows found
            @endif

        </div>
    @endwhile

@else
    <!-- no rows found -->
@endif