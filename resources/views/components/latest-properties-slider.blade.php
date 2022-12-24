@props(['realEstateObject'])

@php
    //dd(public_path('uploads').'/');

        $images = $realEstateObject->realEstateObjectImages()->get()->all();

        $image_string = ($images) ? $images[array_rand($images)] : ['id' => 0, 'url' => 'images/logo.png'];

         if (count($images) < 1) {
    	$image = 'images/laravel-logo.png';
    } else {
    	$image = $images[array_rand($images)]->url;
    }
    //dd(array_rand($images[]->url));

    //$images = array_shift($images);
    //$image[] = array_rand($images, 1);

    //dd($image);

@endphp



<div class="carousel-item-b swiper-slide">
    <div class="card-box-a card-shadow">
        <div class="img-box-a">
            <img src="{{asset($image)}}" class="img-a img-fluid">
        </div>
        <div class="card-overlay">
            <div class="card-overlay-a-content">
                <div class="card-header-a">
                    <h2 class="card-title-a">
                        <a href="/properties/{{$realEstateObject->id}}">{{$realEstateObject->object_address_no}} {{ucfirst($realEstateObject->object_address_street)}}
                            <br /> {{ucfirst($realEstateObject->location)}}</a>
                    </h2>
                </div>
                <div class="card-body-a">
                    <div class="price-box d-flex">
                        <span class="price-a">{{ucfirst($realEstateObject->offer_type)}} | &euro; {{($realEstateObject->object_price_POA) ? 'On Request' : $realEstateObject->object_price_POA}}</span>
                    </div>
                    <a href="/properties/{{$realEstateObject->id}}" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                    </a>
                </div>
                <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                        @if (!empty($realEstateObject->area_size))
                        <li>
                            <h4 class="card-info-title">Area</h4>
                            <span>{{$realEstateObject->area_size}}
{{--                            <sup>2</sup>--}}
                          </span>
                        </li>
                        @endif
                        @if (!empty($realEstateObject->numBedrooms))
                        <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>{{$realEstateObject->numBedrooms}}</span>
                        </li>
                        @endif
                        @if (!empty($realEstateObject->numBathrooms))
                        <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>{{$realEstateObject->numBathrooms}}</span>
                        </li>
                        @endif
                        @if (!empty($realEstateObject->numBathrooms))
                        <li>
                            <h4 class="card-info-title">Airco</h4>
                            <span>{{$realEstateObject->airco}}</span>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- End carousel item -->
