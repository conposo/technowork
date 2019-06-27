
@if( in_array(get_the_ID(), get_field('ctas_pages', 'option')) )

  <div class="mb-5 pt-5">

    @if( have_rows('section', 'option') )

      @php $counter = 1; @endphp

      @while( have_rows('section', 'option') ) @php the_row(); @endphp

        <div class="row d-flex">
          <div class="col-6 @if($counter == 2) ml-auto text-right @else  @endif">
            <h2 class="@if($counter == 2) text-right @else text-left @endif">{{get_sub_field('title')}}</h2>
            <p>
              {{get_sub_field('text')}}
              @if( $cta = get_sub_field('cta') )
              <br>
              <a class="mt-3 btn-deco btn-sm" href="{{$cta}}">{{__('Виж повече', 'thnw')}}</a>
              @endif
            </p>
          </div>
        </div>

        @php $counter++; @endphp

      @endwhile

    @else
      // no rows found
    @endif

  </div>

@endif
