
@if( in_array(get_the_ID(), get_field('ctas_pages', 'option')) )
  <div>
    @if( have_rows('section', 'option') )
      @php $counter = 1; @endphp

      <div class="border pt-3 mb-5 row d-flex align-items-center">
        @while( have_rows('section', 'option') ) @php the_row(); @endphp

          <div class="col-6">
            <h2>{{get_sub_field('title')}}</h2>
            <p>
              {{get_sub_field('text')}}
              @if( $cta = get_sub_field('cta') )
              <a class="d-block" href="{{$cta}}">{{__('See more', 'thnw')}}</a>
              @endif
            </p>
          </div>

          @php $counter++; @endphp
        @endwhile
      </div>

    @else
      // no rows found
    @endif
  </div>
@endif
