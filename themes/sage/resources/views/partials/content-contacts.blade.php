
<div class=" text-center mt-5 py-5 container">

  <div class="mb-5 py-5 row">
    
    <div class="col-4">
      <h5 class="text-uppercase font-weight-light card-title">{{$title_phone}}</h5>
      <div class="card h-75 mx-auto bg-info border p-1 shadow" style="width: 18rem;">
        <div class="border bg-white d-flex justify-content-center flex-column card-body">
          <h3>{{$contact_person}}</h3>
          <p class="card-text">
            <a href="{{$gps_coords->gps_coords_cta}}">{{$phone}}</a>
          </p>
        </div>
      </div>
      <p class="mt-2 btn-sm font-weight-light">{{$description_phone}}</p>
    </div>

    <div class="col-4">
      <h5 class="text-uppercase font-weight-light card-title">{{$title_email}}</h5>
      <div class="card h-75 mx-auto bg-info border p-1 shadow" style="width: 18rem;">
        <div class="border bg-white d-flex justify-content-center flex-column card-body">
          <p class="card-text">
            <a href="{{$gps_coords->gps_coords_cta}}">{{$email}}</a>
          </p>
        </div>
      </div>
      <p class="mt-2 btn-sm font-weight-light">{{$description_email}}</p>
    </div>
    
    <div class="col-4">
      <h5 class="text-uppercase font-weight-light card-title">{{$title_place}}</h5>
      <div class="card h-75 mx-auto bg-info border p-1 shadow" style="width: 18rem;">
        <div class="border bg-white d-flex justify-content-center flex-column card-body">
          <p class="card-text">
            {{$label_address}}
          </p>
          @php $gps_coords = $gps_coords; @endphp
          @if( $gps_coords )
            <div>
              <h3>{{$gps_coords->label_gps_coords}}</h3>
              <span class="d-block">{{$gps_coords->gps_coords_long}}, {{$gps_coords->gps_coords_lat}}</span>
              <a href="{{$gps_coords->gps_coords_cta}}">виж в Google Maps ></a>
            </div>
          @endif
        </div>
      </div>
      <p class="mt-2 btn-sm font-weight-light">{{$description_place}}</p>
    </div>
    
  </div>

  
  <div class="mb-5 pt-5 border-top">
    {!!$text_see_more!!}
    <br>
    <a class="mt-3 btn py-1 px-4 btn-outline-info" href="{{$cta_see_more->url}}" {{$cta_see_more->target}}>{{$cta_see_more->title}}</a>
  <?php
    // dd();
  ?>
  </div>

</div>
