
<section>
    <h2 class="_position-absolute">{{$services_header}}</h2>
    <figure>
    @if( $services_image )
        {!! wp_get_attachment_image( $services_image, 'full', '', ['class' => 'w-100 h-auto'] ) !!}
    @endif
    </figure>
    <p>{{$services_intro}}</p>
</section>


@if( $services )
@php $counter = 1; @endphp

@while( have_rows('services') ) @php the_row(); @endphp
    <div class="bg-info pt-1 pb-3 mb-5 row d-flex align-items-center">

    <div class="col">
        <h2>{{get_sub_field('title')}}</h2>
        <p>{{get_sub_field('text')}}</p>
        <div>
        @if( $_image = get_sub_field('image') )
            {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-100 h-auto'] ) !!}
        @endif
        </div>
    </div>

    @php $counter++; @endphp
    </div>
@endwhile

@else
    // no rows found
@endif
