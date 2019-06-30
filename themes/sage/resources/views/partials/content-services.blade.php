
<div class="container">

    <section class="my-3 my-sm-5 py-3 my-sm-5 text-center">
        <figure class="mb-4 mb-lg-5">
        @if( $services_image )
            {!! wp_get_attachment_image( $services_image, 'full', '', ['class' => 'rounded-lg shadow w-100 h-auto'] ) !!}
        @endif
        </figure>
        @if( $services_header )
        <h2 class="">{{$services_header}}</h2>
        @endif
        @if( $services_intro )
        <p class="mx-lg-5 px-3 px-lg-5">{{$services_intro}}</p>
        @endif
    </section>


    @if( $services )
    @php $counter = 1; @endphp

    @while( have_rows('services') ) @php the_row(); @endphp
        <div id="{{get_sub_field('anchor')}}" class="pt-1 pb-3 mb-5 row d-flex flex-column-reverse flex-sm-row _align-items-center">

            <div class="mr-auto col-sm-5">
                @if( $_image = get_sub_field('image') )
                    {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'service-image rounded-lg shadow w-100 h-auto'] ) !!}
                @endif
                @if( App::detect()->isMobile() && !App::detect()->isTablet() && $cta = get_sub_field('link') )
                    <a class="mt-3 btn-deco btn-sm" href="{{$cta}}">{{__('Виж повече', 'thnw')}}</a>
                @endif
            </div>
            <div class="ml-auto col-sm-7">
                <h2 class="text-left">{!!get_sub_field('title')!!}</h2>
                <p>{!!get_sub_field('text')!!}</p>
                @if( (!wp_is_mobile() || App::detect()->isTablet()) && $cta = get_sub_field('link') )
                    <a class="mt-3 btn-deco btn-sm" href="{{$cta}}">{{__('Виж повече', 'thnw')}}</a>
                @endif
            </div>

            @php $counter++; @endphp
        </div>
    @endwhile

    @else
        // no rows found
    @endif

</div>
