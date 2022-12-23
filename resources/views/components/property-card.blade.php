
@props(['realEstateObject'])
<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$realEstateObject->images ? asset($realEstateObject->images) : asset('images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/properties/{{$realEstateObject->id}}">{{ $realEstateObject['object_title'] }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $realEstateObject->object_price }}</div>
            <x-property-tags :tagsCsv="$realEstateObject->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$realEstateObject->location}}
            </div>
        </div>
    </div>
</x-card>
