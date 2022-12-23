{{-- @props('listing') --}}
@php
    // echo 'hello!';
@endphp

<div id="modal-container">
    <div class="modal-background">
        <div class="modal">

            <x-card class="p-10">
                {{-- @unless(!empty($listing)) --}}

                @if($listing)
                    <h2>{{$listing->title}}</h2>


                    <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
                        @csrf {{--DO THIS IN ANY POST FORM! --}}
                        @method('PUT')
                        <div class="mb-6">
                            <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                                   value="{{$listing->company}}"/>

                            @error('company')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                                   placeholder="Example: Senior Laravel Developer" value="{{$listing->title}}"/>
                            {{--value="{{0old('input name')}}"--}}
                            @error('title')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                                   placeholder="Example: Remote, Boston MA, etc" value="{{$listing->location}}"/>

                            @error('location')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2">
                                Contact Email
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                                   value="{{$listing->email}}"/>

                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="website" class="inline-block text-lg mb-2">
                                Website/Application URL
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                                   value="{{$listing->website}}"/>

                            @error('website')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="tags" class="inline-block text-lg mb-2">
                                Tags (Comma Separated)
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                                   placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$listing->tags}}"/>

                            @error('tags')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="image" class="inline-block text-lg mb-2">
                                Upload one or multiple files
                            </label>
                            <input type="file" multiple class="border border-gray-200 rounded p-2 w-full"
                                   name="image[]"/>

                            {{-- TODO: write editable slider for editing images÷ --}}
                            {{-- TODO: make a migration so that images have their own table which reffers to the listing/object id --}}
                            <img
                                class="w-48 mr-6 mb-6"
                                src="{{$listing->image ? asset('uploads/' . explode(',', $listing->image)[0]) : asset('images/no-image.png')}}"
                                alt=""
                            />
                            @error('image')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="description" class="inline-block text-lg mb-2">
                                Job Description
                            </label>
                            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                                      placeholder="Include tasks, requirements, salary, etc">{{$listing->description}}</textarea>

                            @error('description')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                                Edit
                            </button>

                            <a href="/listings/{{$listing->id}}" class="text-black ml-4">
                                Back </a>
                        </div>
                    </form>
            </x-card>

            @else
                <p>
                    Nothing to show from listings
                </p>

            @endif
        </div>
        <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
            <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
        </svg>
    </div>
</div>
