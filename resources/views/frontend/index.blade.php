@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
    <link href="{{ url('css/index.css') }}" rel="stylesheet">
@endpush

@section('content')

@if ( session()->has('message') )
   
    <div class="container" style="background-color: #BDB76B; padding-top:5px; margin-bottom:50px; border-radius: 50px 50px; text-align:center;">

        <h1 style="margin-top:150px;" class="fs-1">Thank You!</h1><br>
        <p class="lead mb-3"><h4>We appreciate you contacting us. One of our member will get back in touch with you soon!<br><br> Have a great day!</h4></p>
        <br><hr><br>    
        <p class="lead">
            <a class="btn btn-warning btn-md px-4 mt-3 mb-3" href="{{url('/')}}" role="button">Go Back</a>
        </p>
    <br>
</div>

@else 

    <div class="container-fluid p-0 position-relative banners" style="margin-top: 4.4rem;">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ url('img/frontend/index/banner.png') }}" alt="" class="img-fluid w-100">
                </div>
                <div class="swiper-slide">
                    <img src="{{ url('img/frontend/index/banner.png') }}" alt="" class="img-fluid w-100">
                </div>
                <div class="swiper-slide">
                    <img src="{{ url('img/frontend/index/banner.png') }}" alt="" class="img-fluid w-100">
                </div>
            </div>
           
        </div>
        <div class="swiper-pagination"></div>
    </div>


    <div id="about-us" class="container-fluid cashew-banner" style="margin-top: 3rem; padding-top:5rem;">
        <div class="container">
            <div class="row align-items-center cashew-banner-inner" style="padding-top: 4rem;">
                <div class="col-12 col-md-6">
                    <div class="row align-items-center mb-2 mb-md-0">
                        <div class="col-7">
                            <h1 class="fw-bold" style="font-size: 7rem; color: #855605">100%</h1>
                        </div>
                        <div class="col-5">
                            <p class="fw-bold sub-title" style="font-size: 2.3rem; color: #855605">Sri Lankan</p>
                            <p class="fw-bold sub-title" style="font-size: 2.3rem; color: #855605">Cashew</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h6 class="fw-bold mb-2">Sourcing the world delicious Sri Lanka Cashew</h6>
                            <p>For centuries, cashews have been loved and treasured by many, and the ideal climate on this tropical Island; Ceylon, has been the main reason that the Ceylon cashews have held a captivating, refined taste above all others. Sri Lanka, a small island surrounded by the vast ocean, has been famous across the world for its geographical position, its all-summer nature, healthy soil, breathtaking sceneries, and its extensive biodiversity. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center col-md-6 text-md-left">
                    <img src="{{ url('img/frontend/index/cashew.png') }}" alt="" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>


    <div id="products" class="container" style="padding-top:9rem;">

        <h4 class="fw-bold text-center mb-5">Our Product Range</h4>

        <div class="row align-items-center">
            <div class="col-12 col-md-4 mb-5 mb-md-0">
                <img src="{{ url('img/frontend/index/product_1.png') }}" alt="" class="img-fluid w-100 mb-3" style="height: 20rem; object-fit: cover;">
                <h6 class="text-center fw-bold">Cashew sashay pack</h6>
            </div>

            <div class="col-12 col-md-4 mb-5 mb-md-0">
                <img src="{{ url('img/frontend/index/product_2.png') }}" alt="" class="img-fluid w-100 mb-3" style="height: 23rem; object-fit: cover;">
                <h5 class="text-center fw-bold">Cashew Premium pack</h5>
            </div>

            <div class="col-12 col-md-4 mb-5 mb-md-0">
                <img src="{{ url('img/frontend/index/product_3.png') }}" alt="" class="img-fluid w-100 mb-3" style="height: 20rem; object-fit: cover;">
                <h6 class="text-center fw-bold">Cashew for Wholesale </h6>
            </div>
        </div>
    </div>


    <div class="container-fluid quality-banner" style="margin-top: 3rem;">
        <div class="container">
            <div class="row align-items-center" style="padding-top: 6rem;">
                <div class="col-12 col-md-5">
                    <h1 class="fw-bold mb-3 text-light">Quality Products from Anur</h1>
                    <p class="text-light">For centuries, cashews have been loved and treasured by many, and the ideal climate on this tropical Island; Ceylon, has been the main reason that the Ceylon cashews have held a captivating, refined taste above all others. Sri Lanka, a small island surrounded by the vast ocean, has been famous across the world for its geographical position, its all-summer nature, healthy soil, breathtaking sceneries, and its extensive biodiversity.</p>   
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="container contact-cards" style="margin-top: 4rem; margin-bottom: 5rem; padding-top: 9rem;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="row">
                    <div class="col-12 col-md-6 mb-5 mb-md-0">
                        <div class="contact-form custom-shadow">
                            <form action="{{route('frontend.contact.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                                <h4 class="fw-bold mb-1">Let Us Call You!</h4>
                                <h6 class="fw-bold mb-4">To help you choose your property</h6>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control rounded-0" name="name" id="name" placeholder="Your Name" required>
                                        </div>

                                        <div class="col-6 input-group">
                                            <div class="input-group-prepend">
                                                <select class="form-select" aria-label="country_code" id="country_code" name="agent_type" required>
                                                    <option value="+94">+94</option>
                                                    <option value="+95">+95</option>
                                                </select>
                                            </div>
                                            <input type="text" class="form-control rounded-0" name="phone_number" id="phone_number" placeholder="Your Number" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="email" class="form-control rounded-0" name="email" id="email" placeholder="Your Email" required>
                                </div>

                                <div class="mb-3">
                                    <textarea class="form-control rounded-0" name="message" rows="4" placeholder="Tell us about desired property" required></textarea>
                                </div>

                                <div>
                                    <p class="mb-1">Consent</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label ms-2" for="flexCheckDefault">
                                        Acceptance * <br>
                                            I would like to receive information & updates from Trace Solutions in relation to my enquiry. 
                                            I understand that Trace will never share my information.
                                        </label>
                                    </div>
                                </div>

                            
                                <div class="row align-items-center">
                                    <div class="col-12 text-center col-md-6 text-md-left">
                                        <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR" style="transform: scale(0.80); -webkit-transform: scale(0.80); transform-origin: 0 0; -webkit-transform-origin: 0 0; padding-top: 2rem"></div>
                                    </div>

                                    <div class="col-12 text-center col-md-6 text-md-right mb-4 mb-md-0">
                                        <button type="submit" class="btn submit-btn w-75" disabled>Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="ol-12 col-md-6">
                        <div class="contact-form custom-shadow">
                            <h4 class="fw-bold mb-2">Contact Us</h4>
<!-- 
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores quod earum voluptates consequatur. Aspernatur perspiciatis blanditiis quos provident doloremque, vero odio nemo maxime aut ipsam consequatur nostrum saepe ipsum voluptatem?</p> -->


                            <div class="row mt-5">
                                <div class="col-12 mb-3">
                                    <h6 class="fw-bolder">Head Office</h6>
                                </div>
                            
                                <div class="col-12 main-office ms-3 mb-5">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-1 pr-0">
                                            <i class="bi bi-telephone-fill"></i>
                                        </div>
                                        <div class="col-11">
                                            <p>0777531545</p>
                                        </div>
                                    </div>

                                    <!-- <div class="row align-items-center mb-3">
                                        <div class="col-1 pr-0">
                                            <img src="{{url('img/frontend/index/fax.png')}}" alt="" style="height: 1rem; width: 1rem;">
                                        </div>
                                        <div class="col-11">
                                            <p>0094 11 5526575</p>
                                        </div>
                                    </div> -->

                                    <div class="row align-items-center">
                                        <div class="col-1 pr-0">
                                            <i class="bi bi-envelope-fill"></i>
                                        </div>
                                        <div class="col-11">
                                            <p>anurcompany@yahoo.com</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12" style="margin-bottom: 1.85rem; !important;">
                                    <h6 class="fw-bolder mb-3" style="margin-bottom: 0rem !important;">Anur Products</h6>
                                    <p class="fw-bold ms-3"style="line-height: 1.4rem;margin-left: 0px !important;" > No.285,
                                        <br>Galloluwa,
                                        <br> Minuwangoda,
                                        <br>Sri Lanka</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif

@endsection


@push('after-scripts')
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function checked() {
            $('.submit-btn').removeAttr('disabled');
        };
    </script>


@endpush