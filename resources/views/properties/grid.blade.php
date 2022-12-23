<x-layout-bare-bg-white :$realEstateObjects>
    @include('partials._custom-nav-show')
    <x-main>
        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Our Amazing Properties</h1>
                            <span class="color-text-a">Grid Properties</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/properties">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Properties Grid
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= Property Grid ======= -->
        <section class="property-grid grid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="grid-option">
                            <form>
                                <select class="custom-select">
                                    <option selected>All</option>
                                    <option value="1">New to Old</option>
                                    <option value="2">For Rent</option>
                                    <option value="3">For Sale</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach($realEstateObjects as $REO)



                        <x-properties-card :$REO/>

                    @endforeach

                </div>
            </div>
        </section>


    </x-main>
</x-layout-bare-bg-white>
