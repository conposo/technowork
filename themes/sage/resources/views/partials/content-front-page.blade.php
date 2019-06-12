
@if( $services )
@php $counter = 1; @endphp

<div class="mb-5 row d-flex align-items-center">
@while( have_rows('services') ) @php the_row(); @endphp

    <div class="col-4 px-5">
        <h2>{{get_sub_field('title')}}</h2>
        <div>
        @if( $_image = get_sub_field('image') )
            {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'w-100 h-auto'] ) !!}
        @endif
        </div>
    </div>

    @php $counter++; @endphp
@endwhile
</div>

@else
    // no rows found
@endif
