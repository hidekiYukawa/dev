<x-property-show-layout :$realEstateObject>
{{--    <x-modal :$listing/>--}}
    @include('partials._custom-nav')

    {{--    @include('partials._search')--}}
    <x-main>
        <div class="container">
        <x-card class="p-10 md-4 w-full mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">Edit Real Estate Object</h2>
                <p class="mb-4">Edit: {{$realEstateObject->object_title}}</p>
            </header>

            <form method="POST" action="/properties/{{$realEstateObject->id}}" enctype="multipart/form-data">
                @csrf {{--DO THIS IN ANY POST FORM! --}}
                @method('PUT')
                <div class="mb-6">
                    <label for="object_title" class="inline-block text-lg mb-2">Title</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_title"
                           value="{{$realEstateObject->object_title}}"/>

                    @error('object_title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tags" class="inline-block text-lg mb-2">Tags (please separate by comma)</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                           value="{{$realEstateObject->tags}}"/>

                    @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
               <div class="mb-6">
                    <label for="images" class="inline-block text-lg mb-2">
                        1 or multiple files
                    </label>
                    <input type="file" multiple class="border border-gray-200 rounded p-2 w-full" name="images[]" />


                   <x-generated-slider :$realEstateObject/>

                    @error('images')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="offer_type" class="inline-block text-lg mb-2">offer_type (sale/rent) </label>
                    <input type="text" placeholder="" class="border border-gray-200 rounded p-2 w-full" name="offer_type"
                           value="{{$realEstateObject->offer_type}}"/>

                    @error('offer_type')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="object_type" class="inline-block text-lg mb-2">object_type </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_type"
                           value="{{$realEstateObject->object_type}}"/>

                    @error('object_type')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="location" class="inline-block text-lg mb-2">location </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                           value="{{$realEstateObject->location}}"/>

                    @error('location')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="maps_url" class="inline-block text-lg mb-2">maps_url </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="maps_url"
                           value="{{$realEstateObject->maps_url}}"/>

                    @error('maps_url')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="area_size" class="inline-block text-lg mb-2">area_size </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="area_size"
                           value="{{$realEstateObject->area_size}}"/>

                    @error('area_size')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="object_status" class="inline-block text-lg mb-2">object_status </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_status"
                           value="{{$realEstateObject->object_status}}"/>

                    @error('object_status')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="object_price" class="inline-block text-lg mb-2">object_price </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_price"
                           value="{{$realEstateObject->object_price}}"/>

                    @error('object_price')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="object_price_POA" class="inline-block text-lg mb-2">object_price_POA </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_price_POA"
                           value="{{$realEstateObject->object_price_POA}}"/>

                    @error('object_price_POA')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="numBedrooms" class="inline-block text-lg mb-2">numBedrooms </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="numBedrooms"
                           value="{{$realEstateObject->numBedrooms}}"/>

                    @error('numBedrooms')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="numBathrooms" class="inline-block text-lg mb-2">numBathrooms</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="numBathrooms"
                           value="{{$realEstateObject->numBathrooms}}"/>

                    @error('numBathrooms')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="airco" class="inline-block text-lg mb-2">airco</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="airco"
                           value="{{$realEstateObject->airco}}"/>

                    @error('airco')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="object_address_street" class="inline-block text-lg mb-2">Street Name</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_address_street"
                           value="{{$realEstateObject->object_address_street}}"/>

                    @error('object_address_street')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="object_address_no" class="inline-block text-lg mb-2">
                        Address No.
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="object_address_no"
                           value="{{$realEstateObject->object_address_no}}"/>

                    @error('object_address_no')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="features" class="inline-block text-lg mb-2">
                        Features
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="features" rows="10"
                              placeholder="Include tasks, requirements, relevant facts, etc">
            {{$realEstateObject->features}}
        </textarea>


                    @error('features')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="description" class="inline-block text-lg mb-2">
                        Description
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                              placeholder="Include tasks, requirements, relevant facts, etc">
            {{$realEstateObject->description}}
        </textarea>
                </div>


                <div class="mb-6">
                    <label for="object_details" class="inline-block text-lg mb-2">
                        Details
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="object_details" rows="10"
                              placeholder="Include tasks, requirements, relevant facts, etc">
            {{$realEstateObject->object_details}}
        </textarea>


                    @error('object_details')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>


                {{--            <x-card>--}}
                <div class="mb-6">
                    <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
                        Create
                    </button>

                    <a href="/properties" class="text-black ml-4"> Back </a>

                </div>
                {{--            </x-card>--}}

            </form>
        </x-card>
        </div>
    </x-main>
</x-property-show-layout>
