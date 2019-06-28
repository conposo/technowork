

<div class="ctas mb-5 pt-5">

  @if( have_rows('section', 'option') )

    @php $counter = 1; @endphp

    @while( have_rows('section', 'option') ) @php the_row(); @endphp

      <div class="row d-flex">
        <div class="col-sm-8 @if(!wp_is_mobile()) @if($counter == 2) ml-auto text-right @else  @endif @else mb-5 @endif">
          <h2 class="@if(!wp_is_mobile()) @if($counter == 2) text-right @else text-left @endif @else text-left @endif">{{get_sub_field('title')}}</h2>
          <p>
            {!!get_sub_field('text')!!}
          </p>
          @if( $cta = get_sub_field('cta') )
            <a class="mt-3 btn-deco btn-sm" href="{{$cta}}">{{__('Виж повече', 'thnw')}}</a>
          @endif
        </div>
      </div>

      @php $counter++; @endphp

    @endwhile

  @else
    // no rows found
  @endif

</div>
