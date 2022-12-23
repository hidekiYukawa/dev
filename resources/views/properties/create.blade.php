<x-layout-bare>
    @include('partials._custom-nav')
    <div class="container">
        <section class="header text-center">
            <x-card class="p-10 max-w-lg mx-auto mt-24">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-2xl font-bold uppercase mb-1">Create Real Estate object</h2>
                        <p class="mb-4">Post a new Real Estate Object</p>
                    </div>
                </div>
            </x-card>
        </section>
        <section class="table-add">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    {{--                    <form>--}}
                    {{--                        <div class="group">--}}
                    {{--                            <input type="text"><span class="highlight"></span><span class="bar"></span>--}}
                    {{--                            <label>Name</label>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="group">--}}
                    {{--                            <input type="email"><span class="highlight"></span><span class="bar"></span>--}}
                    {{--                            <label>Email</label>--}}
                    {{--                        </div>--}}
                    {{--                        <button type="button" id="buttonBlue" class="button buttonBlue">Subscribe--}}
                    {{--                            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>--}}
                    {{--                        </button>--}}
                    {{--                    </form>--}}
                    <form method="POST" action="/properties" id="create-form" enctype="multipart/form-data"
                          class="mb-10">
                        @csrf {{--}}DO THIS IN ANY POST FORM!--}}
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="group">
                            <input type="text" name="object_title" value="{{old('object_title')}}" autofocus/><span
                                class="highlight"></span><span class="bar"></span>
                            <label for="object_title" class="">Title</label>


                            @error('object_title')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="group">
                            <input type="text" class="" name="tags"
                                   value="{{old('tags')}}"/>
                            <label for="tags" class="">Tags (please separate by comma)</label>

                            @error('tags')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="group">
                            <label for="images" class="">
                            </label>
                            <input type="file" multiple class="" name="images[]"/>

                            @error('images')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="group">
                            <input type="text" placeholder="" class="" name="offer_type" value="{{old('offer_type')}}"/>
                            <label for="offer_type" class="">offer_type
                                (sale/rent) </label>

                            @error('offer_type')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="group">
                            <input type="text" class="" name="object_type"
                                   value="{{old('object_type')}}"/>
                            <label for="object_type" class="">object_type </label>

                            @error('object_type')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="group">
                            <input type="text" class="" name="location"
                                   value="{{old('location')}}"/>
                            <label for="location" class="">location </label>

                            @error('location')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="group">
                            <input type="text" class="" name="maps_url"
                                   value="{{old('maps_url')}}"/>
                            <label for="maps_url" class="">maps_url </label>

                            @error('maps_url')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="group">
                            <input type="text" class="" name="area_size"
                                   value="{{old('area_size')}}"/>
                            <label for="area_size" class="">area_size </label>

                            @error('area_size')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="group">
                            <input type="text" class=""
                                   name="object_status"
                                   value="{{old('object_status')}}"/>
                            <label for="object_status" class="">object_status </label>

                            @error('object_status')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="group">
                            <input type="text" class="" name="object_price"
                                   value="{{old('object_price')}}"/>
                            <label for="object_price" class="">object_price </label>

                            @error('object_price')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="group">
                            <input type="text" class=""
                                   name="object_price_POA"
                                   value="{{old('object_price_POA')}}"/>
                            <label for="object_price_POA" class="">object_price_POA </label>

                            @error('object_price_POA')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="group">
                            <input type="text" class="" name="numBedrooms"
                                   value="{{old('numBedrooms')}}"/>
                            <label for="numBedrooms" class="">numBedrooms </label>

                            @error('numBedrooms')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>


                        <div class="group">
                            <input type="text" class="" name="numBathrooms"
                                   value="{{old('numBathrooms')}}"/>
                            <label for="numBathrooms" class="">numBathrooms</label>

                            @error('numBathrooms')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="group">
                            <input type="text" class="" name="airco"
                                   value="{{old('airco')}}"/>
                            <label for="airco" class="">airco</label>

                            @error('airco')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="group">
                            <input type="text" class=""
                                   name="object_address"
                                   value="{{old('object_address')}}"/>
                            <label for="object_address" class="">Street Name</label>

                            @error('object_address')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="group">
                            <input type="text" class=""
                                   name="object_address_no"
                                   value="{{old('object_address_no')}}"/>
                            <label for="object_address_no" class="">
                                Address No.
                            </label>

                            @error('object_address_no')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="row mt-5">
                            <textarea class='autoExpand' name="features" rows='3' data-min-rows='3' placeholder='FEATURES: deswcription of the tags (e.g. swimming pool, cabin, etc.)' >{{old('features')}}</textarea>

                            @error('features')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="row">
                            <textarea class='autoExpand mt-10' name="description" rows='3' data-min-rows='3' placeholder='OBJECT SHORT DESCRIPTION: Include tasks, requirements, relevant facts, etc' >{{old('description')}}</textarea>


                            @error('description')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror


                        </div>
                        <div class="row">
                            <textarea class='autoExpand mt-10' name="object_details" rows='3' data-min-rows='3' placeholder='"OBJECT DETAILS: Include tasks, requirements, relevant facts, etc' >{{old('description')}}</textarea>


                            @error('object_details')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>


                        {{--            <x-card>--}}
                        <div class="mt-10 group">
                            <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
                                Create
                            </button>

                            <a href="/properties" class="text-black ml-4"> Back </a>

                            {{--            </x-card>--}}

                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>


    {{--            <div class="group">--}}
    {{--                <label for="title" class="inline-block text-lg mb-2">Job Title</label>--}}
    {{--                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"--}}
    {{--                       placeholder="Example: Senior Laravel Developer" value="{{old('title')}}" />--}}
    {{--                --}}{{--value="{{old('input name')}}"--}}
    {{--                @error('title')--}}
    {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
    {{--                @enderror--}}
    {{--            </div>--}}

    {{--            <div class="mb-6">--}}
    {{--                <label for="location" class="inline-block text-lg mb-2">Job Location</label>--}}
    {{--                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"--}}
    {{--                       placeholder="Example: Remote, Boston MA, etc" value="{{old('location')}}" />--}}

    {{--                @error('location')--}}
    {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
    {{--                @enderror--}}
    {{--            </div>--}}

    {{--            <div class="mb-6">--}}
    {{--                <label for="email" class="inline-block text-lg mb-2">--}}
    {{--                    Contact Email--}}
    {{--                </label>--}}
    {{--                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />--}}

    {{--                @error('email')--}}
    {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
    {{--                @enderror--}}
    {{--            </div>--}}

    {{--            <div class="mb-6">--}}
    {{--                <label for="website" class="inline-block text-lg mb-2">--}}
    {{--                    Website/Application URL--}}
    {{--                </label>--}}
    {{--                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"--}}
    {{--                       value="{{old('website')}}" />--}}

    {{--                @error('website')--}}
    {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
    {{--                @enderror--}}
    {{--            </div>--}}

    {{--            <div class="mb-6">--}}
    {{--                <label for="tags" class="inline-block text-lg mb-2">--}}
    {{--                    Tags (Comma Separated)--}}
    {{--                </label>--}}
    {{--                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"--}}
    {{--                       placeholder="Example: Laravel, Backend, Postgres, etc" value="{{old('tags')}}" />--}}

    {{--                @error('tags')--}}
    {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
    {{--                @enderror--}}
    {{--            </div>--}}

    {{--            <div class="mb-6">--}}
    {{--                <label for="image" class="inline-block text-lg mb-2">--}}
    {{--                    1 or multiple files--}}
    {{--                </label>--}}
    {{--                <input type="file" multiple class="border border-gray-200 rounded p-2 w-full" name="image[]" />--}}

    {{--                @error('image')--}}
    {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
    {{--                @enderror--}}
    {{--            </div>--}}

    {{--            <div class="mb-6">--}}
    {{--                <label for="description" class="inline-block text-lg mb-2">--}}
    {{--                    Job Description--}}
    {{--                </label>--}}
    {{--                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"--}}
    {{--                          placeholder="Include tasks, requirements, salary, etc">--}}
    {{--            {{old('description')}}--}}
    {{--        </textarea>--}}

    {{--                @error('description')--}}
    {{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
    {{--                @enderror--}}
    {{--            </div>--}}

    {{--            <div class="mb-6">--}}
    {{--                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">--}}
    {{--                    Create Gig--}}
    {{--                </button>--}}

    {{--                <a href="/" class="text-black ml-4"> Back </a>--}}

    {{--            </div>--}}
    {{--        </form>--}}
</x-layout-bare>
