<x-layout-bare-bg-white :$realEstateObjects>
    @include('partials._custom-nav-show')

    <x-main>
{{--        @include('partials._search')_search--}}
        <div class="container">
            <section class="header">


                <header>
                    <h1 style="margin-top: 15em;" class="text-3xl text-center font-bold  uppercase">
                        Manage Real Estate Objects
                    </h1>
                </header>
            </section>


            <section class="p-10 mt-5 manage-section">
                @unless($realEstateObjects->isEmpty())
                    @foreach($realEstateObjects as $realEstateObject)
                        <div class="row p-4 mt-10">
                            <div class="col-md-3">
                                <x-slider-bare :$realEstateObject/>

                            </div>
                            <div class="col-md-3">
                                <a href="/properties/{{$realEstateObject->id}}">
                                    {{$realEstateObject->object_title}}
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a
                                    href="/properties/{{$realEstateObject->id}}/edit"
                                    class="text-blue-400 px-6 py-2 rounded-xl"
                                ><i
                                        class="fa-solid fa-pen-to-square"
                                    ></i>
                                    Edit</a
                                >
                            </div>
                            <div class="col-md-3">
                                <form method="POST" action="/properties/{{$realEstateObject->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach



                @else
                    <p class="text-center">
                        No real estate objects Found
                    </p>
                @endunless
            </section>
        </div>

    </x-main>
</x-layout-bare-bg-white>
