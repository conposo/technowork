
<div class="mt-5 py-5 container">

  <div class="mb-sm-5 row">
    <div class="col-md-4 mb-5">
      <h2 class="text-left text-uppercase font-weight-light">{{$title_phone}}</h2>
      <div class="mb-3 h-75 d-flex align-items-center pt-sm-2 mx-auto _shadow">
        <div class="d-flex justify-content-center flex-column">
          <h3>{{$contact_person}}</h3>
          <p class="card-text">
            <a href="{{$gps_coords->gps_coords_cta}}">{{$phone}}</a>
          </p>
          <p class="m-0 pl-0 pr-5 btn-sm font-weight-light">{{$description_phone}}</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-5">
      <h2 class="text-left text-uppercase font-weight-light">{{$title_email}}</h2>
      <div class="mb-3 h-75 d-flex align-items-center pt-sm-2 mx-auto _shadow">
        <div class="d-flex justify-content-center flex-column">
          <p class="card-text">
            <a href="{{$gps_coords->gps_coords_cta}}">{{$email}}</a>
          </p>
          <p class="m-0 pl-0 pr-5 btn-sm font-weight-light">{{$description_email}}</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-5">
      <h2 class="text-left text-uppercase font-weight-light">{{$title_place}}</h2>
      <div class="mb-3 h-75 d-flex align-items-center pt-sm-2 mx-auto _shadow">
        <div class="d-flex justify-content-center flex-column">
          <p class="card-text">
            {{$label_address}}
          </p>
          @php $gps_coords = $gps_coords; @endphp
          @if( $gps_coords )
            <div>
              <h3>{{$gps_coords->label_gps_coords}}</h3>
              <span class="d-block">{{$gps_coords->gps_coords_long}}, {{$gps_coords->gps_coords_lat}}</span>
              <a href="{{$gps_coords->gps_coords_cta}}" class="see-on-map">
                <img src="@asset('images/google_map.png')" alt="">  
                виж в Google Maps
              </a>
            </div>
          @endif
          <p class="m-0 pl-0 pr-5 btn-sm font-weight-light">{{$description_place}}</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="mb-5 pt-5 border-top text-center">
    {!!$text_see_more!!}
    <a class="mt-3 btn btn-deco" href="{{$cta_see_more->url}}" {{$cta_see_more->target}}>{{$cta_see_more->title}}</a>
  </div>

</div>
