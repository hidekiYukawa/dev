@props(['REO'])

@php
    $images = $REO->realEstateObjectImages()->get();
    @endphp


{{--            {{dd($images)}}--}}
@unless(count($images) == 0)

<div class="col-md-4">
    <div class="card-box-a card-shadow">
        <div class="img-box-a">
            <img src="{{asset($REO->images)}}" alt="" class="img-a img-fluid">
        </div>
        <div class="card-overlay">
            <div class="card-overlay-a-content">
                <div class="card-header-a">
                    <h2 class="card-title-a">
                        <a href="/properties/{{$REO->id}}">{{$REO->object_address_no}} {{$REO->object_address_street}}
                            <br /> {{$REO->object_title}}</a>
                    </h2>
                </div>
                <div class="card-body-a">
                    <div class="price-box d-flex">
                        <span class="price-a">{{$REO->offer_type}} | &euro; {{(number_format(floatval($REO->object_price))) ?: ''}}</span>
                    </div>
                    <a href="/properties/{{$REO->id}}" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                    </a>
                </div>
                <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                        <li>
                            <h4 class="card-info-title">Area</h4>
                            <span>{{$REO->area_size}}
                                {{--                            <sup>2</sup>--}}
                          </span>
                        </li>
                        @if (!empty($REO->numBedrooms))
                            <li>
                                <h4 class="card-info-title">Beds</h4>
                                <span>{{$REO->numBedrooms}}</span>
                            </li>
                        @endif
                        @if (!empty($REO->numBathrooms))
                            <li>
                                <h4 class="card-info-title">Baths</h4>
                                <span>{{$REO->numBathrooms}}</span>
                            </li>
                        @endif
                        @if (!empty($REO->numBathrooms))

                            <li>
                                <h4 class="card-info-title">Airco</h4>
                                <span>{{$REO->airco}}</span>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    @else
    <div class="col-md-4">
        <div class="card-box-a card-shadow">
            <div class="img-box-a">
                <img src="{{asset($REO->images)}}" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
                <div class="card-overlay-a-content">
                    <div class="card-header-a">
                        <h2 class="card-title-a">
                            <a href="/properties/{{$REO->id}}">{{$REO->object_address_no}} {{$REO->object_address_street}}
                                <br /> {{$REO->object_title}}</a>
                        </h2>
                    </div>
                    <div class="card-body-a">
                        <div class="price-box d-flex">
                            <span class="price-a">{{$REO->offer_type}} | &euro; {{(number_format(floatval($REO->object_price))) ?: ''}}</span>
                        </div>
                        <a href="property-single.html" class="link-a">Click here to view
                            <span class="bi bi-chevron-right"></span>
                        </a>
                    </div>
                    <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                            <li>
                                <h4 class="card-info-title">Area</h4>
                                <span>{{$REO->area_size}}
                                    {{--                            <sup>2</sup>--}}
                          </span>
                            </li>
                            @if (!empty($REO->numBedrooms))
                                <li>
                                    <h4 class="card-info-title">Beds</h4>
                                    <span>{{$REO->numBedrooms}}</span>
                                </li>
                            @endif
                            @if (!empty($REO->numBathrooms))
                                <li>
                                    <h4 class="card-info-title">Baths</h4>
                                    <span>{{$REO->numBathrooms}}</span>
                                </li>
                            @endif
                            @if (!empty($REO->numBathrooms))

                                <li>
                                    <h4 class="card-info-title">Airco</h4>
                                    <span>{{$REO->airco}}</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endunless
