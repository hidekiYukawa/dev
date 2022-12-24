@props(['realEstateObject'])
{{--@php--}}
{{--    $imageURL = '';--}}
{{--$imageString = explode(', ', $real_estate_object->images);--}}
{{--$k = array_rand($imageString);--}}
{{--$v = $imageString[$k];--}}

{{--$imageURL = $v;--}}
{{--@endphp--}}
{{--<div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('{{asset(explode(',', $realEstateObject->images)[0])}}')">--}}
@php
//dd(public_path('uploads').'/');

    $images = $realEstateObject->realEstateObjectImages()->get()->all();

    if (count($images) > 0) {
    	$image = $images[array_rand($images)]->url;
    } else {
    	$image = 'images/no-image.png';
    }
//dd(array_rand($images[]->url));

//$images = array_shift($images);
//$image[] = array_rand($images, 1);

//dd($image);

@endphp
<div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('{{asset($image)}}')">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="intro-body">
                            <p class="intro-title-top">
                                {{ucfirst($realEstateObject->location)}}<br/>
                                {{$realEstateObject->object_type}}
                            </p>
                            <h1 class="intro-title mb-4">{{$realEstateObject->object_title}}</h1>
                            <span class="color-b">
{{--                                    {{$->id}}--}}
                                </span>
                            <p class="intro-subtitle intro-price">
                                <a href="/properties/{{$realEstateObject->id}}">
                                    <span
                                        class="price-a">For {{$realEstateObject->offer_type}} | &euro; {{$realEstateObject->object_price}}
                                    </span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

