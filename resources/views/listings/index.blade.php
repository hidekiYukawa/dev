
@props(['realEstateObjects'])

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
    @unless(count($realEstateObjects) == 0)
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
                            @foreach($realEstateObjects as $realEstateObject)
                                {{-- <x-listing-card listing="hello"/> # passing a regular string --}}
                                <x-latest-properties-slider :realEstateObject="$realEstateObject" /> {{--passing a variable with prefix ':listing'--}}

                            @endforeach





                        </div>
                    </div>
                    <div class="property-carousel-pagination carousel-pagination"></div>
                            @else
                                <p>No Real Estate Found.</p>
                            @endunless
                </div>
            </section>

    </x-main>
</x-layout-bare>
