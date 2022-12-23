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
        <p>Out of unless</p>

@endunless
