
<div class="pt-3 pt-lg-5 container">

  @if( have_rows('presentation') )
      @php $counter = 1; @endphp

    @while ( have_rows('presentation') ) @php the_row(); @endphp
      <div class="my-3 my-lg-5 py-3 py-lg-5 row d-flex _align-items-center @if($counter == 2) flex-row-reverse @endif">

        <div class="col-lg-5 col-xl-4 mb-3 mb-sm-5 mb-lg-0">
          <div>
            @if( $_image = get_sub_field('image') )
              {!! wp_get_attachment_image( $_image, 'full', '', ['class' => 'shadow rounded-lg w-100 h-auto'] ) !!}
            @endif
          </div>
        </div>

        <div class="col-lg-7 @if($counter == 2) mr-auto pr-sm-5 @else ml-auto @endif">
          <div class="@if($counter == 2) @else mr-sm-5 @endif">
            {!!get_sub_field('text')!!}
          </div>
        </div>

      </div>
      @php $counter++; @endphp
    @endwhile

  @else
      // no rows found
  @endif


  <section class="certificate my-5 py-5 row d-flex align-items-center">
    <div class="col-sm-7 _pl-5">
      <div class="@if(wp_is_mobile()) text-center @else pr-5 @endif">
        <h2 class="@if(!wp_is_mobile()) text-left @endif">{{$title}}</h2>
        <p>{{$text}}</p>
      </div>
    </div>
    <div class="col-8 mx-auto col-sm-5 _pr-5">
    @if( $image )
      {!! wp_get_attachment_image( $image, 'full', '', ['class' => 'shadow w-100 h-auto'] ) !!}
    @endif
    </div>
  </section>

</div>
