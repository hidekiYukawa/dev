
@props(['realEstateObjeçcts'])

<x-layout-bare>
    @include('partials._custom-nav')

    <x-main>
        <x-property-hero :$realEstateObjects/>
        @include('partials._search-property');






                {{-- @foreach($listings as $listing)  --}}
                {{-- <h2>
                    <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
                </h2>
                <p>
                    {{$listing['description']}}
                </p> --}}



                <!-- ======= Latest Properties Section ======= -->
                    <section style="background-color: white; background-image: none;" class="section-property section-t8">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="title-wrap d-flex justify-content-between">
                                        <div class="title-box">
                                            <h2 class="title-a">Latest Properties</h2>
                                        </div>
                                        <div class="title-link">
                                            <a href="/properties/grid">All Property
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="property-carousel" class="swiper">
                                <div class="swiper-wrapper">
                            @unless(count($realEstateObjects) == 0)
                @foreach($realEstateObjects as $realEstateObject)
                    {{-- <x-listing-card listing="hello"/> # passing a regular string --}}
                    <x-latest-properties-slider :realEstateObject="$realEstateObject" /> {{--passing a variable with prefix ':listing'--}}

                @endforeach


            @else
                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="assets/img/property-6.jpg" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="property-single.html">206 Mount
                                                    <br /> Olive Road Two</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">rent | $ 12.000</span>
                                            </div>
                                            <a href="#" class="link-a">Click here to view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Area</h4>
                                                    <span>340m
                            <sup>2</sup>
                          </span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Beds</h4>
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Baths</h4>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Garages</h4>
                                                    <span>1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->
                    @endunless
        </div>
                            </div>
                            <div class="propery-carousel-pagination carousel-pagination"></div>

                        </div>
                    </section>

    </x-main>
</x-layout-bare>
