@props(['realEstateObject'])

@php
    /** @var \App\Models\Real_Estate_Object $realEstateObject */
$images = $realEstateObject->realEstateObjectImages()->get();
@endphp



            <div id="swiper-{{$realEstateObject->id}}" class="swiper swiper-{{$realEstateObject->id}}">
                <div class="swiper-wrapper">
                    @unless(count($images) == 0)


                        @foreach($images as $image)
                            <div class="swiper-slide">
                                <img src="{{asset($image->url)}}"
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

