
@if( $services )

    @php $counter = 1; @endphp

    <div id="services" class="mt-5">

        <div class="mb-5 text-center">
            <h2 class="">{{ $services_title }}</h2>
            <p>{{ $services_short_description }}</p>
        </div>

        <div class="d-none row d-sm-flex align-items-center">
        @while( have_rows('services') ) @php the_row(); @endphp
            <div class="col-4 text-center">
                <h3>{!!get_sub_field('title')!!}</h3>
            </div>
        @endwhile
        </div>
    </div>

    <div class="mb-5 row d-flex">
    @while( have_rows('services') ) @php the_row(); @endphp

        <div class="mb-5 col-12 col-sm-4 text-center">
            <h3 class="d-sm-none">{!!get_sub_field('title')!!}</h3>
            <div class="mb-3 rounded shadow">
                @if( $_image = get_sub_field('image') )
                    {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-100 h-auto'] ) !!}
                @endif
            </div>
            <div class="position-relative">
                @if( $cta = get_sub_field('cta') )
                    <a class="btn-deco" href="{{get_field('page_services', 'option')}}/#{{$cta}}">{{__('Виж повече', 'thnw')}}</a>
                @endif
            </div>
        </div>

        @php $counter++; @endphp
    @endwhile
    </div>

@else
    <!-- no rows found -->
@endif
