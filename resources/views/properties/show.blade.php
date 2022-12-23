@props(['real_estate_object'])

<x-property-show-layout :$realEstateObject>
    @include('partials._custom-nav')

    <x-main>
        <x-single-property :$realEstateObject/>


        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            {{--                            <h1 class="title-single">304 Blaster Up</h1>--}}
                            <h1 class="title-single">{{$realEstateObject->object_title}}</h1>
                            {{--                            <span class="color-text-a">Chicago, IL 606543</span>--}}
                            <span
                                class="color-text-a">{{($realEstateObject->location) ?: ''}}, {{($realEstateObject->object_address_street) ?: ''}} {{($realEstateObject->object_address_no) ?: ''}}</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <x-property-breadcrumbs :$realEstateObject/>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= Property Single -->
        <section class="property-single nav-arrow-b">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 offset-md-4">
                        <div id="property-single-carousel" class="swiper">
                            <div class="swiper-wrapper">

                                @php
                                    /** @var \App\Models\Real_Estate_Object $realEstateObject */
                                $images = $realEstateObject->realEstateObjectImages()->get();
                                @endphp

                            @unless(count($images) == 0)



                                    @foreach($images as $image)
                                        <div class=" swiper-slide">
                                            <img src="{{asset($image->url)}}" data-id="{{$image->id}}"
                                                 alt="">
                                        </div>
                                    @endforeach

                                @else
                                    <div class="carousel-item-b swiper-slide">
                                        <img src="{{asset($realEstateObject->images)}}" alt="only one image found">
                                    </div>
                                @endunless
                            </div>
                            <div style="margin: 0 auto; margin-top: 2em; padding-top: 3em;" class="property-single-carousel-pagination carousel-pagination"></div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-12">

                        <div class="row justify-content-between">
                            <div class="col-md-5 col-lg-4">
                                <div class="property-price d-flex justify-content-center foo">
                                    <div class="card-header-c d-flex">
                                        <div class="card-box-ico">
                                            <span class="bi bi-cash">&euro;</span>
                                        </div>
                                        <div class="card-title-c align-self-center">
                                            <h5 class="title-c">
                                                {{--                                                @money({{$realEstateObject->object_price}})--}}
                                                {{(number_format(floatval($realEstateObject->object_price))) ?: ''}}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-summary">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="title-box-d section-t4">
                                                <h3 class="title-d">Quick Summary</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-list">
                                        <ul class="list">
                                            <li class="d-flex justify-content-between">
                                                <strong>Property ID:</strong>
                                                <span>{{$realEstateObject->id}}</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Location:</strong>
                                                <span>{{$realEstateObject->location}}, {{($realEstateObject->object_address_street) ?: ''}} {{($realEstateObject->object_address_no) ?: ''}}</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Property Type:</strong>
                                                <span>{{$realEstateObject->object_type}}</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Status:</strong>
                                                <span>{{$realEstateObject->offer_type}}</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Area:</strong>
                                                <span>{{$realEstateObject->area_size}}
                          <sup>2</sup>
                        </span>
                                            </li>
                                            @if (!empty($realEstateObject->numBedrooms))
                                                <li class="d-flex justify-content-between">
                                                    <strong>Beds:</strong>
                                                    <span>{{$realEstateObject->numBedrooms}}</span>
                                                </li>
                                            @endif
                                            @if (!empty($realEstateObject->numBathrooms))
                                                <li class="d-flex justify-content-between">
                                                    <strong>Baths:</strong>
                                                    <span>{{$realEstateObject->numBathrooms}}</span>
                                                </li>
                                            @endif
                                            @if (!empty($realEstateObject->airco))

                                                <li class="d-flex justify-content-between">
                                                    <strong>Airco:</strong>
                                                    <span>{{$realEstateObject->airco}}</span>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-7 mt-10 section-md-t3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d">
                                            <h3 class="title-d">Property Description</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-description">
                                    @if (!empty($realEstateObject->description))
                                        <p class="description color-text-a">
                                            {{$realEstateObject->description}}
                                        </p>
                                    @endif

                                </div>
                                <div class="row section-t3">
                                    <div class="col-sm-12">
                                        <div class="title-box-d">
                                            <h3 class="title-d">Amenities</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="amenities-list color-text-a">
                                    <ul class="list-a no-margin">
                                        <x-amenities-list :tagsCsv="$realEstateObject->tags"/>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="pills-video-tab" data-bs-toggle="pill"
                                   href="#pills-video" role="tab" aria-controls="pills-video"
                                   aria-selected="false">Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-plans-tab" data-bs-toggle="pill" href="#pills-plans"
                                   role="tab" aria-controls="pills-plans" aria-selected="false">Floor Plans</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" id="pills-map-tab" data-bs-toggle="pill" href="#pills-map"
                                   role="tab" aria-controls="pills-map" aria-selected="false">Ubication</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade " id="pills-video" role="tabpanel"
                                 aria-labelledby="pills-video-tab">
                                <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460"
                                        frameborder="0" webkitallowfullscreen mozallowfullscreen
                                        allowfullscreen></iframe>
                            </div>
                            <div class="tab-pane fade " id="pills-plans" role="tabpanel"
                                 aria-labelledby="pills-plans-tab">
                                <img src="assets/img/plan2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="tab-pane fade show active" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                                <iframe
                                    src="{{($realEstateObject->maps_url) ?: 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d62088.310757890766!2d-16.64101560894073!3d13.44204724059052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sde!4v1671489830774!5m2!1sen!2sde'}}"
                                    width="100%" height="460" frameborder="0" loading="lazy" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row section-t3">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">Contact Agent</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <img src="assets/img/agent-4.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="property-agent">
                                    <h4 class="title-agent">Anabella Geller</h4>
                                    <p class="color-text-a">
                                        Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula
                                        elementum sed sit amet
                                        dui. Quisque velit nisi,
                                        pretium ut lacinia in, elementum id enim.
                                    </p>
                                    <ul class="list-unstyled">
                                        <li class="d-flex justify-content-between">
                                            <strong>Phone:</strong>
                                            <span class="color-text-a">(222) 4568932</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Mobile:</strong>
                                            <span class="color-text-a">777 287 378 737</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Email:</strong>
                                            <span class="color-text-a">annabella@example.com</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Skype:</strong>
                                            <span class="color-text-a">Annabela.ge</span>
                                        </li>
                                    </ul>
                                    <div class="socials-a">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="property-contact">
                                    <form class="form-a">
                                        <div class="row">
                                            <div class="col-md-12 mb-1">
                                                <div class="form-group">
                                                    <input type="text"
                                                           class="form-control form-control-lg form-control-a"
                                                           id="inputName" placeholder="Name *" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-1">
                                                <div class="form-group">
                                                    <input type="email"
                                                           class="form-control form-control-lg form-control-a"
                                                           id="inputEmail1" placeholder="Email *" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-1">
                                                <div class="form-group">
                                                    <textarea id="textMessage" class="form-control"
                                                              placeholder="Comment *" name="message" cols="45" rows="8"
                                                              required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <button type="submit" class="btn btn-a">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

        </section><!-- End Property Single-->


    </x-main>

</x-property-show-layout>
