@props(['realEstateObject'])

@php
    $images = $realEstateObject->realEstateObjectImages()->get();
@endphp



<div id="swiper-modal-{{$realEstateObject->id}}" class="swiper">
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


<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-pagination"></div>
</div>

