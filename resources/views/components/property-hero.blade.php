@props(['realEstateObjects'])

@unless(count($realEstateObjects) == 0)

    <div class="intro intro-carousel swiper position-relative">

        <div class="swiper-wrapper">
    @foreach($realEstateObjects as $real_estate_object)
        <x-swiper-index :$real_estate_object/>
    @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>

    @else
    <div class="intro intro-carousel swiper position-relative">

        <div class="swiper-wrapper">
            <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('{{asset($realEstateObject->images)}}')">
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
        </div>
        <div class="swiper-pagination"></div>
    </div>

@endunless
