
<div class="container">

  <p class="m-5 px-5 text-center">
  {{$intro}}
  </p>

  @if( have_rows('presentation') )
      @php $counter = 1; @endphp

    @while ( have_rows('presentation') ) @php the_row(); @endphp
      <div class="mb-5 row d-flex align-items-center @if($counter == 2) flex-row-reverse @endif">

        <div class="col-6">
          <div>
            @if( $_image = get_sub_field('image') )
              {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'border p-1 shadow w-100 h-auto'] ) !!}
            @endif
          </div>
        </div>

        <div class="col-6 @if($counter == 2) pl-5 @else pr-5 @endif">
          <div class="@if($counter == 2) ml-5 text-right @else mr-5 @endif">
            {{get_sub_field('text')}}
          </div>
        </div>

      </div>
      @php $counter++; @endphp
    @endwhile

  @else
      // no rows found
  @endif


  <section class="border-top border-bottom my-5 py-5 row d-flex align-items-center">
    <div class="col-7 pl-5">
      <div class="pl-5">
        <h2>{{$title}}</h2>
        <p>{{$text}}</p>
      </div>
    </div>
    <div class="col-4 pr-5">
    @if( $image )
      {!! wp_get_attachment_image( $image, 'full', '', ['class' => 'shadow-sm d-block w-100 h-auto'] ) !!}
    @endif
    </div>
  </section>

</div>
