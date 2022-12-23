@props(['realEstateObject'])

@php
    $images = $realEstateObject->realEstateObjectImages()->get();
@endphp
<div class="container">
    <div class="row">

<div class="col-md-3 offset-md-4">

<div id="swiper-{{$realEstateObject->id}}" class="swiper swiper-{{$realEstateObject->id}}">
    <div class="swiper-wrapper">
        @unless(count($images) == 0)


            @foreach($images as $image)
                <div class="swiper-slide">
                    <img src="{{asset($image->url)}}" data-id="{{$image->id}}"
                         alt="">
                </div>
            @endforeach

        @else
            <div class="swiper-slide">
                <img src="{{asset($realEstateObject->images)}}" alt="only one image found">
            </div>
        @endunless
    </div>

    <div class="swiper-{{$realEstateObject->id}}-carousel-pagination swiper-pagination"></div>
</div>
</div>
    </div>
</div>
