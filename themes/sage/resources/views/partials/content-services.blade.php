
<div class="container">

    <section class="my-5 text-center">
        <h2 class="">{{$services_header}}</h2>
        <figure>
        @if( $services_image )
            {!! wp_get_attachment_image( $services_image, 'full', '', ['class' => 'border p-1 shadow w-100 h-auto'] ) !!}
        @endif
        </figure>
        <p class="mx-5 px-5">{{$services_intro}}</p>
    </section>


    @if( $services )
    @php $counter = 1; @endphp

    @while( have_rows('services') ) @php the_row(); @endphp
        <div id="{{get_sub_field('anchor')}}" class="pt-1 pb-3 mb-5 row d-flex align-items-center">

            <div class="ml-auto col-4">
                <h2>{{get_sub_field('title')}}</h2>
                <p>{{get_sub_field('text')}}</p>
            </div>
            <div class="mr-auto col-4">
                @if( $_image = get_sub_field('image') )
                    {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'border p-1 shadow w-100 h-auto'] ) !!}
                @endif
            </div>

            @php $counter++; @endphp
        </div>
    @endwhile

    @else
        // no rows found
    @endif

</div>
