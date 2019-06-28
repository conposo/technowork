
<div class="container">

    <section class="my-5 py-5 text-center">
        <figure class="mb-5">
        @if( $services_image )
            {!! wp_get_attachment_image( $services_image, 'full', '', ['class' => 'rounded-lg shadow w-100 h-auto'] ) !!}
        @endif
        </figure>
        @if( $services_header )
        <h2 class="">{{$services_header}}</h2>
        @endif
        @if( $services_intro )
        <p class="mx-5 px-5">{{$services_intro}}</p>
        @endif
    </section>


    @if( $services )
    @php $counter = 1; @endphp

    @while( have_rows('services') ) @php the_row(); @endphp
        <div id="{{get_sub_field('anchor')}}" class="pt-1 pb-3 mb-5 row d-flex _align-items-center">

            <div class="mr-auto col-5">
                @if( $_image = get_sub_field('image') )
                    {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'rounded-lg shadow w-100 h-auto'] ) !!}
                @endif
            </div>
            <div class="ml-auto col-7">
                <h2 class="text-left">{{get_sub_field('title')}}</h2>
                <p>{{get_sub_field('text')}}</p>
            </div>

            @php $counter++; @endphp
        </div>
    @endwhile

    @else
        // no rows found
    @endif

</div>
